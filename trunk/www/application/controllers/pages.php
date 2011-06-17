<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	/*
	public function __construct() {
		parent::Controller();
	}
	*/
	
   public function __construct()
   {
        parent::__construct();
        $this->load->view('page');
   }
    
	public function index() {
		//$this->load->view('page_view');
	}
}

?>