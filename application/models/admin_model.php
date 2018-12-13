<?php
class admin_model extends CI_Model{
	public function _construct(){
		parent::_construct();
	}
	public function get_moviles(){
 	$consulta = $this->db->query('Select * from movil');
	 return $consulta->result();
	 }
	 public function get_usuarios(){
 	$consulta = $this->db->query('Select * from usuario group by usuario.id');
	 return $consulta->result();
	 }

	 public function del_movil($id){
	 	$this->db->delete('movil', array(
			'id' => $id
			));
	 	$this->db->delete('comentario', array(
			'id_movil' => $id
			));
	 	$this->db->delete('favoritos', array(
			'id_movil' => $id
			));
	 	$this->db->delete('precio', array(
			'id_movil' => $id
			));
	 	$this->db->delete('prestaciones', array(
			'id_movil' => $id
			));
	 	$this->db->delete('reseña', array(
			'id_movil' => $id
			));
	 }
	 public function del_usuario($id){
	 	$this->db->delete('usuario', array(
			'id' => $id
			));
	 	$this->db->delete('comentario', array(
			'id_usuario' => $id
			));
	 	$this->db->delete('favoritos', array(
			'id_usuario' => $id
			));
	 	$this->db->delete('reseña', array(
			'id_usuario' => $id
			));
	 }
	 public function add_movil(){
	 	$this->db->insert('movil', array(
		 //el true es para que limpie este campo de inyecciones xss
		'marca'=>$this->input->post('marca',TRUE),
		 'modelo'=>$this->input->post('modelo',TRUE),
		 'foto'=>$this->input->post('foto',TRUE),
		 'fecha_lanzamiento'=>$this->input->post('fecha_lanzamiento',TRUE),
		 'disponibilidad'=>'0',
		'num_reseñas'=>'0'
 		));
	    $marca = $this->input->post('marca',TRUE);
	    $modelo = $this->input->post('modelo',TRUE);
	 	$consulta = $this->db->query("SELECT id FROM movil WHERE marca= '$marca' and modelo= '$modelo'");
 		$idu = $consulta->result();
 		$r = get_object_vars($idu[0])['id'];
 		$this->db->insert('prestaciones', array(
		 //el true es para que limpie este campo de inyecciones xss
		'id_movil'=>$r,
		 'pantalla'=>$this->input->post('pantalla',TRUE),
		 'procesador'=>$this->input->post('procesador',TRUE),
		 'velocidad'=>$this->input->post('velocidad',TRUE),
		 'ram'=>$this->input->post('ram',TRUE),
		 'memoria'=>$this->input->post('memoria',TRUE),
		 'camara'=>$this->input->post('camara',TRUE),
		 'peso'=>$this->input->post('peso',TRUE),
		 'version'=>$this->input->post('version',TRUE),
		 'bateria'=>$this->input->post('bateria',TRUE),
 		));
 		$this->db->insert('precio', array(
		 //el true es para que limpie este campo de inyecciones xss
		'id_movil'=>$r,
		 'id_tienda'=>'1',
		 'precio'=>$this->input->post('precio',TRUE),
		 'tienda'=>$this->input->post('tienda',TRUE),
		 'url'=>$this->input->post('url',TRUE)
 		));
 		$this->db->insert('reseña', array(
		 //el true es para que limpie este campo de inyecciones xss
		'id_movil'=>$r,
		 'id_usuario'=>'1',
		 'rendimiento'=>'1',
		 'bateria'=>'1',
		 'diseño'=>'1',
		 'pantalla'=>'1',
 		));
 	}

 	public function get_movil($id){
 		$consulta = $this->db->query('Select * from movil,prestaciones where movil.id = '.$id.' and prestaciones.id_movil = '.$id.';');
		return $consulta->result();
 	}
 	public function get_precio($id){
		$consulta = $this->db->query('Select * from precio where precio.id_movil = '.$id.';');
		return $consulta->result();
	}
	public function get_usuario($id){
 		$consulta = $this->db->query('Select * from usuario where usuario.id = '.$id.';');
		return $consulta->result();
 	}

 	public function modifica_usuario($id){
 		$this->db->set('nombre',$this->input->post('nombre',TRUE));
 		$this->db->set('correo', $this->input->post('correo',TRUE));
 		$this->db->set('usuario',$this->input->post('usuario',TRUE));
 		$this->db->set('pass', $this->input->post('pass',TRUE));
 		$this->db->set('codigo', $this->input->post('codigo',TRUE));
 		$this->db->set('estado', $this->input->post('estado',TRUE));
		$this->db->where('id', $id);
		$this->db->update('usuario');
 	}
 	public function modifica_movil($id){
 		$this->db->set('marca',$this->input->post('marca',TRUE));
 		$this->db->set('modelo', $this->input->post('modelo',TRUE));
 		$this->db->set('fecha_lanzamiento',$this->input->post('fecha_lanzamiento',TRUE));
 		$this->db->set('disponibilidad', $this->input->post('disponibilidad',TRUE));
 		$this->db->set('foto', $this->input->post('foto',TRUE));
		$this->db->where('id', $id);
		$this->db->update('movil');

		$this->db->set('pantalla',$this->input->post('pantalla',TRUE));
 		$this->db->set('procesador', $this->input->post('procesador',TRUE));
 		$this->db->set('velocidad',$this->input->post('velocidad',TRUE));
 		$this->db->set('ram', $this->input->post('ram',TRUE));
 		$this->db->set('memoria', $this->input->post('memoria',TRUE));
 		$this->db->set('camara', $this->input->post('camara',TRUE));
 		$this->db->set('peso', $this->input->post('peso',TRUE));
 		$this->db->set('version', $this->input->post('version',TRUE));
 		$this->db->set('bateria', $this->input->post('bateria',TRUE));
		$this->db->where('id_movil', $id);
		$this->db->update('prestaciones');
 	}

 	public function modifica_precio_movil($id){
 		$this->db->set('precio',$this->input->post('precio',TRUE));
 		$this->db->set('tienda', $this->input->post('tienda',TRUE));
 		$this->db->set('url',$this->input->post('url',TRUE));
		$this->db->where('id', $id);
		$this->db->update('precio');
 	}
 	public function modifica_foto_movil($id){
 		$this->db->set('foto',$this->input->post('foto',TRUE));
		$this->db->where('id', $id);
		$this->db->update('movil');
 	}

 	public function get_marcas(){
		return $consultamarca = $this->db->query("SELECT distinct(marca) from movil")->result();
 	}

 	public function get_pantallas(){
		return $consultamarca = $this->db->query("SELECT distinct(pantalla) from prestaciones")->result();
 	}
 	public function get_procesadores(){
		return $consultamarca = $this->db->query("SELECT distinct(procesador) from prestaciones")->result();
 	}
 	public function get_velocidades(){
		return $consultamarca = $this->db->query("SELECT distinct(velocidad) from prestaciones")->result();
 	}
 	public function get_rams(){
		return $consultamarca = $this->db->query("SELECT distinct(ram) from prestaciones")->result();
 	}
 	public function get_memorias(){
		return $consultamarca = $this->db->query("SELECT distinct(memoria) from prestaciones")->result();
 	}
 	public function get_camaras(){
		return $consultamarca = $this->db->query("SELECT distinct(camara) from prestaciones")->result();
 	}
 	public function get_versiones(){
		return $consultamarca = $this->db->query("SELECT distinct(version) from prestaciones")->result();
 	}
 	public function get_baterias(){
		return $consultamarca = $this->db->query("SELECT distinct(bateria) from prestaciones")->result();
 	}
 	public function get_tiendas(){
		return $consultamarca = $this->db->query("SELECT distinct(tienda) from precio")->result();
 	}
}
?>

