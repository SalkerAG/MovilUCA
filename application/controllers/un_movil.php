<?php

error_reporting(E_ALL ^ E_DEPRECATED);
class Un_movil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('un_movil_model');
	}
	public function index() {}
	 
	 function mov($id) {
	 	$p =  $this->un_movil_model->get_similares($this->un_movil_model->get_movil($id));
	 
		$datos = array('moviles' => $this->un_movil_model->get_movil($id),
			'precio' => $this->un_movil_model->get_precio($id),
			'comentario' => $this->un_movil_model->get_comentario($id),
			'puntuacionr'=> $this->un_movil_model->get_puntuacionr($id),
			'puntuacionb'=> $this->un_movil_model->get_puntuacionb($id),
			'puntuaciond'=> $this->un_movil_model->get_puntuaciond($id),
			'puntuacionp'=> $this->un_movil_model->get_puntuacionp($id),
			'sim' => $p,
			'already_fav' => $this->un_movil_model->already_fav($id)
	 		);

		$this->load->view('un_movil_view',$datos);
 	}

 	public function add_fav(){

 		if($this->input->post('favorito')){
 			$this->un_movil_model->add_fav();
 			$this->mov($this->input->post('id_movil',TRUE));
 		}
 		if($this->input->post('elfavorito')){
 			$this->un_movil_model->el_fav();
 			$this->mov($this->input->post('id_movil',TRUE));
 		}
 	}

 	public function add_comment() {
	 //si se envia un submit_reg por el metodo post, entonces...
	 if($this->input->post('submit_reg')){
		 //validamos usando la libreria form_validation
		 //asignamos un rol (set_rules, uso(name,title,required[|...])
		 //trim = limpia los espacios en blanco
		 //callback_ = para llamar un método
		 $this->form_validation->set_rules('com','com', 'required');
		 //mensaje de error de validacion
		 $this->un_movil_model->add_comment();
		 
		 /*$id_movil =$this->input->post('id');
		 $datos = array('moviles' => $this->un_movil_model->get_movil($id_movil),
			'precio' => $this->un_movil_model->get_precio($id_movil),
			'comentario' => $this->un_movil_model->get_comentario($id_movil)
	 		);*/

		//$this->load->view('un_movil_view',$datos);
		 $this->mov($this->input->post('id_movil',TRUE));
		}
	}
	public function puntua() {
		if($this->input->post('puntuar')){
		 //validamos usano la libreria form_validation
		 //asignamos un rol (set_rules, uso(name,title,required[|...])
		 //trim = limpia los espacios en blanco
		 //callback_ = para llamar un método
		 //mensaje de error de validacion
		 $this->un_movil_model->add_punt();
		 
		 /*$id_movil =$this->input->post('id');
		 $datos = array('moviles' => $this->un_movil_model->get_movil($id_movil),
			'precio' => $this->un_movil_model->get_precio($id_movil),
			'comentario' => $this->un_movil_model->get_comentario($id_movil)
	 		);*/

		//$this->load->view('un_movil_view',$datos);
		 $this->mov($this->input->post('id_movil',TRUE));
		}
	}
}
?>