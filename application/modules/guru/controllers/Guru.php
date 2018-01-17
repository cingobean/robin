<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 
//This is the Controller for codeigniter crud using ajax application.
class Guru extends CI_Controller {

public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('form','url','file');
			$this->load->library('session','upload');
	 		//$this->load->model('m_guru');
			
			
	 	}

		public function index() 
		{
			$this->load->view('guru_view');
			//$data['tbl_mguru']=$this->m_guru->get_all_guru();
			//$this->load->view('guru_view',$data);
			//echo "<pre>"; print_r($data); die ();
		}
		
		public function guru_add() 
		{
	 
			$this->load->view('add_guru_view');
		}
		
								
		






}