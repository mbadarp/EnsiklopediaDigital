  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">INDOPEDIA </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Data Ensiklopedia
    </div>

    <!-- Nav Item - Charts -->
    <?php echo '<li class="nav-item">
  <a class="nav-link" href="' . base_url('admin/index') . '">
    <i class="fas fa-fw fa-user"></i>
    <span>Data Admin</span></a>
</li>'; ?>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php echo '<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Data Provinsi</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Daftar Pengguna:</h6>
      <a class="collapse-item" href="' . base_url('provinsi/index') . '">Data Provinsi</a>
      <a class="collapse-item" href="' . base_url('geografis/index') . '">Geografis Provinsi</a>
      <a class="collapse-item" href="' . base_url('provinsi/tentang_aplikasi') . '">Tentang Aplikasi</a>
      
   
    </div>
  </div>
</li>'; ?>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->