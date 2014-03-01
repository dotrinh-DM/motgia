<?php
class Adminmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
public function getAll($table)
    {
         $this->db->select("*");
         $this->db->from("$table");
         $query = $this->db->get();
         return $query->result_array();
    }   
}
?>
