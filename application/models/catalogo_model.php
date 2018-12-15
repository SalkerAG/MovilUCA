<?php
class catalogo_model extends CI_Model{
 public function _construct(){
 parent::_construct();
 }
 public function get_moviles(){
 	$consulta = $this->db->query('Select movil.id, movil.marca, movil.modelo, movil.disponibilidad, movil.foto, precio.precio from movil,precio where movil.id = precio.id_movil group by movil.id');
 return $consulta->result();
 }
  public function get_marca(){
 	$consulta = $this->db->query('Select DISTINCT marca from movil');
 return $consulta->result();
 }
 public function get_procesador(){
 	$consulta = $this->db->query('Select DISTINCT procesador from prestaciones');
 return $consulta->result();
 }

  public function get_ram(){
 	$consulta = $this->db->query('Select DISTINCT ram from prestaciones');
 return $consulta->result();
 }
 public function get_memoria(){
 	$consulta = $this->db->query('Select DISTINCT memoria from prestaciones');
 return $consulta->result();
 }

	  public function get_moviles_marca($filtrom){
	  	if($filtrom['m'] != null){
			
			 $this->db->select(' movil.id, movil.marca, movil.modelo, movil.disponibilidad, movil.foto, precio.precio')
	             ->from('movil');
		 	foreach ($filtrom['m'] as $marca=>$m) {
		 		$this->db->or_like('movil.marca', $m);
		 		
		    }
		    $this->db->join('precio', 'precio.id_movil = movil.id');
		    $this->db->group_by('movil.id');
			$query = $this->db->get();
		}else{
			$query = $this->db->query('Select  movil.id, movil.marca, movil.modelo, movil.disponibilidad, precio.precio , movil.foto from movil, precio where movil.id = precio.id_movil  group by movil.id');
		}

 		return $query->result();
 	}

   public function get_moviles_procesador($procesador){

	if($procesador['m'] != null){
		
		 $this->db->select(' movil.id, movil.marca, movil.modelo, movil.disponibilidad, movil.foto, precio.precio')
             ->from('movil');
        $this->db->join('prestaciones', 'prestaciones.id_movil = movil.id');
	 	foreach ($procesador['m'] as $pro=>$p) {
	 		$this->db->or_like('prestaciones.procesador', $p);
	 		
	    }
	    $this->db->join('precio', 'precio.id_movil = movil.id');
	    $this->db->group_by('movil.id');
		$query = $this->db->get();
	}else{
		$query = $this->db->query('Select  movil.id, movil.marca, movil.modelo, movil.disponibilidad, precio.precio , movil.foto from movil, precio where movil.id = precio.id_movil  group by movil.id');
	}

	
 	return $query->result();
 }
  public function get_moviles_ram($ram){

	if($ram['m'] != null){
		
		 $this->db->select(' movil.id, movil.marca, movil.modelo, movil.disponibilidad, movil.foto, precio.precio')
             ->from('movil');
        $this->db->join('prestaciones', 'prestaciones.id_movil = movil.id');
	 	foreach ($ram['m'] as $ra=>$r) {
	 		$this->db->or_like('prestaciones.ram', $r);
	 		
	    }
	    $this->db->join('precio', 'precio.id_movil = movil.id');
	    $this->db->group_by('movil.id');
		$query = $this->db->get();
	}else{
		$query = $this->db->query('Select  movil.id, movil.marca, movil.modelo, movil.disponibilidad, precio.precio , movil.foto from movil, precio where movil.id = precio.id_movil  group by movil.id');
	}
 	return $query->result();
 }
 public function get_moviles_memoria($mem){

	if($mem['m'] != null){
		
		 $this->db->select(' movil.id, movil.marca, movil.modelo, movil.disponibilidad, movil.foto, precio.precio')
             ->from('movil');
        $this->db->join('prestaciones', 'prestaciones.id_movil = movil.id');
	 	foreach ($mem['m'] as $mem=>$m) {
	 		$this->db->or_like('prestaciones.memoria', $m);
	    }
	    $this->db->join('precio', 'precio.id_movil = movil.id');
	    $this->db->group_by('movil.id');
		$query = $this->db->get();
	}else{
		$query = $this->db->query('Select  movil.id, movil.marca, movil.modelo, movil.disponibilidad, precio.precio , movil.foto from movil, precio where movil.id = precio.id_movil  group by movil.id');
	}
 	return $query->result();
 }

public function union($array1, $array2)
	{
		$re = array();
		foreach($array1 as $key => $a) {
				if (in_array($a, $array2)) {
					array_push($re, $a);
				}
		    
		}
		return $re;
	}


}