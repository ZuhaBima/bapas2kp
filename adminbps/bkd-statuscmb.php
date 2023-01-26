<!DOCTYPE html>
<?php include '../config.php';
$id_litmas = $_GET['id_litmas'];
$sql = pg_query($conn, "SELECT * from litmas where id_litmas='$id_litmas'");
$row = pg_fetch_array($sql); ?>

<html lang="en">

<head>
  <?php
  session_start();
  if ($_SESSION['status'] == 'login') { ?>
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
        <a class="nav-link " href="../adminbps/dashboard.php">
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
          <span>Pegawai</span>
        </a>
      </li><!-- End Forms Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Ubah Status Klien</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../adminbps/dashboard.php">Beranda</a></li>
          <li class="breadcrumb-item">BKD</li>
          <li class="breadcrumb-item"><a href="../adminbps/bkd-cuti menjelang bebas.php">Cuti Menjelang Bebas</a></li>
          <li class="breadcrumb-item"><a href="../adminbps/bkd-statuscmb.php">Ubah Status Klien</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="mainpage">
      <div class="container">

      </div>
      <!-- Button trigger modal -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Ubah Status Klien</h5>

                <!-- General Form Elements -->
                <form method="POST">
                  <div class="row mb-6">
                    <label for="inputText" class="col-sm-2 col-form-label" required>Nomor Litmas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_litmas" value="<?php echo $row['id_litmas']; ?>" required>
                    </div>
                  </div>
                  <br>
                  <div class="row mb-6">
                    <label for="inputText" class="col-sm-2 col-form-label" required>Nama Klien</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_klien" value="<?php echo $row['nama_klien']; ?>" required>
                    </div>
                  </div>
                  <br>
                  <div class="row mb-6">
                    <label for="inputText" class="col-sm-2 col-form-label" required>Jenis Klien</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="BKD" readonly>
                    </div>
                  </div>
                  <br>
                  <div class="row mb-6">
                    <label for="inputText" class="col-sm-2 col-form-label" required>Jenis Litmas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="Pembebasan Bersyarat" readonly>
                    </div>
                  </div>
                  <br>
                  <div class="row mb-6">
                    <label class="col-sm-2 col-form-label">Lapas Asal</label>
                    <div class="col-sm-10">
                      <select style="padding:5px 10px; width:100%;" class="chosen-select" data-placeholder="Pilih Lapas Asal" name="lapas" required>
                        <option>Pilih Lapas Asal</option>
                        <?php
                        include '../connect.php';
                        $lapas = pg_query($conn, "SELECT * FROM lapas ORDER BY nama_lapas ASC");
                        while ($row2 = pg_fetch_assoc($lapas)) {
                        ?>
                          <option value="<?php echo $row2['id_lapas'] ?>" <?php if ($row['id_lapas'] == $row2['id_lapas']) {
                                                                            echo 'selected';
                                                                          } ?>>
                            <?php echo $row2['nama_lapas'] ?>
                          </option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="row mb-6">
                    <label class="col-sm-2 col-form-label">PK</label>
                    <div class="col-sm-10">
                      <select style="padding:5px 10px; width:100%;" class="chosen-select" data-placeholder="Pilih PK Klien" name="pk" required>
                        <option>Pilih PK</option>
                        <?php
                        include '../connect.php';
                        $nip = pg_query($conn, "select * from pegawai order by nama_pegawai ASC");
                        while ($row2 = pg_fetch_assoc($nip)) {
                        ?>
                          <option value="<?php echo $row2['nip'] ?>" <?php if ($row['nip'] == $row2['nip']) {
                                                                        echo 'selected';
                                                                      } ?>>
                            <?php echo $row2['nama_pegawai'] ?>
                          </option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="row mb-6">
                    <label class="col-sm-2 col-form-label">Jenis Kasus</label>
                    <div class="col-sm-10">
                      <select style="padding:5px 10px; width:100%;" class="chosen-select" data-placeholder="Pilih Jenis Kasus" name="kasus" required>
                        <option>Pilih Jenis Kasus</option>
                        <?php
                        include '../connect.php';
                        $kasus = pg_query($conn, "select * from kasus order by jenis_kasus ASC");
                        while ($row2 = pg_fetch_assoc($kasus)) {
                        ?>
                          <option value="<?php echo $row2['id_kasus'] ?>" <?php if ($row['id_kasus'] == $row2['id_kasus']) {
                                                                            echo 'selected';
                                                                          } ?>>
                            <?php echo $row2['jenis_kasus'] ?>
                          </option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="row mb-6">
                    <label class="col-sm-2 col-form-label">Status Klien</label>
                    <div class="col-sm-10">
                      <select style="padding:5px 10px; width:100%;" class="chosen-select" data-placeholder="Pilih Status Klien" name="status" required>
                        <option>Pilih Status Saat ini</option>
                        <?php
                        include '../connect.php';
                        $status = pg_query($conn, "select * from status_litmas order by id_status ASC");
                        while ($row2 = pg_fetch_assoc($status)) {
                        ?>
                          <option value="<?php echo $row2['id_status'] ?>" <?php if ($row['id_status'] == $row2['id_status']) {
                                                                              echo 'selected';
                                                                            } ?>>
                            <?php echo $row2['nama_status_litmas'] ?>
                          </option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="container-fluid py-5">
                      <div class="container">
                        <div class="mx-auto" style="width: 200px;">
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="width: 120px; float :right; margin-top :10px">
                            Simpan
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi</h5>
                                  <button type="submit" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Apakah anda yakin ingin menambahkan data klien ini?
                                </div>
                                <div class="modal-footer ">
                                  <div>
                                    <input type="submit" name="tolak" value="Tidak" class="btn btn-" style="width: 120px; float :right; margin-top :10px" href="../adminbps/dataklienar.php">
                                  </div>
                                  <div>
                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="width: 120px; float :right; margin-top :10px">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </form><!-- End General Form Elements -->
              </div>

            </div>
      </section>
      <?php if (isset($_POST['simpan'])) {
        $id_litmas = $_POST['id_litmas'];
        $nama_klien = $_POST['nama_klien'];
        $lapass = $_POST['lapas'];
        $pkk = $_POST['pk'];
        $kasuss = $_POST['kasus'];
        $statuss = $_POST['status'];

        $sql = pg_query($conn, "UPDATE litmas SET id_litmas = '$id_litmas', nama_klien = '$nama_klien', nip='$pkk', id_kasus='$kasuss', id_lapas='$lapass', id_status='$statuss' WHERE id_litmas = '$id_litmas'");

        if ($sql) {
          echo "<script>alert('Data berhasil diedit');window.location='../adminbps/bkd-cuti menjelang bebas.php';</script>";
        } else {
          echo pg_last_error($conn);
        }
      } ?>


    </div>
  </main>


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