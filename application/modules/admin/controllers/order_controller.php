<?php

class Order_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'province', 'html'));
        $this->load->model("home/musers");
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->model('order_model');
        $this->load->model("home/mproducts");
        $this->load->model("category_model");
//        $login = $this->session->userdata('username');
//        
//        if ($login == FALSE)
//        {
//            redirect('admin/login_controller');
//        }
    }

    /**
     * Load giao dien cho nguoi dung chon ngay bao cao
     */
    public function index() {
        $data['link'] = 'Hóa đơn';
        $data['title'] = 'Quản lý hóa đơn :: Admin';
        $data['info'] = $this->session->userdata('admin');
        $data['data'] = $this->order_model->getAll();
        $data['template'] = 'order/list_order';
        $this->load->view("layout_admin/layout", $data);
    }

    public function getDetail() {
        $temp['title'] = 'Chi tiết hóa đơn :: Admin';
        $temp['info'] = $this->session->userdata('admin');
        if (isset($_GET['orderid'], $_GET['buyer'])) {
            $temp['detail'] = $this->Musers->getOrderDetail($_GET['orderid']);
            if (substr($_GET['buyer'], 0, 3) == 'UID')
                $temp['buyer'] = $this->Musers->getOrder_UserBuy($_GET['orderid'], $_GET['buyer']);
            elseif (substr($_GET['buyer'], 0, 5) == 'GUEST')
                $temp['buyer'] = $this->Musers->getOrder_GuestBuy($_GET['orderid'], $_GET['buyer']);
            if ($this->input->post('confirm')) {
                $this->Mproducts->confirmOrder($_GET['orderid'], '2', $temp['buyer']['statusID'], $temp['info']['userID'], '');
                $page = $_SERVER['PHP_SELF'] . '?orderid=' . $_GET['orderid'] . '&buyer=' . $_GET['buyer'] . ''; //url de load lai trang
                $sec = "1";
                header("Refresh: $sec; url=$page");
            }
        }
        $temp['link'] = ' <a href="' . site_url('admin/order_controller') . '">Hóa đơn</a>' . ' / Chi tiết hóa đơn'.' '.$temp['buyer']['orderID'];
        $temp['title'] = 'Chi tiết hóa đơn';
        $temp['template'] = 'order/order_detail';
        $this->load->view("layout_admin/layout", $temp);
    }

    /**
     * Thống kê theo sản phẩm và theo danh muc SP
     */
    public function view() {
        $data['title'] = 'Quản lý báo cáo :: Admin';
        $data['h1'] = 'Report';
        $from = strtotime($this->input->post('fromdate'));
        $to = strtotime($this->input->post('todate'));
        $type = $this->input->post('type');
        if ($type == 'product') {
            $data['product'] = $this->report_model->viewByproduct($from, $to);
        } else {
            $data['category'] = $this->report_model->viewBycategory($from, $to);
        }
        $data['template'] = 'report/show';
        $this->load->view('layout/layout', $data);
    }

}
