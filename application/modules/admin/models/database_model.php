<?php

class Database_model extends CI_Model {

    protected $_tbl_order = 'tbl_order';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

}
