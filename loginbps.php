<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - Bapas Pekanbaru</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/bapas.png" rel="icon">
  <link href="assets/img/bapas.png" rel="Logoo">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="login-body">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/bapas.png" alt="">
                  <span class="d-none d-lg-block">Bapas Pekanbaru</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Masuk </h5>
                      <p class="text-center small">Masukkan username & password untuk login</p>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Silahkan masukkan username anda</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Silahkan masukkan password anda.</div>
                    </div>

                    <div class="col-12">
                    </div>
                </div>
                <input type="submit" value="Login" class="btn btn-dark-outline" style="background-color:#e5e90a;">

                </form>


                <?php
                //Fungsi untuk mencegah inputan karakter yang tidak sesuai
                function input($username)
                {
                  $username = trim($username);
                  $username = stripslashes($username);
                  $username = htmlspecialchars($username);
                  return $username;
                }

                //Cek apakah ada kiriman form dari method post
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  include 'config.php';
                  $username = input($_POST['username']);
                  $password = input(md5($_POST['password']));

                  $sql =
                    "select * from pengguna where id_pengguna='" .
                    $username .
                    "' and password='" .
                    $password .
                    "' limit 1";
                  $hasil = pg_query($conn, $sql);
                  $jumlah = pg_num_rows($hasil);

                  if ($jumlah > 0) {
                    session_start();
                    $row = pg_fetch_assoc($hasil);
                    $_SESSION['id_pengguna'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['status'] = 'login';

                    if ($_SESSION['role'] = $row['role'] == 1) {
                      header('Location:adminbps/dashboard.php');
                    } else if ($_SESSION['role'] = $row['role'] == 2) {
                      header('Location:pegawai/dashboard.php');
                    }
                  } else {
                    echo "<div class='alert alert-danger'>
        <strong>Error!</strong> Username dan password salah. 
      </div>";
                  }
                }
                ?>
              </div>
              <p class='mx-auto' style="color: aliceblue;">Tidak Punya Akun?
                <a href="./public/Dashboard.php" style="color: cyan;">Keluar</a>
              </p>
            </div>
      
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            </div>

          </div>
        </div>
    </div>
    </section>

    </div>
  </main><!-- End #main -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>