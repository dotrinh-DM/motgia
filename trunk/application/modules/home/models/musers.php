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
    
}
?>
