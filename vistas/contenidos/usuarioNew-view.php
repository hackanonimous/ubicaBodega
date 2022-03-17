<?php
  if($_SESSION['privilegio_sel']!='Administrador'){
    echo $lc->forzar_cierre_sesion_controlador();
    exit();
  }
?>
<script type="text/javascript">
  let navLateUsu = document.querySelector('#nav-usuario');
  navLateUsu.classList.add('menu-open');
</script>
<!-- CCabezera (Pagina cabezera) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Registrar un Usuario de Sistema</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo SERVERURL;?>">Home</a></li>
          <li class="breadcrumb-item active">Registrar Usuario de Sistema</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.Cabezera de contenido central -->
<section class="content">
	<div class="container-fluid">
		<!-- Formularios -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de Usuario de Sistema</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="FormularioAjax" action="<?php echo SERVERURL;?>ajax/usuarioAjax.php" method="POST" data-form="save">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Seleccione una Persona</label>
                    <select class="select2" multiple="multiple" data-placeholder="Seleccione Persona" style="width: 100%;" id="select_persona" name="usuario_dni_reg" required>
                      
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Usuario</label>
                    <input type="text" class="form-control" placeholder="se asignara automaticamente su Usuario" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Clave</label>
                    <input type="password" class="form-control" placeholder="Ingrese una contraseña" id="usuario_clave1" name="usuario_clave_1_reg">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Repita su Clave</label>
                    <input type="password" class="form-control" placeholder="Repita su contraseña" id="usuario_clave2" name="usuario_clave_2_reg">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Estado del Usuario</label>
                    <select class="select2" multiple="multiple" data-placeholder="Seleccione Representante" style="width: 100%;" name="usuario_estado_reg" required>
                      <option  value="1">Activo</option>
                      <option  value="0">Inactivo</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Privilegio de Usuario</label>
                    <select class="select2" multiple="multiple" data-placeholder="Seleccione Representante" style="width: 100%;" name="usuario_privilegio_reg" required>
                      <option>Administrador</option>
                      <option>Editor</option>
                      <option>Registrador</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                  <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.Formularios -->
	</div>
</section> 
<script type="text/javascript">
  window.onload=select_personas();
  function select_personas(){
    const url = 'http://localhost/ubicaBodega/ajax/listarSelectAjax.php';
    let html=''
    let selectPersona=document.querySelector('#select_persona')
    fetch(url)
    .then(result=>result.json())
    .then(result => {
      result.forEach(result=>{
        let plantilla = `
          <option value="${result['persona_dni']}">${result['persona_dni']}-${result['persona_nombres']} ${result['persona_apaterno']} ${result['persona_amaterno']}</option>
        `
        html += plantilla;
      })
      selectPersona.innerHTML = html
    })
  }
</script>