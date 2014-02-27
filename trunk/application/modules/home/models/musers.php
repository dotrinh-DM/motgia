<?php
class Musers extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
     public function getData($table)
    {
         $this->db->select("*");
         $this->db->from("$table");
         $query = $this->db->get();
         return $query->result_array();
    }
    
    public function insertUser()
    {      
        if ($this->input->post('Add')){
        $l_name=$this->input->post('l_name');
        $f_name=$this->input->post('f_name');
        $name= $l_name.' '.$f_name;
        $month=$this->input->post('month');
        $day=$this->input->post('day');
        $year=$this->input->post('year');
        $birthday=$year.'/'.$month.'/'.$day;
        $gender=$this->input->post('gender');
        $phone=$this->input->post('phone');
        $province=$this->input->post('province');
        $email=$this->input->post('email');
        $pass=$this->input->post('pass');
        $adr=$this->input->post('adr');
        $expiredate=gmdate("Y-m-d H:i:s", time() + 3600*(+7+date("I"))); 
            $data2 = array(
                'fullname' => $name ,
                'email'=>$email,
                'password'=>$pass,
                'birthofday'=>$birthday,
                'gender'=>$gender,
                'coin'=>'0',
                'province'=>$province,
                'phone'=>$phone,
                'address'=>$adr,
                'status'=>'0',
                'expiredate'=>$expiredate,
                'levelID'=>'1'
                );
            $this->db->insert('user', $data2); 
        }
    }
    public function login(){
            $email=  $this->input->post('email');
            $pass=  $this->input->post('pass');
            
            if ($this->checklogin($email, $pass)==TRUE) {
                $fullname = $this->getName($email);
                $newdata = array(
                'fullname' => $fullname,
                'email' => $email,
                'logged_in' => TRUE
                );
                $this->session->set_userdata('user',$newdata);
                echo 'đăng nhập thành công'; 
                redirect('home/chome');
            }
            else                 
                echo 'đăng nhập thất bại';
    }
    
    public function logout(){
        $this->session->unset_userdata('user');
        redirect('home/chome');
    }       

        public function checklogin($email=0,$password=0){
        $check1=$this->db->select('email','password')->FROM('user')->WHERE(array ('email'=>$email,'password'=>$password))->get()->row_array(); 
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
