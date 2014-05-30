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
            $temp = $this->session->userdata('user');
        }
//        if (isset($_POST['email2'],$_POST['pass2'])) {
//            $email = $this->input->post('inputemail');
//            $psw = $this->input->post('inputpass');
//            $this->login($email, $psw);
//            $page = $_SERVER['PHP_SELF'];
//            $sec = "1";
//            header("Refresh: $sec; url=$page");
////            echo "Watch the page reload itself!";
//        }
//        
        if ($this->input->post('login')) {
            $email = $this->input->post('inputemail');
            $psw = $this->input->post('inputpass');
            $this->login($email, $psw);
            $page = $_SERVER['PHP_SELF'];
            $sec = "1";
            header("Refresh: $sec; url=$page");
//            echo "Watch the page reload itself!";
        }
        if ($this->input->post('logout')) {
            $this->logout();
        }
        return $temp; //tra ve FALSE neu chua dang nhap, tra ve array neu da dang nhap
    }

    public function login($email, $psw) {
        if ($this->checklogin($email, $psw)) {
            $fullname = $this->getName($email);
            $userid = $this->getID($email);
            $newdata = array(
                'userID' => $userid,
                'fullname' => $fullname,
                'email' => $email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata('user', $newdata);
            if ($this->session->userdata('guest'))
                $this->session->unset_userdata('guest'); //nếu khách vãng lai đăng nhập thì xóa các phiên làm việc trước đó
            return TRUE;
        }
        else
            return FALSE;
    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect('home/chome');
    }

    public function checklogin($email, $password) {

        $pwd = $this->db->select('password')->WHERE('email', $email)->get('user')->row_array();
        if (isset($pwd) && count($pwd)) {
            if ($this->encrypt->decode($pwd['password']) == $password)
                $check1 = TRUE;
            else
                $check1 = FALSE;
        }
        else
            $check1 = FALSE;
        return $check1;
    }

    public function getName($email = 0) {
        $querry = $this->db->select('firstname,lastname')->WHERE('email', $email)->get('user')->row_array();
        return $querry['firstname'] . ' ' . $querry['lastname'];
    }

    public function getID($email = 0) {
        $querry = $this->db->select('userID')->WHERE('email', $email)->get('user')->row_array();
        return $querry['userID'];
    }

}

?>
