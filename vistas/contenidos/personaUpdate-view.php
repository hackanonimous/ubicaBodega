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
              <form class="FormularioAjax" action="" method="POST" data-form="update">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>N° DNI</label>
                    <input type="number" class="form-control" placeholder="Ingrese su numero de DNI">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Nombres</label>
                    <input type="text" class="form-control" placeholder="Ingrese sus Nombres">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Apellido Paterno</label>
                    <input type="text" class="form-control" placeholder="Ingrese su Apellido Paterno">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Apellido Materno</label>
                    <input type="text" class="form-control" placeholder="Ingrese su Apellido Materno">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Fecha de Nacimiento</label>
                    <input type="date" class="form-control" placeholder="Ingrese su Apellido Materno">
                  </div>
                  <div class="form-group col-md-6">
                    <label>N° de Celular</label>
                    <input type="number" class="form-control" placeholder="Ingrese su numero de celular">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese su email">
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
