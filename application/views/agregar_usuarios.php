<?php $this->load->view('header')?>

	<div class="container">
		<p><?php $prueba ?></p>
		<div class="row ">
			<div id="push"></div>
			<div class="span8 offset2"><h2>REGISTRO DE USUARIOS</h2></div>
		</hr>
			<div class="span8 offset2 contenedor agregar_concesionario">
				<form method="post" action="<?php current_url() ?>" enctype="multipart/form-data">
					<div class="control-group">
	            		<label class="control-label" for="first_name">Nombre<span class="required requerido">*</span></label>                
	                  	<div class="controls">
	                        <input type="text" id='first_name' name='first_name' value="<?php echo set_value('first_name') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('first_name','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="last_name">Descripci&oacute;n<span class="required requerido">*</span></label>                
	                  	<div class="controls">
	                        <textarea id="last_name"  name="last_name" rows="0" cols="0" class="required"><?php echo set_value('last_name') ?></textarea>
	                        <p class="help-inline"><?php echo form_error('last_name','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>
                    <div class="control-group">
	            		<label class="control-label" for="phone">Telefono 1<span class="required requerido">*</span></label>                
	                  	<div class="controls">
	                        <input type="text" id='phone' name='phone' value="<?php echo set_value('phone') ?>">
	                        <p class="help-inline"><?php echo form_error('phone','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="phone2">Telefono 2<span class="required requerido">*</span></label>                  
	                  	<div class="controls">
	                        <input type="text" id='phone2' name='phone2' value="<?php echo set_value('phone2') ?>">
	                        <p class="help-inline"><?php echo form_error('phone2','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<?php echo form_label('Tipo de Usuario:') ?>
					<?php echo form_dropdown('nivel_usuario',$niveles,set_value('nivel_usuario'),"id='niveles'"); ?>
					<p class="help-inline"><?php echo form_error('nivel_usuario','<div class="label label-important">','</div>'); ?></p>
					
	            	<?php echo form_label('Departamento:') ?>
					<?php echo form_dropdown('id_departamentos',$dptos,set_value('id_departamentos'),"id='sdep'"); ?>
					<p class="help-inline"><?php echo form_error('id_departamentos','<div class="label label-important">','</div>'); ?></p>
					
					
					<?php echo form_label('Municipio:') ?>
					<?php echo form_dropdown('id_municipios',array(), set_value('id_municipios'),"id='smun'"); ?>
					<p class="help-inline"><?php echo form_error('id_municipios','<div class="label label-important">','</div>'); ?></p>	
									

	            	<div class="control-group">
	            		<label class="control-label" for="direccion">Direcci&oacute;n<span class="required requerido">*</span></label>                   
	                  	<div class="controls">
	                        <input type="text" id='direccion' name='direccion' value="<?php echo set_value('direccion') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('direccion','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	
	            	<div class="control-group">
	            		<label class="control-label" for="link_avatar">Contacto<span class="required requerido">*</span></label>                  
	                  	<div class="controls">
	                        <input type="text" id='link_avatar' name='link_avatar' value="<?php echo set_value('link_avatar') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('link_avatar','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            		<label class="control-label" for="mail">E-mail<span class="required requerido">*</span></label>                  
	                  	<div class="controls">
	                        <input type="text" id='mail' name='mail' value="<?php echo set_value('mail') ?>">
	                        <p class="help-inline"><?php echo form_error('mail','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	                 <div class="control-group">
						<label class="control-label" for="password">Contrase&ntilde;a<span class="required requerido">*</span></label>                  
	                       <div class="controls">
	                           <input type="text" id='password' name='password' value="<?php echo set_value('password') ?>">
	                           <p class="help-inline"><?php echo form_error('password','<div class="label label-important">','</div>'); ?></p>
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
	</div>
		 <div id="push"></div>
    </div>
<?php $this->load->view('footer'); ?>