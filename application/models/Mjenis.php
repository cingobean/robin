<?php 

class Mjenis extends CI_Model { 
 var $tabel = 'jenis';

 
 function __construct() {
        parent::__construct();
		$this->load->database();
    }


	/* function get_jenis($id) {
	$this->db->from($this->tabel)
	$this->db->where('id_jenis', $id);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        }	
	
    } */
	
	function get_jenis(){
			$SQL = " SELECT id_jenis , nama_jenis
					 FROM jenis
					 ORDER BY id_jenis ASC ";
			$data = $this->db->query($SQL);
			$data = $data->result_array();
			return $data;
		}
	
	
	/* function get_barang_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('kode_brg', $id);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        }*/
    } 





?>