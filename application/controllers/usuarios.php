<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Usuarios extends CI_Controller {
 public function _construct() {
 parent::_construct();
 }
 public function index() {
 	$this->load->view('usuarios_view');
 }
 public function registro() {
	$this->load->view('registro_view');
 }

 public function verify_registro() {
	//si se envia un submit_reg por el metodo post, entonces...
	if($this->input->post('submit_reg')){
	//validamos usando la libreria form_validation
	//asignamos un rol (set_rules, uso(name,title,required[|...])
	//trim = limpia los espacios en blanco
	//callback_ = para llamar un método
	$this->form_validation->set_rules('nombre','Nombre', 'required');
	
	$this->form_validation->set_rules('usuario','Usuario','required|trim|callback_verify_user');
	$this->form_validation->set_rules('pass','Contraseña','required|trim');
	$this->form_validation->set_rules('pass2','Confirmación de contraseña','required|trim|matches[pass]');
	//mensaje de error de validacion
	$this->form_validation->set_message('required','El campo %s es obligatorio.');
	$this->form_validation->set_message('valid_email','El campo %s es invalido.');
	$this->form_validation->set_message('verify_user','El %s ya existe.');
	$this->form_validation->set_message('matches','El campo %s no es igual que el campo %s.');
		if ($this->form_validation->run() ==FALSE){
			$this->registro();
	 	}else{
	 		$this->usuarios_model->add_usuario();
	 		$datos=array('mensaje'=>'Bienvenido a MovilUca, gracias por su registro.');
			$this->load->view('bienvenido',$datos);
	 	}
	}
}

public function verify_user($usuario){
	$variable = $this->usuarios_model->verify_user($usuario);
	if($variable == true){ //existe el usuario
		return false; //no pasaria la validación porque el usuario ya existe
	}else{
		return true;
	}
}
	
public function verify_sesion() {
	if($this->input->post('submit')){
		$variable = $this->usuarios_model->verify_sesion();

		if($variable == true){
 			$variables = array ('usuario' => $this->input->post('user'));
 			$this->session->set_userdata($variables);
			redirect(base_url().'moviles');
 		} 
 		else { //el login no es correcto
 				$this->load->view('usuarios_view');
		}
 	} else 
 		redirect(base_url().'´usuarios');
}
}
?>