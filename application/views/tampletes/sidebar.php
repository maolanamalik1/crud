
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php echo base_url();?>assets/dist/img/tut.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Data Sekolah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="<?=base_url(); ?>Home" class="nav-link">
            <i class='fas fa-home' style='font-size:20px'></i>
              <p class="text">Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url(); ?>datasiswa" class="nav-link">
            <i class='fas fa-book' style='font-size:20px'></i>
              <p> Data Siswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url(); ?>dataguru" class="nav-link">
            <i class='fas fa-briefcase' style='font-size:20px'></i>
              <p>Data Guru</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="<?=base_url(); ?>Auth/logout" class="nav-link">
            <i class='fas fa-door-open' style='font-size:2opx'></i>
              <p>logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
