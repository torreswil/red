<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Concesionarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->library('form_validation');		
		$this->load->model('concesionarios_modelo');
		$this->load->model('ubigeo');
		$this->load->helper('url');
		$this->load->helper('form');
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
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : 'false');
		}
		else{
			$data = array(
						//Estos son los campos del formulario
						'nombre_concesionario'=> set_value('nombre_concesionario'),
						'descripcion' => set_value('descripcion'),
						'direccion' => set_value('direccion'),
						'telefono1' => set_value('telefono1'),
						'telefono2' => set_value('telefono2'),
						'contacto' => set_value('contacto'),
						'mail' => set_value('mail'),
						'id_municipios' => set_value('id_municipios'),
						'id_departamentos' => set_value('id_departamentos'),
			 );
			if($this->concesionarios_modelo->guardar($data)==true){
				$id_concesionario=$this->concesionarios_model->obtener_ultimo_id();
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

	public function municipio()
	{	
		$coddep=$this->input->get('id');	
		$this->ubigeo->devolver_municipios($coddep);
		
	}

	function cargar_foto($id)
	{
		// configuración para upload
		$config['upload_path'] = './imagenes/concesionarios/'; // la ruta desde la raíz de CI
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2048'; // 2 Mb
		$config['max_width'] = '2048';
		$config['max_height'] = '2048';
		$nombre=set_value('nombre');
		$this->load->library('upload', $config);  // NOTE: always load the library outside the loop
		$this->upload->initialize($config); // según varios foros esta línea es importante no olvidarla
		echo $nombre;
		var_dump($_FILES);	
		foreach ($_FILES['fotos']['tmp_name'] as $archivo=>$valor) {
			
			$_FILES['logo']['name'] = $id.$_FILES['fotos']['name'][$archivo];
		    $_FILES['logo']['type'] = $_FILES['fotos']['type'][$archivo];
		    $_FILES['logo']['tmp_name'] = $_FILES['fotos']['tmp_name'][$archivo];
		    $_FILES['logo']['error'] = $_FILES['fotos']['error'][$archivo];
		    $_FILES['logo']['size'] = $_FILES['fotos']['size'][$archivo];

		    if (!$this->upload->do_upload())
              {echo $this->upload->display_errors();} // esto es muy útil para encontrar qué falla
		}
	}
}

/* End of file concesionarios.php */
/* Location: ./application/controllers/concesionarios.php */
