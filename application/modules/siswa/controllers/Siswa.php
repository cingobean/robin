<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 
//This is the Controller for codeigniter crud using ajax application.
class Siswa extends CI_Controller {

public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('form','url','file');
			$this->load->library('session','upload');
	 		//$this->load->model('m_siswa');
			
			
	 	}

		public function index() 
		{
			$this->load->view('siswa_view');
			//$data['tbl_msiswa']=$this->m_siswa->get_all_siswa();
			//$this->load->view('siswa_view',$data);
			//echo "<pre>"; print_r($data); die ();
		}
		
		public function siswa_add() 
		{
	 
			$this->load->view('add_siswa_view');
		}
		
								
		






}