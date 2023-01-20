<?php
include '../config.php';

$id_litmas = $_GET['id_litmas'];
$sql = "DELETE FROM litmas WHERE id_litmas ='$id_litmas'";

$result = pg_query($conn, $sql);
if ($result) {
    echo "<script>
                  alert('Data berhasil dihapus');
                  window.location = '../adminbps/bka-sidang.php';
                </script>";
} else {
    echo pg_last_error($conn);
}
?>
