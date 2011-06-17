<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function index() {
		$names = array('name1' => 'Ivan', 'name2' => 'Mary');
		$data = array();
		$data['title'] = 'Заголовок';
		$data['text'] = 'Текст';
		$data['author'] = 'Автор';
		$data['names'] = $names;
		$this->load->view('page_view',$data);
	}
	
	public function add() {
		print_r($_POST);
		//echo $this->input->post('text');
	}
	
	public function test_my_lib() {
		$this->load->library('my_lib');
		echo $this->my_lib->greeting();
	}
}

?>