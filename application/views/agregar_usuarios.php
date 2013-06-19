<?php $this->load->view('header')?>

	<div class="container">
		<p><?php $prueba ?></p>
		<div class="row-fluid">
		<div id="push2"></div>
			<div class="span8 offset2 contenedor agregar_concesionario" text-align="center">
				<form method="post" action="<?php current_url() ?>" enctype="multipart/form-data">
					<div class="control-group">
						<h2>AGREGAR UN NUEVO USUARIO</h2>
	                  	<div class="controls">
	                        <input type="text" placeholder="Nombres*" id='first_name' name='first_name' value="<?php echo set_value('first_name') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('first_name','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	            	        <div class="controls">
	                        <input id="last_name" placeholder="Apellidos*"  name="last_name" class="required"><?php echo set_value('last_name') ?></input>
	                        <p class="help-inline"><?php echo form_error('last_name','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>
                    <div class="control-group">
	                  	<div class="controls">
	                        <input type="text" id='phone' placeholder="Tel&eacute;fono*" name='phone' value="<?php echo set_value('phone') ?>">
	                        <p class="help-inline"><?php echo form_error('phone','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="text" id='phone2' placeholder="Tel&eacute;fono2" name='phone2' value="<?php echo set_value('phone2') ?>">
	                        <p class="help-inline"><?php echo form_error('phone2','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>
	            	<div class="form-inline solo">
	            	<?php echo form_label('Tipo de Usuario:') ?>
					<?php echo form_dropdown('nivel_usuario',$niveles,set_value('nivel_usuario'),"id='niveles'"); ?>
					<p class="help-inline"><?php echo form_error('nivel_usuario','<div class="label label-important">','</div>'); ?></p>
					</div>
				</br>
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
	                        <input type="text" placeholder="Direcci&oacute;n*" id='direccion' name='direccion' value="<?php echo set_value('direccion') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('direccion','<div class="label label-important">','</div>'); ?></p>
	                  	</div>
	            	</div>

	            	
	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="text" placeholder="Contacto*" id='link_avatar' name='link_avatar' value="<?php echo set_value('link_avatar') ?>">
	                        <!--input class="input-xlarge"  id="tipo_id" type="text" name="tipo_id" value="<?php echo set_value('tipo_id'); ?>"  /-->
	                        <p class="help-inline"><?php echo form_error('link_avatar','<div class="label label-important">','</div>'); ?></p>
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
	                           <input type="password" id='password' placeholder="Contrase&ntilde;a*" name='password' value="<?php echo set_value('password') ?>">
	                           <p class="help-inline"><?php echo form_error('password','<div class="label label-important">','</div>'); ?></p>
	                       </div>
	                 </div>
<hr/>
	            	<div class="control-group">
	                  	<div class="controls">
	                        <input type="submit" name="submit"  class="btn btn-large btn-primary"  value="Registrar Usuario"/>
	                  	</div>
	            	</div>
				</form>
<div id="push"></div>
			</div>
		</div>
	</div>
		 
    </div>
<div id="push2"></div>
<?php $this->load->view('footer'); ?>