<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'province', 'html', 'category'));
        $this->load->model("contact_model");
        $this->load->library('upload');
        $this->load->library('session');
        if ($this->session->userdata('admin') == '')
        {
            redirect('admin/login');
        }
    }

    public function index()
    {
        $temp['link'] = ' Liên hệ';
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Quản lý liên hệ';
        $temp['template'] = 'contact/list_msg';
        $temp['data'] = $this->contact_model->getAll();
        $this->load->view('layout_admin/layout', $temp);
    }

    public function getDetail($id)
    {
        $temp['link'] = 'Chi tiết liên hệ';
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Chi tiết liên hệ';
        $temp['template'] = 'contact/detail';
        $temp['data'] = $this->contact_model->getDetail($id);
        $this->load->view('layout_admin/layout', $temp);
    }

}

?>
