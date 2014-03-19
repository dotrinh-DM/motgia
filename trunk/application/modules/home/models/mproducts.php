<?php

class Mproducts extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllCategories() {
        $this->db->select("*");
        $query = $this->db->get("categories");
        return $query->result();
    }

    public function getAllProducts() {
        $this->db->select("id,name,price,images,LEFT(intro,70) AS intro2,categoriesID ",FALSE);
        $query = $this->db->get("products");
        return $query->result();
    }
    public function getDataSlide() {
        $this->db->select("id,images,categoriesID");
        $this->db->order_by("soldnumber", "desc");
        $this->db->limit(5);
        $query = $this->db->get("products");
        return $query->result();
    }

    public function insertProducts($danhmuc, $soluong, $tensanpham, $motangan, $dacdiemnb, $dieukiensd, $chitietsp, $images) {
        $create_date = strtotime('now');
        $data = array(
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
            'userID' => 0,
            'categoriesID' => $danhmuc,
        );
        $this->db->insert('products', $data);
    }

    public function editProducts($id) {
        $this->db->select("id,name,quantity,images,intro,hightlight,condition,productinfo,categoriesID");
        $this->db->from("products");
        $this->db->where("id", $id);
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
        $this->db->where("id", "$id");
        $this->db->update('products', $data);
    }

    public function getProductByID($id) {
        $this->db->select("id,name,price,images,intro,hightlight,condition,productinfo,categoriesID");
        $this->db->where("id", "$id");
        $query = $this->db->get('products');
        return $query->result();
    }
     public function getProductByCate($cate) {
        $this->db->select("id,name,price,images,intro,hightlight,condition,productinfo,categoriesID");
        $this->db->where("categoriesID", "$cate");
        $query = $this->db->get('products');
        return $query->result();
    }

}

?>
