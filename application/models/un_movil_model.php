<?php
class un_movil_model extends CI_Model{
	public function _construct(){
		parent::_construct();
	}
	public function get_movil($id){
		$consulta = $this->db->query('Select * from movil,prestaciones where movil.id = '.$id.' and prestaciones.id_movil = '.$id.';');
		return $consulta->result();
	}
	public function get_precio($id){
		$consulta = $this->db->query('Select * from precio where precio.id_movil = '.$id.';');
		return $consulta->result();
	}
	public function get_comentario($id){
		$consulta = $this->db->query('Select * from comentario,usuario where comentario.id_movil = '.$id.' and comentario.id_usuario = usuario.id');
		return $consulta->result();
	}
	public function get_puntuacionr($id){
		$consulta = $this->db->query('Select (sum(reseña.rendimiento)/movil.num_reseñas) as total from movil, reseña where movil.id = reseña.id_movil and reseña.id_movil ='.$id.' group by reseña.id_movil ');
		return $consulta->result();
	}
	public function get_puntuacionb($id){
		$consulta = $this->db->query('Select (sum(reseña.bateria)/movil.num_reseñas) as total from movil, reseña where movil.id = reseña.id_movil and reseña.id_movil ='.$id.' group by reseña.id_movil ');
		return $consulta->result();
	}
	public function get_puntuaciond($id){
		$consulta = $this->db->query('Select (sum(reseña.diseño)/movil.num_reseñas) as total from movil, reseña where movil.id = reseña.id_movil and reseña.id_movil ='.$id.' group by reseña.id_movil ');
		return $consulta->result();
	}
	public function get_puntuacionp($id){
		$consulta = $this->db->query('Select (sum(reseña.pantalla)/movil.num_reseñas) as total from movil, reseña where movil.id = reseña.id_movil and reseña.id_movil ='.$id.' group by reseña.id_movil ');
		return $consulta->result();
	}
	public function get_similares($mo){
		$this->db->select('movil.id, movil.marca, movil.modelo,  movil.foto, prestaciones.procesador, prestaciones.ram, prestaciones.memoria')
			->from('movil');
		
		$this->db->like('movil.id','prestaciones.id_movil');
		$this->db->or_like('movil.marca',$mo[0]->marca);
		$this->db->or_like('prestaciones.procesador',$mo[0]->procesador);
		$this->db->or_like('prestaciones.ram',$mo[0]->ram);
		$this->db->or_like('prestaciones.memoria',$mo[0]->memoria);
		$this->db->join('prestaciones', 'prestaciones.id_movil = movil.id');
		$this->db->group_by('prestaciones.id_movil');
		$query = $this->db->get();
		return $query->result();
	}
 //añade un comentario
 public function add_comment(){
 	if(isset($_SESSION["usuario"])){
 		$consulta = $this->db->query("SELECT id FROM usuario WHERE usuario='{$_SESSION['usuario']}'");
 		$idu = $consulta->result();
 		$r = get_object_vars($idu[0])['id'];
 		$this->db->insert('comentario', array(
			'id_movil'=>$this->input->post('id_movil',TRUE),
			'com'=>$this->input->post('com',TRUE),
			'id_usuario' => $r
			));
 	}
 	else {
		echo "<script>alert('Tienes que estar logeado para poder comentar.');</script>";
	}
 }
 public function add_punt(){
 	$consulta = $this->db->query("SELECT id FROM usuario WHERE usuario='{$_SESSION['usuario']}'");
 	$idu = $consulta->result();
 	$idm = $this->input->post('id_movil');
	$r = get_object_vars($idu[0])['id'];
 	$consulta = $this->db->query('Select id_usuario from reseña where id_usuario = '.$r.' and id_movil = '.$idm.'');
 	$num = $consulta->num_rows();
 	if($num >= 1){
 		echo "<script>alert('Ya has dado tu opinión sobre este terminal.');</script>";
 	}
 	else {
	 $this->db->insert('reseña', array(
		 'id_movil'=>$this->input->post('id_movil',TRUE),
		 'id_usuario'=>$r,
		 'rendimiento'=>$this->input->post('rend',TRUE),
		 'bateria'=>$this->input->post('bat',TRUE),
		 'diseño'=>$this->input->post('dis',TRUE),
		 'pantalla'=>$this->input->post('pant',TRUE)
		 ));
	 $this->db->set('num_reseñas', 'num_reseñas+1', FALSE);
	 $this->db->where('id',$this->input->post('id_movil',TRUE) );
	 $this->db->update('movil');
	 }
 }
 public function add_fav(){
 	$consulta = $this->db->query("SELECT id FROM usuario WHERE usuario='{$_SESSION['usuario']}'");
 		$idu = $consulta->result();
 		$r = get_object_vars($idu[0])['id'];
 		$this->db->insert('favoritos', array(
			'id_movil'=>$this->input->post('id_movil',TRUE),
			'id_usuario' => $r
			));
 		echo "<script>alert('Añadido a favoritos.');</script>";
 }
}