<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('customers_model','customers');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		//$data['customers']=$this->customers->get_datatables();
		$this->load->view('customers_view');
		//print_r($data['customers']); die();
	}
	
	public function addcust()
	{
		$this->load->view('addcustomer');
		
	}

	public function ajax_list()
	{
		$list = $this->customers->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->FirstName;
			$row[] = $customers->LastName;
			$row[] = $customers->phone;
			$row[] = $customers->address;
			$row[] = $customers->city;
			$row[] = $customers->country;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->customers->count_all(),
						"recordsFiltered" => $this->customers->count_filtered(),
						"data" => $data,
				);
				
				
		//output to json format
		echo json_encode($output);
	}
	
	public function addcustomer(){
		
    	//ambil variabel URL
		$mau_ke					= $this->uri->segment(3);
		$idu					= $this->uri->segment(4);
        //print $mau_ke;

		//ambil variabel
		$id     				= addslashes($this->input->post('id'));
		$first					= addslashes($this->input->post('FirstName'));
		$last					= addslashes($this->input->post('LastName'));
		$phone					= addslashes($this->input->post('phone'));
		$address				= addslashes($this->input->post('address'));
		$city				    = addslashes($this->input->post('city'));
		$country				= addslashes($this->input->post('country'));
		

//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {//jika uri segmentnya add
            $data['title'] = 'Tambah Customer';
            $data['aksi'] = 'aksi_add';
            $this->load->view('addcustomer',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['qdata']  = $this->customers->get_cust_byid($idu);
            $data['title'] = 'Edit Customer';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('addcustomer',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'FirstName' => $first,
                'LastName'  => $last,
                'phone' 	=> $phone,
                'address'	=> $address,
                'city'    	=> $city,
                'jenis'     => $country,
                
            );
            $this->customers->get_insert($data); //model insert data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('customers');
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(
                'FirstName' => $first,
                'LastName'  => $last,
                'phone' 	=> $phone,
                'address'	=> $address,
                'city'    	=> $city,
                'jenis'     => $country,
            );
            $this->customers->get_update($id,$data); //modal update data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
            redirect('customers');
        }
		    
    }

}
