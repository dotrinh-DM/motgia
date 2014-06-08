<?php

//if (!defined('BASEPATH'))
//    exit('No direct script access allowed');

class sms extends CI_Controller {

//
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'html', 'url', 'file'));
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
            $money = $this->Msms->checkUid($info);
            if (isset($money) && count($money)) {
                $syntax = $serviceNumber . ' ' . $code . ' ' . $subCode . ' ' . $info;
                $this->Msms->transacsion($syntax, $mobile, $info);
                $email = $this->Msms->getmail($info);
                echo "0|Ban đa nap 15.000đ vao email " . $email . ' \n Truy cap http://motgia.tk de biet them chi tiet';
            }
            else
                echo "0|Sai cu phap. \n Truy cap http://motgia.tk de biet them chi tiet";
        }
        else if (isset($_REQUEST['code'], $_REQUEST['subCode'], $_REQUEST['mobile'], $_REQUEST['serviceNumber'], $_REQUEST['info'])) {

            $code = $_REQUEST['code']; //Mã chính(Hiện giờ có 2 mã là CPURL và VAS)
            $subCode = $_REQUEST['subCode']; // Mã phụ
            $mobile = $_REQUEST['mobile']; // Số điện thoại nhắn tin
            $serviceNumber = $_REQUEST['serviceNumber']; //Đầu số
            $info = $_REQUEST['info']; // Nội dung tin nhắn
// Xử lý tải dịch vụ ở trang này
// (Vd: Kiểm tra cú pháp, đầu số, mã phụ,...) => Kết quả trả về(Những thông tin cần thiết)
//Vi du tra ve noi dung thong bao
            $money = $this->Msms->checkUid($info);
            if (isset($money) && count($money)) {
                $syntax = $serviceNumber . ' ' . $code . ' ' . $subCode . ' ' . $info;
                $this->Msms->transacsion($syntax, $mobile, $info);
                $email = $this->Msms->getmail($info);
                echo "0|Ban đa nap 15.000đ vao email " . $email . '\n
                    Truy cap http://motgia.tk de biet them chi tiet';
            }
            else
                echo "0|Sai cu phap. \n
                    Truy cap http://motgia.tk de biet them chi tiet";
        }
        else
            echo "0|That bai";
    }

}

?>
