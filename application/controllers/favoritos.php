<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class Favoritos extends CI_Controller{
	public function __construct(){
		 parent::__construct();
		 $this->load->model('favoritos_model');
	 }
	public function index(){

		 $datos = array('titulo_web' => 'Favoritos',
		 'moviles' => $this->favoritos_model->get_moviles()
		 );
	 	$this->load->view('favoritos_view', $datos);
	 }
	public function el_fav(){
		$this->favoritos_model->el_fav();
		$datos = array('titulo_web' => 'Favoritos',
		 'moviles' => $this->favoritos_model->get_moviles()
		 );
		$this->load->view('favoritos_view', $datos);
	}
	}
?>