<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cusers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'html', 'url'));
        $this->load->library(array('session', 'encrypt', 'email', 'my_email'));
        $this->load->model(array('Musers', 'Mlog', 'Mproducts'));
        $this->load->database();
    }
    public function index() {
        var_dump($temp);
        $temp['info'] = $this->Mlog->log();
        if (count($temp['info'])) {
            $userid = $temp['info']['userID'];
            $temp['num_order'] = $this->Musers->getNumOrderStatus($userid);
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid);
        }
        $temp['title'] = 'Trang chủ';
        $temp['data_home'] = $this->Mproducts->getAllProducts();
        $temp['data_slide'] = $this->Mproducts->getDataSlide();
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
    }

    public function message() {
        if ($this->session->userdata('user') == '') {
            redirect('home/chome');
        }
        $temp['info'] = $this->Mlog->log();
        $sender = $temp['info']['userID'];
        $temp['num_order'] = $this->Musers->getNumOrderStatus($sender);
        $temp['title'] = 'Trang chủ';
        $temp['template'] = 'vusers/message';
        $this->load->view('layout/layout', $temp);

        $receiver = $this->input->post('receiver_message');
        $title = $this->input->post('title_message');
        $content = $this->input->post('content_message');
        if ($this->input->post('send_message')) {
            echo 'sdfsdf';
            $ck = $this->Musers->sendMessage($receiver, $sender, $title, $content);
            echo ($ck = TRUE) ? 'thanh cong' : 'that bai!';
        }
    }

    public function signup() {

        $this->load->helper(array('captcha'));
        $this->load->model('captcha_model');
        $cap = $this->captcha_model->createCaptcha();
        $l_name = $this->input->post('l_name');
        $f_name = $this->input->post('f_name');
        $month = $this->input->post('month');
        $birthday = $this->input->post('birthday');
        $gender = $this->input->post('gender');
        $phone = $this->input->post('phone');
        $province = $this->input->post('province');
        $email = $this->input->post('email');
        $psw = $this->input->post('pass');
        $pass = $this->encrypt->encode($psw);
        $adr = $this->input->post('adr');
        $name = $f_name . ' ' . $l_name;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $sz_Word = $this->input->post('captcha');
            $b_Check = $this->captcha_model->b_fCheck($sz_Word);
            $cbx = $this->input->post('check');
            $ckmail = $this->Musers->checkMail($email);
            if ($ckmail && $b_Check && $cbx == 'ok') {
                $this->Musers->insertUser($l_name, $f_name, $month, $birthday, $gender, $phone, $province, $email, $pass, $adr);

                $this->sendMail($email, $psw, $name);
                $temp['success'] = '
                    </br><span style="margin-left:88px">Bạn đã đăng ký thành công!</span>
                    </br><span style="margin-left:88px">Vui lòng kiểm tra e-mail để kích hoạt tài khoản và sử dụng dịch vụ</span>
                    </br><span style="margin-left:88px">You has been register completed ! </span>
                    </br><span style="margin-left:88px">Please check your email address to active your account and use system ! </span>
                ';
            } if ($ckmail == FALSE) {
                $temp['error1'] = 'Email này đã được sử dụng!';
            } if ($cbx != 'ok') {
                $temp['error2'] = 'Bạn không đồng ý với các điều khoản quy định của chúng tôi!';
            } if ($b_Check == FALSE) {
                $temp['error3'] = 'Mã xác nhận không đúng!';
            }
        }
        $temp['info'] = $this->Mlog->log();
        $temp['Data'] = $cap['image'];
        $temp['title'] = 'Đăng ký';
        $temp['template'] = 'vusers/signup';
        $this->load->view('layout/layout', $temp);
    }

    public function profile() {
        if ($this->session->userdata('user') == '') {
            redirect('home/chome');
        } //neu chua dang nhap thi quay lai trang chu
        $temp['info'] = $this->Mlog->log(); //hien thi ten nguoi dung tren header
        $userid = $temp['info']['userID'];
        $temp['level'] = $this->Musers->getLevel($userid); //kiểm tra cấp độ người dùng để hiển thị nội dung tương ứng
        //sua thong tin ca nhan
        $temp['profile'] = $this->Musers->getProfile($userid); //lấy thông tin cá nhân
        if ($this->input->post('save_info')) {
            $lastname = $this->input->post('last_name');
            $firstname = $this->input->post('first_name');
            $month = $this->input->post('month');
            $day = $this->input->post('day');
            $year = $this->input->post('year');
            $birthday = $this->input->post('birthday');
            $gender = $this->input->post('gender');
            $phone = $this->input->post('phone');
            $province = $this->input->post('province');
            $addr = $this->input->post('address');
            $this->Musers->updateProfile($userid, $firstname, $lastname, $birthday, $gender, $phone, $addr, $province, $temp['info']['email']);
        }
        
        //phan trang
        $display = 10; //so ban ghi moi trang
        
        $spstart = 0; //vi tri mac dinh khi load trang
        $sppage = 1; //trang mac dinh khi load
        
        $billstart = 0;
        $billpage = 1;      
        
        $hsstart = 0;
        $hspage = 1;

        //lay thong tin san pham va phan trang
        if ($temp['level']['levelID'] == 2) {// chuc nang chi danh cho nha cung cap
        
            
            ///////////////////////////bat dau chuc nang quan ly san pham
            if (isset($_GET['sppage']) && (int) $_GET['sppage'] > 0) {
                $sppage = $_GET['sppage'];
                $spstart = (isset($_GET['sppage']) && (int) $_GET['sppage'] > 0) ? ($_GET['sppage'] - 1) * $display : 0; //nhan bien truyen vao tu url
            }
            $record1 = count($this->Musers->getProductByUID($userid)); //tong so ban ghi
            if ($record1 > $display)//neu so ban ghi nho hon quy dinh thi khong can phan trang
                $num_page1 = ceil($record1 / $display); //tong so trang
            else
                $num_page1 = 1;

            $temp['product'] = $this->Musers->getProductByUID($userid, $display, $spstart);
            $temp['paging_product'] = array('num_page' => $num_page1, 'page' => $sppage, 'start' => $spstart, 'display' => $display);

            //sua trang thai san pham
            if (isset($_GET['change_status']) && isset($_GET['proID']) && isset($_GET['status_pro'])) {
                $proid = $_GET['proID'];
                $statuspro = $_GET['status_pro'];
                $this->Musers->changeStatusPro($proid, $userid, $statuspro);
                if (isset($_GET['sppage']))
                    $url = 'home/cusers/profile?sppage=' . $_GET['sppage'] . '#products';
                else
                    $url = 'home/cusers/profile#products';
                redirect($url);
            }//////////////////////////////////////ket thuc quan ly san pham
            
            
            //////////////////////////////////////Quản lý đơn hàng
            if (isset($_GET['billpage']) && (int) $_GET['billpage'] > 0) {
                $billpage = $_GET['billpage'];
                $billstart = (isset($_GET['billpage']) && (int) $_GET['billpage'] > 0) ? ($_GET['billpage'] - 1) * $display : 0; //nhan bien truyen vao tu url
            }
            $record2 = count($this->Musers->getOrderByUID($userid)); //tong so ban ghi
            if ($record2 > $display)//neu ban ghi nho hon quy dinh thi khong can phan trang
                $num_page2 = ceil($record2 / $display); //tong so trang
            else
                $num_page2 = 1;

            //xu ly don hang
            if ($this->input->post('confirm_order')) {
                $this->Musers->confirmOrder($this->input->post('orderid'), '2');
                if (isset($_GET['billpage']))
                    $url = 'home/cusers/profile?billpage=' . $_GET['billpage'] . '#bill';
                else
                    $url = 'home/cusers/profile#bill';
                redirect($url);
            }
            if ($this->input->post('deny_order'))
                $this->Musers->confirmOrder($this->input->post('orderid'), '0');
            //end- xu ly don hang

            $temp['num_order'] = $this->Musers->getNumOrderStatus($userid); //Lấy số hóa đơn chưa xử lý
            $temp['order'] = $this->Musers->getOrderByUID($userid, $display, $billstart);
            $temp['paging_order'] = array('num_page' => $num_page2, 'page' => $billpage, 'start' => $billstart, 'display' => $display);
        }/////////////////////////////////////end- quan ly don hang
        
        
        /////////////////////////////////////////lich su mua hang
        if (isset($_GET['hspage']) && (int) $_GET['hspage'] > 0) {
            $hspage = $_GET['hspage'];
            $hsstart = (isset($_GET['hspage']) && (int) $_GET['hspage'] > 0) ? ($_GET['hspage'] - 1) * $display : 0; //nhan bien truyen vao tu url
        }
        $record3 = count($this->Musers->getOrderByBuyerID($userid)); //tong so ban ghi
        if ($record3 > $display)//neu ban ghi nho hon quy dinh thi khong can phan trang
            $num_page3 = ceil($record3 / $display); //tong so trang
        else
            $num_page3 = 1;
        $temp['order_buy'] = $this->Musers->getOrderByBuyerID($userid, $display, $hsstart);
        $temp['paging_order_buy'] = array('num_page' => $num_page3, 'page' => $hspage, 'start' => $hsstart, 'display' => $display);
        ////////////////////////////////////////end-lich su mua hang
        
        
        //////////////////////quan ly tin nhan
        $temp['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lấy số tin nhắn mới nhận chưa đọc
        $temp['message_info'] = $this->Musers->getMessageByUID($userid);
        if (isset($_GET['messageid'])) {
            $msID = $_GET['messageid'];
            $temp['message_detail'] = $this->Musers->getMessageByID($msID);
            $title = $this->input->post('title_message');
            $content = $this->input->post('content_message');
            if ($this->input->post('send_message')) {
                $ck = $this->Musers->sendMessage($temp['message_detail']['senderID'], $userid, $title, $content);
                redirect('home/cusers/profile#messages');
            }
            $temp['Message_status_link'] = TRUE;
            $this->Musers->changeMessageStatus($msID); //Chuyển trạng thái tin nhắn từ chưa đọc sang đã đọc
        }
        //////////////////////end-quan ly tin nhan
        
        $temp['title'] = 'Thông tin cá nhân';
        $temp['template'] = 'vusers/profile';
        $this->load->view('layout/layout', $temp);
    }

    public function orderdetail() {
        $temp['info'] = $this->Mlog->log();

        if (isset($_GET['orderid'])) {
            $temp['detail'] = $this->Musers->getOrderDetail($_GET['orderid']);
            $temp['buyer'] = $this->Musers->getOrderByID($_GET['orderid']);
        }

        $temp['title'] = 'Chi tiết hóa đơn';
        $temp['template'] = 'vusers/order_detail';
        $this->load->view('layout/layout', $temp);
    }

    public function sendMail($email, $psw, $name) {
        $key = $this->encrypt->encode($email);
        $link_active = base_url() . "index.php/home/cusers/active/?key=" . urlencode($key);
        $message = "Xin chào " . $name . ".</br>
            Bạn đã đăng ký tài khoản thành công</br>
            Vui lòng click vào link bên dưới để kích hoạt tài khoản và sử dụng dịch vụ! <br/>
            You has been register completed ! <br/>
            Please check your email address to active your account and use system !</br>
            Link : <a href=" . $link_active . ">" . $link_active . "</a><br/> password :" . $psw;
        $mail = array(
            "to_receiver" => $email,
            "message" => $message,
        );

        $this->load->library('my_email');
        $this->my_email->config($mail);
        $this->my_email->sendmail();
    }

    public function active() {
        if ($_GET['key']) {
            $email = $this->encrypt->decode($_GET['key']); //gia ma key nhan tu url
            if ($this->Musers->checkMail($email) === FALSE) {//neu ma trung voi email thi tien hanh
                $this->db->update('user', array('status' => 1), array('email' => $email));
                $ck = $this->db->affected_rows(); //kiem tra co bao nhieu ban ghi nao duoc chinh sua
                $temp['template'] = 'vusers/notice';
                $temp['ck'] = $ck;
                if ($ck > 0) {
                    $temp['content'] = '<h1>Tài khoản của bạn đã được đăng ký và kích hoạt thành công với email: ' . $email . '</h1>
                                        <p>Xin chân thành cảm ơn</p>
                                        <a href="' . base_url() . 'index.php/home/chome">Quay về trang chủ</a>';
                    $this->load->view('layout/layout', $temp);
                } else {
                    $temp['content'] = '<h1>Tài khoản này đã được kích hoạt</h1>
                                        <a href="' . base_url() . 'index.php/home/chome">Quay về trang chủ</a>';
                    $this->load->view('layout/layout', $temp);
                }
            } else {
                $temp['content'] = '<h1>Quá trình kích hoạt thất bại</h1>
                <p>Vui lòng kiểm tra email hoặc đăng nhập để gửi lại key kích hoạt</p>
                <a href="' . base_url() . 'index.php/home/chome">Quay về trang chủ</a>';
                $temp['template'] = 'vusers/notice';
                $this->load->view('layout/layout', $temp);
            }
        }
    }

    public function vd() {
        $temp['title'] = 'Chi tiết sản phẩm';
        $show = $this->Musers->getNumOrderStatus();
        echo $show;
        $this->load->view('vd');
    }

}