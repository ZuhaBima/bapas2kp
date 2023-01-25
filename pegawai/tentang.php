<?php
session_start();
if ($_SESSION['status'] == 'login') { ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Bapas Pekanbaru</title>
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
<<<<<<< HEAD
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top d-flex align-items-center">
  
    <div class="d-flex align-items-center justify-content-between">
<a href="../pegawai/dashboard.html" class="logo d-flex align-items-center">
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
=======
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="../pegawai/dashboard.php" class="logo d-flex align-items-center">
          <img src="../assets/img/bapas.png" alt="">
          <span class="d-none d-lg-block">Bapas Pekanbaru</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->

          <a class="btn btn-outline-light" style="margin-right: 10px" href="../logout.php">Logout</a>


    </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
        <li class="nav-heading">Main Menu</li>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="../pegawai/dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Beranda</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>BKA</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="../pegawai/bka-diversi.php">
                <i class="bi bi-circle"></i><span>Diversi</span>
              </a>
            </li>
            <li>
              <a href="../pegawai/bka-sidang.php">
                <i class="bi bi-circle"></i><span>Sidang</span>
              </a>
            </li>
            <li>
              <a href="../pegawai/bka-asimilasi rumah.php">
                <i class="bi bi-circle"></i><span>Asimilasi Rumah</span>
              </a>
            </li>
            <li>
              <a href="../pegawai/bka-cuti bersyarat.php">
                <i class="bi bi-circle"></i><span>Cuti Bersyarat</span>
              </a>
            </li>
            <li>
              <a href="../pegawai/bka-cuti menjelang bebas.php">
                <i class="bi bi-circle"></i><span>Cuti Menjelang Bebas</span>
              </a>
            </li>
            <li>
              <a href="../pegawai/bka-pembebasan bersyarat.php">
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
              <a href="../pegawai/bkd-asimilasi rumah.php">
                <i class="bi bi-circle"></i><span>Asimilasi Rumah</span>
              </a>
            </li>
            <li>
              <a href="../pegawai/bkd-cuti bersyarat.php">
                <i class="bi bi-circle"></i><span>Cuti Bersyarat</span>
              </a>
            </li>
            <li>
              <a href="../pegawai/bkd-cuti menjelang bebas.php">
                <i class="bi bi-circle"></i><span>Cuti Menjelang Bebas</span>
              </a>
            </li>
            <li>
              <a href="../pegawai/bkd-pembebasan bersyarat.php">
                <i class="bi bi-circle"></i><span>Pembebasan Bersyarat</span>
              </a>
            </li>
          </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="../pegawai/layanan.php">
            <i class="bi bi-person"></i>
            <span>Layanan</span>
          </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
          <a class="nav-link " href="../pegawai/tentang.php">
            <i class="bi bi-question-circle"></i>
            <span>Tentang</span>
          </a>
        </li><!-- End F.A.Q Page Nav -->

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tentang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../pegawai/dashboard.php">Beranda</a></li>
          <li class="breadcrumb-item"><a href="../pegawai/tentang.php">Tentang</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   
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

  </html>

<?php } else {echo 'maaf Anda belum login.';}
?>