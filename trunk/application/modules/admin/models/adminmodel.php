<?php
class Adminmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function getArticleData()
    {
         $this->db->select("*");
         $this->db->from("tbl_tin,tbl_chuyenmuc");
         $query = $this->db->get();
         return $query->result_array();
    }   
}
?>
