<?php

class Musers extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getData($table) {
        $this->db->select("*");
        $this->db->from("$table");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getProfile($userid) {
        $this->db->select('firstname,lastname,gender,birthofday,province,phone,address,password');
//        $this->db->select("DATE_FORMAT(birthofday, 'Ngày%d Tháng%m Năm%Y') AS birthday", FALSE);
//        $this->db->select("DATE_FORMAT(birthofday, '%e') AS day", FALSE);
//        $this->db->select("DATE_FORMAT(birthofday, '%m') AS month", FALSE);
//        $this->db->select("DATE_FORMAT(birthofday, '%Y') AS year", FALSE);
        $this->db->from('user');
        $this->db->where('userID', $userid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insertUser($l_name=0,$f_name=0,$month=0,$birthday=0,$gender=0,$phone=0,$province=0,$email=0,$pass=0,$adr=0) {
        if ($this->input->post('Add')) {
            $expiredate = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
            $data2 = array(
                'firstname' => $f_name,
                'lastname' => $l_name,
                'email' => $email,
                'password' => $pass,
                'birthofday' => $birthday,
                'gender' => $gender,
                'coin' => '0',
                'province' => $province,
                'phone' => $phone,
                'address' => $adr,
                'status' => '0',
                'expiredate' => $expiredate,
                'levelID' => '1'
            );
            $this->db->insert('user', $data2);
        }
    }

    public function updateProfile($userid=0,$firstname=0,$lastname=0,$birthday=0,$gender=0,$phone=0,$addr=0,$province=0,$email=0) {
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'birthofday' => $birthday,
            'gender' => $gender,
            'province' => $province,
            'phone' => $phone,
            'address' => $addr,
        );
        $newdata = array(
                'userID' => $userid,
                'fullname' => $firstname.' '.$lastname,
                'email' => $email,
                'logged_in' => TRUE
            );
        $this->db->where("userID", "$userid");
        $this->db->update('user', $data);
        $this->session->unset_userdata('user');
        $this->session->set_userdata('user', $newdata);
        redirect($this->uri->uri_string());
//        $this->session->set_userdata('user', $newdata);
    }
    //Kiem tra e-mail da ton tai hay chua?
    public function checkMail($email=0){
        $query= $this->db->select('email')->FROM('user')->WHERE('email',$email)->get()->row_array();
        if(isset($query) && count($query)){
            return FALSE;
        }
        else{
            return TRUE;
        }
    }
        public function checkpass($pass=0){
        $query= $this->db->select('pass')->FROM('user')->WHERE('pass',$pass)->get()->row_array();
        if(isset($query) && count($query)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
          //lay san pham tu userID
    public function getProductByUID($Uid,$sum=10000,$start=0) {
        $this->db->select("productsID,name,images");
        $this->db->select("DATE_FORMAT(date_up, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_up, '%e') AS day_up", FALSE);
        $this->db->select("DATE_FORMAT(date_up, '%m') AS month_up", FALSE);
        $this->db->select("DATE_FORMAT(date_up, '%Y') AS year_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%e') AS day_ex", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%m') AS month_ex", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%Y') AS year_ex", FALSE);
        $this->db->where("userID", "$Uid");
        $query = $this->db->get('products',$sum,$start);
        return $query->result();
    }
}

?>
