<?php
class Mproducts extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
     public function getAllCategories()
    {
         $this->db->select("*");
         $query = $this->db->get("categories");
         return $query->result();
    }
     public function insertProducts($danhmuc,$soluong,$tensanpham,$motangan,$dacdiemnb,$dieukiensd,$chitietsp)
     {      
            $create_date = strtotime('now');
            $data = array(
                'name' => $tensanpham,
                'quantity'=>$soluong,
                'price'=>10000,
                'soldnumber'=>0,
                'images'=>'',
                'intro'=>$motangan,
                'hightlight'=>$dacdiemnb,
                'condition'=>$dieukiensd,
                'productinfo'=>$chitietsp,
                'create_date'=>$create_date,
                'userID'=>0,
                'categoriesID'=>$danhmuc,
                );
            $this->db->insert('products', $data);
    }
    

//    public function login(){
//            $email=  $this->input->post('email');
//            $pass=  $this->input->post('pass');
//            
//            if ($this->checklogin($email, $pass)==TRUE) {
//                $fullname = $this->getName($email);
//                $newdata = array(
//                'fullname' => $fullname,
//                'email' => $email,
//                'logged_in' => TRUE
//                );
//                $this->session->set_userdata('user',$newdata);
//                echo 'đăng nhập thành công'; 
//                redirect('home/chome');
//            }
//            else                 
//                echo 'đăng nhập thất bại';
//    }
//    
//    public function logout(){
//        $this->session->unset_userdata('user');
//        redirect('home/chome');
//    }       
//
//        public function checklogin($email=0,$password=0){
//        $check1=$this->db->select('email','password')->FROM('user')->WHERE(array ('email'=>$email,'password'=>$password))->get()->row_array(); 
//        if(count($check1))
//            return $check1=TRUE;
//        else
//            return $check1=FALSE;    
//    }
//    public function getName($email=0){
//        $querry['fullname1'] = $this->db->select('fullname')->WHERE('email',$email)->get('user')->row_array();
//        return $querry['fullname1']['fullname'];
//    }
}
?>
