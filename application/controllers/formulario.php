<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class Formulario extends CI_Controller {
 public function _construct(){
 parent::_construct();
 $this->load->model('admin_model');
 }
 public function index() {
 $this->load->view('add_mov_view');
 }
 public function validar() {

 //reglas de validacion
 
 $data = array('titulo' => 'Movil' ,
 'marca' => $this->input->post('marca') ,
'modelo' => $this->input->post('modelo') ,
'foto' => $this->input->post('foto'),
'fecha_lanzamiento' => $this->input->post('fecha_lanzamiento')
 );
 $this->admin_model->add_movil();
 $this->load->view('admin_movil_view');
 }
}
?>