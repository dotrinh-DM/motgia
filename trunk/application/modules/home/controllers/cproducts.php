<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cproducts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Mproducts');
    }

    public function index() {
        $temp['title']='Trang chủ';
        $temp['template']='home';
        $this->load->view('layout/layout',$temp);
    }
    
     public function upProducts() {
        $temp['title']='Đăng sản phẩm';
        $temp['cate'] = $this->Mproducts->getAllCategories();
        $temp['template']='vproducts/upproducts';
        $this->load->view('layout/layout',$temp);
     }
     public function insertProducts() {
        $danhmuc = $this->input->post('danhmuc');
        $soluong = $this->input->post('soluong');
        $tensanpham = $this->input->post('tensanpham');
        $motangan = $this->input->post('motangan');
        $dacdiemnb = $this->input->post('dacdiemnb');
        $dieukiensd = $this->input->post('dieukiensd');
        $chitietsp = $this->input->post('chitietsp');
        $kq = $this->Mproducts->insertProducts($danhmuc,$soluong,$tensanpham,$motangan,$dacdiemnb,$dieukiensd,$chitietsp);
        $this->session->set_flashdata('addproduct_alert', 'Đã Thêm sản phẩm Thành Công');
        redirect('home/cproducts/upProducts');
     }
//var_dump($temp['cate']);
}
