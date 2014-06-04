<?php

class Product_model extends CI_Model
{
    protected $tbl_product = 'products';
    protected $tbl_cp = 'tbl_category_product';
    protected $tbl_category = 'tbl_categories';

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
        $this->db->order_by('productsID', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
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

    /**
     * @id $category_product
     * Them id cua san pham vao trong bang giua
     */
    public function insertCatePro($category_product)
    {
        $this->db->insert($this->tbl_cp, $category_product);
    }

    public function updateProduct($id,$data)
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

}

?>
