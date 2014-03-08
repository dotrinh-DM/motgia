<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Adminhome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->helper('html');
        $this->load->model("Adminmodel");
        $this->load->library('upload');
        $this->load->library('session');
        
        if($this->session->userdata('admin') == ''){
            redirect('admin/login'); 
        }
    }

    public function index() {
        $temp['info'] = $this->session->userdata('admin');
        $temp['title']='trang quản trị';
        $temp['template']='user_control';
        $temp['data'] = $this->Adminmodel->getAll('user');
        $this->load->view('layout_admin/layout',$temp);
    }
}
?>
