<?php
  if(isset($_POST['usuario_log']) && isset($_POST['clave_log'])){
    require_once "./controladores/loginControlador.php";
    $ins_login=new loginControlador();
    echo $ins_login->iniciar_sesion_controlador();
  }
?>
<div class="hold-transition login-page">
	<div class="login-box">
  <div class="login-logo">
    <p><b>Sistema</b>LICENCIAS</p>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicie sesion para comensar</p>
      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="user" placeholder="Ingrese su Usuario(DNI)" name="usuario_log" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" placeholder="Ingrese su Contraseña" name="clave_log" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordar
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>