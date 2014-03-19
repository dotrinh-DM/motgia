<?php

class Captcha_model extends CI_Model {
    private $_name = 'captcha';
    function __construct() {
        parent::__construct();
    }
    public function createCaptcha(){
        
        $url = base_url();
        $vals = array(
            'img_path' => APPPATH . '../captcha/images/',
            'img_url' => $url . 'captcha/images/',
            'font_path' => $url . 'captcha/fonts/texb.ttf',
            'img_width' => '170',
            'img_height' => '45',
            'expiration' => 7200);
        $cap = create_captcha($vals);
        $data = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']);
        $this->saveData($data);
        return $cap;
    }

    public function saveData($the_a_Data) {
        $query = $this->db->insert_string($this->_name, $the_a_Data);
        return $this->db->query($query);
    }
    public function b_fCheck($the_sz_Captcha) {
        // Xóa các captch cũ đi 
        $expiration = time() - 3600; // Giới hạn là 1h
        $this->db->query("DELETE FROM $this->_name WHERE captcha_time < " . $expiration);
        // Kiểm tra captcha nhập vào có tồn tại hay không: 
        $sql = "SELECT COUNT(*) AS count FROM $this->_name WHERE word = ? AND ip_address = ? AND captcha_time > ?";
        $binds = array(
            $the_sz_Captcha,
            $this->input->ip_address(),
            $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();
        if ($row->count == 0) {
            return false;
        } else {
            return true;
        }
    }

}
?>