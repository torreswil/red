<?php $this->load->view('header')?>

  <div class="container">
    <div class="row-fluid">
    <div id="push2"></div>
      <div class="span8 offset2 contenedor agregar_concesionario">

         <form method="post" action="<?php current_url() ?>" enctype="multipart/form-data">
            <div class="control-group">
                <div class="controls">
                  <h2>INICIAR SESION</h2>
                    <input type="text" placeholder="Correo Electronico/Usuario*" id='identity' name='identity' value="<?php echo set_value('identity') ?>">
                </div>
            </div>


            <div class="control-group">
                <div class="controls">
                    <input type="password" placeholder="Contrase&ntilde;a*" id='password' name='password' value="<?php echo set_value('password') ?>">
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                 <p><label class="checkbox casillas inline">Recordar en este equipo<input type="checkbox" name="remember" value="1" id="remember"></p></label>
                </div>
            </div>
<hr/>
            <div class="control-group">
                      <div class="controls">
                          <input type="submit" class="btn btn-large btn-primary"  name="submit" value="Iniciar Sesi&oacute;n">
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