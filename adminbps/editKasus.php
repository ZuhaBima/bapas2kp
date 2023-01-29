<!DOCTYPE html>
<?php include '../config.php';
$id_kasus = $_GET['id_kasus'];
$sql = pg_query($conn, "SELECT * from kasus where id_kasus='$id_kasus'");
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
                    <li class="breadcrumb-item"><a href="../adminbps/kasus.php">kasus</a></li>
                    <li class="breadcrumb-item"><a href="../adminbps/editKasus.php">Edit Data Kasus</a></li>
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
                                <h5 class="card-title">Edit Data Kasus</h5>

                                <!-- General Form Elements -->
                                <form method="POST">
                                    <div class="row mb-6">
                                        <label for="inputText" class="col-sm-2 col-form-label" required>Id Kasus</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="id_kasus" value="<?php echo $row['id_kasus']; ?>" readonly>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-6">
                                        <label for="inputText" class="col-sm-2 col-form-label" required>Jenis Kasus</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="jenis_kasus" value="<?php echo $row['jenis_kasus']; ?>">
                                        </div>
                                    </div>
                                    <div class="container-fluid py-5">
                                        <div class="container">
                                            <div class="mx-auto" style="width: 200px;">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="width: 120px; float :right; margin-top :10px">
                                                    Save
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
                                                                Apakah anda yakin ingin Mengedit data kasus ini?
                                                            </div>
                                                            <div class="modal-footer ">
                                                                <div>
                                                                    <input type="submit" name="simpan" value="Tidak" class="btn btn-" style="width: 120px; float :right; margin-top :10px" href="../adminbps/editKasus.php">
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
                $id_kasus = $_POST['id_kasus'];
                $jenis_kasus = $_POST['jenis_kasus'];

                $sql = pg_query($conn, "UPDATE kasus SET id_kasus='$id_kasus', jenis_kasus='$jenis_kasus' WHERE id_kasus = '$id_kasus'");

                if ($sql) {
                    echo "<script>alert('Data berhasil diedit');window.location='../adminbps/kasus.php';</script>";
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