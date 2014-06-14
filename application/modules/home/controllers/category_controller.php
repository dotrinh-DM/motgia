<?php

session_start();

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'file', 'menu', 'form', 'url','category'));
        $this->load->library('session');
        $this->load->model('Mshop');
        $this->load->model('Mlog');
        $this->load->model('Musers');
        $this->load->model("category_model");
    }

    public function productInCates($id)
    {
        $temp['title'] = 'Sản phẩm trong danh mục';
        $temp['info'] = $this->Mlog->log();
        if ($temp['info']['logged_in'] == TRUE) {
            $userid = $temp['info']['userID'];
            $temp['coin'] = $this->Musers->getCoin($userid);
            $temp['num_message'] = $this->Musers->getNumMessageUnread($userid); //Lay so luong tin nhan chua doc
            $temp['num_history'] = $this->Musers->getNumOrderHistory($userid); //Lay tat ca so luong hoa don da dat
            $temp['level'] = $this->Musers->getLevel($userid);
            $ckShop = $this->Musers->checkOwnShop($userid);
            if ($ckShop != FALSE || $temp['level'] == 2) {
                $temp['shopper'] = $this->Musers->checkOwnShop($userid);
                $temp['num_order'] = $this->Musers->getNumOrderStatus($userid); //lay so luong hoa don chua xu ly
                $temp['num_proUnactive'] = $this->Musers->getNumProductsUnactive($userid); //Lay so luong san pham chua kiem duyet
                $temp['num_proExpiration'] = $this->Musers->getNumProductsExpiration($userid); //Lay so luong san pham het han
            }
        }
        $temp['category'] = $this->category_model->getAll();
        getCategoryId($temp['category'], $id, $ids);
        $id_category = implode(',', $ids);
        $temp['data_home'] = $this->category_model->getProIncate($id_category);
        $temp['template'] = 'vproducts/category';
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $this->load->view('layout/layout', $temp);
    }


}
