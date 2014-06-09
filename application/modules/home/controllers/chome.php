<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','menu','menu'));
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
         $this->load->model(array('Mproducts','Musers','Mlog','category_model'));
    }

    public function index() {
        $temp['info']=  $this->Mlog->log();
        if( count($temp['info'])){
            $userid = $temp['info']['userID'];
            $temp['num_order']= $this->Musers->getNumOrderStatus($userid);
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid);
        }
        $temp['title'] = 'Trang chủ siêu thị một giá | Đăng sản phẩm | Thanh toán Trực tuyến';
        $temp['data_home'] = $this->Mproducts->getAllProducts();
        $temp['data_slide'] = $this->Mproducts->getDataSlide();
        $temp['template'] = 'home';
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $temp);
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect('trang-chu');
    }

}