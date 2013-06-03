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
		echo set_value('id_departamentos');

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
						'id_departamentos' => set_value('id_departamentos'),
						'id_municipios' => set_value('id_municipios'),
			 );

			if($this->concesionarios_modelo->guardar($data)==true){
				$id_concesionario=$this->concesionarios_modelo->obtener_ultimo_id();
				$logo=($_FILES['logo']);
				$encabezado=($_FILES['encabezado']);
				$tipo='logo';
				$link_logo = ($logo['name']!=='') ? $this->cargar_foto($logo,$id_concesionario,$tipo) : null ;//subo la imagen de encabezado a la carpeta concesionarios
				$tipo='encabezado';
				$link_cabecera = ($encabezado['name']!=='') ? $this->cargar_foto($encabezado,$id_concesionario,$tipo) : null;
				$links = array(
					'link_cabecera' => $link_cabecera,
					'link_logo' => $link_logo );

				$this->concesionarios_modelo->edit($links,'id',$id_concesionario);//actualizo los links de las

				redirect(base_url().'concesionarios/ver/'.$id_concesionario);
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

	public function ver()
	{
		$this->data['detalles_concesionario']=$this->concesionarios_modelo->ver_concesionario($this->uri->segment(3),NULL,NULL,true);
		if($this->data['detalles_concesionario']){
			$this->load->view('ver_concesionario',$this->data);
		}
		
	}

	function cargar_foto($imagen,$id,$tipo)
	{
		// configuración para upload
		$config['upload_path'] = './imagenes/concesionarios/'; // la ruta desde la raíz de CI
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '2048'; // 2 Mb
		$config['max_width'] = '2048';
		$config['max_height'] = '2048';
		$nombre=set_value('nombre');
		$this->load->library('upload', $config);  // NOTE: always load the library outside the loop
		$this->upload->initialize($config); // según varios foros esta línea es importante no olvidarla
			$type=str_replace('image/', ".", $imagen['type']);
			$_FILES['userfile']['name'] = $tipo.'('.$id.')'.$type;
			$_FILES['userfile']['type'] = $imagen['type'];
		    $_FILES['userfile']['tmp_name'] = $imagen['tmp_name'];
		    $_FILES['userfile']['error'] = $imagen['error'];
		    $_FILES['userfile']['size'] = $imagen['size'];

		if (!$this->upload->do_upload()){
			echo $this->upload->display_errors();
			return null;
		}
		else{
			return base_url().'/imagenes/concesionarios/'.$_FILES['userfile']['name'];
		} // esto es muy útil para encontrar qué falla
	}

}

/* End of file concesionarios.php */
/* Location: ./application/controllers/concesionarios.php */
