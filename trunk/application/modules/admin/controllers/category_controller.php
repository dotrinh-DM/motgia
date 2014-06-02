<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'province', 'html','category'));
        $this->load->model("category_model");
        $this->load->model("home/musers");
        $this->load->library('upload');
        $this->load->library('session');

        if ($this->session->userdata('admin') == '') {
            redirect('admin/login');
        }
    }
    
    public function index()
    {
         $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Danh mục';
        $temp['data'] = $this->category_model->getAll();
        $temp['template'] = 'category/list_category';
        $this->load->view('layout_admin/layout',$temp);
    }
}

?>
