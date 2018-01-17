<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 
//This is the Controller for codeigniter crud using ajax application.
class Content extends CI_Controller {

public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('form','url','file');
			$this->load->library('session','upload');
	 		$this->load->model('content_model');
			
			
	 	}

		public function index() 
		{
	 
			$data['tbl_mcontent']=$this->content_model->get_all_content();
			$this->load->view('content_view',$data);
			//echo "<pre>"; print_r($data); die ();
		}
		
								
		
		public function content_add() 
		{
			
			//$ddate	= 'current_timestamp';
			//echo "<pre>";print_r($_SESSION); die();
			$data = array(
			'id' =>'',
			'mtittle' => '',
			'mcontent' => '',
			'mimage' => '',
			//'mdate' => $ddate,
			'mbrowser' => ($_SERVER['HTTP_USER_AGENT']),
			//'mipaddress'=> ''.$this->input->ip_address().'',
			'mipaddress'=> ($_SERVER['REMOTE_ADDR']),
			'muser'=>($_SESSION['nama']),
			'mstatus'=>($_SESSION['status'])
			);
			
			$this->load->view('add_content_view',$data);
		}
		public function content_save() //book add save
		{
			/* echo "<pre>"; print_r($_POST); 
			print_r($_FILES); 
			die(); */
			
			if(!empty($_FILES['mimage']['name']))
			{
				
				$upload = $this->upload_data();
				//echo $upload; die();
				
				$data['mimage'] = $upload;
				$mimage = $_FILES['mimage']['name'];
			}
			else
			{
				$mimage = '';
				
			}
			
			$id = $this->input->post('id');
			$mtittle = $this->input->post('mtittle');
			$mcontent = $this->input->post('mcontent');
			$mimage = $_FILES['mimage']['name'];
			//$mdate = $this->input->post('mdate');
			$mbrowser = $this->input->post('mbrowser');
			$mipaddress = $this->input->post('mipaddress');
			$muser = $this->input->post('muser');
			$mstatus = $this->input->post('mstatus');
			
			$data = array(
			'id' =>$id,
			'mtittle' => $mtittle,
			'mcontent' => $mcontent,
			'mimage' => $mimage,
			//'mdate' => $mdate,
			'mbrowser' => $mbrowser,
			'mipaddress'=> $mipaddress,
			'muser'=> $muser,
			'mstatus'=> $mstatus
			
			);
				//print_r($data); die();
			$this->content_model->addcontent($data);
			//echo json_encode(array("status" => TRUE));
			
			$this->session->set_flashdata('feedback', 'Success message for client to see');
			redirect('content/index');	
		}
		
		function upload_data() 		
		{
			
						/*
						Array
			(
				[file_name] => bodrex.jpg
				[file_type] => image/jpeg
				[file_path] => /opt/lampp/htdocs/mading/assets/images/
				[full_path] => /opt/lampp/htdocs/mading/assets/images/bodrex.jpg
				[raw_name] => bodrex
				[orig_name] => bodrex.jpg
				[client_name] => bodrex.jpg
				[file_ext] => .jpg
				[file_size] => 13.3
				[is_image] => 1
				[image_width] => 334
				[image_height] => 151
				[image_type] => jpeg
				[image_size_str] => width="334" height="151"
			)
						
						*/
			
			//echo "<pre>"; print_r($_FILES); die();
			
        // setting konfigurasi upload
			 $filePath = './assets/images/';
			 $config['upload_path'] = $filePath;
			 $config['allowed_types'] = 'gif|jpg|png|jpeg';
			 $config['max_size']       = '2000';
             $config['max_width']      = '2048';
             $config['max_height']     = '2048';
             //$config['file_name']      = 'gambar-'.trim(str_replace(" ","",date('dmYHis')));
        // load library upload
        //$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		if (!$this->upload->do_upload('mimage')) {
			$error = $this->upload->display_errors();
            // menampilkan pesan error
            //print_r($error);
           // echo "Error";
            }
			else
			{
			$result = $this->upload->data();
            //echo "<pre>";print_r($result); 
			//echo "</pre>";
            //echo "Data berhasil terupload";
            } 
		
		/* 
			if (!$this->upload->do_upload('mimage')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				echo "<pre>"; print_r($error);
			} else {
				$result = $this->upload->data();
				echo "<pre>";print_r($result); 
				echo "</pre>";
			} 
		
			if (!$this->upload->do_upload("mimage")) {
			$error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
            echo "Error";
            }else{
			$result = $this->upload->data();
            echo "<pre>";print_r($result); 
			echo "</pre>";
            echo "Data berhasil terupload";
			} */
			
			
			
		}
		
		public function contentedit($id)
	{
		//$data = $this->book_model->get_by_id($id);
		$data['dt'] = $this->content_model->get_by_id($id);
		$this->load->view('edit_content_view',$data);
		//echo json_encode($data);
		//echo "<pre>"; print_r ($data); die ();
	}
 
	public function content_update()
	{
		
		$id     					= addslashes($this->input->post('id'));
		$mtittle					= addslashes($this->input->post('mtittle'));
		$mcontent					= addslashes($this->input->post('mcontent'));
		$mimage						= addslashes($this->input->post('mimage'));
		$mbrowser					= addslashes($this->input->post('mbrowser'));
		$mipaddress				    = addslashes($this->input->post('mipaddress'));
		$muser				    	= addslashes($this->input->post('muser'));
		$mstatus				    = addslashes($this->input->post('mstatus'));
		
		//echo "<pre>"; print_r($_POST); die ();
		/* Array ( [book_id] => 21 
		[book_isbn] => 2002 
		[book_title] => buku002 
		[book_author] => buku bekas 
		[book_category] => gramedia ) 1 */
		$data = array(
			'id' =>$id,
			'mtittle' =>$mtittle,
			'mcontent' =>$mcontent,
			'mbrowser' =>$mbrowser,
			'mipaddress' =>$mipaddress,
			'muser' =>$muser,
			'mstatus' =>$mstatus,
			
			);
			
			 if(!empty($_FILES['mimage']['name']))
        {
            $upload = $this->upload_data();
             
            //delete file
            $qcontent = $this->content_model->get_by_id($this->input->post('id'));
            if(file_exists('upload/'.$qcontent->mimage) && $qcontent->mimage)
			//echo "<pre>"; print_r($qcontent); die ();			
                unlink('upload/'.$qcontent->mimage);
 
            
			$mimage = $_FILES['mimage']['name'];
			$data['mimage'] = $mimage;
        }
			
			
			
		$this->content_model->content_update($data);
		$this->session->set_flashdata('feedback', 'Success message for client to see');
		redirect('content/index');
		//echo json_encode(array("status" => TRUE));
	}
	
	
		
		
		public function content_delete($id)
			{
				$this->content_model->delete_by_id($id);
				echo json_encode(array("status" => TRUE));
			}
		public function detail($id){
			
			$data['title'] = 'Detail Barang'; //judul title
			$data['qbarang'] = $this->mbarang->get_barang_byid($id); //query model semua barang

			$this->load->view('vdetbarang',$data);
			
		}





}