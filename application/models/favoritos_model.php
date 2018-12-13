<?php
class favoritos_model extends CI_Model{
	public function _construct(){
		parent::_construct();
	}
	public function get_moviles(){
		$consulta = $this->db->query("SELECT id FROM usuario WHERE usuario='{$_SESSION['usuario']}'");
 		$idu = $consulta->result();
 		$r = get_object_vars($idu[0])['id'];
 		$consulta = $this->db->query("SELECT id_movil FROM favoritos
 			WHERE id_usuario = ".$r);
 		$idu = $consulta->result();
 		$this->db->select('movil.id, movil.marca, movil.modelo, movil.foto, prestaciones.ram, movil.disponibilidad
 			, prestaciones.procesador, prestaciones.velocidad, prestaciones.memoria
 			, prestaciones.pantalla, prestaciones.camara, prestaciones.version')
            ->from('movil');
        foreach ($idu as $m2=>$m) {
	 		$this->db->or_like('movil.id', $m->id_movil);
	    }
	    $this->db->join('prestaciones', 'prestaciones.id_movil = movil.id');
	    $this->db->group_by('movil.id');
		$query = $this->db->get();

		return $query->result();

	}
	public function el_fav(){
 	$consulta = $this->db->query("SELECT id FROM usuario WHERE usuario='{$_SESSION['usuario']}'");
 		$idu = $consulta->result();
 		$r = get_object_vars($idu[0])['id'];
 		$this->db->delete('favoritos', array(
			'id_movil'=>$this->input->post('id_movil',TRUE),
			'id_usuario' => $r
			));
 		echo "<script>alert('Eliminado de favoritos.');</script>";
 }
}
?>