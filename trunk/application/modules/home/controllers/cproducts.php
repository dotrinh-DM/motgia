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
        $this->load->library('form_validation');
        $this->form_validation->set_rules('soluong', 'Số lượng bắt buộc và phải là số', 'required|numeric|integer');
        $this->form_validation->set_rules('tensanpham', 'Tên sản phẩm bắt buộc', 'required');
        $this->form_validation->set_rules('motangan', 'Mô tả ngắn bắt buộc', 'required');
//        $this->form_validation->set_rules('dacdiemnb', 'Số lượng!', 'required|numeric');
//        $this->form_validation->set_rules('dieukiensd', 'Số lượng!', 'required|numeric');
//        $this->form_validation->set_rules('chitietsp', 'Số lượng!', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->upProducts();
        }else{
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
    }
    public function editProducts($id) {
        $data['cate'] = $this->Mproducts->getAllCategories();
        $data['edit'] = $this->Mproducts->editProducts($id);
        $data['title'] = 'Sửa sản phẩm';
        $data['template'] = 'vproducts/editproducts';
        $this->load->view('layout/layout', $data);
    }
    
    
    public function updateProducts() {
    $id = $this->input->post('idhidden');
    $a = $this->Mproducts->editProducts($id);
    foreach ($a as $value)
    $raw = json_decode($value->images);
    
     if(in_array(4, $_FILES['img']['error'])) // sua 1 trong 3 - 2 trong 3
        {
            $url = array();
            $allowed = array('image/jpg', 'image/x-png', 'image/png', 'image/jpeg');
            for ($i = 0; $i < 3; $i++) {
                $link_tai_anh_goc = "./public/product_images/";
                $tmp = $_FILES['img']['tmp_name'][$i]; //luu ten cua file vao bien tmp
                $full_name = $_FILES['img']['name'][$i]; //luu ten that cua file vi du: hoaqua.jpg
                $type = $_FILES['img']['type'][$i]; //luu loai cua anh
                if($full_name != ''){
                    if (in_array(strtolower($type), $allowed)) {
                        unlink($raw[$i]);
                        //doi ten va up anh len
                        $ext = end(explode('.', $full_name)); //lay ten mo rong
                        $newname = uniqid('motgia') . '.' . $ext; //doi ten
                        move_uploaded_file($tmp, $link_tai_anh_goc . $newname); //bat dau di chuyen
                        $url[] = 'public/product_images/' . $newname;
                    }//#For i++
                }else{
                    $url[] = $raw[$i];
                }
        }
        $link_img = json_encode($url);
        }else{ //Muon sua ca 3 anh
           $url = array();
           $allowed = array('image/jpg', 'image/x-png', 'image/png', 'image/jpeg');
           for ($i = 0; $i < 3; $i++) {
               unlink($raw[$i]);
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
               }//#For i++
           }
         $link_img = json_encode($url);
        }
        $danhmuc = $this->input->post('danhmuc');
        $soluong = $this->input->post('soluong');
        $tensanpham = $this->input->post('tensanpham');
        $motangan = $this->input->post('motangan');
        $dacdiemnb = $this->input->post('dacdiemnb');
        $dieukiensd = $this->input->post('dieukiensd');
        $chitietsp = $this->input->post('chitietsp');
        $this->Mproducts->updateProducts($id,$danhmuc,$soluong,$tensanpham,$motangan,$dacdiemnb,$dieukiensd,$chitietsp,$link_img);
        $data['title'] = 'Sửa sản phẩm | Một giá';
        $data['template'] = 'vproducts/upproducts';
        $this->load->view('layout/layout', $data);
    }
    
     public function getProductByID($id) {
        $data['data'] = $this->Mproducts->getProductByID($id);
//       var_dump($data);
        
        $this->load->view('vproducts/tam',$data);
    }
//    public function gogo() {
//        $this->load->library("upload");
//        $config['upload_path'] = "./public/product_images/";
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size'] = '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
//        $data = array();
//        $this->upload->initialize($config);
//       if($this->upload->do_upload('img'))
//       {
//           echo 'ok';
//       }else{
//                      echo 'ko';}
//        $data['mang'] = $this->upload->data();
//              var_dump($data);
//            foreach($_FILES as $field => $file)
//            {
//                for($i=0;$i<2;$i++){
//                    $this->upload->initialize($config);
//                    var_dump();
//                    $this->upload->do_upload($field."[$i]");
//                    $data['mang'] = $this->upload->data();
//                }                
//            }
         
//        $this->load->view('vproducts/tam');
//    }
    public function exx1() {
        $data['table']= $this->Mproducts->getAllProducts();
        $data['title'] = 'vo van';
        $this->load->view('vproducts/tam',$data);
    }
    
    public function exx() {
//        echo base_url();
//        echo site_url();
    if(unlink('public/product_images/motgia5312eb4d00a83.jpg'))
    {
        echo 'ok';
    }else{
        echo 'ko';
    }
    
    }

}
