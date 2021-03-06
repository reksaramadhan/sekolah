<?php  
				include 'koneksi.php';
				$no = 1;
				$select = mysqli_query($conn, "SELECT*FROM jurusan");
			?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../asset/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sekolah</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#siswa" aria-expanded="true" aria-controls="siswa">
          <i class="fas fa-fw fa-folder"></i>
          <span>Siswa</span>
        </a>
        <div id="siswa" class="collapse" aria-labelledby="siswa" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="form-tambah-siswa.php">Tambah Siswa</a>
            <a class="collapse-item" href="form-siswa.php">View Siswa</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kelas" aria-expanded="true" aria-controls="kelas">
          <i class="fas fa-fw fa-folder"></i>
          <span>kelas</span>
        </a>
        <div id="kelas" class="collapse" aria-labelledby="kelas" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="form-tambah-kelas.php">Tambah Kelas</a>
            <a class="collapse-item" href="form-kelas.php">View Kelas</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jurusan" aria-expanded="true">
          <i class="fas fa-fw fa-folder"></i>
          <span>Jurusan</span>
        </a>
        <div id="jurusan" class="collapse" aria-labelledby="jurusan" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="form-tambah-jurusan.php">Tambah Jurusan</a>
            <a class="collapse-item" href="form-jurusan.php">View Jurusan</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mapel" aria-expanded="true" aria-controls="mapel">
          <i class="fas fa-fw fa-folder"></i>
          <span>Mata Pelajaran</span>
        </a>
        <div id="mapel" class="collapse" aria-labelledby="mapel" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="form-tambah-mapel.php">Tambah Mata Pelajaran</a>
            <a class="collapse-item" href="form-mapel.php">View Mata Pelajaran</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#guru" aria-expanded="true" aria-controls="guru">
          <i class="fas fa-fw fa-folder"></i>
          <span>Guru</span>
        </a>
        <div id="guru" class="collapse" aria-labelledby="guru" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="form-tambah-guru.php">Tambah Guru</a>
            <a class="collapse-item" href="form-guru.php">View Guru</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jadwal" aria-expanded="true" aria-controls="jadwal">
          <i class="fas fa-fw fa-folder"></i>
          <span>Jadwal</span>
        </a>
        <div id="jadwal" class="collapse" aria-labelledby="jadwal" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="form-tambah-jadwal.php">Tambah Jadwal</a>
            <a class="collapse-item" href="form-jadwal.php">View Jadwal</a>
          </div>
        </div>
      </li>

      </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2>Tambah <b>Jurusan</b></h2>
          </div>
  <form action="aksi-tambah-jurusan.php" method="POST">
  <table>
    <tr>
      <td><input type="hidden" name="id_jurusan" placeholder="ID JURUSAN"></td>
    </tr>
    <tr>
       <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Jurusan
      </label>
      <input class="form-control" type="text" name="jurusan" placeholder="Jurusan" required>
     </div><br>
     <div class="form-group ">
      <label class="control-label " for="subject">
       Keterangan
      </label>
      <input class="form-control" type="text" name="ket" placeholder="Keterangan" required>
     </div><br><br>
      <td>
      <div class="form-group">
      <div>
       <button class="btn btn-primary" type="submit" name="simpan" value="Simpan">Simpan</button>
       <button type="reset" class="btn btn-danger">Reset</button>
     </div>
   </div>
     </td>
    </tr>
  </table>
</form><br>
  <script src="../asset/vendor/jquery/jquery.min.js"></script>
  <script src="../asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../asset/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../asset/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../asset/js/demo/chart-area-demo.js"></script>
  <script src="../asset/js/demo/chart-pie-demo.js"></script>
  </body>
</html>