<?php

class Product_model extends CI_Model {

    protected $tbl_product = 'products';
    protected $tbl_cp = 'tbl_category_product';
    protected $tbl_category = 'tbl_categories';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encrypt');
    }
    public function getShopByUID($uid) {
        $shop = $this->db->select("*")
                ->where("userID", "$uid")
                ->get("shop")
                ->row_array();
        return $shop['shopID'];
    }


    public function getAll()
    {
        $this->db->select("*")->where('status != 1');
        $this->db->from($this->tbl_product);
        $this->db->order_by('productsID', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDetailShop($id)
    {
        $sql = "SELECT b.* FROM products as a JOIN shop as b 
                on a.shopID = b.shopID WHERE a.productsID = '$id' ";
        return $this->db->query($sql)->result();
    }

    public function getByID($id)
    {
        return $this->db->query("select * FROM products WHERE productsID = '$id' ")->result();
    }

    public function getImages($id)
    {
        return $this->db->query("select images FROM products WHERE productsID = '$id' ")->result();
    }

    public function getProductIncate($id)
    {
        return $this->db->query("select categoryID FROM $this->tbl_cp WHERE productsID = '$id' ")->result();
    }

    public function insertProduct($data)
    {
        $this->db->insert($this->tbl_product, $data);
    }

    public function insertCatePro($category_product)
    {
        $this->db->insert($this->tbl_cp, $category_product);
    }

    public function updateProduct($id, $data)
    {
        $this->db->where('productsID', $id);
        $this->db->update($this->tbl_product, $data);
    }

    public function delProCate($id)
    {
        $this->db->where("productsID", $id);
        $this->db->delete($this->tbl_cp);
    }

    public function del($id)
    {
        $this->db->query("DELETE FROM products WHERE productsID = '$id' ");
    }

    public function confirmProduct($proid)
    {
        $this->db->where('productsID', $proid)->update('products', array('status' => '1'));
        $ck = $this->db->affected_rows();
        if ($ck > 0)
            return TRUE;
        else
            return FALSE;
    }

    public function UnconfirmProduct()
    {
        return $this->db->select('*')->where('status', 3)->get('products')->result_array();
    }

}

?>
