<?php
class Usuarios_model extends CI_Model{
 public function _construct(){
 parent::_construct();
 }
 //Comprueba si el usuario existe o no
public function verify_user($user){
	$conexion = mysqli_connect("localhost", "root","")
	or die("No se ha podido conectar");
	mysqli_select_db($conexion, "codeigniter")
	or die("No se ha podido seleccionar la base de datos.");
	$consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE
	usuario='".$user."'");
	$filas = mysqli_num_rows($consulta);
	if($filas == 0){ //el usuario no existe
	return false;
	}else{ //el usuario existe
	return true;
	}
}
 //añade un usuario
 public function add_usuario(){
 $this->db->insert('usuario', array(
 //el true es para que limpie este campo de inyecciones xss
'nombre'=>$this->input->post('nombre',TRUE),
 'correo'=>$this->input->post('correo',TRUE),
 'usuario'=>$this->input->post('usuario',TRUE),
 'pass'=>$this->input->post('pass',TRUE),
 'codigo'=>'123456',
'estado'=>'0'
 ));
 }
 /*$data = array(
        'title' => $title,
        'name' => $name,
        'date' => $date
);

$this->db->insert('mytable', $data);  // Produces: INSERT INTO mytable (title, name, date) VALUES ('{$title}', '{$name}', '{$date}')
*/
public function verify_sesion(){
	$consulta = $this->db->get_where('usuario',array('usuario'=>$this->input->post('user',TRUE),'pass'=>$this->input->post('pass',TRUE)));
 	if($consulta->num_rows() ==1)
 		return true;
 	else
 		return false;
}
}