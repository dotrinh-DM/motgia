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
        return $this->db->query("select * from $this->_tbl_cate ORDER BY order_sort DESC")->result();
    }

    // Lấy order_sort lớn nhất của bảng category
    public function getMaxOrder()
    {
        $this->db->select_max('order_sort');
        $sql = $this->db->get($this->_tbl_cate);
        return $sql->result();
    }

    /**
     *
     * @param type $key
     * @param type $data
     * @return type
     * Cao nhat thu tu cho danh muc
     * Cap nhat danh muc luon
     */
    public function update($id, $data)
    {
        $this->db->where('categoryID', $id);
        $this->db->update($this->_tbl_cate, $data);
    }

    /**
     *
     * @param type $id
     * @return type
     * Lay danh muc theo id
     */
    public function getById($id)
    {
        return $this->db->query("select * from $this->_tbl_cate where categoryID = $id")->result();
    }

    /**
     *
     * @param type $data
     * @return type
     * Them san pham moi vao db
     */
    public function insertCategory($data)
    {
        $this->db->insert($this->_tbl_cate, $data);
    }

    /**
     *
     * @param string $id
     * Xoa danh muc theo id
     */
    public function del($id)
    {
        $this->delRows('categoryID', $id, $this->_tbl_cate);
    }

    /**
     *
     * @param type $id
     * @return type
     * Kiem tra xem category hien tai cocon hay khong
     */
    public function checkChildExist($id)
    {
        $check = $this->getRow('category_parent', 'category_parent', $id, $this->_tbl_cate);
        return count($check) > 0 ? TRUE : FALSE;
    }

    /**
     *
     * @param type $check_child
     * @return type
     * kiem tra category controller con hay khing
     */
    public function getHasChild($check_child)
    {
        $sql = "select categoryID,category_parent from $this->_tbl_cate where category_parent in ($check_child) ";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
