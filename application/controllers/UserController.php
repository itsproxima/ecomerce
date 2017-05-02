<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

   public function __construct()

   {
   	parent::__construct();
   	$this->load->library('session');
   	$this->load->database();
   	$this->load->model('UserModel');

   }

   public function index()
   {
   	   $this->load->view('user/header');
    	$this->load->view('user/index');
    	$this->load->view('user/footer');
   }

   public function  signup()
   {

       $this->load->view('user/header');
    	$this->load->view('user/register');
    	$this->load->view('user/footer');

   }
   public function login()
   {

   	    $this->load->view('user/header');
    	$this->load->view('user/login');
    	$this->load->view('user/footer');
   }
   public function getuser_signupdata()
   {
      
      $name=$_POST["Username"];
      $email=$_POST["Email"];
      $password=$_POST["Password"];
      $phone=$_POST["Phone"];
      $gender=$_POST["gender"];
        $res=$this->UserModel->check_newuser($email);
        if($res!=true)
        {
        	//$this->load->index();
        	 $this->load->view('user/header');
    	//$this->load->view('user/index');
    	$this->load->view('user/register',array('msg' => "email already exist try with new emailid...!!!"));
    	$this->load->view('user/footer');
        }
        else
        {
        	$res=$this->UserModel->register_user($name,$email,$password,$phone,$gender);
        	if($res==1)
        	{   
        		$this->load->view('user/header');
        		$this->load->view('user/login',array('msg' => "succesfully registered now log in urself with your email and password...!!!"));
        		$this->load->view('user/footer');
        	}
        }
       

   }
      public function getuser_login()
      {
      	     $email=$_POST["Email"];
      	     $password=$_POST["Password"];
      	     $dbpassword=$this->UserModel->cheack_login($email);
              //print_r($dbpassword) ;


      	     if($dbpassword===$password)
      	     {
                     
      	     		$getuserid=$this->db->select("user_id")->from("registration_tbl")->where("email",$email)->get();
      	     		//print_r($getuserid->result()[0]->user_id);
      	     		
      	     		$this->session->set_userdata('userid', $getuserid->result()[0]->user_id);
      	     		 $this->load->view('user/header');
      	     		$this->load->view('user/index');
      	     		 $this->load->view('user/footer');
      	     }
      	     else

      	     {
      	     	$this->load->view('user/header');
      	     	$this->load->view('user/login',array('msg' => "email or password doesnot matched please Try again...!!!"));
      	     	$this->load->view('user/footer');
      	     }



      }



}