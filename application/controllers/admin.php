<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class admin extends CI_Controller{
	//constructor del controlador articulos
	public function __construct(){
		 parent::__construct();
		 $this->load->model('admin_model');
	 }
	public function index(){
		$this->load->view('admin_view');
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
			'precio' =>  $this->admin_model->get_precio($id)
	 	);

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
}
?>