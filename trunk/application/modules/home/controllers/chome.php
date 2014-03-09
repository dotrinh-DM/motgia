<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Mlog');
    }

    public function index() {
        $temp['info']=  $this->Mlog->log();
        $temp['title'] = 'Trang chủ';
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect('home/chome');
    }

}