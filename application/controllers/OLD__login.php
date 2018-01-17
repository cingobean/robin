<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->library('session');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('loginview');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		//print_r($cek); die ();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			//print_r($data_session); die ();
			redirect('book');
			//redirect(base_url("index.php/admin"));
			//index.php/login/aksi_login

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}