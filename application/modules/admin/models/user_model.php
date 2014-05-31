<?php

class User_model extends CI_Model
{
    protected $tbl_user = 'user';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encrypt');
    }

    public function getAll($table)
    {
        $this->db->select("*");
        $this->db->from("$table");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getUserId($id)
    {
        $this->db->select("*");
        $this->db->from($this->tbl_user);
        $this->db->where('userID',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function insertUser($userID,$date,$ho,$ten,$email,$matkhau,$ngaysinh,$gioitinh,$tinh,$phone,$diachi,$phanquyen){
        $data = array(
            'userID' => $userID,
            'firstname' => $ho,
            'lastname' => $ten,
            'email' => $email,
            'password' => $matkhau,
            'birthday' => $ngaysinh,
            'gender' => $gioitinh,
            'coin' => '0',
            'province' => $tinh,
            'phone' => $phone,
            'address' => $diachi,
            'status' => '0',
            'create_date' => $date,
            'levelID' => $phanquyen
        );
        $this->db->insert($this->tbl_user, $data);
    }

}

?>
