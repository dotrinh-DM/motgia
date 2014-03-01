<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Adminhome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->helper('html');
        $this->load->model("Adminmodel");
        $this->load->library('upload');
        $this->load->library('session');
    }

    public function index() {
        
        $check = $this->session->userdata('admin');
        if(isset($check) && count($check)){
        $temp['info'] = $this->session->userdata('admin');
        $temp['title']='trang quản trị';
        $temp['template']='user_control';
        $temp['data'] = $this->Adminmodel->getAll('user');
        $this->load->view('layout_admin/layout',$temp);
        }
        else login(); 
    }
    
    public function login(){
        $this->load->view('login_admin');
               if ($this->input->post('sub')){
                   $this->Adminmodel->login();
               }
    }

        public function logout(){
        $this->Adminmodel->logout();
    }
}

?>
