<?php

session_start();

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cproducts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'file', 'menu', 'form', 'url'));
        $this->load->library('session');
        $this->load->model('Mproducts');
        $this->load->model('Includebaokim');
        $this->load->model('Baokimpayment');
        $this->load->model('Mlog');
        $this->load->model('Mshop');
        $this->load->model('Musers');
        $this->load->model("admin/category_model");
    }

    public function index() {
        $temp['info'] = $this->Mlog->log();
        if ($temp['info']['logged_in'] == TRUE) {
            $userid = $temp['info']['userID'];
            $temp['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $temp['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $temp['level'] == 2) {
                $temp['shopper'] = $this->Musers->checkOwnShop($userid);
                $temp['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $temp['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $temp['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
            $temp['num_order'] = $this->Musers->getNumOrderStatus($userid);
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid);
        }
        $temp['title'] = 'Trang chủ siêu thị một giá | Đăng sản phẩm | Thanh toán Trực tuyến';
        $temp['data_home'] = $this->Mproducts->getAllProducts();
        $temp['data_slide'] = $this->Mproducts->getDataSlide();
        $temp['template'] = 'home';
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $temp);
    }

    public function show_more() {
        if (isset($_POST['start'])) {
            $start = $_POST['start'];
            if ($temp = $this->Mproducts->show_more($start)) {
                foreach ($temp as $value) {
                    $img = json_decode($value->images);
                    echo '
                         <section class="module"  style="height: 205px">
                            <div class="module_item clearfix">
                                <a style="height: 185px"  href="' . site_url("home/cproducts/showDetailProducts/$value->productsID") . '" class="img_module">
                                    <img src="' . base_url() . $img[0] . '" alt="' . $value->name . '"/>
                                </a>
                                <div class="reduced">
                                    <header class="title_item" style="height: 25px;"><a href="' . site_url("home/cproducts/showDetailProducts/$value->productsID") . '">' . $value->name . '</a></header>
                                    <div style="height: 50px;overflow: hidden;"><span>' . substr($value->intro, 0, strrpos($value->intro, ' ')) . '</span> ...</div>
                                </div><!--End .reduced-->
                                <a style="cursor: pointer" id="' . $value->productsID . '" class="btn_readmore">Đặt Mua</a>

                                <span class="price">' . $value->price . 'K</span>
                                <div style="width: 185px;margin: 55px 0px;overflow: hidden;" class="clearfix"><a href="" style="color: #93B1CC"><b>' . $value->company . '</b></a></div>
                            </div><!--End .module_item-->
                        </section><!--End .module-->
                          ';
                }
                echo "<div class='clear'></div><div class='text_center' id='more" . ($start + 10) . "' >";
                echo "<button class='btn_showmore' id='" . ($start + 10) . "'>Xem thêm</button>";
                echo "</div>";
            } else {
                echo "<div class='clear'></div><div class='text_center'>";
                echo "<button class='btn_showmore' id='' disabled='disabled'>Hết Sản phẩm</button>";
                echo "</div>";
            }
        }
    }

    public function showDetailProducts($id) {
        $temp['info'] = $this->Mlog->log();
        if ($temp['info']['logged_in'] == TRUE) {
            $userid = $temp['info']['userID'];
            $temp['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $temp['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $temp['level'] == 2) {
                $temp['shopper'] = $this->Musers->checkOwnShop($userid);
                $temp['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $temp['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $temp['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
        $temp['listshop']=  $this->Mshop->getListShop();
        $temp['shopinfo'] = $this->Mshop->getShopByProID($id); //lấy thông tin gian hàng qua mã sản phẩm
        $temp['hotshop'] = $this->Mshop->getHotShop();
        $temp['title'] = 'Chi tiết sản phẩm';
        $temp['template'] = 'vproducts/product_detail';
        $temp['data_detail'] = $this->Mproducts->getProductById($id);

        if ($this->input->post('order')) {
            $id = $this->input->post('proid');
            $sl = $this->input->post('soluong');
            $shopid2 = $this->Mproducts->getProductbyID($id);
            $shopid = $shopid2['shopID'];
            $proname = $shopid2['name'];
            $company2 = $this->Mshop->getShopByShopID($shopid);
            $company = $company2['company'];
            if (isset($_SESSION['cart'][$shopid][$id])) {
                $sl = $_SESSION['cart'][$shopid][$id]['soluong'] + 1;
            } else {
                $sl = 1;
            }
            $arr = array(
                "productname" => $proname,
                "soluong" => $sl
            );
            $_SESSION['cart'][$shopid][$id] = $arr;
            $_SESSION['cart'][$shopid]["shopname"] = $company;
            redirect('cart');
        }
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $temp);
    }

    public function upProducts() {
        $temp['info'] = $this->Mlog->log();
        if ($temp['info']['logged_in']) {
            $userid = $temp['info']['userID'];
            $temp['coin'] = $this->Musers->getCoin($userid);
            $temp['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $temp['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $temp['level'] == 2) {
                $temp['shopper'] = $this->Musers->checkOwnShop($userid);
                $temp['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $temp['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $temp['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
        $temp['title'] = 'Đăng sản phẩm';
        $temp['cate'] = $this->Mproducts->getAllCategories();
//        $temp['sidebar_product'] = $this->Mproducts->getRandomProduct();
        $temp['data'] = $this->category_model->getAll();
        $temp['template'] = 'vproducts/upproducts';
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $temp);
    }

    public function insertProducts() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('soluong', 'Số lượng bắt buộc và phải là số', 'required|numeric|integer');
        $this->form_validation->set_rules('tensanpham', 'Tên sản phẩm bắt buộc', 'required');
        $this->form_validation->set_rules('motangan', 'Mô tả ngắn bắt buộc', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->upProducts();
        } else {
            $url = array();
            $allowed = array('image/jpg',
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
                    redirect('up-product');
                }
            }
            $temp = $this->Mlog->log();
            $uid = $temp['userID'];
            $images = json_encode($url);
            $danhmuc = $this->input->post('danhmuc');
            $soluong = $this->input->post('soluong');
            $tensanpham = $this->input->post('tensanpham');
            $motangan = $this->input->post('motangan');
            $dacdiemnb = $this->input->post('dacdiemnb');
            $dieukiensd = $this->input->post('dieukiensd');
            $chitietsp = $this->input->post('chitietsp');
            $proid = $this->Musers->setID('products', 'productsID', 'PRO');
            var_dump($proid);
            die();
            $kq = $this->Mproducts->insertProducts($proid, $danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $images, $uid);
            $this->session->set_flashdata('addproduct_alert', 'Đã Thêm sản phẩm Thành Công');
            redirect('up-product');
        }
    }

    public function editProducts($id) {
        $data['info'] = $this->Mproducts->log();
        if ($data['info']['logged_in']) {
            $userid = $data['info']['userID'];
            $data['coin'] = $this->Musers->getCoin($userid);
            $data['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
            $data['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $data['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $data['level'] == 2) {
                $data['shopper'] = $this->Musers->checkOwnShop($userid);
                $data['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $data['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $data['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
        $data['cate'] = $this->Mproducts->getAllCategories();
        $data['edit'] = $this->Mproducts->editProducts($id);
        $data['sidebar_product'] = $this->Mproducts->getRandomProduct();
        $data['title'] = 'Sửa sản phẩm';
        $data['template'] = 'vproducts/editproducts';
        $data['category'] = $this->category_model->getAll();
        $data['kq'] = getChildren($temp['category']);
        $data['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $data);
    }

    public function updateProducts() {
        $temp['info'] = $this->Mproducts->log();
        if ($temp['info']['logged_in']) {
            $userid = $temp['info']['userID'];
            $temp['coin'] = $this->Musers->getCoin($userid);
            $temp['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $temp['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $temp['level'] == 2) {
                $temp['shopper'] = $this->Musers->checkOwnShop($userid);
                $temp['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $temp['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $temp['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
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

    public function odernow() {//nut cho vao gio tren trang chi tiet san pham
        if ($this->input->post('order')) {
            $proname = $this->input->post('proname');
            $seller = $this->input->post('seller');
            $proid = $this->input->post('proid');
            $soluong = $this->input->post('soluong');
            $uname2 = $this->Musers->getProfile($seller);
            $uname = $uname2['fullname'];
            if (isset($_SESSION['cart'][$seller][$proid])) {
                $soluong = $soluong + $_SESSION['cart'][$seller][$proid]["soluong"];
            }
            $arr = array(
                "productname" => $proname,
                "soluong" => $soluong
            );
            $_SESSION['cart'][$seller][$proid] = $arr;
            $_SESSION['cart'][$seller]["shopname"] = $uname;
            redirect('cart');
        }
    }

    public function payonline() {
        $data['info'] = $this->Mlog->log();
        if ($data['info']['logged_in']) {
            $userid = $data['info']['userID'];
            $data['coin'] = $this->Musers->getCoin($userid);
            $data['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
            $data['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $data['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $data['level'] == 2) {
                $data['shopper'] = $this->Musers->checkOwnShop($userid);
                $data['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $data['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $data['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
        if ($data['info'] != FALSE) {
            $buyer = $data['info']['userID'];
            $data['profile'] = $this->Musers->getProfile($buyer); //lấy thông tin cá nhân

            if ($this->input->post('payonline')) {// nut thanh toan truc tuyen tren trang viewcart
                $payinfo = $this->input->post('payonline');
                if (isset($_SESSION['pay']))
                    unset($_SESSION['pay']);
                foreach ($payinfo as $uid => $value) {//lay ma nguoi ban
                    $_SESSION['pay'][$uid] = $_SESSION['cart'][$uid];
                    $_SESSION['pay']['method'] = 1; //hinh thuc thanh toan tai nha
                }
            }

            if ($this->input->post('paynow')) {//nut mua ngay tren trang chi tiet san pham
                $proprice = $this->input->post('price');
                $proname = $this->input->post('proname');
                $seller = $this->input->post('seller');
                $proid = $this->input->post('proid');
                $sl = $this->input->post('soluong');
                $uname2 = $this->Mshop->getShopByShopID($seller);
                $uname = $uname2['company'];
                if (isset($_SESSION['pay']))
                    unset($_SESSION['pay']);
                $arr = array(
                    "productname" => $proname,
                    "soluong" => $sl
                );
                $_SESSION['pay'][$seller][$proid] = $arr;
                $_SESSION['pay'][$seller]["shopname"] = $uname;
            }

            $_SESSION['pay']['method'] = 1;
            $method = $_SESSION['pay']['method'];

            if ($this->input->post('thanhtoan')) {
                $note = $this->input->post('note');
                foreach ($_SESSION['pay'] as $shopid => $value) {
                    if ($shopid != 'method') {
                        $tong = 0;
                        $orderid = $this->Mproducts->insertOrder($shopid, $buyer, $note, 1);
                        unset($_SESSION['cart'][$shopid]);
                        foreach ($value as $proid => $value2) {
                            if ($proid != 'shopname') {
                                $this->Mproducts->insertOrderDetail($orderid, $proid, $value2['soluong']);
                                $tong += $value2['soluong'] * 100000;
                            }
                        }
                    }
                }
                unset($_SESSION['pay']);
                $this->BaokimPay($tong, $orderid);
            }
        }
        $data['title'] = 'Thanh toán trực tuyến | Siêu thị motgia.tk';
        $data['template'] = 'vproducts/payment';
        $data['category'] = $this->category_model->getAll();
        $data['kq'] = getChildren($data['category']);
        $data['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $data);
    }

    public function payhome() {
        $data['info'] = $this->Mlog->log();
        if ($data['info']['logged_in']) {
            $userid = $data['info']['userID'];
            $data['coin'] = $this->Musers->getCoin($userid);
            $data['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
            $data['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $data['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $data['level'] == 2) {
                $data['shopper'] = $this->Musers->checkOwnShop($userid);
                $data['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $data['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $data['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
        if ($data['info'] != FALSE) {//trường hợp đã đăng nhập
            $buyer = $data['info']['userID'];
            $data['profile'] = $this->Musers->getProfile($buyer);
            if ($this->input->post('thanhtoan')) {
                $note = $this->input->post('note');
                foreach ($_SESSION['pay'] as $shopid => $value) {
                    if ($shopid != 'method') {
                        $orderid = $this->Mproducts->insertOrder($shopid, $data['info']['userID'], $note, 0);
                        unset($_SESSION['cart'][$shopid]);
                        foreach ($value as $proid => $value2) {
                            if ($proid != 'shopname') {
                                $this->Mproducts->insertOrderDetail($orderid, $proid, $value2['soluong']);
                            }
                        }
                    }
                }
                unset($_SESSION['pay']);
                redirect('cart');
            }
        }//lấy thông tin cá nhân
        if ($this->session->userdata('guest')) {//trường hợp chưa đăng nhập
            $data['guest'] = $this->session->userdata('guest');
            if ($this->input->post('thanhtoan')) {
                $note = $this->input->post('note');
//                $method = $_SESSION['pay']['method'];
                foreach ($_SESSION['pay'] as $uid => $value) {
                    if ($uid != 'method') {
                        $orderid = $this->Mproducts->insertOrder($uid, $data['guest']['guestID'], $note, 0);
                        unset($_SESSION['cart'][$uid]);
                        foreach ($value as $proid => $value2) {
                            if ($proid != 'shopname') {
                                $this->Mproducts->insertOrderDetail($orderid, $proid, $value2['soluong']);
                            }
                        }
                    }
                }
                unset($_SESSION['pay']);
                redirect('cart');
            }
        }
        $data['title'] = 'Thanh toán tại nhà | Siêu thị motgia.tk';
        $data['template'] = 'vproducts/payment';
        $data['category'] = $this->category_model->getAll();
        $data['kq'] = getChildren($data['category']);
        $data['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $data);
    }

    public function BaokimPay($total_amount = 100000, $order_id = 'tantan') {
        $this->Includebaokim->load_bk();
        $business = "ductan_nguyen92@yahoo.com";
        $description = "";
        $order_description = "(Motgia.tk)Thanh toán cho hóa đơn: " . $order_id;
        $shipping_fee = 0; //Nếu tính thêm phí vận chuyển thì thiết lập tại đây
        $tax_fee = 0; //Nếu tính thêm phí thuế thì thiết lập tại đây
        $url_success = 'http://localhost/baokim/callback.php'; //URL callback khi thanh toán thành công để update thông tin 
        $url_cancel = ''; //Url khi click link "Tôi không muốn thanh toán đơn hàng này" trên cổng thanh toán Bảo Kim
        $url_detail = ''; //Url chứa thông tin chi tiết đơn hàng

        $request_url = $this->Baokimpayment->createRequestUrl($order_id, $business, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail);
        header("location: $request_url"); //Chuyến đến trang bảo kim
    }

    public function view_cart() {
        $data['info'] = $this->Mlog->log(); //lấy thông tin đăng nhập
        if ($data['info']['logged_in'] == TRUE) {
            $userid = $data['info']['userID'];
            $data['coin'] = $this->Musers->getCoin($userid);
            $data['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
            $data['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $data['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $data['level'] == 2) {
                $data['shopper'] = $this->Musers->checkOwnShop($userid);
                $data['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $data['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $data['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
        $data['category'] = $this->category_model->getAll();
        $data['kq'] = getChildren($data['category']);
        $data['procate'] = $this->category_model->getProCate();
        if ($this->session->userdata('guest'))
            $data['guest'] = $this->session->userdata('guest');
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $data['title'] = 'Xem giỏ hàng::Siêu thị một giá online';
            $data['template'] = 'vproducts/view_cart';
            $this->load->view('layout/layout', $data);
        } else {
            $data['title'] = 'Giỏ hàng rỗng :: Siêu thị một giá online';
            $data['template'] = 'vproducts/view_cart';
            $this->load->view('layout/layout', $data);
        }

        if ($this->input->post('payhome')) {
            $payinfo = $this->input->post('payhome');
            if (isset($_SESSION['pay']))
                unset($_SESSION['pay']);
            foreach ($payinfo as $uid => $value) {
                $_SESSION['pay'][$uid] = $_SESSION['cart'][$uid];
                $_SESSION['pay']['method'] = 0; //hinh thuc thanh toan tai nha
            }
            redirect('thanh-toan-tai-nha');
        }
    }

    public function addcart() {
        $id = $_POST['idpro'];
        $shopid2 = $this->Mproducts->getProductbyID($id);
        $shopid = $shopid2['shopID'];
        $proname = $shopid2['name'];
        $company2 = $this->Mshop->getShopByShopID($shopid);
        $company = $company2['company'];
        if (isset($_SESSION['cart'][$shopid][$id])) {
            $ql = $_SESSION['cart'][$shopid][$id]['soluong'] + 1;
        } else {
            $ql = 1;
        }
        $arr = array(
            "productname" => $proname,
            "soluong" => $ql
        );
        $_SESSION['cart'][$shopid][$id] = $arr;
        $_SESSION['cart'][$shopid]["shopname"] = $company;
        $dem = 0;

        foreach ($_SESSION['cart'] as $key => $value) {
            $dem += count($value);
            $dem--;
        }
        echo $dem;
    }

    public function updateCart() {
        if (isset($_POST['soluong'], $_POST['userid'], $_POST['proid'])) {
            $userid = $_POST['userid'];
            $productid = $_POST['proid'];
            $soluong = $_POST['soluong'];
            $_SESSION['cart'][$userid][$productid]['soluong'] = $soluong;
        }
    }

    public function delCart($uid, $proid) {
        unset($_SESSION['cart']["$uid"]["$proid"]);
        if ($proid == '' || count($_SESSION['cart'][$uid]) < 2) //neu so san pham cua gian hang >1 (tinh ca "shopname" nen phai la <2) thi xoa tung sp
            unset($_SESSION['cart']["$uid"]);
        if ($proid == '' && $uid == '')
            unset($_SESSION['cart']);
        redirect('cart');
    }

    public function cancel_order() {
        
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

    public function rate() {
        $id_sent = preg_replace("/[^0-9]/", "", $_REQUEST['id']);
        $vote_sent = preg_replace("/[^0-9]/", "", $_REQUEST['stars']);
        $ip = $_SERVER['REMOTE_ADDR'];
    }

}
