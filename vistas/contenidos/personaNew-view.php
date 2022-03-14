<script type="text/javascript">
  let navLatePers = document.querySelector('#nav-personas');
  navLatePers.classList.add('menu-open');
</script>
<!-- CCabezera (Pagina cabezera) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Registrar una Persona</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo SERVERURL;?>">Home</a></li>
          <li class="breadcrumb-item active">Registrar persona</li>
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
                <h3 class="card-title">Registro de Persona</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="FormularioAjax" action="<?php echo SERVERURL;?>ajax/personaAjax.php" method="POST" data-form="save">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label for="persona_dni">N° DNI</label>
                    <input type="number" class="form-control" placeholder="Ingrese su numero de DNI" pattern="[0-8]{1,20}" id="persona_dni" name="persona_dni_reg" maxlength="8" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="persona_nombre">Nombres</label>
                    <input type="text" class="form-control" placeholder="Ingrese sus Nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{1,45}" id="persona_nombre" name="persona_nombre_reg" maxlength="45" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="persona_apaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" placeholder="Ingrese su Apellido Paterno" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,45}" id="persona_apaterno" name="persona_apaterno_reg" maxlength="45" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="persona_amaterno">Apellido Materno</label>
                    <input type="text" class="form-control" placeholder="Ingrese su Apellido Materno" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,45}" id="persona_amaterno" name="persona_amaterno_reg" maxlength="45" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="persona_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" placeholder="Ingrese su Apellido Materno" id="persona_nacimiento" name="persona_nacimiento_reg" maxlength="45" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="persona_celular">N° de Celular</label>
                    <input type="tel" class="form-control" placeholder="Ingrese su numero de celular" pattern="[0-9]{1,20}" id="persona_celular" name="persona_celular_reg" maxlength="9" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="persona_email">Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese su email" id="persona_email" name="persona_email_reg">
                  </div>
                </div>
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                  <button type="submit" class="btn btn-danger">Cancelar</button>
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
