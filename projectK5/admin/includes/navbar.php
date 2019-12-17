<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow ">
        <a class="nav-link dropdown-toggle ml-auto" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle fa-fw "></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="profil.php">Profil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
         <i class="fas fa-home"></i> <span>Dashboard</span>
        </a>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <!--<i class="fas fa-fw fa-table"></i>-->
          <i class="fab fa-elementor"></i>
          <span>Menu</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Menu Owner</h6>
          <a class="dropdown-item" href="beranda.php">Beranda</a>
          <a class="dropdown-item" href="#">Profil</a>
          <a class="dropdown-item" href="gallery.php">Galeri</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other</h6>
          <a class="dropdown-item" href="judul.php">Judul Depan</a>
          <a class="dropdown-item" href="#">Contact Person</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-table"></i>
          <span>Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <?php $level = $_SESSION['level'] == 'Admin';
        if ($level){
          ?>
          <a class="dropdown-item" href="calonpeserta.php">Calon Peserta</a>
          <a class="dropdown-item" href="pesertakursus.php">Peserta Kursus</a>
          <a class="dropdown-item" href="pesertapelatihan.php">Peserta Pelatihan</a>
          <?php
        }else{
          ?>          
          <a class="dropdown-item" href="user.php">User</a>
          <a class="dropdown-item" href="calonpeserta.php">Calon Peserta</a>
          <a class="dropdown-item" href="pesertakursus.php">Peserta Kursus</a>
          <a class="dropdown-item" href="pesertapelatihan.php">Peserta Pelatihan</a>
          <?php
        }
        ?>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-tasks"></i>
          <span>Materi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="materikursus.php">Materi Kursus</a>
          <a class="dropdown-item" href="materipelatihan.php">Materi Pelatihan</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-calendar-minus"></i>
          <span>Jadwal</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="jadwalkursus.php">Jadwal Kursus</a>
          <a class="dropdown-item" href="jadwalpelatihan.php">Jadwal Pelatihan</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-certificate"></i>
          <span>Nilai & Sertifikat</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="nilaikursus.php">Nilai Kursus</a>
          <a class="dropdown-item" href="nilaipelatihan.php">Nilai Pelatihan</a>
          <a class="dropdown-item" href="sertifikatkursus.php">Sertifikat Kursus</a>
          <a class="dropdown-item" href="sertifikatpelatihan.php">Sertifikat Pelatihan</a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
</ul>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>