<?php
class Mbarang extends CI_Model {

    var $tabel = 'tb_barang';

    /* function __construct() {
        parent::__construct();
    } */
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/* function get_allbarang() {
        $this->db->from($this->tabel);
		$query = $this->db->get();

        //cek apakah ada ba
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	} */
	
	public function get_allbarang(){
	  $this->db->select("tb_barang.id,
						 tb_barang.barcode,
						 tb_barang.nama_brg,
						 tb_barang.harga_brg,
						 jenis.nama_jenis,
						 tb_barang.satuan,
						 tb_barang.stok_brg,
						 tb_barang.expired,
						 tb_barang.photo,
						 ");
	  $this->db->from('tb_barang');
	  $this->db->join('jenis', 'tb_barang.id_jenis = jenis.id_jenis');
	  $query = $this->db->get();
	  return $query->result();
	 }
	

    public function get_barang_byid($id) {
        //$this->db->from($this->tabel);
		$this->db->from('tb_barang');
		$this->db->join('jenis', 'tb_barang.id_jenis = jenis.id_jenis');
        $this->db->where('id', $id);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
	
	

    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }

    function get_update($id,$data) {

        $this->db->where('id', $id);
        $this->db->update($this->tabel, $data);

        return TRUE;
    }
    function del_barang($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }
}
?>
