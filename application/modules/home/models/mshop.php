<?php

class Mshop extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->Model('Musers');
    }

    public function regShop($company, $add, $city, $phone, $web, $uid, $link_insert) {//Mở gian hàng
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

    public function getListShop() {
        return $this->db->select("*")
                        ->select("count(products.productsID) as num_pro")
                        ->join('products', 'products.shopID = shop.shopID')
                        ->group_by("shop.shopID")
                        ->get('shop')->result_array();
    }

    public function getShopByShopID($shopid) {
        return $this->db->select("shop.shopID as shopID,
                                  shop.company as company,
                                  shop.phone as phone,
                                  shop.address as address,
                                  shop.website as website,
                                  shop.city as city,
                                  shop.userID as userID,
                                  shop.image as image
                                   ")
                        ->select("CONCAT(user.firstname ,' ',user.lastname) as fullname", FALSE)
                        ->select("count(products.productsID) as num_pro")
                        ->join('products', 'products.shopID = shop.shopID')
                        ->join('user', 'shop.userID = user.userID')
                        ->where('shop.shopID', $shopid)
                        ->group_by("shop.shopID")
                        ->get('shop')->row_array();
    }
    public function getProductByShopID($shopid){
       return $this->db->select("*")
                ->where("shopID","$shopid")
                ->get('products')
                ->result_array();
    }

    public function updateShopInfo($shopid, $company, $phone, $web, $add, $city, $userid) {
        $data = array(
            'company' => $company,
            'address' => $add,
            'city' => $city,
            'website' => $web,
            'phone' => $phone,
        );
        $this->db->where(array('shopID' => $shopid, 'userID' => $userid))->update('shop', $data);
    }

    public function getProductByUID_Where($uid, $sum = 10000, $start = 0, $where) {
        $shopid = $this->getShopByUID($uid);
        $this->db->select("*");
        $this->db->select("DATE_FORMAT(create_date, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->where(array("shopID" => $shopid, "status" => $where));
        $this->db->limit($sum, $start);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function getProductByUID_hot($uid) {
        $shopid = $this->getShopByUID($uid);
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
        $shopid = $this->getShopByUID($uid);
        $this->db->select("*");
        $this->db->select("DATE_FORMAT(create_date, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->where("shopID", "$shopid");
        $this->db->limit($sum, $start);
        $this->db->order_by('create_date', 'DESC');
        $query = $this->db->get('products');
        return $query->result();
    }

    public function getShopByProID($id) {
        $shopid1 = $this->db->select("shopID")->where("productsID", $id)->get('products')->row_array();
        $shopid = $shopid1['shopID'];
        return $this->db->select("*")
                        ->where("shopID", "$shopid")
                        ->get("shop")
                        ->row_array();
    }

    public function getHotShop() {
        
    }

    public function getShopByUID($uid) {
        $shop = $this->db->select("*")
                ->where("userID", "$uid")
                ->get("shop")
                ->row_array();
        return $shop['shopID'];
    }

    public function getOrderByUID($Uid, $where) {//kiem tra so ban ghi theo dieu kien
        $shopid = $this->getShopByUID($Uid);
        $this->db->select("count(*) as numberc")
                ->where(array("shopID" => $shopid, "status" => $where));
        $query = $this->db->get('tbl_order')->row_array();
        return $query['numberc'];
    }

    public function getOrderByUID_where($Uid, $sum = 10000, $start = 0, $where) {//don hang theo tinh trang yeu cau
        $shopid = $this->getShopByUID($Uid);
        $this->db->select("*")
                ->select("DATE_FORMAT(create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                ->select("DATE_FORMAT(create_date, '%d') AS date", FALSE)
                ->select("DATE_FORMAT(create_date, '%m') AS month", FALSE)
                ->select("DATE_FORMAT(create_date, '%Y') AS year", FALSE)
                ->where(array("shopID" => $shopid, "status" => $where))
                ->order_by('date_cr', 'desc');
        $query = $this->db->get('tbl_order', $sum, $start);
        return $query->result();
    }

    public function getAllOrderByUID($Uid, $sum = 10000, $start = 0) {//don hang theo tinh trang yeu cau
        $shopid = $this->getShopByUID($Uid);
        $this->db->select("*")
                ->select("DATE_FORMAT(create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                ->select("DATE_FORMAT(create_date, '%d') AS date", FALSE)
                ->select("DATE_FORMAT(create_date, '%m') AS month", FALSE)
                ->select("DATE_FORMAT(create_date, '%Y') AS year", FALSE)
                ->where("shopID", "$shopid")
                ->order_by('date_cr', 'desc');
        $query = $this->db->get('tbl_order', $sum, $start);
        return $query->result();
    }

}

?>
