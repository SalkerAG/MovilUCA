<?php

error_reporting(E_ALL ^ E_DEPRECATED);
class logout extends CI_Controller{

	public function __construct(){
		 parent::__construct();
		 $this->load->model('moviles_model');
	}

	public function index() {
		unset($_SESSION);
		session_destroy();
		session_write_close();
		 $datos = array('titulo_web' => 'Moviles',
		 'moviles' => $this->moviles_model->get_moviles(),
		 'valorados' =>  $this->moviles_model->get_movil_valor(),
		 'novedad' =>  $this->moviles_model->get_movil_novedad(),
		 'preciov' =>  $this->moviles_model->get_precio_venta(),
		 'preciop' =>  $this->moviles_model->get_precio_valor(),
		 'noticias' =>  $this->moviles_model->get_noticias()
		 );
	 	$this->load->view('moviles_view', $datos);
	 }
}
?>