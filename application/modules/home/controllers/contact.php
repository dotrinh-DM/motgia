<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'menu_helper',));
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model(array('Mproducts', 'Musers', 'Mlog', 'category_model','Mshop'));
//        $this->output->cache(10);
    }
    public function index(){
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $temp['info'] = $this->Mlog->log();
        if ($temp['info']['logged_in'] == TRUE) {
            $userid = $temp['info']['userID'];
            $temp['coin'] = $this->Musers->getCoin($userid);
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $temp['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $temp['level']=  $this->Musers->getLevel($userid);
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $temp['level'] == 2) {
                $temp['shopper'] = $this->Musers->checkOwnShop($userid);
                $temp['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $temp['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $temp['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
        if($this->input->post('send')){
            $mail = $this->input->post('mail');
            $phone = $this->input->post('phone');
            $add = $this->input->post('add');
            $content = $this->input->post('content');
            $name = $this->input->post('name');
            $this->Musers->feedBack($name,$mail,$content,$phone,$add);
        }
        
        $temp['listshop']=  $this->Mshop->getListShop();
        $temp['title'] = 'Phản hồi | Siêu thị một giá | Đăng sản phẩm | Thanh toán Trực tuyến';
        $temp['template'] = 'feedback';
        $this->load->view('layout/layout', $temp);
    }
}
?>