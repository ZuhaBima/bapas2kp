<?php

$host       =  "localhost";
$dbuser     =  "postgres";
$dbpass     =  "12345";
$port       =  "5432";
$dbname    =  "bapas2";

// script koneksi php postgree
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$dbuser password=$dbpass");
?>