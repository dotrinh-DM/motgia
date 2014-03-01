<?php
class Adminmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
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
            $pass=  $this->input->post('password');
            
            if ($this->checklogin($email, $pass)==TRUE) {
                $fullname = $this->getName($email);
                $newdata1 = array(
                'fullname' => $fullname,
                'email' => $email,
                'logged_in' => TRUE
                );
                $this->session->set_userdata('admin',$newdata1);
                echo 'đăng nhập thành công'; 
                redirect('admin/cuser');
            }
            else                 
                echo 'đăng nhập thất bại';
    }
    
    public function logout(){
        $this->session->unset_userdata('admin');
        redirect('admin/adminhome/login');
    }       

        public function checklogin($email=0,$password=0){
        $check1=$this->db->select('email','password')->FROM('user')->WHERE(array ('email'=>$email,'password'=>$password,'levelID'=>'3'))->get()->row_array(); 
        if(count($check1))
            return $check1=TRUE;
        else
            return $check1=FALSE;    
    }
    public function getName($email=0){
        $querry['fullname1'] = $this->db->select('fullname')->WHERE('email',$email)->get('user')->row_array();
        return $querry['fullname1']['fullname'];
    }
}
?>
