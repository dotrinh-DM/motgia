<?php

class Mshop extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->Model('Musers');
    }

    public function regShop($company, $add, $city, $phone, $web, $uid,$link_insert) {//Mở gian hàng
        $id = $this->Musers->setID('shop', 'shopid', 'SHO');
        $create_date = gmdate("Y-m-d", time() + 3600 * (+7 + date("I")));
        $data = array(
            'shopID' => $id,
            'company' => $company,
            'address' => $add,
            'city' => $city,
            'website' => $web,
            'phone' => $phone,
            'create_date' => $create_date,
            'userID' => $uid,
            'image' => $link_insert
        );
        $check = $this->db->select('userID')->where('userID', $uid)->get('shop')->num_rows();
        if ($check < 1) {
            $this->db->insert('shop', $data);
            $ck = $this->db->affected_rows();
            if ($ck > 0) {
                $this->db->WHERE('userID', $uid)->update('user', array('levelID' => 2));
                $ck2 = $this->db->affected_rows();
                if ($ck2 > 0)
                    return TRUE;
            }
        }
    }

}

?>
