<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("Homemodel");
    }

    public function index() {

        $temp['title'] = "Trang chủ";
        $temp['template'] = 'Xin chao cac ban';
        $this->load->view("vidu", $temp);
    }

    public function laydanhsach() {
        $data['dulieu'] = $this->Homemodel->getAllUser();
//        var_dump($data);
        $this->load->view("vidu", $data);
    }

}
