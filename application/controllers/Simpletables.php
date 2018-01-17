<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpletables extends CI_Controller {

	public function index()
	{
		$this->load->view('simpletables');
	}
}
