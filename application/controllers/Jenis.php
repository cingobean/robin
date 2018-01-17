<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mjenis');
        $this->load->helper('form','url');
    }
	
	
	
	}
	
	
?>