<?php
include '../config.php';

$id_kasus = $_GET['id_kasus'];
$sql = "DELETE FROM kasus WHERE id_kasus ='$id_kasus'";

$result = pg_query($conn, $sql);
if ($result) {
    echo "<script>
                  alert('Data berhasil dihapus');
                  window.location = '../adminbps/kasus.php';
                </script>";
} else {
    echo pg_last_error($conn);
}
