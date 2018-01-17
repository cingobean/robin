<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class content_model extends CI_Model {
	
	var $table = 'tbl_mcontent';
 
 
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_all_content()
	{
	$this->db->from('tbl_mcontent');
	$query=$this->db->get();
	return $query->result();
	}
	
	
	
}



