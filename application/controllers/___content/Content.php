<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class Content extends CI_Controller {

public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
	 		$this->load->model('content/content_model');
			
	 	}

		public function index() 
		{
	 
			$data['tbl_mcontent']=$this->content_model->get_all_content();
			$this->load->view('content_view',$data);
		}





}