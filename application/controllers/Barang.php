<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	/*****
     | CRUD barang
     | controller barang view, create, update, delete
     | by g2tech
	 */
    public function __construct() {
        parent::__construct();
        $this->load->model('Mbarang');
		$this->load->model('Mjenis');
        $this->load->helper('form','url','file');
		$this->load->database();
    }

	public function index()
	{
		//echo ('modul barang'); die (); 
	    //$data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
	    $data['qbarang'] = $this->Mbarang->get_allbarang(); //query model semua barang
		
		$this->load->view('vbarang',$data);
		//echo "<pre>"; print_r($data); die ();
	}
	
	
	
  /* function getEmployees()
  {
  $this->db->select("trn_employee.EMPLOYEE_ID,trn_employee.FIRST_NAME,trn_employee.LAST_NAME,trn_employee.EMAIL,trn_address.ADDRESS_LINE,trn_address.CITY");
  $this->db->from('trn_employee');
  $this->db->join('trn_address', 'trn_address.employee_id = trn_employee.employee_id');
  $query = $this->db->get();
  return $query->result();
  } */

    public function form(){
		
    	//ambil variabel URL
		$mau_ke					= $this->uri->segment(3);
		$idu					= $this->uri->segment(4);
        print_r $mau_ke;

		//ambil variabel
		$id     				= addslashes($this->input->post('id'));
		$kode					= addslashes($this->input->post('kode'));
		$nama					= addslashes($this->input->post('nama'));
		$jenis					= addslashes($this->input->post('jenis'));
		$keterangan				= addslashes($this->input->post('uraian'));
		$satuan				    = addslashes($this->input->post('satuan'));
		$harga				    = addslashes($this->input->post('harga'));
		$stok				    = addslashes($this->input->post('stok'));
		$expired				= addslashes($this->input->post('expired'));
		$photo					= addslashes($this->input->post('photo'));


		$data['master_jenis'] = $this->Mjenis->get_jenis();
		
		if ($mau_ke == "add") {
		    $data['title'] = 'Tambah barang';
		    $data['aksi'] = 'aksi_add';
            $this->load->view('vformbarang',$data);
		} else if ($mau_ke == "edit") {
			$data['qdata']	= $this->Mbarang->get_barang_byid($id);
			$data['title'] = 'Edit barang';
		    $data['aksi'] = 'aksi_edit';
            $this->load->view('vformbarang',$data);
		} else if ($mau_ke == "aksi_add") {
			
			if(!empty($_FILES['photo']['name']))
        {
			
            $upload = $this->upload_data();
			
            $data['photo'] = $upload;
			$photo = $_FILES['photo']['name'];
        }
		else
		{
			$photo = '';
			
		}
		
		$data = array(
                'barcode'   => $kode,
                'nama_brg'  => $nama,
                'harga_brg' => $harga,
                'keterangan'=> $keterangan,
                'satuan'    => $satuan,
                'id_jenis'  => $jenis,
                'stok_brg'  => $stok,
				'expired'   => $expired,
				'photo'     => $photo ,
            );
			
            $this->mbarang->get_insert($data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>");
			redirect('barang');
        } else if ($mau_ke == "aksi_edit") 
		{
          $data = array(
                'barcode'   => $kode,
                'nama_brg'  => $nama,
                'harga_brg' => $harga,
                'keterangan'=> $keterangan,
                'satuan'    => $satuan,
                'id_jenis'  => $jenis,
                'stok_brg'  => $stok,
				'expired'   => $expired,				
            );
			
			
 
 if(!empty($_FILES['photo']['name']))
        {
            $upload = $this->upload_data();
             
            //delete file
            $qbarang = $this->Mbarang->get_barang_byid($this->input->post('id'));
            if(file_exists('upload/'.$qbarang->photo) && $qbarang->photo)
                unlink('upload/'.$qbarang->photo);
 
            
			$photo = $_FILES['photo']['name'];
			$data['photo'] = $photo;
        }
			//echo "<pre>"; print_r($data); die();
            $this->Mbarang->get_update($id,$data);
			$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>");
			redirect('barang');
		}
		    /* echo "<pre>";
			print_r ($_SERVER); die ();
			echo "<pre>"; */
    }
    // fungsi detail
    public function detail($id){
		//$data['master_jenis'] = $this->mjenis->get_jenis();
        $data['title'] = 'Detail Barang'; //judul title
	    $data['qbarang'] = $this->Mbarang->get_barang_byid($id); //query model semua barang

		$this->load->view('vdetbarang',$data);
		/* echo "<pre>";
		print_r ($data); die(); */
    }

    // fungsi hapus
    public function hapus($id){

        $this->Mbarang->del_barang($id);
        $this->session->set_flashdata("pesan", 
		"<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Barang berhasil dihapus</div>");
        redirect('barang');
	}
	
	function upload_data() {
        // setting konfigurasi upload
			 $config['upload_path'] = 'upload/';
			 $config['allowed_types'] = 'gif|jpg|png';
			 $config['max_size']       = '2000';
             $config['max_width']      = '2000';
             $config['max_height']     = '2000';
             //$config['file_name']      = 'gambar-'.trim(str_replace(" ","",date('dmYHis')));
        // load library upload
        $this->load->library('upload', $config);
        /* if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            echo "<pre>";print_r($result); 
			echo "</pre>";
        } */
		
		if (!$this->upload->do_upload("photo")) {
			$error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
            echo "Error";
            }else{
			$result = $this->upload->data();
            echo "<pre>";print_r($result); 
			echo "</pre>";
            echo "Data berhasil terupload";
            } 
    }
	
	
	
	/*  private function upload()
    {
        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|xls|xlsx|mp3|doc|docx|';
        $config['max_size']             = 1000; //set max size allowed in Kilobyte
        $config['max_width']            = 1000; // set max width image allowed
        $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name
 
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }  */
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */