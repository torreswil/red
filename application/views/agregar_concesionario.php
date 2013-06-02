<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le Estilos -->
	<link rel="stylesheet"  href="<?php echo base_url()?>css/bootstrap.css"/>
	<link rel="stylesheet"  href="<?php echo base_url()?>css/estilos.css"/>
	<style type="text/css">
		body { padding-top: 60px; padding-bottom: 40px; }
	</style>
	<link rel="stylesheet"  href="<?php echo base_url()?>css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML Shiv y los trucos para los codigos en HTML5 -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le Favicon e iconos para dispositivos retina -->
	<link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">
		
</head>
<body>

	<!--div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Red Concesionarios</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div-->

	<div class="container">
		<p><?php $prueba ?></p>
		<div class="row">
			<div class="span10 offset2"><h1>Registro de Nuevo Concesionario</h1></div>
			<div class="span6 offset2">
				<form method="post" action="<?php current_url() ?>" enctype="multipart/form-data">
					<div class="control-group">
	            		<label class="control-label" for="nombre_concesionario">Nombre Comercial<span class="required">*</span></label>                
	                  	<div class="controls">
	                        <input type="text" id='nombre_concesionario' name='nombre_concesionario' value="<?php echo set_value('nombre_concesionario') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('nombre_concesionario','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="descripcion">Descripcion<span class="required">*</span></label>                
	                  	<div class="controls">
	                        <textarea id="descripcion" value="<?php echo set_value('descripcion') ?>" name="descripcion" rows="0" cols="0" class="required"></textarea>
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('descripcion','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>
                    <?php echo form_label('Departamento:') ?>
					<?php echo form_dropdown('id_departamentos',$dptos,set_value('id_departamentos'),"id='sdep'"); ?>
					<?php echo form_error('id_departamentos','<div>','</div>'); ?>
					
					
					<?php echo form_label('Municipio') ?>
					<?php echo form_dropdown('id_municipios',array(), set_value('id_municipios'),"id='smun'"); ?>
					<?php echo form_error('id_municipios','<div>','</div>'); ?>	
									

	            	<div class="control-group">
	            		<label class="control-label" for="direccion">Direccion<span class="required">*</span></label>                   
	                  	<div class="controls">
	                        <input type="text" id='direccion' name='direccion' value="<?php echo set_value('direccion') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('direccion','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="telefono1">Telefono1<span class="required">*</span></label>                
	                  	<div class="controls">
	                        <input type="text" id='telefono1' name='telefono1' value="<?php echo set_value('telefono1') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('telefono1','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="telefono2">Telefono2<span class="required">*</span></label>                  
	                  	<div class="controls">
	                        <input type="text" id='telefono2' name='telefono2' value="<?php echo set_value('telefono2') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('telefono2','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>
	            	<div class="control-group">
	            		<label class="control-label" for="contacto">Contacto<span class="required">*</span></label>                  
	                  	<div class="controls">
	                        <input type="text" id='contacto' name='contacto' value="<?php echo set_value('telefono1') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('contacto','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="mail">E-mail<span class="required">*</span></label>                  
	                  	<div class="controls">
	                        <input type="text" id='mail' name='mail' value="<?php echo set_value('mail') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('mail','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="logo">Logotipo<span class="required">*</span></label>                  
	                  	<div class="controls">
	                        <input type="file" name="logo" id="logo"><br>
	                        <p class="help-inline"><?php echo form_error('logo','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="encabezado">Encabezado<span class="required">*</span></label>                  
	                  	<div class="controls">
	                        <input type="file" name="encabezado" id="encabezado" multiple=''><br>
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('encabezado','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="submit" name="submit" value="Enviar">
	                  	</div>
	            	</div>
				</form>
			</div>
		</div>
	  	<hr>

		<footer>
			<p>&copy; Company 2012</p>
		</footer>
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Aqui van todos los  scripts en javascript para que corra más rapido la página -->
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-transition.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-alert.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-modal.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-dropdown.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-scrollspy.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tab.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tooltip.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-popover.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-button.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-collapse.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-carousel.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-typeahead.js"></script>

	<script type="text/javascript">
		var path = '<?php echo base_url()?>';
		jQuery(document).ready(function(){
			cargarmunicipios();
			$('#sdep').change(cargarmunicipios);
		});
		
		function cargarmunicipios () {
			var cd = $('#sdep').val();

			$.get(path + 'concesionarios/municipio', {'id' : cd}, function(resp) {
				$('#smun').empty().html(resp);
			});
		}
	</script>
</body>
</html>