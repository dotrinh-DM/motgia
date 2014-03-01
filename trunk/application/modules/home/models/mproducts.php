<?php
class Mproducts extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
     public function getAllCategories()
    {
         $this->db->select("*");
         $query = $this->db->get("categories");
         return $query->result();
    }
     public function insertProducts($danhmuc,$soluong,$tensanpham,$motangan,$dacdiemnb,$dieukiensd,$chitietsp,$images)
     {     $create_date = strtotime('now');
            $data = array(
                'name' => $tensanpham,
                'quantity'=>$soluong,
                'price'=>10000,
                'soldnumber'=>0,
                'images'=>$images,
                'intro'=>$motangan,
                'hightlight'=>$dacdiemnb,
                'condition'=>$dieukiensd,
                'productinfo'=>$chitietsp,
                'create_date'=>$create_date,
                'userID'=>0,
                'categoriesID'=>$danhmuc,
                );
            $this->db->insert('products', $data);
    }
}
?>
