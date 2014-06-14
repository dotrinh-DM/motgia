<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'province', 'html', 'category'));
        $this->load->model("product_model");
        $this->load->model("home/musers");
        $this->load->model("category_model");
        $this->load->library('upload');
        $this->load->library('session');

        if ($this->session->userdata('admin') == '') {
            redirect('admin/login');
        }
    }

    public function index() {
        $temp['link'] = ' Sản phẩm';
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Quản lý sản phẩm';
        $temp['template'] = 'product/list_product';
        $temp['data'] = $this->product_model->getAll();
        $this->load->view('layout_admin/layout', $temp);
    }

    public function addProduct() {
        $temp['link'] = ' <a href="' . site_url('admin/product_controller') . '">Sản phẩm</a>' . ' / Thêm sản phẩm';
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Thêm sản phẩm';
        $temp['template'] = 'product/add_product';
        $temp['data'] = $this->category_model->getAll();
        $this->load->view('layout_admin/layout', $temp);
    }

    public function getInput($link_json) {
        $date = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
        $masp = $this->musers->setID('products', 'productsID', 'PRO');
        $data = array(
            'productsID' => $masp,
            'name' => $this->input->post('txtname'),
            'price' => $this->input->post('txtprice'),
            'quantity' => $this->input->post('soluong'),
            'create_date' => $date,
            'soldnumber' => 0,
            'images' => $link_json,
            'intro' => $this->input->post('txtdes'),
            'hightlight' => $this->input->post('noibat'),
            'condition' => $this->input->post('dieukien'),
            'productinfo' => $this->input->post('chitiet'),
            'userID' => $this->session->userdata['admin']['userID'],
            'status' => $this->input->post('status')
        );
        return $data;
    }

    public function insertProducts() {
        $raw_name = 'img';
        $link = 'public/product_images/';
        $link_img_insert = array();
        for ($i = 1; $i < 4; $i++) {
            $name_detail = $raw_name . $i;
            $link_img_insert[] = $this->uploadImages($name_detail, $link);
        }
        foreach ($link_img_insert as $val) {
            $newlink[] = $link . $val['file_name'];
        }
        $link_json = json_encode($newlink);
        $data = $this->getInput($link_json);
        $this->product_model->insertProduct($data);
        $danhmuc = $this->input->post('danhmuc');
        foreach ($danhmuc as $row) {
            $category_product = array(
                'productsID' => $data['productsID'],
                'categoryID' => $row
            );
            $this->product_model->insertCatePro($category_product);
        }

        redirect('admin/product_controller');
    }

    /*
     * Ham nay de upload tung anh len server, ca single va multi
     */

    public function uploadImages($name, $link) {

        $config['upload_path'] = $link;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['file_name'] = $name . uniqid();
        $config['max_size'] = '9000000';
        $this->upload->initialize($config);
        if ($this->upload->do_upload($name)) {
            return $this->upload->data();
        } else {
            echo $this->upload->display_errors();
        }
    }

    /**
     *
     * @param string $id
     * load gia dien cho nguoi dung dua san pham
     */
    public function editproduct($id) {
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Sủa sản phẩm';
        $temp['template'] = 'product/edit_product';
        $temp['product'] = $this->product_model->getByID($id);
        $temp['product_in_cate'] = $this->product_model->getProductIncate($id);
        $temp['data'] = $this->category_model->getAll();
        $this->load->view('layout_admin/layout', $temp);
    }

    public function updateProducts() {
        $idhidden = $this->input->post('idproduct');
        $images11 = $this->product_model->getImages($idhidden);
        $images22 = json_decode($images11[0]->images);
        $raw_name = 'img';
        $link = 'public/product_images/';
        $arr = array();
        for ($i = 0; $i < 3; $i++) {
            if ($_FILES['img' . $i]['name'] != '') {
                $tam = $this->uploadImages($raw_name . $i, $link);
                $arr[$i] = $link . $tam['file_name'];
            } else {
                $arr[$i] = $images22[$i];
            }
        }
        $this->product_model->delProCate($idhidden);
        $danhmuc = $this->input->post('danhmuc');
        foreach ($danhmuc as $row) {
            $category_product = array(
                'productsID' => $idhidden,
                'categoryID' => $row
            );
            $this->product_model->insertCatePro($category_product);
        }
        $link_json = json_encode($arr);
        $data = array(
            'name' => $this->input->post('txtname'),
            'price' => $this->input->post('txtprice'),
            'quantity' => $this->input->post('soluong'),
            'images' => $link_json,
            'intro' => $this->input->post('txtdes'),
            'hightlight' => $this->input->post('noibat'),
            'condition' => $this->input->post('dieukien'),
            'productinfo' => $this->input->post('chitiet'),
            'status' => $this->input->post('status')
        );
//        var_dump($data); die();
        $this->product_model->updateProduct($idhidden, $data);
        redirect('admin/product_controller');
    }

    public function UnconfirmPro() {
        $temp['link'] = ' <a href="' . site_url('admin/product_controller') . '">Sản phẩm</a>' . ' / Duyệt sản phẩm';
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Duyệt sản phẩm';
        $temp['template'] = 'product/confirm_product';
        $temp['data'] = $this->product_model->UnconfirmProduct();
        $this->load->view('layout_admin/layout', $temp);
    }

    public function confirmProduct() {
        if($_POST['proid']){
            if ($this->product_model->confirmProduct($_POST['proid']) == TRUE)
                echo 'Đã duyệt';
            else 
                echo 'Thất bại';
        }
    }

    /**
     *
     * @param string $id
     * Xoa san pham theo id
     */
    public function del($id) {
        $this->product_model->delProCate($id);
        $this->product_model->del($id);
        redirect('admin/product_controller');
    }

}

?>
