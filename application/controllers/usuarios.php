<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

		$this->load->library('form_validation');		
		$this->load->model('usuarios_modelo');
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
		if ($this->form_validation->run('usuarios')==false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">'.validation_errors().'</div>' : 'false');
		}
		else{
			$data = array(
						//Estos son los campos del formulario
						'nombres'=> set_value('nombres'),
						'apellidos' => set_value('apellidos'),
						'telefono1' => set_value('telefono1'),
						'telefono2' => set_value('telefono2'),
						'nivel_usuario' => set_value('nivel_usuario'),
						'departamento' => set_value('departamento'),
						'municipio' => set_value('municipio'),
						'direccion' => set_value('direccion'),
						'link_avatar' => set_value('link_avatar'),
						'mail' => set_value('mail'),
						'password' => set_value('password'),
						'id_concesionarios' => set_value('id_concesionarios'),
			 );

			if($this->usuarios_modelo->guardar($data)==true){
				$id_usuario=$this->usuarios_modelo->obtener_ultimo_id();
				$avatar=($_FILES['avatar']);
				$tipo='avatar';
				$link_avatar = ($logo['name']!=='') ? $this->cargar_foto($logo,$id_usuario,$tipo) : null ;//subo la imagen de encabezado a la carpeta concesionarios

				$this->usuarios_modelo->guardar_avatar($link_avatar,$id_usuario);

				redirect(base_url().'usuarios/listar/'.$data['id_concesionarios']);
			}
			else
			{
				$this->data['custom_error'] = '<div class="form_error"><p>A ocurrido un error.</p></div>';

			}
		}
		$this->data['titulo']='Agregar un Usuario';	
		$this->data['dptos']=$this->ubigeo->devolver_departamentos();			   
		$this->load->view('agregar_usuarios', $this->data); 
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file usuarios.php */
/* Location: ./application/controllers/usuarios.php */
