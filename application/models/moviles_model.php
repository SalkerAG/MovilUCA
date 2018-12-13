<?php
class moviles_model extends CI_Model{
 public function _construct(){
 parent::_construct();
 }
 public function get_moviles(){
 	$consulta = $this->db->query('Select * from movil;');
 return $consulta->result();
 }
 public function get_movil_valor(){
		$consulta = $this->db->query('Select (sum((reseña.rendimiento + reseña.bateria + reseña.diseño + reseña.pantalla)/4)/movil.num_reseñas) as total, movil.marca, movil.modelo, movil.disponibilidad, movil.foto, movil.id from movil, reseña where movil.id = reseña.id_movil group by reseña.id_movil order by (sum(reseña.rendimiento + reseña.bateria + reseña.diseño + reseña.pantalla)/movil.num_reseñas) DESC;');
		return $consulta->result();
	}
 public function get_noticias(){
 	$consulta = $this->db->query('Select * from noticia;');
		return $consulta->result();
 }
 public function get_movil_novedad(){
		$consulta = $this->db->query('Select * from movil order by fecha_lanzamiento desc;');
		return $consulta->result();
	}
 public function get_precio_venta(){
		$consulta = $this->db->query('Select precio from precio,movil where precio.id_movil = movil.id  order by 
			fecha_lanzamiento desc;');//Cambiar esta consulta por el mejor vendido
		return $consulta->result();
 }

  public function get_precio_valor(){
		$consulta = $this->db->query('Select sum((reseña.rendimiento + reseña.bateria + reseña.diseño + reseña.pantalla)/4) as total, movil.marca, movil.modelo, movil.disponibilidad, movil.foto, movil.id, precio.precio from movil, reseña, precio where movil.id = reseña.id_movil and precio.id_movil = movil.id group by precio.id order by sum(reseña.rendimiento + reseña.bateria + reseña.diseño + reseña.pantalla) DESC limit 1;');
		return $consulta->result();
 }
  public function get_movil($marca){

	if($marca != null){
		 $this->db->select(' movil.id, movil.marca, movil.modelo, movil.disponibilidad, movil.foto, precio.precio')
             ->from('movil' );
         $this->db->join('precio', 'precio.id_movil = movil.id');
	 	 $this->db->or_like('movil.marca', $marca);
	 	 $this->db->or_like('movil.modelo', $marca);
	     $this->db->group_by('movil.id');
		 $query = $this->db->get();
	}else{
		$query = $this->db->query('Select  movil.id, movil.marca, movil.modelo, movil.disponibilidad, precio.precio , movil.foto from movil, precio where movil.id = precio.id_movil group by movil.id');

	}
	return $query->result();
  }
  public function get_marca(){
 	$consulta = $this->db->query('Select DISTINCT marca from movil');
 return $consulta->result();
 }
 public function get_procesador(){
 	$consulta = $this->db->query('Select DISTINCT procesador from prestaciones');
 return $consulta->result();
 }


}

