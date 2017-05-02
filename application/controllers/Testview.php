<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestView extends CI_Controller {



    public function index()
    {
    	$this->load->view('user/header');
    	//$this->load->view('user/index');
    	$this->load->view('user/register');
    	$this->load->view('user/footer');
    }

}