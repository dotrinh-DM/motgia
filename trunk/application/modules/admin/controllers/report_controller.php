<?php

require_once 'my_core_controller.php';

class Report_controller extends My_core_controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('report_model');
        $login = $this->session->userdata('username');
        if ($login == FALSE)
        {
            redirect('admin/login_controller');
        }
    }

    /**
     * Load giao dien cho nguoi dung chon ngay bao cao
     */
    public function index()
    {
        $data['title'] = 'Quản lý báo cáo :: Admin';
        $data['h1'] = 'Report';
        $data['template'] = 'report/show';
        $this->load->view("layout/layout", $data);
    }

    /**
     * Thống kê theo sản phẩm và theo danh muc SP
     */
    public function view()
    {
        $data['title'] = 'Quản lý báo cáo :: Admin';
        $data['h1'] = 'Report';
        $from = strtotime($this->input->post('fromdate'));
        $to = strtotime($this->input->post('todate'));
        $type = $this->input->post('type');
        if ($type == 'product')
        {
            $data['product'] = $this->report_model->viewByproduct($from, $to);
        }
        else
        {
            $data['category'] = $this->report_model->viewBycategory($from, $to);
        }
        $data['template'] = 'report/show';
        $this->load->view('layout/layout', $data);
    }

}
