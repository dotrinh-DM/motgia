<?php

//if (!defined('BASEPATH'))
//    exit('No direct script access allowed');

class sms extends CI_Controller {

//
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'html', 'url', 'file','menu'));
        $this->load->model('Msms');
        $this->load->database();
    }

    public function index() {
        if (isset($_GET['code'], $_GET['subCode'], $_GET['mobile'], $_GET['serviceNumber'], $_GET['info'])) {

            $code = $_GET['code']; //Mã chính(Hiện giờ có 2 mã là CPURL và VAS)
            $subCode = $_GET['subCode']; // Mã phụ
            $mobile = $_GET['mobile']; // Số điện thoại nhắn tin
            $serviceNumber = $_GET['serviceNumber']; //Đầu số
            $info = $_GET['info']; // Nội dung tin nhắn
// Xử lý tải dịch vụ ở trang này
// (Vd: Kiểm tra cú pháp, đầu số, mã phụ,...) => Kết quả trả về(Những thông tin cần thiết)
//Vi du tra ve noi dung thong bao
            $uid = substr($info, 10,  strlen($info));
            $money = $this->Msms->checkUid($uid);
            if (isset($money) && count($money)) {
                $this->Msms->transacsion($info, $mobile, $uid);
                $email = $this->Msms->getmail($uid);
                echo "0|Ban da nap 15.000d vao email " . $email['email'] . '
                    Truy cap http://motgia.tk de biet them chi tiet';
            }
            else
                echo "0|Sai cu phap.
                    Truy cap http://motgia.tk de biet them chi tiet";
        }
        else
            echo "0|That bai";
    }

}

?>
