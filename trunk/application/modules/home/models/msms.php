<?php

class Msms extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->Model('Musers');
    }

    public function transacsion($syntax, $moblie, $uid) {
        $creat = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
        $data = array(
            'syntax' => $syntax,
            'phone' => $moblie,
            'userID' => $uid,
            'money' => 15000,
            'create_date' => $creat);
        $this->db->insert('transaction', $data);
        $this->upMoney($uid);
    }

    public function checkUid($uid) {//neu co ton tai UID thi lay ra so tien hien tai
        return $this->db->select('*')->where('userID', $uid)->get('user')->row_array();
    }
    public function getmail($uid){
        $ckuid = $this->db->select('email')->where('userID', $uid)->get('user')->row_array();
        return $ckuid['email'];
    }

    public function upMoney($uid) {
        $ckuid = $this->db->select('coin')->where('userID', $uid)->get('user')->row_array();
        $money = $ckuid['coin']+15000;
        $this->db->where('userID', $uid)->update('user', array('coin' => $money));
    }

}

?>
