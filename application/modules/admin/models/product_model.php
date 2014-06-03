<?php

class Product_model extends CI_Model
{
    protected $tbl_product = 'products';
    protected $tbl_cp = 'tbl_category_product';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encrypt');
    }

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from($this->tbl_product);
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

    public function insertProduct($data) {
        $this->db->insert($this->tbl_product, $data);
    }

    public function insertCatePro($category_product)
    {
        $this->db->insert($this->tbl_cp, $category_product);
//        var_dump($category_product); die();
    }

}

?>
