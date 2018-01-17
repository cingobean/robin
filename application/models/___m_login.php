<?php 

class m_login extends CI_Model{	
function __construct(){
		parent::__construct();		
		//$this->load->model('m_login');
		$this->load->library('session');
		$this->load->database();
		
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	
}