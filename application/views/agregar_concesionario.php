<?php $this->load->view('header'); ?>

	<div class="container">
		<p><?php $prueba ?></p>
		<div class="row-fluid">
		<div id="push2"></div>
			<div class="span8 offset2 contenedor agregar_concesionario" text-align="center">
				<form method="post" action="<?php current_url() ?>" enctype="multipart/form-data">
					<div class="control-group">
	            	             <h2>REGISTRO DE UN NUEVO CONCESIONARIO</h2>
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
	                        <input type="submit" name="submit"  class="btn btn-large btn-primary"  value="Registrar Concesionario"><i class="icon-plus-sign"></i>
	                  	</div>
	            	</div>
				</form>
<div id="push"></div>
			</div>
		</div>
	</div>
		 
    </div>
<div id="push2"></div>
<!-- Esto debe ir en piepagina.php para vincular desde el controlador -->
<?php $this->load->view('footer'); ?>