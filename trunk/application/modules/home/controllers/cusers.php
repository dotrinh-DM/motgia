<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cusers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'html', 'url', 'file', 'menu'));
        $this->load->library(array('session', 'encrypt', 'email', 'my_email'));
        $this->load->model(array('Musers', 'Mlog', 'Mproducts', 'Mshop'));
        $this->load->model("admin/category_model");
        $this->load->library('upload');
        $this->load->database();
    }

    public function index() {
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
            redirect('trang-chu');
        }
        $temp['info'] = $this->Mlog->log();
        $sender = $temp['info']['userID'];
        $temp['num_order'] = $this->Musers->getNumOrderStatus($sender);
        $temp['title'] = 'Trang chủ siêu thị một giá | Đăng sản phẩm | Thanh toán Trực tuyến';
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

    public function addGuest() {
        if (isset($_POST['fullname'], $_POST['mail'], $_POST['phone'], $_POST['province'], $_POST['address'])){
            if ($_POST['fullname'] == '' || $_POST['mail'] == '' || $_POST['phone'] == '' || $_POST['province'] == '' || $_POST['address'] == '') {
                echo 'Vui lòng nhập đầy đủ thông tin';
                exit();
            }
            $guestID = $this->Musers->setID('guest', 'guestID', 'GUEST');
            $fullname = $_POST['fullname'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $province = $_POST['province'];
            $address = $_POST['address'];
            if ($this->session->userdata('guest')) {
                $ID = $this->session->userdata('guest');
                $guestID = $ID['guestID'];
                $ck = $this->Musers->updateGuest($guestID, $fullname, $mail, $phone, $province, $address);
                echo ($ck == TRUE) ? 'Thêm thông tin thành công!' : 'Thất bại! có lỗi xảy ra!';
            } else {
                $ck = $this->Musers->insertGuest($guestID, $fullname, $mail, $phone, $province, $address);
                echo ($ck == TRUE) ? 'Thêm thông tin thành công!' : 'Thất bại! có lỗi xảy ra!';
                $newdata = array(
                    'guestID' => $guestID,
                    'fullname' => $fullname,
                    'mail' => $mail,
                    'phone' => $phone,
                    'province' => $province,
                    'address' => $address,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata('guest', $newdata);
            }
        }
        else
            echo 'Thất bại! có lỗi xảy ra!';
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

        if ($this->input->post('Add')) {
            $sz_Word = $this->input->post('captcha');
            $b_Check = $this->captcha_model->b_fCheck($sz_Word);
            $cbx = $this->input->post('check');
            $ckmail = $this->Musers->checkMail($email);
            if ($ckmail && $b_Check && $cbx == 'ok') {
                $this->Musers->insertUser($l_name, $f_name, $month, $birthday, $gender, $phone, $province, $email, $pass, $adr);
                $this->db->WHERE('word !=', $cap['word'])->DELETE('captcha');
                $this->sendMail($email, $psw, $name);
                $temp['success'] = '
                    </br><span style="margin-left:88px">Bạn đã đăng ký thành công!</span>
                    </br><span style="margin-left:88px">Vui lòng kiểm tra e-mail để kích hoạt tài khoản và sử dụng dịch vụ</span>
                    </br><span style="margin-left:88px">You has been register completed ! </span>
                    </br><span style="margin-left:88px">Please check your email address to active your account and use system ! </span>
                ';
            } if ($ckmail == FALSE) {
                $temp['error1'] = 'Email này đã được sử dụng!';
            } if ($this->input->post('pass') != $this->input->post('repass')) {
                $temp['error4'] = 'Mật khẩu nhập chưa khớp!';
            } if ($b_Check == FALSE) {
                $temp['error2'] = 'Mã xác nhận không đúng!';
            } if ($cbx != 'ok') {
                $temp['error3'] = 'Bạn không đồng ý với các điều khoản quy định của chúng tôi!';
            }
        }
        $temp['info'] = $this->Mlog->log();
        $temp['Data'] = $cap['image'];
        $temp['title'] = 'Đăng ký thành viên siêu thị một giá motgia.tk';
        $temp['template'] = 'vusers/signup';
        $this->load->view('layout/layout', $temp);
    }

    public function re_captcha() {
        $this->load->helper(array('captcha'));
        $this->load->model('captcha_model');
        $cap = $this->captcha_model->createCaptcha();
        $this->db->WHERE('word !=', $cap['word'])->DELETE('captcha');
//        
//        $file = $_POST['file'];
////        $file= 'captcha/vd/1400697616.0051.jpg';
//        unlink($file);
        echo $cap['image'];
    }

    public function profile() {
        $this->load->model('captcha_model');
        if ($this->session->userdata('user') == '') {
            redirect('trang-chu');
        } //neu chua dang nhap thi quay lai trang chu
        $temp['info'] = $this->Mlog->log(); //hien thi ten nguoi dung tren header
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
        //sua thong tin ca nhan
        if (!isset($temp['shopper']) || $temp['shopper']==FALSE) {
            $this->load->model('Captcha_model');
            $cap = $this->Captcha_model->createCaptcha();
            $temp['captcha'] = $cap['image'];
        }
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
        if ($this->input->post('save_pass')) {
            $email = $temp['info']['email'];
            $old = $this->input->post('old_pass');
            $new = $this->input->post('re_new_pass');
            $ck = $this->Musers->changePass($email, $old, $new);
            if ($ck == TRUE) {
                $this->session->set_flashdata('success_change_pass', 'Thay đổi mật khẩu thành công!');
                redirect('profile');
            }
            $this->session->set_flashdata('success_change_pass', 'Thay đổi mật khẩu thất bại!');
            redirect('profile');
        }///
        //
        ////đăng ký gian hàng
        if ($this->input->post('ok_shop')) {
            $company = $this->input->post('name_shop');
            $add = $this->input->post('address_shop');
            $city = $this->input->post('province_shop');
            $web = $this->input->post('website_shop');
            $phone = $this->input->post('phone_shop');
            $sz_Word = $this->input->post('captcha');
            $b_Check = $this->captcha_model->b_fCheck($sz_Word);
            $cbx = $this->input->post('check');
            $link_img = $this->uploadImages('anh', 'public/gianhang/');
            $link_insert = 'public/gianhang/' . $link_img['file_name'];
            if ($b_Check && $cbx == 'ok') {
                $ck = $this->Mshop->regShop($company, $add, $city, $phone, $web, $userid, $link_insert);
                if ($ck == TRUE) {
                    $this->session->set_flashdata('success_reg_shop', 'Chúc mừng bạn đã đăng ký gian hàng thành công!');
                    redirect('profile');
                }
                $this->session->set_flashdata('success_reg_shop', 'Bạn không thể đăng ký gian hàng! Có thể bạn đã đăng ký một gian hàng trước đó!');
                redirect('profile');
            }
            $this->session->set_flashdata('success_reg_shop', 'Vui lòng nhập lại mã xác nhận & đồng ý các điều khoản của chúng tôi');
            redirect('profile');
        }
        //phan trang
        $display = 10; //so ban ghi moi trang

        $spstart = 0; //vi tri mac dinh khi load trang
        $sppage = 1; //trang mac dinh khi load

        $billstart = 0;
        $billpage = 1;

        $hsstart = 0;
        $hspage = 1;

//
//        //////////////////////////////Quan ly san pham
//        if ($temp['level'] == 2) {// chuc nang chi danh cho nha cung cap
//            ///////////////////////////bat dau chuc nang quan ly san pham
//            if (isset($_GET['sppage']) && (int) $_GET['sppage'] > 0) {
//                $sppage = $_GET['sppage'];
//                $spstart = (isset($_GET['sppage']) && (int) $_GET['sppage'] > 0) ? ($_GET['sppage'] - 1) * $display : 0; //nhan bien truyen vao tu url
//            }
//            $record1 = count($this->Musers->getProductByUID($userid)); //tong so ban ghi
//            if ($record1 > $display)//neu so ban ghi nho hon quy dinh thi khong can phan trang
//                $num_page1 = ceil($record1 / $display); //tong so trang
//            else
//                $num_page1 = 1;
//
//            $temp['product'] = $this->Musers->getProductByUID($userid, $display, $spstart);
//            $temp['paging_product'] = array('num_page' => $num_page1, 'page' => $sppage, 'start' => $spstart, 'display' => $display);

            //////////////////////////////////////Quản lý đơn hàng
//            if (isset($_GET['billpage']) && (int) $_GET['billpage'] > 0) {
//                $billpage = $_GET['billpage'];
//                $billstart = (isset($_GET['billpage']) && (int) $_GET['billpage'] > 0) ? ($_GET['billpage'] - 1) * $display : 0; //nhan bien truyen vao tu url
//            }
//            $record2 = count($this->Musers->getOrderByUID($userid)); //tong so ban ghi
//            if ($record2 > $display)//neu ban ghi nho hon quy dinh thi khong can phan trang
//                $num_page2 = ceil($record2 / $display); //tong so trang
//            else
//                $num_page2 = 1;

            /////////////////////////////xu ly don hang
//            if ($this->input->post('confirm_order')) {
//                $this->Mproducts->confirmOrder($this->input->post('orderid'), '2', $this->input->post('statusid'), $userid, '');
//                if (isset($_GET['billpage']))
//                    $url = 'profile?billpage=' . $_GET['billpage'] . '#bill';
//                else
//                    $url = 'profile#bill';
//                redirect($url);
//            }
//
//            //end- xu ly don hang
//
//            $temp['num_order'] = $this->Musers->getNumOrderStatus($userid); //Lấy số hóa đơn chưa xử lý
//            $temp['order'] = $this->Musers->getOrderByUID($userid, $display, $billstart);
//            $temp['paging_order'] = array('num_page' => $num_page2, 'page' => $billpage, 'start' => $billstart, 'display' => $display);
//        }/////////////////////////////////////end- quan ly don hang
//        //
        //
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
        //
        //
        //////////////////////quan ly tin nhan
        $temp['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lấy số tin nhắn mới nhận chưa đọc
        $temp['message_info'] = $this->Musers->getMessageByUID($userid);
        //////////////////////end-quan ly tin nhan
        //
        ///////////////////////
        //Lịch sử nạp tiền
        $temp['money'] = $this->Musers->historyMoney($userid);

        /////////////////////
        $temp['title'] = 'Thông tin cá nhân';
        $temp['template'] = 'vusers/profile';
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $temp);
    }

    public function cancel_order() {
        $info = $this->Mlog->log();
        $oid = $this->input->post('orderID');
        $buyer = $this->input->post('buyerID');
        $statusid = $this->input->post('statusID');
        $note = $this->input->post('note');
        $this->Mproducts->confirmOrder($oid, '0', $statusid, $info['userID'], $note);
        $url2 = 'home/cusers/orderdetail?orderid=' . $oid . '&buyer=' . $buyer;
        $url = site_url($url2);
        header("location: $url");
    }

    public function changeStatusProduct() {
        $proid = $_POST['proid'];
        $userid = $_POST['userid'];
        $statuspro = $_POST['status'];
        $this->Musers->changeStatusPro($proid, $userid, $statuspro);

        if ($statuspro == 1)
            echo'
            <option value="1">Đang bán</option>
            <option value="2">Hết hàng</option>
            <option value="0">Ngừng bán</option>';
        if ($statuspro == 0)
            echo'
            <option value="0">Ngừng bán</option>
            <option value="1">Tiếp tục bán</option>';
        if ($statuspro == 2)
            echo'
            <option value="2">Hết hàng</option>
            <option value="1">Tiếp tục bán</option>';
    }

    public function showMessage() {
        $message_detail = $this->Musers->getMessageByID($_POST['messID']);
        if (isset($message_detail) && count($message_detail)) {
            echo ' 
               <ul class="scroll scroll_2">
                                <li style="min-height: 170px;">
                        <div class="listitem clearfix">
                            <a href="#" class="name_user">' . $message_detail['ho_nguoi_gui'] . $message_detail['ten_nguoi_gui'] . '</a>
                            <p>' . $message_detail['content'] . '</p>
                            <time>' . $message_detail['datetime'] . '</time>
                        </div>
                    </li>

                </ul>
                <form method="post" name="message" action="home/cusers/sendMessage">
                    <div class="post_content">
                        <div>
                            <span>Tiêu đề:</span></br>
                            <input type="text" name="title_message" value="Reply: ' . $message_detail['title'] . '" style="width:100%"/>
                        </div>
                        <div>
                            <span>Nội dung:</span>
                            <textarea class="content_add" name="content_message" style="width:100%"></textarea>       
                        </div>
                        <div>
                            <input type="hidden" name="sender" value="' . $message_detail['senderID'] . '"/>
                            <input type="submit" class="btn" name="send_message" value="Send"/>
                        </div>
                    </div>
                </form>';
            $this->Musers->changeMessageStatus($_POST['messID']);
        }
    }

    public function sendMessage() {
        $sender = $this->input->post('sender');
        $temp['info'] = $this->Mlog->log(); //hien thi ten nguoi dung tren header
        $userid = $temp['info']['userID'];
        $title = $this->input->post('title_message');
        $content = $this->input->post('content_message');
        $this->Musers->sendMessage($sender, $userid, $title, $content);
        redirect('profile#messages');
    }

    public function orderdetail() {
        
        
        $temp['info'] = $this->Mlog->log();
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
        if (isset($_GET['orderid'], $_GET['buyer'])) {
            $temp['detail'] = $this->Musers->getOrderDetail($_GET['orderid']);
            if (substr($_GET['buyer'], 0, 3) == 'UID')
                $temp['buyer'] = $this->Musers->getOrder_UserBuy($_GET['orderid'], $_GET['buyer']);
            elseif (substr($_GET['buyer'], 0, 5) == 'GUEST')
                $temp['buyer'] = $this->Musers->getOrder_GuestBuy($_GET['orderid'], $_GET['buyer']);
            if ($this->input->post('confirm')) {
                $this->Mproducts->confirmOrder($_GET['orderid'], '2', $temp['buyer']['statusID'], $temp['info']['userID'], '');
                $page = $_SERVER['PHP_SELF'] . '?orderid=' . $_GET['orderid'] . '&buyer=' . $_GET['buyer'] . ''; //url de load lai trang
                $sec = "1";
                header("Refresh: $sec; url=$page");
            }
        }
        $temp['title'] = 'Chi tiết hóa đơn';
        $temp['template'] = 'vusers/order_detail';
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $temp);
    }

    public function historydetail() {
        $temp['info'] = $this->Mlog->log();
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
        $temp['profile'] = $this->Musers->getProfile($userid); //lấy thông tin cá nhân
        if (isset($_GET['orderid'])) {
            $temp['detail'] = $this->Musers->getOrderDetail($_GET['orderid']);
            $temp['seller'] = $this->Musers->getOrderDetail_History($_GET['orderid']);
        }

        $temp['title'] = 'Chi tiết hóa đơn';
        $temp['template'] = 'vusers/order_history';
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $temp);
    }

    public function sendMail($email, $psw, $name) {
        $key = $this->encrypt->encode($email);
        $link_active = base_url() . "active?key=" . urlencode($key);
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
                    $temp['title'] = 'Kích hoạt tài khoản';
                    $temp['content'] = '<h1>Tài khoản của bạn đã được đăng ký và kích hoạt thành công với email: ' . $email . '</h1>
                                        <p>Xin chân thành cảm ơn</p>
                                        <a href="' . base_url() . 'trang-chu">Quay về trang chủ</a>';
                    $this->load->view('layout/layout', $temp);
                } else {
                    $temp['title'] = 'Kích hoạt tài khoản';
                    $temp['content'] = '<h1>Tài khoản này đã được kích hoạt</h1>
                                        <a href="' . base_url() . 'trang-chu">Quay về trang chủ</a>';
                    $this->load->view('layout/layout', $temp);
                }
            } else {
                $temp['title'] = 'Kích hoạt tài khoản';
                $temp['content'] = '<h1>Quá trình kích hoạt thất bại</h1>
                <p>Vui lòng kiểm tra email hoặc đăng nhập để gửi lại key kích hoạt</p>
                <a href="' . base_url() . 'trang-chu">Quay về trang chủ</a>';
                $temp['template'] = 'vusers/notice';
                $this->load->view('layout/layout', $temp);
            }
        }
    }

    public function vd() {

        $this->load->view('vd');
    }

    public function vd2() {
        $errors = array(); //To store errors
        $form_data = array(); //Pass back the data to `form.php`


        /* Validate the form on server side */
        if (empty($_POST['name'])) { //Name cannot be empty
            $errors['name'] = 'Name cannot be blank';
        }

        if (!empty($errors)) { //If errors in validation
            $form_data['success'] = false;
            $form_data['errors'] = $errors;
        } else { //If not, process the form, and return true on success
            $form_data['success'] = true;
            $form_data['posted'] = 'Data Was Posted Successfully';
        }

        //Return the data back to form.php
        echo json_encode($form_data);
    }

    public function checkmail() {
        $email = $_POST['email'];
        $ckmail = $this->Musers->checkMail($email);
        if ($ckmail == TRUE)
            echo '<img src="' . base_url() . 'public/icons/ok-icon.png"/> Bạn có thể đăng ký bằng Email này!';
        else
            echo 'Email này đã được đăng ký vui lòng chọn email khác!';
    }

    public function checkpass() {
        $pass = $_POST['oldpass'];
        $email = $this->session->userdata('user');
        $ckpass = $this->Mlog->checklogin($email['email'], $pass);
        if ($ckpass == TRUE)
            echo 'Mật khẩu chính xác!';
        else
            echo 'Sai mật khẩu!';
    }

    public function login() {// Hàm được gọi bởi sự kiện submit-ajax trong trang view login.php, view_cart.php và product_detail.php
        $errors = array(); //Lưu tên lỗi
        $form_data = array(); //trả lại dữ liệu cho form dưới dạng data json
        if ($this->Mlog->login($_POST['email2'], $_POST['pass2']) == FALSE) { //Nếu đăng nhập thất bại
            $errors['name'] = 'Sai tên đăng nhập hoặc mật khẩu';
        }
        if (!empty($errors)) { //Nếu có lỗi
            $form_data['success'] = false;
            $form_data['errors'] = $errors;
        } else { //Nếu không báo lỗi thì báo thành công
            $form_data['success'] = true;
            $form_data['posted'] = 'thanh cong';
        }
        echo json_encode($form_data);
        //trả lại dữ liệu cho trang login
    }

    public function uploadImages($name, $link) {

        $config['upload_path'] = $link;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $name . uniqid();
        $config['max_size'] = '9000000';
        $this->upload->initialize($config);
        if ($this->upload->do_upload($name)) {
            return $this->upload->data();
        } else {
            echo $this->upload->display_errors();
        }
    }

}