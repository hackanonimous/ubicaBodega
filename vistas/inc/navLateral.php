<!-- Menu de Barra lateral -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Nombre de sistema y logo -->
    <a href="./index.html" class="brand-link">
      <img src="<?php echo SERVERURL;?>vistas/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sis Licencias</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Panel de Usuario (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo SERVERURL;?>vistas/dist/img/avatar1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jose Alvarez</a>
        </div>
      </div>

      <!-- Menus del Sidebar -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">GENERAL</li>
          <li class="nav-item menu-open">
            <a href="<?php echo SERVERURL;?>home/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Personas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo SERVERURL;?>personaNew/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar persona</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo SERVERURL;?>personaList/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Personas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">GDEL</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Empresa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo SERVERURL;?>empresaNew/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo SERVERURL;?>empresaList/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de empresa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Licencias de funcionamiento
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar licencia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de licencias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar licencia</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">TRANSPORTES</li>
          <li class="nav-header">ADMINISTRADOR</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Usuarios de sistema
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuario nuevo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de ususarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar usuario</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.Menus del Sidebar -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- /.Menu de Barra lateral -->