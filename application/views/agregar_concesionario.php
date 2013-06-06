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
	<!-- Aqui va todo el contenido que se quiera poner -->

	<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- .btn-navbar es usado para el formato responsive, cuando el boton se pone a la izquierda -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Nombre del Proyecto -->
      <a class="brand" href="#"><img src="http://imgur.com/EYZxp5w.png" title="Red de Concesionarias.com"/></a>
 		
      <!-- Aqui va lo que se oculta despues de los 940px-->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
  <ul class="nav">
  <li><a href="#">Ver Concesionarios</a></li>
  <li><a href="#">Agregar un Concesionario</a></li>
  <li><a href="#">Agregar Auto</a></li>
  <li><a href="#">Busqueda</a></li>
  </ul>
      </div>
 
    </div>
  </div>
</div>

	<div class="container">
		<p><?php $prueba ?></p>
		<div class="row-fluid">
			<div id="push"></div>
			<div class="span8 offset2"><h2>REGISTRO DE UN NUEVO CONCESIONARIO</h2></div>
		<div id="push"></div>
			<div class="span8 offset2 contenedor agregar_concesionario" text-align="center">
				<form method="post" action="<?php current_url() ?>" enctype="multipart/form-data">
					<div class="control-group">
	            	             
	                  	<div class="controls">
	                        <input type="text" placeholder="Nombre Concesionario*" id='nombre_concesionario' name='nombre_concesionario' value="<?php echo set_value('nombre_concesionario') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('nombre_concesionario','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<div class="controls">
	                        <textarea id="descripcion" placeholder="Descripci&oacute;n del Concesionario*"  name="descripcion" rows="0" cols="0" class="required"><?php echo set_value('descripcion') ?></textarea>
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('descripcion','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="form-inline">
                    <?php echo form_label('Departamento:') ?>
					<?php echo form_dropdown('id_departamentos',$dptos,set_value('id_departamentos'),"id='sdep'"); ?>
					<p class="help-inline"><?php echo form_error('id_departamentos','<div class="label label-important">','</div>'); ?></p>
					
					<?php echo form_label('Municipio:') ?>
					<?php echo form_dropdown('id_municipios',array(), set_value('id_municipios'),"id='smun'"); ?>
					<p class="help-inline"><?php echo form_error('id_municipios','<div class="label label-important">','</div>'); ?></p>	
					</div>			
				</br>

	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="text" id='direccion' placeholder="Direcci&oacute;n*" name='direccion' value="<?php echo set_value('direccion') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('direccion','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="text" id='telefono1' placeholder="Tel&eacute;fono*" name='telefono1' value="<?php echo set_value('telefono1') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('telefono1','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="text" id='telefono2' placeholder="Tel&eacute;fono 2" name='telefono2' value="<?php echo set_value('telefono2') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('telefono2','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>
	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="text" id='contacto' placeholder="Persona de Contacto*" name='contacto' value="<?php echo set_value('telefono1') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('contacto','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="text" id='mail' placeholder="Correo Electronico*" name='mail' value="<?php echo set_value('mail') ?>">
	                        <p class="help-inline"><?php echo form_error('mail','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	                 <div class="control-group">
	                       <div class="controls">
	                           <input type="text" placeholder="http://" id='web' name='web' value="<?php echo set_value('web') ?>">
	                           <p class="help-inline"><?php echo form_error('web','<div class="label label-important">','</div>'); ?></p>
	                       </div>
	                 </div>    
	            	<div class="control-group">
	            	<label class="control-label" for="logo">Logotipo<span class="required requerido">*</span></label>                  
	                  	<div class="controls">
	                        <input type="file" value="Seleccionar Imagen"  name="logo" id="logo"><br>
	                        <p class="help-inline"><?php echo form_error('logo','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="encabezado">Encabezado<span class="required requerido">*</span></label>                  
	                  	<div class="controls">
	                        <input type="file" name="encabezado" id="encabezado"><br>
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('encabezado','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>
<hr/>
	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="submit" name="submit" class="btn btn-large btn-primary" value="Registrar Concesionario">
	                  	</div>
	            	</div>
				</form>

			</div>
		</div>
	</div>
		 <div id="push"></div>
    </div>

<!-- Esto debe ir en piepagina.php para vincular desde el controlador -->
    <div id="footer">
      <div class="container">
      	<div class="span3">
      		<h2>Nosotros</h2>
      		<p>¿Quienes Somos?</p>
      		<p>Nuestra Empresa</p>
      		<p>Prensa</p>
      		<p>Contacto</p>
      	</div>
      	<div class="span3">
      		<h2>Concesionarias</h2>
      		<p>Patrocinantes</p>
      		<p>Ver todas</p>
      		<p>Agregar Nueva</p>
      		<p>¿C&oacute;omo?</p>
      	</div>
      	<div class="span3">
      		<h2>Ayuda</h2>
      		<p>Preguntas Frecuentes</p>
      		<p>Mapa del Sitio</p>
      		<p>Chat</p>
      		<p>Soporte Tecnico</p>
      	</div>
      	<div class="span2">
      		<h2>Siguenos</h2>
      		<address>
  			<strong>Red.CO SAS</strong><br>
  			795 Avenida Cicero, Calle 144,Medell&iacute;n, AN 57094<br>
  			Email: <a href="mailto:info@red.co">info@red.co</a><br>
  			<abbr title="Tel&eacute;fono">T:</abbr> (094) 456-7890
			</address>
      	<a href="#"><img src="<?php echo base_url()?>social/fb.png"/></a><a href="#"><img src="<?php echo base_url()?>social/gp.png"/></a><a href="#"><img src="<?php echo base_url()?>social/tw.png"/></a>
      	</div>

      	<div id="push"></div>

        <p class="muted credit">&copy; <a href="#">Red.Co SAS</a> Derechos Reservados. <a href="#" title="T&eacute;rminos y Condiciones de Uso">T&eacute;rminos</a>. <a href="#" title="Pol&iacute;ticas de Privacidad">Pol&iacute;ticas</a>. Dise&ntilde;o y Desarrollo: <a href="#">Sergio</a> & <a href="#">Wilfredo</a></p>
      </div>
    </div>

    <!-- /piepagina.php  -->

      <!-- /container -->

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