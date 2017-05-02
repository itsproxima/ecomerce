<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

        public function __construct()
        {

        	parent::__construct();
        	$this->load->helper(array('form', 'url'));

        }

        public function addnew_product()
        {
        	$this->load->view('admin/header');
        	$this->load->view('admin/addnew');
        	$this->load->view('admin/footer');
        }
        
        
        public function get_productdata()
        {
        	    print_r($_POST);
        	    print_r($this->input->post('userfile'));
        	    die();
        	    $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/header');
                        $this->load->view('admin/addnew', $error);
                        $this->load->view('admin/footer');
                }
                else
                {
                        
                        $data = array('upload_data' => $this->upload->data());
                        print_r($data);
                        $this->load->view('admin/header');
                        $this->load->view('admin/upload_success', $data);
                        $this->load->view('admin/footer');
                }
                
        }


}