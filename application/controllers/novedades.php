<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class Novedades extends CI_Controller{
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
		 $datos = array('titulo_web' => 'Top Novedades',
		 'moviles' => $this->moviles_model->get_moviles(),
		 'novedades' =>  $this->moviles_model->get_movil_novedad()
		 );
	 	$this->load->view('novedades_view', $datos);
	 }
	}
}?>