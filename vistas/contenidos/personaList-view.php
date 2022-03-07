<!-- Cabezera (Pagina cabezera) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Lista de Personas</h1>
      </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo SERVERURL;?>home/">Home</a></li>
        <li class="breadcrumb-item active">Lista Persona</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.Cabezera de contenido central -->
            <!-- Tablas -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tabla de las personas registradas en el sistema</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>DNI</th>
                <th>Nombres y Apellidos</th>
                <th>Telefono</th>
                <th>Acciones</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>70133573</td>
                <td>jose luis alvarez escobar
                </td>
                <td>917452076</td>
                <td>
                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt">Eliminar</i></button>
                  <button type="button" class="btn btn-primary"><i class="fas fa-upload">Actualizar</i></button>
                </td>
              </tr>
               <tr>
                <td>70133573</td>
                <td>jose luis alvarez escobar
                </td>
                <td>917452076</td>
                <td>
                  <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt">Eliminar</i></button>
                  <button type="button" class="btn btn-primary"><i class="fas fa-upload">Actualizar</i></button>
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <th>DNI</th>
                <th>Nombres y Apellidos</th>
                <th>Telefono</th>
                <th>Acciones</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.Tablas -->