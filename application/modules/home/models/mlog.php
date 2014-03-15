<?php

class Mlog extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('encrypt');
    }

    public function log() {
        $ck = $this->session->userdata('user');
        if (isset($ck) && count($ck)) {
            $temp['info'] = $this->session->userdata('user');
        }
        if ($this->input->post('login')) {
            $this->login();
        }
        if ($this->input->post('logout')) {
            $this->logout();
        }
        return $temp['info'];
    }

    public function login() {
        $email = $this->input->post('inputemail');
        $psw = $this->input->post('inputpass');
        $pass = $this->encrypt->decode($psw);
        if ($this->checklogin($email, $pass) == TRUE) {
            $fullname = $this->getName($email);
            $userid=  $this->getID($email);
            $newdata = array(
                'userID' => $userid,
                'fullname' => $fullname,
                'email' => $email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata('user', $newdata);
            echo 'đăng nhập thành công';
            redirect('home/chome');
        }
        else
            echo 'đăng nhập thất bại';
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect('home/chome');
    }

    public function checklogin($email = 0, $password = 0) {
        $check1 = $this->db->select('email', 'password')->FROM('user')->WHERE(array('email' => $email, 'password' => $password))->get()->row_array();
        if (count($check1))
            return $check1 = TRUE;
        else
            return $check1 = FALSE;
    }

    public function getName($email = 0) {
        $querry['fullname'] = $this->db->select('firstname,lastname')->WHERE('email', $email)->get('user')->row_array();
        return $querry['fullname']['firstname'].' '.$querry['fullname']['lastname'];
    }
    public function getID($email = 0) {
        $querry['ID'] = $this->db->select('id')->WHERE('email', $email)->get('user')->row_array();
        return $querry['ID']['id'];
    }

}

?>
