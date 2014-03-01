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
        $temp['title'] = 'Trang chủ';
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
    }

    public function upProducts() {
        $temp['title'] = 'Đăng sản phẩm';
        $temp['cate'] = $this->Mproducts->getAllCategories();
        $temp['template'] = 'vproducts/upproducts';
        $this->load->view('layout/layout', $temp);
    }

    public function insertProducts() {
        $url = array();
        $allowed = array('image/jpg', 'image/x-png', 'image/png', 'image/jpeg');
        for ($i = 0; $i < 3; $i++) {
            $link_tai_anh_goc = "./public/product_images/";
            $tmp = $_FILES['img']['tmp_name'][$i]; //luu ten cua file vao bien tmp
            $full_name = $_FILES['img']['name'][$i]; //luu ten that cua file vi du: hoaqua.jpg
            $type = $_FILES['img']['type'][$i]; //luu loai cua anh
            if (in_array(strtolower($type), $allowed)) {
                //doi ten va up anh len
                $ext = end(explode('.', $full_name)); //lay ten mo rong
                $newname = uniqid('motgia') . '.' . $ext; //doi ten
                move_uploaded_file($tmp, $link_tai_anh_goc . $newname); //bat dau di chuyen
                $url[] = 'public/product_images/' . $newname;
            }else{
                redirect('home/Cproducts/upProducts');
            }
        }
        $images = json_encode($url);
        $danhmuc = $this->input->post('danhmuc');
        $soluong = $this->input->post('soluong');
        $tensanpham = $this->input->post('tensanpham');
        $motangan = $this->input->post('motangan');
        $dacdiemnb = $this->input->post('dacdiemnb');
        $dieukiensd = $this->input->post('dieukiensd');
        $chitietsp = $this->input->post('chitietsp');
        $kq = $this->Mproducts->insertProducts($danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp,$images);
        $this->session->set_flashdata('addproduct_alert', 'Đã Thêm sản phẩm Thành Công');
        redirect('home/cproducts/upProducts');
    }

    public function exx() {
        echo base_url();
        echo site_url();
    }

}
