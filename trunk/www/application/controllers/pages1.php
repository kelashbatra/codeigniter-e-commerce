<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages1 extends CI_Controller {
	public function index() {
		echo 'Страница 1';
	}
	
	public function show($num = 100, $num2 = 123) {
		echo "Num = $num, Num2 = $num2";
	}
}

?>