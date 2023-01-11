<?php
include "../config.php";
$id_barang = 0;
$stok = 0;

if (isset($_POST['simpan'])){
    $id_barang = $_POST['id_barang'];
    $stok = $_POST['total_barang'];

}

$query = pg_query($conn, "SELECT max(no_faktur) as no_faktur FROM transaksi");
$row = pg_fetch_array($query);
$kode = $row['no_faktur'];
$urutan = (int) substr($kode, 3, 3);
$urutan=$urutan+1;
$huruf = "FT";
$id = $huruf . sprintf("%03s", $urutan); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Input Transaksi - Bima Motor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/Logoo.PNG" rel="icon">
  <link href="../assets/img/Logoo.PNG" rel="Logoo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
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
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/Logoo.PNG" alt="">
        <span class="d-none d-lg-block">Bima Motor</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="../kasir/index_kasir.php">
            <i class="bi bi-house"></i>
            <span>Beranda</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
      <ul class="sidebar-nav" id="sidebar-nav">
  
      <li class="nav-item">
          <a class="nav-link collapsed" href="../kasir/view_pelanggan.php">
            <i class="bi bi-person-fill"></i>
            <span>Pelanggan</span>
          </a>
        </li>

          <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cash-stack"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="../kasir/view_transaksi.php">
                <i class="bi bi-circle"></i><span>Transaksi</span>
              </a>
            </li>
            <li>
              <a href="../kasir/view_pembayaran-kasir.php">
                <i class="bi bi-circle"></i><span>Pembayaran</span>
              </a>
            </li>
          </ul>
          </li>
        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="../login.php">
            <i class="bi bi-door-open-fill"></i>
            <span>Logout</span>
          </a>
        </li><!-- End F.A.Q Page Nav -->
  
    </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Transaksi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../kasir/index_kasir.php">Home</a></li>
          <li class="breadcrumb-item">Transaksi</li>
          <li class="breadcrumb-item active">Tambah Transaksi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    include "../config.php";

    ?>


    <section class="main-panel d-flex">
      <div class="container card">
        <div class="section-title">
          <h3 class="fw-bolder mb-4">Tambah Transaksi</h3>

        </div>


        <form method="POST" class="d-flex">
          <div class="col-sm-6">
            <label for="">No Faktur</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="no_faktur" class="form-control" value ="<?php echo $id?>" readonly />
              </div>
            </div>

            <div class="form-group" style="margin-bottom:20px">
              <label for="id_pelanggan" style="margin-bottom:10px">id_pelanggan</label>
              <select style="padding:5px 10px; width:100%;" class="chosen-select" data-placeholder="Pilih Pelanggan :" name="id_pelanggan" required>
                <option value="<?php ?>" disabled selected>Pelanggan</option>
                <?php
                include '../connect.php';
                $pelanggan = pg_query($conn, "SELECT * FROM pelanggan order by id_pelanggan ASC");
                while ($row = pg_fetch_assoc($pelanggan)) {
                  echo "<option value='$row[id_pelanggan]'>$row[nama_pelanggan] - $row[plat_mobil] - $row[keperluan] </option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group" style="margin-bottom:20px">
              <label for="id_barang" style="margin-bottom:10px">ID Barang</label>
              <select style="padding:5px 10px; width:100%;" class="chosen-select" data-placeholder="Barang Yang Digunakan" name="id_barang" required>
                <option value="<?php ?>" disabled selected>Barang</option>
                <?php
                include '../connect.php';
                $barang = pg_query($conn, "SELECT * FROM barang order by nama_barang ASC");
                while ($row = pg_fetch_assoc($barang)) {
                  echo "<option value='$row[id_barang]'>$row[nama_barang] - $row[harga_jual]  </option>";
                }
                ?>
              </select>
            </div>

            <label for="">Harga Barang</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="harga_barang" class="form-control" id="harga_barang" required />
              </div>
            </div>


            <label for="">Jumlah Barang</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="jumlah_barang" class="form-control" id="jml_brg" required />
              </div>
            </div>
            <script>
              function doMath() {
                var numOne = document.getElementById('harga_barang').value;
                var numTwo = document.getElementById('jml_brg').value;
                var theProduct = parseInt(numOne) * parseInt(numTwo);
                document.getElementById("total").value = theProduct;

              }
            </script>

            <label for="">Total Harga</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="harga_total" class="form-control" id="total" readonly />
              </div>
            </div>

            

            <!-- <label for="">Status</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" name="status" class="form-control" required />
              </div>
            </div> -->
            <label for="">Status Barang : </label>
            <div class="form-group">
                <div class="form-line">
                <input type="radio" name="status" value="Selesai" required />
                <label >Selesai</label>  
                </div>
                <div class="form-line">
                <input type="radio" name="status" value="Belum" required />
                <label >Belum</label>  
                </div>

            </div>

            <label for="">Tanggal</label>
            <div class="form-group">
              <div class="form-line">
                <input type="date" name="tanggal" class="form-control" required />
              </div>
            </div>

            <br>
            <a href="#" class="btn btn-primary bi bi-calculator mb-2" name="hitung" onclick="doMath()">Hitung</a>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary bi bi-save-fill mb-2">
            

          </div>
          <div class="col-sm-6">

          </div>


      </div>

      </form>
      <?php

      if (isset($_POST['simpan'])) {
        $barang = pg_query($conn, "SELECT total_barang from barang where id_barang='$id_barang'");
        $row3 = pg_fetch_array($barang);
        $tot = $row3['total_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $no_faktur = $_POST['no_faktur'];
        $id_barang = $_POST['id_barang'];
        $id_pelanggan = $_POST['id_pelanggan'];
        $harga_total = $_POST['harga_total'];
        $status = $_POST['status'];
        $tanggal = $_POST['tanggal'];
        $harga_barang = $_POST['harga_barang'];
        $stok = $tot - $jumlah_barang;


        $sql = pg_query($conn, "insert into transaksi (no_faktur,id_barang,id_pelanggan,harga_total,jumlah_barang,status,tanggal,harga_barang) values ('$no_faktur','$id_barang','$id_pelanggan','$harga_total', '$jumlah_barang', '$status', '$tanggal', '$harga_barang')");
        $sql2 = pg_query($conn, "UPDATE barang SET total_barang='$stok' WHERE id_barang='$id_barang'");

        if ($sql and $sql2) {
      ?>
          echo "<script>
            alert('Data berhasil ditambah');
            window.location = '../kasir/view_transaksi.php';
          </script>";
      <?php
        }
      }

      


      ?>

      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bima Motor</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Bima Motor</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>