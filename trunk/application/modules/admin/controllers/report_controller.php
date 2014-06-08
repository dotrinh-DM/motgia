<?php

class Report_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('report_model');
        $this->load->helper(array('form', 'url', 'province', 'html', 'category'));
        $this->load->model("home/musers");
        $this->load->model("category_model");
        $this->load->library('session');

        if ($this->session->userdata('admin') == '') {
            redirect('admin/login');
        }
    }

    /**
     * Load giao dien cho nguoi dung chon ngay bao cao
     */
    public function product()
    {
        $data['info'] = $this->session->userdata('admin');
        $data['title'] = 'Báo cáo sản phẩm';
        $data['template'] = 'report/product';
        $this->load->view("layout_admin/layout", $data);
    }

    /**
     * Thống kê theo sản phẩm và theo danh muc SP
     */
    public function view()
    {
        $data['title'] = 'Quản lý báo cáo :: Admin';
        $data['info'] = $this->session->userdata('admin');
        $from = $this->input->post('fromdate');
        $to = $this->input->post('todate');
        $type = $this->input->post('type');
        if ($type == 'product')
        {
            $data['product'] = $this->report_model->viewByproduct($from, $to);
        }
        else
        {
            $data['category'] = $this->report_model->viewBycategory($from, $to);
        }
        $data['template'] = 'report/product';
        $this->load->view('layout_admin/layout', $data);
    }

}
