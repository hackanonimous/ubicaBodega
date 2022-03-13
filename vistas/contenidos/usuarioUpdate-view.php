 
 
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
              <form class="FormularioAjax" action="" method="POST" data-form="update">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Usuario</label>
                    <input type="text" class="form-control" placeholder="se asignara automaticamente su Usuario" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Cambiar contraseña</label>
                    <input type="password" class="form-control" placeholder="Ingrese una contraseña">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
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
