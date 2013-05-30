<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
	}

	public function index()
	{
		$this->load->view('prueba_carga');
	}

	function cargar()
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
			
			$_FILES['userfile']['name'] = $nombre.$_FILES['fotos']['name'][$archivo];
		    $_FILES['userfile']['type'] = $_FILES['fotos']['type'][$archivo];
		    $_FILES['userfile']['tmp_name'] = $_FILES['fotos']['tmp_name'][$archivo];
		    $_FILES['userfile']['error'] = $_FILES['fotos']['error'][$archivo];
		    $_FILES['userfile']['size'] = $_FILES['fotos']['size'][$archivo];

		    if (!$this->upload->do_upload())
              {echo $this->upload->display_errors();} // esto es muy útil para encontrar qué falla
		}
	}


}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */