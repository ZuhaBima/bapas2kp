<?php
include '../config.php';

$nip = $_GET['nip'];
$sql = "DELETE FROM pegawai WHERE nip ='$nip'";

$result = pg_query($conn, $sql);
if ($result) {
    echo "<script>
                  alert('Data berhasil dihapus');
                  window.location = '../adminbps/userbapas.php';
                </script>";
} else {
    echo pg_last_error($conn);
}
