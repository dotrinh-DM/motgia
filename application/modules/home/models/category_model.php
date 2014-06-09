<?php

class Category_model extends CI_Model
{

    protected $_tbl_cate = 'tbl_categories';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     *
     * @return array
     * Lay tat ca data trong bang category
     */
    public function getAll()
    {
        return $this->db->query("select * from $this->_tbl_cate")->result();
    }

    public function getProCate()
    {
        return $this->db->query('select * from tbl_category_product')->result();
    }

}
