<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	class catalogo extends CI_Controller{
	//constructor del controlador articulos
	
	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('session');
		 $this->load->model('catalogo_model');
	 }

	

	public function slice($datos, $page, $limit_per_page){
		$datos = array_slice($datos['moviles'], $page*$limit_per_page,$limit_per_page);
		return $datos;
	}


	public function filtrado(){

		if(!isset($_SESSION['marca'])) 
			$filtro['marca'] = $this->input->post('marca');
		else{
				if(!$this->input->post('submit'))
					$filtro['marca'] = $_SESSION['marca'];
				else
					$filtro['marca'] = $this->input->post('marca');
			}

		if(!isset($_SESSION['procesador'])) 
			$filtro['procesador'] = $this->input->post('procesador');
		else{
				if(!$this->input->post('submit'))
					$filtro['procesador'] = $_SESSION['procesador'];
				else
					$filtro['procesador'] = $this->input->post('procesador');
			}

		if(!isset($_SESSION['ram'])) 
			$filtro['ram'] = $this->input->post('ram');
		else{
				if(!$this->input->post('submit'))
					$filtro['ram'] = $_SESSION['ram'];
				else
					$filtro['ram'] = $this->input->post('ram');
			}

		if(!isset($_SESSION['memoria'])) 
			$filtro['memoria'] = $this->input->post('memoria');
		else{
				if(!$this->input->post('submit'))
					$filtro['memoria'] = $_SESSION['memoria'];
				else
					$filtro['memoria'] = $this->input->post('memoria');
			}
							 
			$this->session->set_userdata($filtro);


			$filterm = array(
		    'm' => $filtro['marca'],
			);
			$filterp = array(
		    'm' => $filtro['procesador'],
			);
			$filterr = array(
		    'm' => $filtro['ram'],
			);
			$filterme = array(
		    'm' => $filtro['memoria'],
			);
			$filtrom = $this->catalogo_model->get_moviles_marca($filterm);
			$filtrop = $this->catalogo_model->get_moviles_procesador($filterp);
			$filtror = $this->catalogo_model->get_moviles_ram($filterr);
			$filtrome = $this->catalogo_model->get_moviles_memoria($filterme);
			$filtrot = $this->catalogo_model->union($filtrom,$filtrop);
			$filtrot1 = $this->catalogo_model->union($filtrot,$filtror);
			$filtrot2 = $this->catalogo_model->union($filtrot1,$filtrome);

			$datos = array(
			 'moviles' => $filtrot2,
			 'marca' => $this->catalogo_model->get_marca(),
			 'procesador' => $this->catalogo_model->get_procesador(),
			 'ram' => $this->catalogo_model->get_ram(),
			 'memoria' => $this->catalogo_model->get_memoria()
			);

		return $datos;
	}




	public function index(){
        $params = array();
        $limit_per_page = 10;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = sizeof($this->filtrado()['moviles']);
     
        if ($total_records > 0){
            // get current page records
            $params["moviles"] = $this->slice($this->filtrado(), $page, $limit_per_page);
            $params["marca"] = $this->filtrado()['marca'];
            $params["procesador"] = $this->filtrado()['procesador'];
            $params["ram"] = $this->filtrado()['ram'];
            $params["memoria"] = $this->filtrado()['memoria'];
            $config['base_url'] = base_url() . '/catalogo/pagina';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config['attributes'] = array('class' => 'page-link');
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = '<span>Primera</span>';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = '<span>Última</span>';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            $config['last_link'] = FALSE;

            $config['next_link'] = '<span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Siguiente</span>';
            $config['next_tag_open'] = '<li class="page-item" aria-label="Siguiente">';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = '<span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Anterior</span>';
            $config['prev_tag_open'] = '<li class="page-item" aria-label="Anterior">';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
             
            $this->pagination->initialize($config);
                 
            // build paging links
            $params["links"] = $this->pagination->create_links();

            $this->load->view('catalogo_view', $params);
        }
  	
	  	else{
	        $datos = array(
			 'marca' => $this->catalogo_model->get_marca(),
			 'procesador' => $this->catalogo_model->get_procesador(),
			 'ram' => $this->catalogo_model->get_ram(),
			 'memoria' => $this->catalogo_model->get_memoria()
			);

	        $this->load->view('catalogo_view', $datos);
	  		}
	}

	public function busqueda(){
        $params = array();
        $limit_per_page = 10;
        $page = ($this->uri->segment(4)) ? ($this->uri->segment(4) - 1) : 0;
        $total_records = sizeof($this->filtrado()['moviles']);
     
        if ($total_records > 0){
            // get current page records
            $params["moviles"] = $this->slice($this->filtrado(), $page, $limit_per_page);
            $params["marca"] = $this->filtrado()['marca'];
            $params["procesador"] = $this->filtrado()['procesador'];
            $params["ram"] = $this->filtrado()['ram'];
            $params["memoria"] = $this->filtrado()['memoria'];
            $config['base_url'] = base_url() . '/catalogo/busqueda/pagina';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config['attributes'] = array('class' => 'page-link');
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = '<span>Primera</span>';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = '<span>Última</span>';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            $config['last_link'] = FALSE;

            $config['next_link'] = '<span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Siguiente</span>';
            $config['next_tag_open'] = '<li class="page-item" aria-label="Siguiente">';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = '<span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Anterior</span>';
            $config['prev_tag_open'] = '<li class="page-item" aria-label="Anterior">';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
             
            $this->pagination->initialize($config);
                 
            // build paging links
            $params["links"] = $this->pagination->create_links();
            $this->load->view('catalogo_view', $params);

        }
         

        	  	else{
	        $datos = array(
			 'marca' => $this->catalogo_model->get_marca(),
			 'procesador' => $this->catalogo_model->get_procesador(),
			 'ram' => $this->catalogo_model->get_ram(),
			 'memoria' => $this->catalogo_model->get_memoria()
			);

	        $this->load->view('catalogo_view', $datos);
	  		}
	}

}?>