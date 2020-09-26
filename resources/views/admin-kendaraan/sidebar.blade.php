<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <h2 class="text-center brand-link text-uppercase">Kendaraan App</h2>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('img/profile.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block text-uppercase">Adit Asyhari</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-list-ul"></i>
                <p>
                  Kendaraan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/kendaraans') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kendaraan List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/kendaraans/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kendaraan Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" style="position: fixed; bottom: 0; width: 17.3%">
            <a href="{{ url('/') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>