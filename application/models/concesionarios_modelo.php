<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Concesionarios_modelo extends CI_Model {
	function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	function guardar($datos)
	{
		$this->db->insert('concesionarios',$datos);

		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE; 

	}

}

/* End of file concesionarios_modelo.php */
/* Location: ./application/models/concesionarios_modelo.php */