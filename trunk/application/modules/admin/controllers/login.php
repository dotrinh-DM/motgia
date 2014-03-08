<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('admin/Adminmodel');
    }
    function index() {
        $this->load->view('login_admin');
               if ($this->input->post('sub')){
                   $this->Adminmodel->login();
               }
    }
        public function logout(){
        $this->Adminmodel->logout();
    }
}