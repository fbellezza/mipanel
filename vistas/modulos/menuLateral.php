<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio" class="brand-link">
      <img src="vistas/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminFEB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="vistas/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="perfil" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- boton de dashboard-->
          <li class="nav-item has-treeview">
            <a href="inicio" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          <!-- boton de Usuarios-->
          <li class="nav-item has-treeview">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

           <!-- boton de Agenda-->
          <li class="nav-item">
            <a href="agenda" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Agenda
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>