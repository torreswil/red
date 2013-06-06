<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios_modelo extends CI_Model {
	function __construct()
	{
		parent::__construct();

		//Do your magic here

	}

	function guardar($datos)
	{
		$this->db->insert('usuarios',$datos);

		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE; 

	}

	function obtener_ultimo_id()
	{
		$query=$this->db->select_max('id')->get('usuarios');
		$fila=$query->row();
		return $fila->id;	 
	}

	function guardar_avatar($link,$id_usuario)
	{
		$this->db->where('id',$id_usuario);
		$this->db->set('link_avatar', $link); 
		$this->db->update('usuarios'); 
		if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */