<?php
$menus = [
  'Home' => 'index.php',
  'Produk' => 'produk.php',
  'Profile' => 'profile.php',
  'Logout' => 'logout.php'
];

$icons = [
  'Home' => 'fa-home',
  'Produk' => 'fa-list-alt',
  'Profile' => 'fa-user',
  'Logout' => 'fa-info-circle'
];
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/admin.jpg" width="160" height="160" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Ayu Safriya</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <?php foreach ($menus as $title => $link) : ?>
          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
            <a class="nav-link" href="<?= $link ?>">
              <i class="fas fa-fw <?= $icons[$title]; ?>"></i>
              <span><?= $title ?></span></a>
          </li>

        <?php endforeach ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>