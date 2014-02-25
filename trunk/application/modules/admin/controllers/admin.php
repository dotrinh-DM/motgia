<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->helper('html');
        $this->load->model("Adminmodel");
        $this->load->library('upload');
    }

    public function index() {
        echo 'ĐÔ';
//        $temp['data'] = $this->Adminmodel->getArticleData();
//        $temp['content'] = 'content_right';
//        $this->load->view("block/layout", $temp);
    }
}

?>
