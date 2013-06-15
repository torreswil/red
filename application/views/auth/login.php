<?php $this->load->view('header')?>

  <div class="container">
    <div class="row ">
      <div id="push"></div>
      <div class="span8 offset2"><h2>Iniciar Sesion</h2></div>
    </hr>
      <div class="span8 offset2 contenedor agregar_concesionario">

         <form method="post" action="<?php current_url() ?>" enctype="multipart/form-data">
            <div class="control-group">
                <label class="control-label" for="identity">Email/usuario:<span class="required requerido">*</span></label>                
                <div class="controls">
                    <input type="text" id='identity' name='identity' value="<?php echo set_value('identity') ?>">
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="password">Password:<span class="required requerido">*</span></label>                
                <div class="controls">
                    <input type="password" id='password' name='password' value="<?php echo set_value('password') ?>">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="remember">Recordar:</label>                
                <div class="controls">
                    <input type="checkbox" name="remember" value="1" id="remember">
                </div>
            </div>

            <div class="control-group">
                      <div class="controls">
                          <input type="submit" name="submit" value="Entrar">
                      </div>
                </div>
        </form>
      </div>
    </div>
  </div>
     <div id="push"></div>
    </div>
<?php $this->load->view('footer'); ?>