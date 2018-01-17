<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_auth');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('loginview');
	}
	
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_auth->cek_login("admin",$where)->num_rows();
		//print_r($cek); die ();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			//print_r($data_session); die ();
			redirect('siswa/siswa');
			//redirect(base_url("index.php/admin"));
			//index.php/login/aksi_login

		}else{
			redirect('auth');
			echo "Username dan password salah !";
			//$this->load->view('loginview');
		}
	}
        
	/* public function login()
	{
                redirect('book');
	} */
	
	
        
        public function logout()
	{
				$this->session->sess_destroy();
                redirect('auth');
	}
}
