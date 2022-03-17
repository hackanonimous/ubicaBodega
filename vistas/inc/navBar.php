<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo SERVERURL;?>vistas/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Barra de Navegacion superior-->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Boton de menu -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Botones de la barra de navegacion derecha -->
    <ul class="navbar-nav ml-auto">
      <!-- Boton de Perfil -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Datos de perfil -->
            <div class="media">
              <img src="<?php echo SERVERURL;?>vistas/dist/img/avatar1.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $_SESSION['nombre_sel']." ". $_SESSION['apaterno_sel']?>
                  <span class="float-right text-sm text-info"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm"><?php echo $_SESSION['privilegio_sel'];?> de Pagina</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 horas activo</p>
              </div>
            </div>
            <!-- fin datos de perfil -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Editar Perfil</a>
        </div>
      </li>
      <!-- Boton de Cerrar sesion -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-power-off"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="btn-exit-system dropdown-item">
            <i class="fas fa-door-open mr-2"></i> Cerrar Sesion
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.Barra de Navegacion superior-->