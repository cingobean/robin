<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class Buku extends CI_Controller {
 
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
 
	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('model_buku');
	 	}
 
 
	public function index()
	{
 
		$data['books']=$this->model_buku->get_all_books();
		$this->load->view('view_buku',$data);
	}
	public function book_add()
		{
			$data = array(
					'book_isbn' => $this->input->post('book_isbn'),
					'book_title' => $this->input->post('book_title'),
					'book_author' => $this->input->post('book_author'),
					'book_category' => $this->input->post('book_category'),
				);
			$insert = $this->model_buku->book_add($data);
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit($id)
		{
			$data = $this->model_buku->get_by_id($id);
 
 
 
			echo json_encode($data);
		}
 
		public function book_update()
	{
		$data = array(
				'book_isbn' => $this->input->post('book_isbn'),
				'book_title' => $this->input->post('book_title'),
				'book_author' => $this->input->post('book_author'),
				'book_category' => $this->input->post('book_category'),
			);
		$this->model_buku->book_update(array('book_id' => $this->input->post('book_id')), $data);
		echo json_encode(array("status" => TRUE));
	}
 
	public function book_delete($id)
	{
		$this->model_buku->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
 
 
 
}