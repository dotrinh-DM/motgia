<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Chome extends CI_Controller {
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
        $ck = $this->session->userdata('user');
        if(isset($ck) && count($ck)){
        $temp['info'] = $this->session->userdata('user');
        }
        $this->load->view('layout/layout',$temp);
        
        if ($this->input->post('login')){
        $this->Musers->login();
        }
                if ($this->input->post('logout')){
                $this->Musers->logout();
                }
    }
        public function logout(){
        $this->session->unset_userdata('user');
        redirect('home/chome');
        }   
}