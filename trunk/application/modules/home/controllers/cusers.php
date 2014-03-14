<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cusers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Musers');
        $this->load->model('Mlog');
        $this->load->database();
    }

    public function index() {
        $temp['info'] = $this->Mlog->log();
        $temp['title'] = 'Trang chủ';
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
    }

    public function vd() {
        $this->load->view('vd');
//        $temp['template'] = 'vd';
//        $this->load->view('layout/layout', $temp);
    }

    public function signup() {
        $this->load->helper(array('captcha'));
        $this->load->model('captcha_model');
        $cap = $this->captcha_model->createCaptcha();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $sz_Word = $this->input->post('captcha');
            $b_Check = $this->captcha_model->b_fCheck($sz_Word);
            $cbx = $this->input->post('check');
            if ($b_Check && $cbx == 'ok') {
                $this->Musers->insertUser();
                $temp['success'] = 'Bạn đã đăng ký thành công';
            } if ($cbx != 'ok') {
                $temp['error1'] = 'Bạn không đồng ý với các điều khoản quy định của chúng tôi!';
            } if ($b_Check == FALSE) {
                $temp['error2'] = 'Mã xác nhận không đúng!';
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
            $birthday = $year . '/' . $month . '/' . $day;
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

}