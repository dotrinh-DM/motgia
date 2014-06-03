<?php

session_start();

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cproducts extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html', 'file');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Mproducts');
        $this->load->model('Includebaokim');
        $this->load->model('Baokimpayment');
        $this->load->model('Mlog');
        $this->load->model('Musers');
    }

    public function index()
    {
        $temp['info'] = $this->Mlog->log();
        if (count($temp['info'])) {
            $userid = $temp['info']['userID'];
            $temp['num_order'] = $this->Musers->getNumOrderStatus($userid);
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid);
        }
        $temp['title'] = 'Trang chủ siêu thị một giá | Đăng sản phẩm | Thanh toán Trực tuyến';
        $temp['data_home'] = $this->Mproducts->getAllProducts();
        $temp['data_slide'] = $this->Mproducts->getDataSlide();
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
    }

    public function show_more()
    {
        if (isset($_POST['start'])) {
            $start = $_POST['start'];
            if ($temp = $this->Mproducts->show_more($start)) {
                foreach ($temp as $value) {
                    $img = json_decode($value->images);
                    echo '
                         <section class="module">
                            <div class="module_item clearfix">
                                <a href="' . site_url("home/cproducts/showDetailProducts/$value->productsID") . '" class="img_module">
                                    <img src="' . base_url() . $img[0] . '" alt="' . $value->name . '"/>
                                </a>
                                <div class="reduced">
                                    <header class="title_item" style="height: 25px;"><a href="' . site_url("home/cproducts/showDetailProducts/$value->productsID") . '">' . $value->name . '</a></header>
                                    <div style="height: 47px;overflow: hidden;"><span>' . substr($value->intro, 0, strrpos($value->intro, ' ')) . '</span> ...</div>
                                </div><!--End .reduced-->
                                <a style="cursor: pointer" id="' . $value->productsID . '" class="btn_readmore">Đặt Mua</a>

                                <span class="price">' . $value->price . 'K</span>
                                <div style="margin:50px" class="clearfix"><a href="" style="color: #93B1CC"><b>' . $value->fname . ' ' . $value->lname . '</b></a></div>
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

    public function showDetailProducts($id)
    {
        $temp['info'] = $this->Mlog->log();
        $temp['title'] = 'Chi tiết sản phẩm';
        $temp['template'] = 'vproducts/product_detail';
        $temp['data_detail'] = $this->Mproducts->getProductById($id);
//        foreach ($temp['data_detail'] as $value)
//            $cat = $value->categoriesID;
//        $temp['same_product'] = $this->Mproducts->getProductByCate($id, $cat);
        if ($this->input->post('order')) {
            $id = $this->input->post('proid');
            $sl = $this->input->post('soluong');
            $uid2 = $this->Mproducts->getProductbyID($id);
            foreach ($uid2 as $key => $value) {
                $uid = $value->userID;
                $proname = $value->name;
            }
            $uname2 = $this->Musers->getProfile($uid);
            $uname = $uname2['fullname'];
            if (isset($_SESSION['cart'][$uid][$id])) {
                $sl = $_SESSION['cart'][$uid][$id]['soluong'] + 1;
            } else {
                $sl = 1;
            }
            $arr = array(
                "productname" => $proname,
                "soluong" => $sl
            );
            $_SESSION['cart'][$uid][$id] = $arr;
            $_SESSION['cart'][$uid]["shopname"] = $uname;
            redirect('cart');
        }
        $this->load->view('layout/layout', $temp);
    }

    public function upProducts()
    {
        $temp['info'] = $this->Mlog->log();
        $temp['title'] = 'Đăng sản phẩm';
        $temp['cate'] = $this->Mproducts->getAllCategories();
        $temp['sidebar_product'] = $this->Mproducts->getRandomProduct();
        $temp['template'] = 'vproducts/upproducts';
        $this->load->view('layout/layout', $temp);
    }

    public function insertProducts()
    {
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
            var_dump($proid); die();
            $kq = $this->Mproducts->insertProducts($proid, $danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $images, $uid);
            $this->session->set_flashdata('addproduct_alert', 'Đã Thêm sản phẩm Thành Công');
            redirect('up-product');
        }
    }

    public function editProducts($id)
    {
//        $temp['info']=  $this->Mproducts->log();
        $data['cate'] = $this->Mproducts->getAllCategories();
        $data['edit'] = $this->Mproducts->editProducts($id);
        $data['sidebar_product'] = $this->Mproducts->getRandomProduct();
        $data['title'] = 'Sửa sản phẩm';
        $data['template'] = 'vproducts/editproducts';
        $this->load->view('layout/layout', $data);
    }

    public function updateProducts()
    {
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

    public function odernow()
    {
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

    public function payonline()
    {
        $data['info'] = $this->Mlog->log();
        if ($data['info'] != FALSE) {
            $buyer = $data['info']['userID'];
            $data['profile'] = $this->Musers->getProfile($buyer); //lấy thông tin cá nhân

            if ($this->input->post('payonline')) {
                $payinfo = $this->input->post('payonline');
                if (isset($_SESSION['pay']))
                    unset($_SESSION['pay']);
                foreach ($payinfo as $uid => $value) {
                    $_SESSION['pay'][$uid] = $_SESSION['cart'][$uid];
                    $_SESSION['pay']['method'] = 1; //hinh thuc thanh toan tai nha
                }
                redirect('thanh-toan-truc-tuyen');
            }

            if ($this->input->post('paynow')) {
                $proprice = $this->input->post('price');
                $proname = $this->input->post('proname');
                $seller = $this->input->post('seller');
                $proid = $this->input->post('proid');
                $sl = $this->input->post('soluong');
                $uname2 = $this->Musers->getProfile($seller);
                $uname = $uname2['fullname'];
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
                foreach ($_SESSION['pay'] as $uid => $value) {
                    if ($uid != 'method') {
                        $tong = 0;
                        $orderid = $this->Mproducts->insertOrder($uid, $buyer, $note, 1);
                        unset($_SESSION['cart'][$uid]);
                        foreach ($value as $proid => $value2) {
                            if ($proid != 'shopname') {
                                $this->Mproducts->insertOrderDetail($orderid, $proid, $value2['soluong']);
                                $tong += $value2['soluong'] * 100000;
                            }
                        }
                    }
                }
                if ($method == 1) { //neu hình thức thanh toán trực tuyến thì chuyển đến bảo kim
                    unset($_SESSION['pay']);
                    $this->BaokimPay($tong, $orderid);
                } else if ($method == 0) { // nếu thanh toán tại nhà thì trở lại giỏ hàng
                    unset($_SESSION['pay']);
                    redirect('cart');
                }
            }
        }
        $data['title'] = 'Thanh toán';
        $data['template'] = 'vproducts/payment';
        $this->load->view('layout/layout', $data);
    }

    public function payhome()
    {
        $data['info'] = $this->Mlog->log();
        if ($this->session->userdata('guest')) {
            $data['guest'] = $this->session->userdata('guest');
            if ($this->input->post('thanhtoan')) {
                $note = $this->input->post('note');
                $method = $_SESSION['pay']['method'];
                foreach ($_SESSION['pay'] as $uid => $value) {
                    if ($uid != 'method') {
                        $orderid = $this->Mproducts->insertOrder($uid, $data['guest']['guestID'], $note, $method);
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
        if (isset($data['info']) && count($data['info']['userID'])) {
            $userid = $data['info']['userID'];
            $data['profile'] = $this->Musers->getProfile($userid); //lấy thông tin cá nhân
            $create = strtotime('now');

            if ($this->input->post('thanhtoan')) {
                $note = $this->input->post('note');
                $method = $_SESSION['pay']['method'];
                foreach ($_SESSION['pay'] as $uid => $value) {
                    if ($uid != 'method') {
                        $tong = 0;
                        $orderid = $this->Mproducts->insertOrder($uid, $userid, $note, $method);
                        unset($_SESSION['cart'][$uid]);
                        foreach ($value as $proid => $value2) {
                            if ($proid != 'shopname') {
                                $this->Mproducts->insertOrderDetail($orderid, $proid, $value2['soluong']);
                                $tong += $value2['soluong'] * 100000;
                            }
                        }
                    }
                }
                if ($method == 1) { //neu hình thức thanh toán trực tuyến thì chuyển đến bảo kim
                    unset($_SESSION['pay']);
                    $this->BaokimPay($tong, $orderid);
                } else if ($method == 0) { // nếu thanh toán tại nhà thì trở lại giỏ hàng
                    unset($_SESSION['pay']);
                    redirect('cart');
                }
            }
        }
        $data['title'] = 'Thanh toán';
        $data['template'] = 'vproducts/payment';
        $this->load->view('layout/layout', $data);
    }

    public function BaokimPay($total_amount = 100000, $order_id = 'tantan')
    {
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

    public function view_cart()
    {
        $data['info'] = $this->Mlog->log(); //lấy thông tin đăng nhập
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

    public function addcart()
    {
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
        $dem = 0;

        foreach ($_SESSION['cart'] as $key => $value) {
            $dem += count($value);
            $dem--;
        }
        echo $dem;
    }

    public function updateCart()
    {
        if (isset($_POST['soluong'], $_POST['userid'], $_POST['proid'])) {
            $userid = $_POST['userid'];
            $productid = $_POST['proid'];
            $soluong = $_POST['soluong'];
            $_SESSION['cart'][$userid][$productid]['soluong'] = $soluong;
        }
    }

    public function delCart($uid, $proid)
    {
        unset($_SESSION['cart']["$uid"]["$proid"]);
        if ($proid == '' || count($_SESSION['cart'][$uid]) < 2) //neu so san pham cua gian hang >1 (tinh ca "shopname" nen phai la <2) thi xoa tung sp
            unset($_SESSION['cart']["$uid"]);
        if ($proid == '' && $uid == '')
            unset($_SESSION['cart']);
        redirect('cart');
    }

    public function cancel_order()
    {

    }

    public function vd()
    {
//        if ($this->input->post('paymenthome')) {
//            $payinfo = $this->input->post('payhome');
////            if (isset($_SESSION['pay']))
////                unset($_SESSION['pay']);
////            foreach ($payinfo as $uid => $value) {
////                foreach ($value as $proid => $soluong) {
////                    $_SESSION['pay'][$uid] = $_SESSION['cart'][$uid];
////                }
////            }
////            redirect('thanh-toan-tai-nha');
//            var_dump($payinfo);
//        }
        $this->load->view('vd');
    }

    public function vd2()
    {
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
