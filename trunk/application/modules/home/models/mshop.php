<?php

class Mshop extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->Model('Musers');
    }

    public function regShop($company, $add, $city, $phone, $web, $uid,$link_insert) {//Mở gian hàng
        $id = $this->Musers->setID('shop', 'shopid', 'SHO');
        $create_date = gmdate("Y-m-d", time() + 3150 * (+7 + date("I")));
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
    
    public function getShopByShopID($shopid){
       return $this->db->select('*')->where("shopID","$shopid")->get("shop")->row_array();
    }
    
    public function updateShopInfo($shopid,$company,$phone,$web,$add,$city,$userid){
        $data = array(
            'company' => $company,
            'address' => $add,
            'city' => $city,
            'website' => $web,
            'phone' => $phone,
        );
        $this->db->where(array('shopID'=>$shopid,'userID'=>$userid))->update('shop',$data);
    }
    
    public function getProductByUID_Where($uid, $sum = 10000, $start = 0,$where) {
        $shopid= $this->getShopByUID($uid);
        $this->db->select("*");
        $this->db->select("DATE_FORMAT(create_date, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->where(array("shopID" =>$shopid, "status"=>$where));
        $this->db->limit($sum, $start);
        $query = $this->db->get('products');
        return $query->result();
    }
    public function getProductByUID_hot($uid) {
        $shopid= $this->getShopByUID($uid);
        $this->db->select("*");
        $this->db->select("DATE_FORMAT(create_date, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->where("shopID", "$shopid");
        $this->db->limit(5, 0);
        $this->db->order_by("soldnumber", "desc");
        $query = $this->db->get('products');
        return $query->result();
    }
     public function getProductByUID($uid, $sum = 10000, $start = 0) {
        $shopid= $this->getShopByUID($uid);
        $this->db->select("*");
        $this->db->select("DATE_FORMAT(create_date, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->where("shopID", "$shopid");
        $this->db->limit($sum, $start);
        $query = $this->db->get('products');
        return $query->result();
    }
    
    public function getShopByUID($uid){
       $shop = $this->db->select("*")
                ->where("userID","$uid")
                ->get("shop")
                ->row_array();
        return $shop['shopID'];
    }
}

?>
