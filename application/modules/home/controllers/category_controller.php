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
