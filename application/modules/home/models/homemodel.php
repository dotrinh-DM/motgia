<?php
class Homemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAllUser()
    {
         $this->db->select('*');
         $this->db->from("categories");
         $query = $this->db->get();
         return $query->result();
    }
    
}

