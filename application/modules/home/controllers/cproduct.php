<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class cusers extends CI_Controller {
      public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Musers');
    }
    public function index(){
        $temp['title']='Trang chủ';
        $temp['template']='home';
        $this->load->view('layout/layout',$temp);
        
    }
    
    public function signup(){
        $temp['title']='Đăng ký';
        $temp['template']='vusers/signup';
        $this->load->view('layout/layout',$temp);
        $this->Musers->insertUser();
    }

}