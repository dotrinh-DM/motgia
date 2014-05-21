<?php

class Mproducts extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Musers');
    }

    public function getAllCategories() {
        $this->db->select("*");
        $query = $this->db->get("categories");
        return $query->result();
    }

    public function getAllProducts() {
        $this->db->select("products.productsID as productsID,
            products.name as name,
            products.price as price,
            products.images as images,
            products.intro as intro,
            products.categoriesID as categoriesID,
            user.firstname as fname,
            user.lastname as lname", FALSE);
//        $this->db->order_by('productsID', 'DESC');
        $this->db->join('user','user.userID=products.userID');
        $this->db->limit(10,0);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function show_more($start) {
        $this->db->select("products.productsID as productsID,
            products.name as name,
            products.price as price,
            products.images as images,
            products.intro as intro,
            products.categoriesID as categoriesID,
            user.firstname as fname,
            user.lastname as lname", FALSE);
//        $this->db->order_by('productsID', 'DESC');
        $this->db->join('user','user.userID=products.userID');
        $this->db->limit(10,$start);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function getDataSlide() {
        $this->db->select("productsID,images,categoriesID");
        $this->db->order_by("soldnumber", "desc");
        $this->db->limit(5);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function getRandomProduct() {
        $this->db->select("productsID,name,price,images,categoriesID");
        $this->db->order_by("productsID", "desc");
        $this->db->limit(4);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function insertProducts($id, $danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $images,$uid) {
        $create_date = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
        $data = array(
            'productsID' => $id,
            'name' => $tensanpham,
            'quantity' => $soluong,
            'price' => 10000,
            'soldnumber' => 0,
            'images' => $images,
            'intro' => $motangan,
            'hightlight' => $dacdiemnb,
            'condition' => $dieukiensd,
            'productinfo' => $chitietsp,
            'create_date' => $create_date,
            'userID' => $uid,
            'categoriesID' => $danhmuc
        );
        $this->db->insert('products', $data);
    }

    public function editProducts($id) {
        $this->db->select("productsID,name,quantity,images,intro,hightlight,condition,productinfo,categoriesID");
        $this->db->from("products");
        $this->db->where("productsID", $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function updateProducts($id, $danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $link_img) {
        $data = array(
            'name' => $tensanpham,
            'quantity' => $soluong,
            'images' => $link_img,
            'intro' => $motangan,
            'hightlight' => $dacdiemnb,
            'condition' => $dieukiensd,
            'productinfo' => $chitietsp,
            'categoriesID' => $danhmuc,
        );
        $this->db->where("productsID", "$id");
        $this->db->update('products', $data);
    }

    public function insertOrder($seller, $buyer, $note) {
        $id = $this->Musers->setID('order', 'orderID', 'ORD');
        $creat = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
        $data = array(
            'orderID' => $id,
            'sellerID' => $seller,
            'buyerID' => $buyer,
            'create_date' => $creat,
            'shipdate' => $creat,
            'note' => $note,
            'status' => 1//don hang chua xu ly
        );
        $this->db->insert('order', $data);
        return (string) $id;
    }

    public function insertOrderDetail($order,$pro, $number) {
        $data = array(
            'orderID' => $order,
            'productsID' => $pro,
            'quantity' => $number
        );
        $this->db->insert('order_detail', $data);
    }

    public function getProductByID($id) {
        $this->db->select("*");
        $this->db->where('productsID', "$id");
        $query = $this->db->get('products');
        return $query->result();
    }

    public function getProductByCate($id, $cate) {
        $this->db->select("productsID,name,price,images,categoriesID");
        $this->db->where("categoriesID", "$cate");
        $this->db->where("productsID != '$id' ");
        $this->db->limit(5);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function getCart($where) {
        $this->db->select("*");
        $this->db->where("productsID in ('$where')");
        $query = $this->db->get('products');
        return $query->result();
    }

    public function getImage($proid) {
        $this->db->select("images");
        $this->db->where('productsID' , $proid);
        $query = $this->db->get('products');
        return $query->row_array();
    }

}

?>
