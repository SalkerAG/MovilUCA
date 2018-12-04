<?php
class Articulos_model extends CI_Model{
 public function _construct(){
 parent::_construct();
 }
 public function get_articulos(){
 $consulta = $this->db->query('Select * from articulo;');
 return $consulta->result();
 }
 public function add_articulo(){
 $this->db->query('Insert into articulo values(null,"'.$this->input->post('titulo').'","'.$this->input->post('descripcion').'","'.$this->input->post('cuerpo').'")');
 }
}