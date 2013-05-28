<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Concesionarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('concesionarios_modelo');
		$this->load->model('ubigeo');
	}

	// List all your items
	public function index( $offset = 0 )
	{

	}

	// Add a new item
	public function add()
	{
		$this->load->library('form_validation');
		$this->data['custom_error']='';

		if ($this->form_validation->run('concesionarios')==false) {
             $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : false);
		}
		else{

			$data = array(
						'nombre_concesionario'=> set_value('nombre_concesionario'),
						'descripcion' => set_value('descripcion'),
						'direccion' => set_value('direccion'),
						'telefono1' => set_value('telefono1'),
						'telefono2' => set_value('telefono2'),
						'contacto' => set_value('contacto'),
						'mail' => set_value('mail'),
						'id_municipios' => set_value('id_municipios'),
						'id_departamentos' => set_value('id_departamentos'),
						'link_cabecera' => set_value('link_cabecera'),
						'link_logo' => set_value('link_logo'),
			 );
			if($this->concesionarios_model->guardar($data)==true){
				redirect(base_url().'concesionarios');
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>A ocurrido un error.</p></div>';

			}
		}

		$this->data['titulo']='Agregar un Concesionario';	
		$this->data['dptos']=$this->ubigeo->devolver_departamentos();			   
		$this->load->view('agregar_concesionario', $this->data); 
	}

	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file concesionarios.php */
/* Location: ./application/controllers/concesionarios.php */
