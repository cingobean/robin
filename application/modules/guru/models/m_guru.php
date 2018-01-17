<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class m_guru extends CI_Model {
	
	var $table = 'guru';
 
 
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
	
	public function addcontent($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
 
	
	public function content_update($data)
	{
		$this->db->where('id',$data['id']);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}
	
	/* function get_update($id,$data) {

        $this->db->where('kode_brg', $id);
        $this->db->update($this->tabel, $data);

        return TRUE;
    } */
	
	
	
	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	
	
}



