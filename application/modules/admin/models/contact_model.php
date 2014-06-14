<?php

class Contact_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAll()
    {
        return $this->db->query('select * from contact')->result_array();
    }
    public function getDetail($id)
    {
        return $this->db->query("select * from contact where contactID = $id")->result();
    }
}
