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
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(birthday, '%d-%m-%Y') AS birthofday", FALSE);
        $this->db->select("CONCAT(firstname ,' ',lastname) as fullname", FALSE);
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
            $date = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
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
                'create_date' => $date,
                'levelID' => '1'
            );
            $this->db->insert('user', $data2);
        }
    }

    public function insertGuest($guestID, $fullname = 0, $mail = 0, $phone = 0, $province = 0, $address = 0) {
        $date = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
        $data2 = array(
            'guestID' => $guestID,
            'fullname' => $fullname,
            'mail' => $mail,
            'phone' => $phone,
            'province' => $province,
            'address' => $address,
            'create_date' => $date,
        );
        $this->db->insert('guest', $data2);
        return $this->db->affected_rows();
    }

    public function updateGuest($guestID, $fullname = 0, $mail = 0, $phone = 0, $province = 0, $address = 0) {
        $date = gmdate("Y-m-d H:i:s", time() + 3600 * (+7 + date("I")));
        $data2 = array(
            'guestID' => $guestID,
            'fullname' => $fullname,
            'mail' => $mail,
            'phone' => $phone,
            'province' => $province,
            'address' => $address,
            'create_date' => $date,
        );
        $this->db->where("guestID", "$guestID")->update('guest', $data2);
        return $this->db->affected_rows();
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
            'create_date' => $date,
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
        $this->db->select("*");
        $this->db->select("DATE_FORMAT(create_date, '%d/%m/%Y') AS date_up", FALSE);
        $this->db->select("DATE_FORMAT(date_expiration, '%d/%m/%Y') AS date_expiration", FALSE);
        $this->db->From('products');
        $this->db->where("userID", "$Uid");
        $this->db->limit($sum, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function changeStatusPro($proid, $uid, $status) {
        $this->db->where(array('productsID' => $proid, 'userID' => $uid));
        $this->db->update('products', array('status' => $status));
    }

    //lay tat ca hoa don da ban cua thanh vien
    public function getOrderByUID($Uid, $sum = 10000, $start = 0) {//đơn hàng đã nhận- dành cho chủ gian hàng
        $this->db->select("*")
                ->select("DATE_FORMAT(create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                ->select("DATE_FORMAT(create_date, '%d') AS date", FALSE)
                ->select("DATE_FORMAT(create_date, '%m') AS month", FALSE)
                ->select("DATE_FORMAT(create_date, '%Y') AS year", FALSE)
                ->where("sellerID", "$Uid")
                ->order_by('date_cr', 'desc');
        $query = $this->db->get('tbl_order', $sum, $start);
        return $query->result();
    }

    public function getOrder_UserBuy($oid,$buyid) {// chi tiet hoa don mau boi thanh vien
        return $this->db->select("
            order.orderID as orderID,
            order.buyerID as buyerID,
            order.note as note,
            order.method as method,
            order.status as status, 
            user.email as buyeremail,
            user.phone as buyerphone, 
            user.address as buyeradd")
                        ->select("CONCAT(firstname ,' ',lastname) as fullname", FALSE)
                        ->select("DATE_FORMAT(order.create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                        ->select("DATE_FORMAT(user.birthday, '%Y') AS buyeryear", FALSE)
                        ->where("order.orderID", "$oid")
                        ->where("order.buyerID", "$buyid")
                        ->join('user', 'user.userID = order.buyerID')
                        ->get('order')->row_array();
    }
    
       public function getOrder_GuestBuy($oid,$buyid) {//chi tiet hoa don mua boi khach vang lai
        return $this->db->select("
            order.orderID as orderID,
            order.buyerID as buyerID,
            order.note as note,
            order.method as method,
            order.status as status, 
            guest.fullname as fullname,
            guest.mail as buyeremail,
            guest.phone as buyerphone,")
                        ->select("CONCAT(address ,' ',province) as buyeradd", FALSE)
                        ->select("DATE_FORMAT(order.create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                        ->where("order.orderID", "$oid")
                        ->where("order.buyerID", "$buyid")
                        ->join('guest', 'guest.guestID = order.buyerID')
                        ->get('order')->row_array();
    }

    //lay tong gia tri cua don hang
    public function getValueOrder($orid) {
        $kq = $this->db
                ->select("sum(order_detail.quantity*products.price) as value")
                ->where("order_detail.orderID", "$orid")
                ->join('products', 'products.productsID = order_detail.productsID')
                ->get('order_detail')
                ->row_array();
        return (int) $kq['value'];
    }

    //Lay chi tiet don hang
    public function getOrderDetail($ordid) {
        return $this->db
                        ->select(" products.name as proname,
                    products.productsid as proid,
                    order_detail.quantity as number,
                    products.price as price")
                        ->where("order_detail.orderID", "$ordid")
                        ->join('products', 'products.productsID = order_detail.productsID')
                        ->get('order_detail')
                        ->result();
    }
    
       public function getOrderDetail_History($oid) {// chi tiet hoa don mau boi thanh vien
        return $this->db->select("
            order.orderID as orderID,
            order.buyerID as buyerID,
            order.note as note,
            order.method as method,
            order.status as status, 
            user.email as selleremail,
            user.phone as sellerphone,")
                        ->select("CONCAT(user.firstname ,' ',user.lastname) as fullname", FALSE)
                        ->select("CONCAT(user.address ,' ',user.province) as selleradd", FALSE)
                        ->select("DATE_FORMAT(order.create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                        ->where("order.orderID", "$oid")
                        ->join('user', 'user.userID = order.sellerID')
                        ->get('order')->row_array();
    }
    
    public function confirmOrder($orid, $st) {
        $this->db->where('orderID', $orid)
                ->update('order', array('status' => $st));
    }

    //dem co bao nhieu hoa don chua xu ly cua thanh vien
    public function getNumOrderStatus($UID) {
        $this->db->select("status");
        $this->db->where(array('status' => 1, 'sellerID' => $UID));
        $qr = $this->db->get('tbl_order')->result();
        return count($qr);
    }

    //lay tat ca hoa don da dat cua thanh vien
    public function getOrderByBuyerID($buyerid, $sum = 10000, $start = 0) {//đơn hàng đã đặt - dành cho người mua hàng
        $this->db->select("
            tbl_order.orderID as orderID,
            tbl_order.buyerID as buyerID,
            tbl_order.note as note,
            tbl_order.method as method,
            tbl_order.status as status, 
            tbl_order.firstname as sellerfname,
            user.lastname as sellerlname, 
            user.email as selleremail,
            user.phone as sellerphone, 
            user.address as selleradd")
                ->select("DATE_FORMAT(user.birthday, '%Y') AS selleryear", FALSE)
                ->select("DATE_FORMAT(tbl_order.create_date, '%d-%m-%Y, %H:%i %p') AS date_cr", FALSE)
                ->select("DATE_FORMAT(tbl_order.create_date, '%d') AS date", FALSE)
                ->select("DATE_FORMAT(tbl_order.create_date, '%m') AS month", FALSE)
                ->select("DATE_FORMAT(tbl_order.create_date, '%Y') AS year", FALSE)
                ->where("tbl_order.buyerID", "$buyerid")
                ->join('user', 'user.userID = tbl_order.sellerID')
                ->order_by('date_cr', 'desc');
        $query = $this->db->get('tbl_order', $sum, $start);
        return $query->result();
    }

    public function getNumMessageUnread($UID) {
        $this->db->select("status");
        $this->db->where(array('status' => 0, 'receiverID' => $UID));
        $qr = $this->db->get('message')->result();
        return $num = count($qr);
    }

    //lay tat ca tin nhan cua thanh vien
    public function getMessageByUID($Uid, $sum = 10000, $start = 0) {
        $this->db->select('messageID,senderID,user.firstname AS ho_nguoi_gui,user.lastname AS ten_nguoi_gui,title,content,message.status AS status,user.levelID as LVsender');
        $this->db->select("DATE_FORMAT(message.create_date, '%d-%m-%Y %H:%i:%s') AS datetime", FALSE);
        $this->db->select("DATE_FORMAT(message.create_date, '%d-%m-%Y') AS date", FALSE);
        $this->db->where('message.receiverID', $Uid);
        $this->db->JOIN('user', 'user.userID = message.senderID');
        $this->db->order_by('message.create_date', 'desc');
        $query = $this->db->get('message', $sum, $start);
        return $query->result();
    }

    public function getMessageByID($id) {
        $this->db->select('messageID,senderID,user.firstname AS ho_nguoi_gui,user.lastname AS ten_nguoi_gui,title,content');
        $this->db->select("DATE_FORMAT(message.create_date, '%d-%m-%Y %H:%i:%s') AS datetime", FALSE);
        $this->db->select("DATE_FORMAT(message.create_date, '%d-%m-%Y') AS date", FALSE);
        $this->db->where('message.messageID', $id);
        $this->db->JOIN('user', 'user.userID = message.senderID');
        return $query = $this->db->get('message')->row_array();
    }

    public function changeMessageStatus($id) {
        $data = array(
            'status' => 1
        );
        $this->db->where('messageID', $id)->update('message', $data);
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
        $str = (int) substr($arrr[$pri_key], strlen($name), $count);
        $str++;
        $id = $name . $str;
        $leng = strlen($id);
        while ($leng <= 7) {
            $ar1 = (int) substr($id, strlen($name), $leng);
            $ar2 = rtrim($id, $ar1);
            $id = $ar2 . '0' . $ar1;
            $leng++;
        }
        return $id;
    }

}

?>
