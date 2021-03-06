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

	function obtener_ultimo_id()
	{
		$query=$this->db->select_max('id')->get('concesionarios');
		$fila=$query->row();
		return $fila->id;	 
	}

	function edit($data,$fieldID,$ID){
        $this->db->where($fieldID,$ID);
        $this->db->update('concesionarios', $data);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;       
    }

    public function ver_concesionario($id)
    {
    	$this->db->where('id',$id);
    	$query=$this->db->get('concesionarios');
    	$result=$query->row();
		return $result;
    }

}

/* End of file concesionarios_modelo.php */
/* Location: ./application/models/concesionarios_modelo.php */