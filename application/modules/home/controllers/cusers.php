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
        $this->load->helper(array('captcha'));
    }

    public function index() {
        $temp['title'] = 'Trang chủ';
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
    }

    public function signup() {
        $this->load->model('captcha_model');
        $cap=$this->captcha_model->createCaptcha();
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
        $temp['Data'] = $cap['image'];
        //        
        $temp['title'] = 'Đăng ký';
        $temp['template'] = 'vusers/signup';
        $this->load->view('layout/layout', $temp);
    }

    public function vd() {
            if ($this->input->post('sub')) {
            $txt = $this->input->post('text1');
            if($txt=='a')
                $b_Check = TRUE;
            else 
                $b_Check = FALSE;
            $cbx = $this->input->post('check1');
            if ($b_Check  && $cbx == 'ok') {
                $temp['success'] = 'Bạn đã đăng ký thành công';
            } if ($cbx != 'ok') {
                $temp['error1'] = 'Bạn không đồng ý với các điều khoản quy định của chúng tôi';
            } if ($b_Check == FALSE) {
                $temp['error2'] = 'Mã xác nhận không đúng. Xin thử lại!';
            } 
        } 
        $temp['sds']=23;
        $this->load->view('vd', $temp);
    }
        public function check1($txt){
            if($txt=='a')
                return TRUE;
            else 
                return FALSE;
        }

}