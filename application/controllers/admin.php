<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class admin extends CI_Controller{
	//constructor del controlador articulos
	public function __construct(){
		 parent::__construct();
		 $this->load->model('admin_model');
	 }
	public function index(){
		$datos = array('moviles' => $this->admin_model->get_n_moviles(),
			'puntuacion' => $this->admin_model->get_n_puntuacion(),
			'usuarios' => $this->admin_model->get_n_usuarios(),
			'opiniones' => $this->admin_model->get_n_opiniones(),
			'uno' => $this->admin_model->get_uno(),
			'dos' => $this->admin_model->get_dos(),
			'tres' => $this->admin_model->get_tres(),
			'cuatro' => $this->admin_model->get_cuatro(),
			'cinco' => $this->admin_model->get_cinco(),
			'uno1' => $this->admin_model->get_uno1(),
			'dos1' => $this->admin_model->get_dos1(),
			'tres1' => $this->admin_model->get_tres1(),
			'cuatro1' => $this->admin_model->get_cuatro1(),
			'cinco1' => $this->admin_model->get_cinco1(),
	 	);
		$this->load->view('admin_view',$datos);
	}
	public function moviles(){
		$datos = array('moviles' => $this->admin_model->get_moviles()
	 	);

		$this->load->view('admin_movil_view',$datos);
	}
	public function usuarios(){
		$datos = array('usuario' => $this->admin_model->get_usuarios()
	 	);

		$this->load->view('admin_usuario_view',$datos);
	}
	public function noticias(){
		$datos = array('noticias' => $this->admin_model->get_noticias()
	 	);

		$this->load->view('admin_noticia_view',$datos);
	}
	public function add_not(){
		$this->load->view('add_noticia_view');
	}
	public function add_noticia(){
		$this->admin_model->add_noticia();
		$datos = array('noticias' => $this->admin_model->get_noticias()
	 	);

		$this->load->view('admin_noticia_view',$datos);
	}
	public function del_noticia($id){
		$this->admin_model->del_noticia($id);
		$datos = array('noticias' => $this->admin_model->get_noticias()
	 	);

		$this->load->view('admin_noticia_view',$datos);
	}

	public function add_mov(){
		$datos =array('marca' => $this->admin_model->get_marcas(),
		'pantalla' => $this->admin_model->get_pantallas(),
		'velocidad' => $this->admin_model->get_velocidades(),
		'ram' => $this->admin_model->get_rams(),
		'memoria' => $this->admin_model->get_memorias(),
		'camara' => $this->admin_model->get_camaras(),
		'version' => $this->admin_model->get_versiones(),
		'tienda' => $this->admin_model->get_tiendas(),
		'bateria' => $this->admin_model->get_baterias(),
		'procesador' => $this->admin_model->get_procesadores());
		$this->load->view('add_mov_view', $datos);
	}
	public function add_movil(){
		$this->admin_model->add_movil();
		$datos = array('moviles' => $this->admin_model->get_moviles()
	 	);

		$this->load->view('admin_movil_view',$datos);
	}
	public function mod_movil($id){
		$datos = array('movil' => $this->admin_model->get_movil($id),
			'precio' =>  $this->admin_model->get_precio($id),
			'marca' => $this->admin_model->get_marcas(),
			'pantalla' => $this->admin_model->get_pantallas(),
			'velocidad' => $this->admin_model->get_velocidades(),
			'ram' => $this->admin_model->get_rams(),
			'memoria' => $this->admin_model->get_memorias(),
			'camara' => $this->admin_model->get_camaras(),
			'version' => $this->admin_model->get_versiones(),
			'tienda' => $this->admin_model->get_tiendas(),
			'bateria' => $this->admin_model->get_baterias(),
			'procesador' => $this->admin_model->get_procesadores());
		$this->load->view('modifica_movil_view',$datos);
	}
	public function mod_usuario($id){
		$datos = array('usuario' => $this->admin_model->get_usuario($id)
	 	);

		$this->load->view('modifica_usuario_view',$datos);
	}
	public function del_movil($id){
		$this->admin_model->del_movil($id);
		$datos = array('moviles' => $this->admin_model->get_moviles()
	 	);

		$this->load->view('admin_movil_view',$datos);
	}
	public function del_usuario($id){
		$this->admin_model->del_usuario($id);
		$datos = array('usuario' => $this->admin_model->get_usuarios()
	 	);

		$this->load->view('admin_usuario_view',$datos);
	}
	public function modifica_usuario($id){
		$this->admin_model->modifica_usuario($id);
		$datos = array('usuario' => $this->admin_model->get_usuarios()
	 	);

		$this->load->view('admin_usuario_view',$datos);
	}
	public function modifica_movil($id){
		$this->admin_model->modifica_movil($id);
		$datos = array('moviles' => $this->admin_model->get_moviles()
	 	);

		$this->load->view('admin_movil_view',$datos);
	}
	public function modifica_precio_movil($id){
		$this->admin_model->modifica_precio_movil($id);
		$datos = array('moviles' => $this->admin_model->get_moviles()
	 	);

		$this->load->view('admin_movil_view',$datos);
	}
	public function modifica_foto_movil($id){
		$this->admin_model->modifica_foto_movil($id);
		$datos = array('moviles' => $this->admin_model->get_moviles()
	 	);

		$this->load->view('admin_movil_view',$datos);
	}
	public function add_precio_movil($id){

		$this->admin_model->add_precio_movil($id);
		$datos = array('movil' => $this->admin_model->get_movil($id),
			'precio' =>  $this->admin_model->get_precio($id),
			'marca' => $this->admin_model->get_marcas(),
			'pantalla' => $this->admin_model->get_pantallas(),
			'velocidad' => $this->admin_model->get_velocidades(),
			'ram' => $this->admin_model->get_rams(),
			'memoria' => $this->admin_model->get_memorias(),
			'camara' => $this->admin_model->get_camaras(),
			'version' => $this->admin_model->get_versiones(),
			'tienda' => $this->admin_model->get_tiendas(),
			'bateria' => $this->admin_model->get_baterias(),
			'procesador' => $this->admin_model->get_procesadores());
		$this->load->view('modifica_movil_view',$datos);
	}
	public function del_precio_movil($id){
		$idd = $this->admin_model->get_movil_precio($id);
		$this->admin_model->del_precio_movil($id);
		$datos = array('movil' => $this->admin_model->get_movil($idd[0]->id),
			'precio' =>  $this->admin_model->get_precio($idd[0]->id),
			'marca' => $this->admin_model->get_marcas(),
			'pantalla' => $this->admin_model->get_pantallas(),
			'velocidad' => $this->admin_model->get_velocidades(),
			'ram' => $this->admin_model->get_rams(),
			'memoria' => $this->admin_model->get_memorias(),
			'camara' => $this->admin_model->get_camaras(),
			'version' => $this->admin_model->get_versiones(),
			'tienda' => $this->admin_model->get_tiendas(),
			'bateria' => $this->admin_model->get_baterias(),
			'procesador' => $this->admin_model->get_procesadores());
		$this->load->view('modifica_movil_view',$datos);
	}
}
?>