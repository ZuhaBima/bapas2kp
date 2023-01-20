<!DOCTYPE html>
<?php include '../config.php'; ?>
<html lang="en">

<head>
  <?php
  session_start();
  if ($_SESSION['status'] == 'login') { ?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BKD AR (ADMIN)- Bapas Pekanbaru</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/bapas.png" rel="icon">
    <link href="../assets/img/bapas.png" rel="Logoo">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../adminbps/dashboard.php" class="logo d-flex align-items-center">
        <img src="../assets/img/bapas.png" alt="">
        <img src="../assets/img/pemasyarakatan.png" alt="">
        <span class="d-none d-lg-block">Bapas Pekanbaru</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <a class="btn btn-outline-light" style="margin-right: 10px" href="../loginbps.php">Logout</a>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
      <li class="nav-heading">Main Menu</li>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>BKA</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../adminbps/bka-diversi.php">
              <i class="bi bi-circle"></i><span>Diversi</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bka-sidang.php">
              <i class="bi bi-circle"></i><span>Sidang</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bka-asimilasi rumah.php">
              <i class="bi bi-circle"></i><span>Asimilasi Rumah</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bka-cuti bersyarat.php">
              <i class="bi bi-circle"></i><span>Cuti Bersyarat</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bka-cuti menjelang bebas.php">
              <i class="bi bi-circle"></i><span>Cuti Menjelang Bebas</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bka-pembebasan bersyarat.php">
              <i class="bi bi-circle"></i><span>Pembebasan Bersyarat</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>BKD</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../adminbps/bkd-asimilasi rumah.php">
              <i class="bi bi-circle"></i><span>Asimilasi Rumah</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bkd-cuti bersyarat.php">
              <i class="bi bi-circle"></i><span>Cuti Bersyarat</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bkd-cuti menjelang bebas.php">
              <i class="bi bi-circle"></i><span>Cuti Menjelang Bebas</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bkd-pembebasan bersyarat.php">
              <i class="bi bi-circle"></i><span>Pembebasan Bersyarat</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/jenisLitmas.php">
          <i class="bi bi-book"></i>
          <span>Jenis Litmas</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/klien.php">
          <i class="bi bi-person"></i>
          <span>Klien</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/status.php">
          <i class="bi bi-activity"></i>
          <span>Status</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/Lapas.php">
          <i class="bi bi-file-code-fill"></i>
          <span>Lapas</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/kasus.php">
          <i class="bi bi-book-half"></i>
          <span>Kasus</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/userbapas.php">
          <i class="bi bi-people"></i>
          <span>User</span>
        </a>
      </li><!-- End Forms Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Asimilasi Rumah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../adminbps/dashboard.php">Home</a></li>
          <li class="breadcrumb-item">BKD</li>
          <li class="breadcrumb-item"><a href="../adminbps/bkd-asimilasi rumah.php">Asimilasi Rumah</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="mainpage">
      <div class="container">

        <div class="row height d-flex justify-content-center align-items-center">
          <div class="col-md-6">
            <div class="form">
              <form class="search-form d-flex align-items-center" method="POST" action="#">
                <i class="fa fa-search"></i>
                <input type="text" class="form-control form-input" placeholder="Search anything...">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                <span class="left-pan"><i class="fa fa"></i></span>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="mx-auto" style="float : right; margin-bottom:5px;">
        <a class="btn btn-primary" href="../adminbps/bkd-dataklienar.php" role="button">+</a>
      </div>
      <br>
      <table class="table">
        <thead>
          <tr align="center">
            <th scope="col">Nomor Litmas</th>
            <th scope="col">Nama Klien</th>
            <th scope="col">Lapas Asal</th>
            <th scope="col">Kasus</th>
            <th scope="col">PK</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>

          </tr>
        </thead>
        <tbody>
          <?php

          $result = pg_query($conn, "SELECT * FROM litmas  WHERE id_jenis_litmas = 4 AND id_jenis_klien= 2");
          $result2 = pg_query($conn, "SELECT nama_pegawai FROM pegawai INNER JOIN litmas ON pegawai.nip = litmas.nip WHERE id_jenis_litmas = 4 AND id_jenis_klien= 2");
          $result3 = pg_query($conn, "SELECT nama_lapas FROM lapas INNER JOIN litmas ON lapas.id_lapas = litmas.id_lapas WHERE id_jenis_litmas = 4 AND id_jenis_klien= 2");
          $result4 = pg_query($conn, "SELECT jenis_kasus FROM kasus INNER JOIN litmas ON kasus.id_kasus = litmas.id_kasus WHERE id_jenis_litmas = 4 AND id_jenis_klien= 2");
          $result5 = pg_query($conn, "SELECT nama_status_litmas FROM status_litmas INNER JOIN litmas ON status_litmas.id_status = litmas.id_status WHERE id_jenis_litmas = 4 AND id_jenis_klien= 2");


          while ($row = pg_fetch_array($result)) {
            $row2 = pg_fetch_array($result2);
            $row3 = pg_fetch_array($result3);
            $row4 = pg_fetch_array($result4);
            $row5 = pg_fetch_array($result5);

          ?>

            <tr align="center">
              <td><?= $row['id_litmas'] ?></td>
              <td><?= $row['nama_klien'] ?></td>
              <td><?= $row3['nama_lapas'] ?></td>
              <td><?= $row4['jenis_kasus'] ?></td>
              <td><?= $row2['nama_pegawai'] ?></td>
              <!-- <td><span class="badge rounded-pill bg-secondary"><?= $row5['nama_status_litmas'] ?></span></td> -->
              <td>
                <?php if ($row['id_status'] == 1) {
                ?><span class="badge rounded-pill bg-secondary">Sedang Diproses</span>
                <?php   } else if ($row['id_status'] == 2) {
                ?><span class="badge rounded-pill bg-primary">Telah Dikirim</span>
                <?php   } else {
                ?><span class="badge rounded-pill bg-danger">Ditolak</span>
                <?php   } ?>
              </td>

              <td>
                <div class="con">
                  <a class="bi bi-pencil-square bg-icon-primary" href="../adminbps/bkd-statusar.php?id_litmas=<?= $row['id_litmas'] ?>"></a>
                  <i class="bi bi-trash-fill bg-icon-danger" style="color: tomato;" href="#" role="button"></i>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bapas Pekanbaru</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bapaspekanbaru.kemenkumham.go.id/">Bapas Pekanbaru</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="..//vendor/quill/quill.min.js"></script>
  <script src="..//vendor/simple-datatables/simple-datatables.js"></script>
  <script src="..//vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
<?php } else {
    echo 'maaf Anda belum login.';
  }
?>

</html>