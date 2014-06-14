<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'province', 'html'));
        $this->load->model("user_model");
        $this->load->model("home/musers");
        $this->load->library('upload');
        $this->load->library('session');

        if ($this->session->userdata('admin') == '') {
            redirect('admin/login');
        }
    }

    public function addUser() {
        $temp['link'] = ' <a href="' . site_url('admin/user_controller') . '">Thành viên / </a>Thêm thành viên';
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Thêm thành viên';
        $temp['template'] = 'user/add_user';
        $this->load->view('layout_admin/layout', $temp);
    }

    public function formSubmit() {
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $ho = $this->input->post('ho');
            $ten = $this->input->post('ten');
            $email = $this->input->post('mail');
            $psw = $this->input->post('matkhau');
            $matkhau = $this->encrypt->encode($psw);
            $ngaysinh = $this->input->post('ngaysinh');
            $gioitinh = $this->input->post('gioitinh');
            $tinh = $this->input->post('tinh');
            $phone = $this->input->post('phone');
            $diachi = $this->input->post('diachi');
            $phanquyen = $this->input->post('phanquyen');
            if ($id === false) {
                $userID = $this->musers->setID('user', 'userID', 'UID');
            } else {
                $userID = $id;
            }
            $date = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
            $this->user_model->changeDataUser($id, $userID, $date, $ho, $ten, $email, $matkhau, $ngaysinh, $gioitinh, $tinh, $phone, $diachi, $phanquyen);
            redirect('admin/adminhome/manageUser');
        }
    }

    public function edituser($id) {
        $temp['info'] = $this->session->userdata('admin');
        $temp['title'] = 'Sửa thành viên';
        $temp['data'] = $this->user_model->getUserId($id);
        $temp['template'] = 'user/edit_user';
        $this->load->view('layout_admin/layout', $temp);
    }

    public function deluser($id) {
        $this->user_model->del($id);
        redirect('admin/adminhome/manageUser');
    }

}

?>
