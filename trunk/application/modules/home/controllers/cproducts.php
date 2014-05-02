<?php

session_start();

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cproducts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Mproducts');
        $this->load->model('Mlog');
        $this->load->model('Musers');
    }

    public function index() {
        $temp['info'] = $this->Mlog->log();
        $temp['title'] = 'Trang chủ';
        $temp['data_home'] = $this->Mproducts->getAllProducts();
        $temp['data_slide'] = $this->Mproducts->getDataSlide();
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
    }

    public function getProductByID($id) {
        $data['data'] = $this->Mproducts->getProductByID($id);
        $this->load->view('vproducts/tam', $data);
    }

    public function show_more() {
        if (isset($_POST['idl'])) {
            $id = $_POST['idl'];

            if ($temp = $this->Mproducts->show_more($id)) {

                foreach ($temp as $value) {
                    $img = json_decode($value->images);
                    echo '<section class="module">
                <div class="module_item clearfix">
                    <a href="' . site_url("home/cproducts/showDetailProducts/$value->productsID/$value->categoriesID") . '" class="img_module">
                        <img src="' . base_url() . $img[0] . '" alt="' . $value->name . '"/>
                    </a>
                    <div class="reduced">
                        <header class="title_item"><a href="' . site_url("home/cproducts/showDetailProducts/$value->productsID/$value->categoriesID") . '">' . $value->name . '</a></header>
                        <p>' . substr($value->intro2, 0, strrpos($value->intro2, ' ')) . '...</p>
                    </div><!--End .reduced-->
                    <a style="cursor: pointer" id="' . $value->productsID . '" class="btn_readmore">Đặt Mua</a>
                    <span class="price">' . $value->price . '</span>
                </div><!--End .module_item-->
            </section><!--End .module-->';
                }
                echo "<div class='clear'></div><div class='text_center' id='more" . $value->productsID . "' >";
                echo "<button class='btn_showmore' id='" . $value->productsID . "'>Xem thêm</button>";
                echo "</div>";
            } else {
                echo "<div class='clear'></div><div class='text_center'>";
                echo "<button class='btn_showmore' id=''>Hết Sản phẩm</button>";
                echo "</div>";
            }
        } else {
            echo 'ko co j';
        }
    }

    public function showDetailProducts($id, $cate) {
        $temp['info'] = $this->Mlog->log();
        $temp['title'] = 'Chi tiết sản phẩm';
        $temp['template'] = 'vproducts/product_detail';
        $temp['data_detail'] = $this->Mproducts->getProductById($id);
        $temp['same_product'] = $this->Mproducts->getProductByCate($id, $cate);
        $this->load->view('layout/layout', $temp);
    }

    public function upProducts() {
        $temp['info'] = $this->Mlog->log();
        $temp['title'] = 'Đăng sản phẩm';
        $temp['cate'] = $this->Mproducts->getAllCategories();
        $temp['sidebar_product'] = $this->Mproducts->getRandomProduct();
        $temp['template'] = 'vproducts/upproducts';
        $this->load->view('layout/layout', $temp);
    }

    public function insertProducts() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('soluong', 'Số lượng bắt buộc và phải là số', 'required|numeric|integer');
        $this->form_validation->set_rules('tensanpham', 'Tên sản phẩm bắt buộc', 'required');
        $this->form_validation->set_rules('motangan', 'Mô tả ngắn bắt buộc', 'required');
//        $this->form_validation->set_rules('dacdiemnb', 'Số lượng!', 'required|numeric');
//        $this->form_validation->set_rules('dieukiensd', 'Số lượng!', 'required|numeric');
//        $this->form_validation->set_rules('chitietsp', 'Số lượng!', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->upProducts();
        } else {
            $url = array();
            $allowed = array(
                'image/jpg',
                'image/x-png',
                'image/png',
                'image/jpeg');
            for ($i = 1; $i < 4; $i++) {
                $link_tai_anh_goc = "./public/product_images/";
                $tmp = $_FILES['img' . $i]['tmp_name']; //luu ten cua file vao bien tmp
                $full_name = $_FILES['img' . $i]['name']; //luu ten that cua file vi du: hoaqua.jpg
                $type = $_FILES['img' . $i]['type']; //luu loai cua anh
                $size = $_FILES['img' . $i]['size'];
                if ($_FILES['img' . $i]['error'] == 0) {
                    if (in_array(strtolower($type), $allowed)) {
                        //doi ten va up anh len
                        $ext = end(explode('.', $full_name)); //lay ten mo rong
                        $newname = uniqid('motgia') . '.' . $ext; //doi ten
                        move_uploaded_file($tmp, $link_tai_anh_goc . $newname); //bat dau di chuyen
                        $url[] = 'public/product_images/' . $newname;
                    } else {

                        $temp['template'] = 'vproducts/upproducts';
                        $this->load->view('layout/layout', $temp);
                    }
                } else {
                    redirect('home/cproducts/upProducts');
                }
            }
            $images = json_encode($url);
            $danhmuc = $this->input->post('danhmuc');
            $soluong = $this->input->post('soluong');
            $tensanpham = $this->input->post('tensanpham');
            $motangan = $this->input->post('motangan');
            $dacdiemnb = $this->input->post('dacdiemnb');
            $dieukiensd = $this->input->post('dieukiensd');
            $chitietsp = $this->input->post('chitietsp');
            $kq = $this->Mproducts->insertProducts($danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $images);
            $this->session->set_flashdata('addproduct_alert', 'Đã Thêm sản phẩm Thành Công');
            redirect('home/cproducts/upProducts');
        }
    }

    public function editProducts($id) {
//        $temp['info']=  $this->Mproducts->log();
        $data['cate'] = $this->Mproducts->getAllCategories();
        $data['edit'] = $this->Mproducts->editProducts($id);
        $data['sidebar_product'] = $this->Mproducts->getRandomProduct();
        $data['title'] = 'Sửa sản phẩm';
        $data['template'] = 'vproducts/editproducts';
        $this->load->view('layout/layout', $data);
    }

    public function updateProducts() {
        $id = $this->input->post('idhidden');
        $a = $this->Mproducts->editProducts($id);
        foreach ($a as $value)
            $raw = json_decode($value->images);
        $img1 = $_FILES['img1']['error'];
        $img2 = $_FILES['img2']['error'];
        $img3 = $_FILES['img3']['error'];
        $arrayimg = array(
            $img1,
            $img2,
            $img3);
        if (in_array(4, $arrayimg)) { // sua 1 trong 3 - 2 trong 3
            $url = array();
            for ($i = 1; $i < 4; $i++) {
                $link_tai_anh_goc = "./public/product_images/";
                $tmp = $_FILES['img' . $i]['tmp_name']; //luu ten cua file vao bien tmp
                $full_name = $_FILES['img' . $i]['name']; //luu ten that cua file vi du: hoaqua.jpg
                $type = $_FILES['img' . $i]['type']; //luu loai cua anh
                if ($full_name != '') {
                    unlink($raw[$i - 1]);
                    $ext = end(explode('.', $full_name)); //lay ten mo rong
                    $newname = uniqid('motgia') . '.' . $ext; //doi ten
                    move_uploaded_file($tmp, $link_tai_anh_goc . $newname); //bat dau di chuyen
                    $url[] = 'public/product_images/' . $newname;
                } else {
                    $url[] = $raw[$i - 1];
                }
            }
            $link_img = json_encode($url);
        } else { //Muon sua ca 3 anh
            $url = array();
            for ($i = 1; $i < 4; $i++) {
                unlink($raw[$i - 1]);
                $link_tai_anh_goc = "./public/product_images/";
                $tmp = $_FILES['img' . $i]['tmp_name']; //luu ten cua file vao bien tmp
                $full_name = $_FILES['img' . $i]['name']; //luu ten that cua file vi du: hoaqua.jpg
                $type = $_FILES['img' . $i]['type']; //luu loai cua anh
                $ext = end(explode('.', $full_name)); //lay ten mo rong
                $newname = uniqid('motgia') . '.' . $ext; //doi ten
                move_uploaded_file($tmp, $link_tai_anh_goc . $newname); //bat dau di chuyen
                $url[] = 'public/product_images/' . $newname;
            }
            $link_img = json_encode($url);
        }
        $danhmuc = $this->input->post('danhmuc');
        $soluong = $this->input->post('soluong');
        $tensanpham = $this->input->post('tensanpham');
        $motangan = $this->input->post('motangan');
        $dacdiemnb = $this->input->post('dacdiemnb');
        $dieukiensd = $this->input->post('dieukiensd');
        $chitietsp = $this->input->post('chitietsp');
        $this->Mproducts->updateProducts($id, $danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $link_img);
        $temp['info'] = $this->Mlog->log();
        $data['title'] = 'Sửa sản phẩm | Một giá';
        $data['template'] = 'vproducts/upproducts';
        $this->load->view('layout/layout', $data);
    }

    public function addcart() {
//        $id = $_POST['idpro'];
//        $uid = $this->Mproducts->getProductbyID($id)->userID;
//        if (isset($_SESSION['cart'][$id])) {
//            $ql = $_SESSION['cart'][$id] + 1;
//        } else {
//            $ql = 1;
//        }
//        $_SESSION['cart'][$id] = $ql;
//        echo count($_SESSION['cart']);

        $id = $_POST['idpro'];
        $uid2 = $this->Mproducts->getProductbyID($id);
        foreach ($uid2 as $key => $value) {
            $uid = $value->userID;
            $proname = $value->name;
        }
        $uname2 = $this->Musers->getProfile($uid);
        $uname = $uname2['firstname'] . ' ' . $uname2['lastname'];


        if (isset($_SESSION['cart'][$uid][$id])) {
            $ql = $_SESSION['cart'][$uid][$id]['soluong'] + 1;
        } else {
            $ql = 1;
        }

        $arr = array(
            "productname" => $proname,
            "soluong" => $ql
        );
        $_SESSION['cart'][$uid][$id] = $arr;
        $_SESSION['cart'][$uid]["shopname"] = $uname;
    }

    public function view_cart() {
        $data['info'] = $this->Mlog->log(); //lấy thông tin đăng nhập
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $where1 = array();
            foreach ($_SESSION['cart'] as $userid => $value) {
                foreach ($value as $proid => $value2) {
                    if ($proid != 'shopname')
                        $where1[] = $proid;
                }
            }
            $where = implode(",", $where1); //mảng chứa id của tất cả sản phẩm có trong giỏ hàng
            $data['title'] = 'Xem giỏ hàng::Siêu thị một giá online';
            $data['cart'] = $this->Mproducts->getCart($where);
            $data['template'] = 'vproducts/view_cart';
            $this->load->view('layout/layout', $data);
        } else {
            $data['title'] = 'Giỏ hàng rỗng :: Siêu thị một giá online';
            $data['template'] = 'vproducts/view_cart';
            $this->load->view('layout/layout', $data);
        }

        if ($this->input->post('updatecart'))
            $this->updateCart();
        if ($this->input->post('paymenthome')) {
            $payinfo= $this->input->post('payinfo');
            if(isset($_SESSION['pay']))
                unset ($_SESSION['pay']);
            foreach ($payinfo as $uid => $value) {
                foreach ($value as $proid => $soluong) {
                    $_SESSION['pay'][$uid]=$_SESSION['cart'][$uid];
                }
            }
           redirect('home/cproducts/payment');
        }
    }

    public function updateCart() {
        $mangSoluong = $this->input->post('soluong');
        foreach ($mangSoluong as $userid => $value) {
            foreach ($value as $productid => $soluong) {
                $_SESSION['cart'][$userid][$productid]['soluong'] = $soluong;
            }
        }
        redirect('home/cproducts/view_cart');
    }

    public function delCart($uid, $proid) {
        if (count($_SESSION['cart'][$uid]) > 2 && $uid != '' && $proid != '')
            unset($_SESSION['cart'][$uid][$proid]); //neu so san pham cua gian hang >1 thi xoa tung sp
        elseif ($proid == '' || count($_SESSION['cart'][$uid]) <= 2)
            unset($_SESSION['cart'][$uid]); //neu gian hang co 1 sp thi xoa ca gian hang
        elseif ($uid == '' && $proid == '')
            session_destroy();

        redirect('home/cproducts/view_cart');
    }

    public function payment() {
        $data['info'] = $this->Mlog->log();
        $userid = $data['info']['userID'];
        $data['profile'] = $this->Musers->getProfile($userid); //lấy thông tin cá nhân
        $data['title'] = 'Thanh toán';
        $data['template'] = 'vproducts/payment';
        $this->load->view('layout/layout', $data);
        
    }

    public function vd() {
        $this->load->view('vd');
    }

    public function vd2() {
        $uid = 'UID0009';
        $id = 72;
        $proname = 'ao ngan';
        $uname = 'tantan';
        $arr = array(
            "productname" => $proname,
            "soluong" => 1
        );
        $_SESSION['cart'][$uid][$id] = $arr;
        $_SESSION['cart'][$uid]["shopname"] = $uname;
        $this->load->view('vd');
    }

}
