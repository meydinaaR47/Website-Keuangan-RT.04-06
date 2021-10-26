<?php 
$page = @$_GET['page'];

if ($page=="pengguna"){
$penggunaaktif ='active';	
}

if ($page=="dana_masuk"){
$datakeuangan1 ='menu-open';
$datakeuangan2 = 'active';
$dana_masukaktif = 'active';
}

if ($page=="dana_keluar"){
$datakeuangan1 ='menu-open';
$datakeuangan2 = 'active';
$dana_keluaraktif = 'active';
}


// INI YANG GUA UBAH
if ($page=="list_request"){
$datauser1 ='menu-open';
$datauser2 = 'active';
$request_aktif = 'active';
}

if ($page=="data_admin"){
$datauser1 ='menu-open';
$datauser2 = 'active';
$daftar_admin_aktif = 'active';
}

if ($page=="turnamen"){
  $datakegiatan1 ='menu-open';
  $datakegiatan2 = 'active';
  $dana_kegiatanaktif = 'active';
  }
// SAMPE SINI



?> 

<a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Info RT.04/06</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          

          <li class="nav-item has-treeview <?php echo $datakeuangan1 ?>">
            <a href="#" class="nav-link <?php echo $datakeuangan2 ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Keuangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=dana_masuk" class="nav-link <?php echo $dana_masukaktif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dana Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=dana_keluar" class="nav-link <?php echo $dana_keluaraktif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dana Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=turnamen" class="nav-link <?php echo $dana_kegiatanaktif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dana Kegiatan</p>
                </a>
              </li>
      
            </ul>
          </li>
          

          <!-- INI YANG GW UBAH -->
          <li class="nav-item has-treeview <?php echo $datauser1 ?>">
            <a href="#" class="nav-link <?php echo $datauser2 ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=list_request" class="nav-link <?php echo $request_aktif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=data_admin" class="nav-link <?php echo $data_admin_aktif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Admin</p>
                </a>
              </li>
              <!-- SAMPE SINI -->
      
            </ul>
          </li>
          
            </ul>
          </nav>
      <!-- /.sidebar-menu -->

    </div>