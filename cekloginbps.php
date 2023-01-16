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
            header('Location:inventoris/index_inventori.php');
        } else if ($_SESSION['role'] = $row['role'] == 2) {
            header('Location:pegawai/dashboard.php');
        }
    } else {
        echo "<div class='alert alert-danger'>
        <strong>Error!</strong> Username dan password salah. 
      </div>";
    }
}
