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

    public function getProIncate($id_category)
    {
        return $this->db->query("
                            SELECT
                                a.productsID,
                                a.name,
                                a.price,
                                a.images,
                                a.intro
                            FROM
                                products AS a
                            INNER JOIN tbl_category_product as b
                             ON a.productsID = b.productsID
                            AND b.categoryID IN ($id_category) GROUP BY a.productsID")->result();
    }

    public function getProCate()
    {
        return $this->db->query('select * from tbl_category_product')->result();
    }

}
