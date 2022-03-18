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
<!-- Cabezera (Pagina cabezera) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Lista de Usuario de Sistema</h1>
      </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo SERVERURL;?>home/">Home</a></li>
        <li class="breadcrumb-item active">Lista Usuarios</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.Cabezera de contenido central -->
            <!-- Tablas -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tabla de las usuarios registrados en el sistema</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>DNI</th>
                <th>Nombres y Apellidos</th>
                <th>Estado</th>
                <th>Privilegio</th>
                <th>Telefono</th>
                <th>Mail</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
              </tr>
              </thead>

              <tbody>
              
                <?php
                  require_once "./controladores/usuarioControlador.php";
                  $ins_listaUsuario=new usuarioControlador();
                  echo $ins_listaUsuario->listar_usuario_controlador($_SESSION['privilegio_sel'],$_SESSION['id_sel']);
                ?>

              </tbody>

              <tfoot>
              <tr>
                <th>DNI</th>
                <th>Nombres y Apellidos</th>
                <th>Estado</th>
                <th>Privilegio</th>
                <th>Telefono</th>
                <th>Mail</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
              </tr>
              </tfoot>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.Tablas -->