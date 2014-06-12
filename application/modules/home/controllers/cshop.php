<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cshop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'html', 'url', 'file', 'menu'));
        $this->load->library(array('session', 'encrypt', 'email', 'my_email'));
        $this->load->model(array('Musers', 'Mlog', 'Mproducts', 'Mshop'));
        $this->load->model("admin/category_model");
        $this->load->library('upload');
        $this->load->database();
    }

    public function index() {
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
            } else {
                redirect('trang-chu');
            }

            $temp['profile'] = $this->Mshop->getShopByShopID($this->Musers->getShopByUID($userid));
            if ($this->input->post('save_info')) {
                $shopid = $this->input->post('shopid');
                $company = $this->input->post('company');
                $phone = $this->input->post('phone');
                $web = $this->input->post('website');
                $add = $this->input->post('address');
                $city = $this->input->post('city');
                $this->Mshop->updateShopInfo($shopid, $company, $phone, $web, $add, $city, $userid);
                $page = $_SERVER['PHP_SELF'];
                header("Refresh: 0; url=$page");
            }

            $display = 5; //so ban ghi moi trang
            $spstart = 0; //vi tri mac dinh khi load trang
            $sppage = 1; //trang mac dinh khi load
            $billstart = 0;
            $billpage = 1;

            //////////////////////////////Quan ly san pham
            ///////////////////////////bat dau chuc nang quan ly san pham
            if (isset($_GET['sppage']) && (int) $_GET['sppage'] > 0) {
                $sppage = $_GET['sppage'];
                $spstart = (isset($_GET['sppage']) && (int) $_GET['sppage'] > 0) ? ($_GET['sppage'] - 1) * $display : 0; //nhan bien truyen vao tu url
            }
            
            $where = 1;
            if (isset($_GET['allpro']))
                $where = $_GET['allpro'];
            if ($where == 1){
                $temp['product'] = $this->Mshop->getProductByUID($userid, $display, $spstart);
                $record1 = count($this->Mshop->getProductByUID($userid,1000,0));
            }
            else if($where != 'hot'){
                $temp['product'] = $this->Mshop->getProductByUID_Where($userid, $display, $spstart,$where);
                $record1 = count($this->Mshop->getProductByUID_Where($userid,1000,0,$where));
            }
            else{
                $temp['product'] = $this->Mshop->getProductByUID_hot($userid);
                $record1 = count($temp['product']);
            }
            if ($record1 > $display)//neu so ban ghi nho hon quy dinh thi khong can phan trang
                $num_page1 = ceil($record1 / $display); //tong so trang
            else
                $num_page1 = 1;
            $temp['paging_product'] = array('num_page' => $num_page1, 'page' => $sppage, 'start' => $spstart, 'display' => $display);

            //////////////////////////////////////Quản lý đơn hàng
            if (isset($_GET['billpage']) && (int) $_GET['billpage'] > 0) {
                $billpage = $_GET['billpage'];
                $billstart = (isset($_GET['billpage']) && (int) $_GET['billpage'] > 0) ? ($_GET['billpage'] - 1) * $display : 0; //nhan bien truyen vao tu url
            }
            
             $whereord = 4;
            if (isset($_GET['allorder']))
                $whereord = $_GET['allorder'];
            if ($whereord == 4){
                $temp['order'] = $this->Mshop->getAllOrderByUID($userid, $display, $billstart);
                $record2 = count($this->Mshop->getAllOrderByUID($userid, 1000, 0));
            }
            else if($whereord != 'ko'){
                $temp['order'] = $this->Mshop->getOrderByUID_where($userid, $display, $billstart,$whereord);
                $record2 = $this->Mshop->getOrderByUID($userid,$whereord);
            }
            else{
                $temp['order'] = $this->Mshop->getOrderByUID_where($userid, $display, $billstart,0);
                $record2 = $this->Mshop->getOrderByUID($userid,0);
            }
            
            if ($record2 > $display)//neu ban ghi nho hon quy dinh thi khong can phan trang
                $num_page2 = ceil($record2 / $display); //tong so trang
            else
                $num_page2 = 1;

            /////////////////////////////xu ly don hang
            if ($this->input->post('confirm_order')) {
                $this->Mproducts->confirmOrder($this->input->post('orderid'), '2', $this->input->post('statusid'), $userid, '');
                if (isset($_GET['billpage']))
                    $url = 'profile?billpage=' . $_GET['billpage'] . '#bill';
                else
                    $url = 'profile#bill';
                redirect($url);
            }//end- xu ly don hang
            
            
//            $temp['order'] = $this->Musers->getOrderByUID($userid, $display, $billstart);
            $temp['paging_order'] = array('num_page' => $num_page2, 'page' => $billpage, 'start' => $billstart, 'display' => $display);
            /////////////////////////////////////end- quan ly don hang
            //
            //Lịch sử nạp tiền
            $temp['money'] = $this->Musers->historyMoney($userid);

            /////////////////////
            $temp['category'] = $this->category_model->getAll();
            $temp['kq'] = getChildren($temp['category']);
            $temp['procate'] = $this->category_model->getProCate();

            $temp['title'] = 'Quản lý gian hàng | Siêu thị motgia.tk';
            $temp['template'] = 'shop/shop';
            $this->load->view('layout/layout', $temp);
        }
        else
            redirect('trang-chu');
    }

    public function listShop() {
        $temp['category'] = $this->category_model->getAll();
        $temp['kq'] = getChildren($temp['category']);
        $temp['procate'] = $this->category_model->getProCate();
        $temp['title'] = 'Danh sách gian hàng | Đăng sản phẩm | Thanh toán Trực tuyến';
        $temp['template'] = 'shop/listShop';
        $this->load->view('layout/layout', $temp);
    }

}