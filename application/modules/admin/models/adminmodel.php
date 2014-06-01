<?php
class Adminmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encrypt');
    }
    
public function getAll($table)
    {
         $this->db->select("*");
         $this->db->from("$table");
         $query = $this->db->get();
         return $query->result_array();
    }   
    
    public function login(){
        
            $email=  $this->input->post('username');
            $psw=  $this->input->post('password');
            $pass = $this->encrypt->decode($psw);
            
            if ($this->checklogin($email, $pass)==TRUE) {
                $fullname = $this->getName($email);
                $newdata1 = array(
                'fullname' => $fullname,
                'email' => $email,
                'logged_in' => TRUE
                );
                $this->session->set_userdata('admin',$newdata1);
                echo 'đăng nhập thành công'; 
                redirect('admin/adminhome');
            }
            else                 
                echo 'đăng nhập thất bại';
    }
    
      

        public function checklogin($email=0,$password=0){
        $check1=$this->db->select('email','password')->FROM('user')->WHERE(array ('email'=>$email,'password'=>$password))->get()->row_array();
        if(count($check1))
            return $check1=TRUE;
        else
            return $check1=FALSE;    
    }
    public function getName($email=0){
        $querry['fullname'] = $this->db->select('firstname,lastname')->WHERE('email',$email)->get('user')->row_array();
        return $querry['fullname']['firstname'].' '.$querry['fullname']['lastname'];
    }
}
?>
