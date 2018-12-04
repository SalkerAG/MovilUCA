<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class catalogo extends CI_Controller{
	//constructor del controlador articulos
	public function __construct(){
		 parent::__construct();
		 $this->load->model('catalogo_model');
	 }
	public function index(){

		if($this->input->post('submit_m')){
			$filterm = array(
		    'm' => $this->input->post('marca[]'),
			);
			$filterp = array(
		    'm' => $this->input->post('procesador[]'),
			);
			$filterr = array(
		    'm' => $this->input->post('ram[]'),
			);
			$filterme = array(
		    'm' => $this->input->post('memoria[]'),
			);
			$filtrom = $this->catalogo_model->get_moviles_marca($filterm);
			$filtrop = $this->catalogo_model->get_moviles_procesador($filterp);
			$filtror = $this->catalogo_model->get_moviles_ram($filterr);
			$filtrome = $this->catalogo_model->get_moviles_memoria($filterme);
			$filtrot = $this->catalogo_model->union($filtrom,$filtrop);
			$filtrot1 = $this->catalogo_model->union($filtrot,$filtror);
			$filtrot2 = $this->catalogo_model->union($filtrot1,$filtrome);

			$datos = array('titulo_web' => 'Catalogo',
			 'moviles' => $filtrot2,
			 'marca' => $this->catalogo_model->get_marca(),
			 'procesador' => $this->catalogo_model->get_procesador(),
			 'ram' => $this->catalogo_model->get_ram(),
			 'memoria' => $this->catalogo_model->get_memoria()
			 );
		 	$this->load->view('catalogo_view', $datos);
		}else{
			$datos = array('titulo_web' => 'Catalogo',
			'moviles' => $this->catalogo_model->get_moviles(),
			'marca' => $this->catalogo_model->get_marca(),
			'procesador' => $this->catalogo_model->get_procesador(),
			'ram' => $this->catalogo_model->get_ram(),
			'memoria' => $this->catalogo_model->get_memoria()
			);
			$this->load->view('catalogo_view', $datos);
		}
			
	}
	
}?>