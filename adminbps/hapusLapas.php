<?php
include '../config.php';

$id_lapas = $_GET['id_lapas'];
$sql = "DELETE FROM lapas WHERE id_lapas ='$id_lapas'";

$result = pg_query($conn, $sql);
if ($result) {
    echo "<script>
                  alert('Data berhasil dihapus');
                  window.location = '../adminbps/lapas.php';
                </script>";
} else {
    echo pg_last_error($conn);
}
