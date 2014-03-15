<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cusers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'html', 'url'));
        $this->load->library(array('session', 'encrypt', 'email', 'my_email'));
        $this->load->model(array('Musers', 'Mlog'));
        $this->load->database();
    }

    public function index() {
        $temp['info'] = $this->Mlog->log();
        $temp['title'] = 'Trang chủ';
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
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
        $name=$f_name.' '.$l_name;
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $sz_Word = $this->input->post('captcha');
            $b_Check = $this->captcha_model->b_fCheck($sz_Word);
            $cbx = $this->input->post('check');
            $ckmail = $this->Musers->checkMail($email);
            if ($ckmail && $b_Check && $cbx == 'ok') {
                $this->Musers->insertUser($l_name, $f_name, $month, $birthday, $gender, $phone, $province, $email, $pass, $adr);
                $userid=  mysql_insert_id();
                $this->sendMail($email,$psw,$name);
                $temp['success'] ='
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

        $temp['info'] = $this->Mlog->log(); //hien thi nut dang nhap hoac ten nguoi dung tren header
        if ($this->input->post('save_info')) {
            $userid = $temp['info']['userID'];
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
        $temp['profile'] = $this->Musers->getProfile($temp['info']['userID']);
        $temp['title'] = 'Thông tin cá nhân';
        $temp['template'] = 'vusers/profile';
        $this->load->view('layout/layout', $temp);
    }

    public function sendMail($email,$psw,$name) {
        $key=  $this->encrypt->encode($email);
        $link_active = base_url()."index.php/home/cusers/active/?key=".$key;
        $message  = "Xin chào ".$name.".</br>
            Bạn đã đăng ký tài khoản thành công</br>
            Vui lòng click vào link bên dưới để kích hoạt tài khoản và sử dụng dịch vụ! <br/>
            You has been register completed ! <br/>
            Please check your email address to active your account and use system !</br>
            Link : <a href=".$link_active.">".$link_active."</a><br/>
            password : ".$psw;
        $mail = array(
            "to_receiver" => $email,
            "message" => $message,
        );

        $this->load->library('my_email');
        $this->my_email->config($mail);
        $this->my_email->sendmail();
    }

     public function active() {
        $email=  $this->encrypt->decode($_GET['key']);
        $data= array(
            'status'=>1
        );
        $this->db->where('email',$email);
        $this->db->update('user', $data);
        
    }

//    public function vd() {
//        $this->load->view('vdmail');
//        if ($this->input->post('send')) {
//            $message = "thu phat xem sao";
//
//            $mail = array(
//                "to_receiver" => 'ductan_nguyen92@yahoo.com',
//                "message" => $message,
//            );
//
//            $this->load->library('my_email');
//            $this->my_email->config($mail);
//            $this->my_email->sendmail();
//        }
//    }
}