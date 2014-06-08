<?php

class Report_model extends CI_model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /**
     * 
     * @param int $date1
     * @param int $date2
     * @return array
     * Tra ve mang du lieu san pham ban chay nhat theo khoang thoi gian
     */
    public function viewByproduct($from, $to)
    {
        $sql = "
        SELECT
                name,
                price,
                productsID,
                soldnumber
            FROM
                products
            WHERE
                create_date BETWEEN '$from 00:00:00.000'
            AND '$to 23:59:59.997'
            GROUP BY
                productsID
            ORDER BY soldnumber DESC
        ";
        return $this->db->query($sql)->result();
    }

    /**
     * 
     * @param int $date1
     * @param int $date2
     * @return array
     * Tra ve mang du lieu danh muc ban chay nhat theo khoang thoi gian
     */
    
    public function viewBycategory($date1, $date2)
    {
        $sql = "SELECT cp.categoryID,c.category_name,sum(od.quantities) as quan,SUM(od.price) as total
                FROM $this->_tbl_cate_pro as cp
                JOIN $this->_tbl_categories as c ON c.categoryID = cp.categoryID
                JOIN $this->_tbl_order_detail as od ON cp.productID = od.productID
                JOIN $this->_tbl_order as o ON o.orderID = od.orderID
                WHERE o.create_date BETWEEN $date1 AND $date2
                GROUP BY cp.categoryID 
                ORDER BY quan DESC LIMIT 5";
        return $this->db->query($sql)->result();
    }

}
