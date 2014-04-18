<?php

class Musers extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getData($table) {
        $this->db->select("*");
        $this->db->from("$table");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getProfile($userid) {
        $this->db->select('firstname,lastname,gender,birthday,province,phone,address,password');
        $this->db->select("DATE_FORMAT(birthday, '%d-%m-%Y') AS birthofday", FALSE);
        $this->db->select("DATE_FORMAT(birthday, '%e') AS day", FALSE);
        $this->db->select("DATE_FORMAT(birthday, '%m') AS month", FALSE);
        $this->db->select("DATE_FORMAT(birthday, '%Y') AS year", FALSE);
        $this->db->from('user');
        $this->db->where('userID', $userid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insertUser($l_name = 0, $f_name = 0, $month = 0, $birthday = 0, $gender = 0, $phone = 0, $province = 0, $email = 0, $pass = 0, $adr = 0) {
        if ($this->input->post('Add')) {
            $userID = $this->setID('user', 'userID', 'UID');
            $expiredate = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
            $data2 = array(
                'userID' => $userID,
                'firstname' => $f_name,
                'lastname' => $l_name,
                'email' => $email,
                'password' => $pass,
                'birthday' => $birthday,
                'gender' => $gender,
                'coin' => '0',
                'province' => $province,
                'phone' => $phone,
                'address' => $adr,
                'status' => '0',
                'expiredate' => $expiredate,
                'levelID' => '1'
            );
            $this->db->insert('user', $data2);
        }
    }

    public function updateProfile($userid = 0, $firstname = 0, $lastname = 0, $birthday = 0, $gender = 0, $phone = 0, $addr = 0, $province = 0, $email = 0) {
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'birthday' => $birthday,
            'gender' => $gender,
            'province' => $province,
            'phone' => $phone,
            'address' => $addr,
        );
        $newdata = array(
            'userID' => $userid,
            'fullname' => $firstname . ' ' . $lastname,
            'email' => $email,
            'logged_in' => TRUE
        );
        $this->db->where("userID", "$userid");
        $this->db->update('user', $data);
        $this->session->unset_userdata('user');
        $this->session->set_userdata('user', $newdata);
        redirect($this->uri->uri_string());
//        $this->session->set_userdata('user', $newdata);
    }

    public function sendMessage($receiver, $sender, $title, $content) {

        $mID = $this->setID('message', 'messageID', 'MSS');
        $date = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
        $data = array(
            'messageID' => $mID,
            'receiverID' => $receiver,
            'senderID' => $sender,
            'title' => $title,
            'content' => $content,
            'date' => $date,
            'status' => 0
        );
        $this->db->insert('message', $data);
        return $this->db->affected_rows();
    }

    //Kiem tra e-mail da ton tai hay chua?
    public function checkMail($email = 0) {
        $query = $this->db->select('email')->FROM('user')->WHERE('email', $email)->get()->row_array();
        if (isset($query) && count($query)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkpass($pass = 0) {
        $query = $this->db->select('pass')->FROM('user')->WHERE('pass', $pass)->get()->row_array();
        if (isset($query) && count($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    //lay san pham tu userID
    public function getProductByUID($Uid, $sum = 10000, $start = 0) {
        $this->db->select("productsID,name,images");
        $this->db->select("DATE_FORMAT(date_up, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->From('products');
        $this->db->where("userID", "$Uid");
        $this->db->limit($sum, $start);
        $query = $this->db->get();
        return $query->result();
    }

    //lay tat ca hoa don da ban cua thanh vien
    public function getOrderByUID($Uid, $sum = 10000, $start = 0) {
        $this->db->select("orderID,createdate,shipdate,buyerID,note,status");
        $this->db->select("DATE_FORMAT(createdate, '%d-%m-%Y') AS date_cr", FALSE);
        $this->db->select("DATE_FORMAT(shipdate, '%d/%m/%Y') AS date_ship", FALSE);
        $this->db->where("sellerID", "$Uid");
        $this->db->order_by('status');
        $query = $this->db->get('order', $sum, $start);
        return $query->result();
    }

    //dem co bao nhieu hoa don chua xu ly cua thanh vien
    public function getNumOrderStatus($UID) {
        $this->db->select("status");
        $this->db->where(array('status' => 0, 'sellerID' => $UID));
        $qr = $this->db->get('order')->result();
        return $num = count($qr);
    }

    public function getNumMessageUnread($UID) {
        $this->db->select("status");
        $this->db->where(array('status' => 0, 'userID' => $UID));
        $qr = $this->db->get('message')->result();
        return $num = count($qr);
    }
    //lay tat ca tin nhan cua thanh vien
    public function getMessageByUID($Uid, $sum = 10000, $start = 0) {
        $this->db->select('messageID,senderID,user.firstname AS ho_nguoi_gui,user.lastname AS ten_nguoi_gui,title,content,message.status AS status');
        $this->db->select("DATE_FORMAT(date, '%d-%m-%Y %H:%i:%s') AS datetime", FALSE);
        $this->db->select("DATE_FORMAT(date, '%d-%m-%Y') AS date", FALSE);
        $this->db->where('message.userID', $Uid);
        $this->db->JOIN('user', 'user.userID = message.senderID');
        $this->db->order_by('date','desc');
        $query = $this->db->get('message', $sum, $start);
        return $query->result();
    }

    public function getMessageByID($id) {
        $this->db->select('messageID,senderID,user.firstname AS ho_nguoi_gui,user.lastname AS ten_nguoi_gui,title,content');
        $this->db->select("DATE_FORMAT(date, '%d-%m-%Y %H:%i:%s') AS datetime", FALSE);
        $this->db->select("DATE_FORMAT(date, '%d-%m-%Y') AS date", FALSE);
        $this->db->where('message.messageID', $id);
        $this->db->JOIN('user', 'user.userID = message.senderID');
        return $query = $this->db->get('message')->row_array();
    }
    
    public function changeMessageStatus($id){
        $data= array(
            'status' => 1
        );
        $this->db->where('messageID',$id)->update('message',$data);
    }

    public function getLevel($userID) {
        $this->db->select("levelID");
        $this->db->where("userID", "$userID");
        $query = $this->db->get('user');
        return $query->row_array();
    }

    //chen khoa chinh $pri_key tai bang $table voi ky tu $name o dau va cac chu so dang sau tang dan
    public function setID($table, $pri_key, $name) {
        $this->db->select("$pri_key");
        $this->db->limit(1);
        $this->db->order_by("$pri_key", "desc");
        $arrr = $this->db->get("$table")->row_array();
        $count = strlen($arrr[$pri_key]);
        $str = (int) substr($arrr[$pri_key], 3, $count);
        $str++;
        $id = $name . $str;
        $leng = strlen($id);
        while ($leng <= 7) {
            $ar1 = (int) substr($id, 3, $leng);
            $ar2 = rtrim($id, $ar1);
            $id = $ar2 . '0' . $ar1;
            $leng++;
        }
        return $id;
    }

}

?>
