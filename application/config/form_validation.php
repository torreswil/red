<?php 

$config= array('concesionarios' => array(
                                	'field'=>'nombre_concesionario',
                                	'label'=>'Nombre del Concesionario',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'descripcion',
                                	'label'=>'Descripcion',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'direccion',
                                	'label'=>'Direccion',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'telefono1',
                                	'label'=>'Telefono 1',
                                	'rules'=>'required|trim|xss_clean'
                                ),
								array(
                                	'field'=>'telefono2',
                                	'label'=>'Telefono2',
                                	'rules'=>'trim|xss_clean'
                                ),
                                array(
                                	'field'=>'contacto',
                                	'label'=>'Contacto',
                                	'rules'=>'required|trim|xss_clean'
                                ),
                                array(
                                	'field'=>'mail',
                                	'label'=>'E-mail',
                                	'rules'=>'required|trim|xss_clean'
                                ) 
                                  );

/*
id	
nombre_concesionario	
descripcion	
direccion	
telefono1	
telefono2	
contacto	
mail	
id_municipios	
id_departamentos	
link_cabecera	
link_logo
*/
	 ?>
