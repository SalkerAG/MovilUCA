<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Formulario extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index() {
		$this->load->view('formulario_view');
	}
}
?>