<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {


     public function check_newuser($email)
     {
          
     		$querry=$this->db->select("user_id")->from("registration_tbl")->where("email",$email)->get();
     		if ($querry->num_rows() > 0)
     			{
               		
               		//echo "email already exist ..add new ";
               		return false;
    			}
    		else{
    			
        		return true;
   				 }
     }
     public function register_user($name,$email,$password,$phone,$gender)
     {
         
         $data=array(
            'name'=>$name,
         	'email'=> $email,
         	'password'=> $password,
         	'gender' =>$gender,
         	'phone' =>$phone
         	);

         //print_r($data);
         $this->db->insert('registration_tbl',$data);
         return 1;
     }

     public function cheack_login($email)
     {

     	    
     		$dbemail = $this->db->get_where('registration_tbl',array("email"=>$email));
             //print_r($dbemail->result()) ;
             //echo $dbemail->result()[0]->password;
            if($dbemail->result())
             {
             	//echo "got password";
				return $dbemail->result()[0]->password;
			}
			else
			{
				return false;
			}


     }

}