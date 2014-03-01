<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->helper('html');
        $this->load->model("Adminmodel");
        $this->load->library('upload');
    }

    public function index() {
        $temp['title']='trang quản trị';
        $temp['template']='user_control';
        $temp['data'] = $this->Adminmodel->getAll('user');
        $this->load->view('layout_admin/layout',$temp);
    }
}

?>
