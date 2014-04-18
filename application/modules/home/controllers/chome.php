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
         $this->load->model(array('Mproducts','Musers','Mlog'));
    }

    public function index() {
        $temp['info']=  $this->Mlog->log();
        if( count($temp['info'])){
        $userid = $temp['info']['userID'];
        $temp['num_order']= $this->Musers->getNumOrderStatus($userid);
        $temp['num_message'] = $this->Musers->getNumMessageUnread($userid);
        }
        $temp['title'] = 'Trang chủ';
        $temp['data_home'] = $this->Mproducts->getAllProducts();
        $temp['data_slide'] = $this->Mproducts->getDataSlide();
        $temp['template'] = 'home';
        $this->load->view('layout/layout', $temp);
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect('home/chome');
    }

}