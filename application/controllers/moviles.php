<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class Moviles extends CI_Controller{
	//constructor del controlador articulos
	public function __construct(){
		 parent::__construct();
		 $this->load->model('moviles_model');
	 }
	public function index(){
		if($this->input->post('submit_m')){
			$movil = $this->input->post('buscar');
			$datos = array('moviles' => $this->moviles_model->get_movil($movil),
					'marca' => $this->moviles_model->get_marca(),
					'procesador' => $this->moviles_model->get_procesador()
	 		);

				$this->load->view('catalogo_view',$datos);
		}else{ 
		 $datos = array('titulo_web' => 'Moviles',
		 'moviles' => $this->moviles_model->get_moviles(),
		 'valorados' =>  $this->moviles_model->get_movil_valor(),
		 'ventas' =>  $this->moviles_model->get_movil_venta(),
		 'preciov' =>  $this->moviles_model->get_precio_venta(),
		 'preciop' =>  $this->moviles_model->get_precio_valor()
		 );
	 	$this->load->view('moviles_view', $datos);
	 }
	}
	public function contacto(){
		$this->load->view('contacto_view');
	}
}?>