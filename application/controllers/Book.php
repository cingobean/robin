<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//This is the Controller for codeigniter crud using ajax application.
class Book extends CI_Controller {
 
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
 
	 public function __construct(){
	 		parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
	 		$this->load->model('book_model');
			$this->load->database();
			
	 	}
 
	
	public function index() //book data table
	{
 
		$data['books']=$this->book_model->get_all_books();
		$this->load->view('book_view',$data);
	}
	
		public function bookadd() //book add
		{
			$data = array(
			'book_id' =>'',
			'book_isbn' => '',
			'book_title' => '',
			'book_author' => '',
			'book_category' => '',
			'book_descript' => '',
			'book_date' => ''
			);
			
			$this->load->view('addbook',$data);
			
		}
		public function booksave() //book add save
		{
			//echo print_r($_POST); die ();
			$book_id = $this->input->post('book_id');
			$book_isbn = $this->input->post('book_isbn');
			$book_title = $this->input->post('book_title');
			$book_author = $this->input->post('book_author');
			$book_category = $this->input->post('book_category');
			$book_descript = $this->input->post('book_descript');
			$book_date = $this->input->post('book_date');
			
			$data = array(
			'book_id' =>$book_id,
			'book_isbn' => $book_isbn,
			'book_title' => $book_title,
			'book_author' => $book_author,
			'book_category' => $book_category,
			'book_descript' => $book_descript,
			'book_date' => $book_date
			);
				//print_r($data); die();
			$this->book_model->book_add($data);
			//echo json_encode(array("status" => TRUE));
			
			$this->session->set_flashdata('feedback', 'Success message for client to see');
			redirect('book/index');
			
			
			
		} 

		
	public function bookedit($id)
	{
		//$data = $this->book_model->get_by_id($id);
		$data['dt'] = $this->book_model->get_by_id($id);
		$this->load->view('editbook',$data);
		//echo json_encode($data);
		//echo "<pre>"; print_r ($data); die ();
	}
 
	public function book_update()
	{
		//echo print_r($_POST); die ();
		/* Array ( [book_id] => 21 
		[book_isbn] => 2002 
		[book_title] => buku002 
		[book_author] => buku bekas 
		[book_category] => gramedia ) 1 */
		$data = array(
			'book_id' =>$this->input->post('book_id'),
			'book_isbn' =>$this->input->post('book_isbn'),
			'book_title' =>$this->input->post('book_title'),
			'book_author' =>$this->input->post('book_author'),
			'book_category' =>$this->input->post('book_category'),
			'book_descript' =>$this->input->post('book_descript'),
			'book_date' =>$this->input->post('book_date')
			);
			
		//$where =array('book_id' => $this->input->post('book_id'));
			
		$this->book_model->book_update($data);
		$this->session->set_flashdata('feedback', 'Success message for client to see');
		redirect('book/index');
		//echo json_encode(array("status" => TRUE));
	}
	
	public function book_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	
	
	
	/* public function book_add()
	{
		$data = array(
				'book_isbn' => $this->input->post('book_isbn'),
				'book_title' => $this->input->post('book_title'),
				'book_author' => $this->input->post('book_author'),
				'book_category' => $this->input->post('book_category'),
			);
		$insert = $this->book_model->book_add($data);
		echo json_encode(array("status" => TRUE));
	} */
		
		//book add
	
	
	/* public function ajax_edit($id)
	{
		$data = $this->book_model->get_by_id($id);
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
		$this->book_model->book_update(array('book_id' => $this->input->post('book_id')), $data);
		echo json_encode(array("status" => TRUE));
	} */
	
 
	
 
 
 
}

?>