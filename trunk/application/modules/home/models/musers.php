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
        $this->db->select('firstname,lastname,gender,province,phone,address');
        $this->db->select("DATE_FORMAT(birthofday, 'Ngày%d Tháng%m Năm%Y') AS birthday", FALSE);
        $this->db->select("DATE_FORMAT(birthofday, '%e') AS day", FALSE);
        $this->db->select("DATE_FORMAT(birthofday, '%m') AS month", FALSE);
        $this->db->select("DATE_FORMAT(birthofday, '%Y') AS year", FALSE);
        $this->db->from('user');
        $this->db->where('id', $userid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insertUser() {
        if ($this->input->post('Add')) {
            $l_name = $this->input->post('l_name');
            $f_name = $this->input->post('f_name');
            $month = $this->input->post('month');
            $day = $this->input->post('day');
            $year = $this->input->post('year');
            $birthday = $year . '/' . $month . '/' . $day;
            $gender = $this->input->post('gender');
            $phone = $this->input->post('phone');
            $province = $this->input->post('province');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            $adr = $this->input->post('adr');
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

    public function updateProfile($userid=0,$firstname=0,$lastname=0,$birthday=0,$gender=0,$phone=0,$addr=0,$province=0) {
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'birthofday' => $birthday,
            'gender' => $gender,
            'province' => $province,
            'phone' => $phone,
            'address' => $addr,
        );
        $this->db->where("id", "$userid");
        $this->db->update('user', $data);
    }

}

?>
