<?php

$host = 'localhost';
$dbuser = 'postgres';
$dbpass = 'postgres';
$port = '5432';
$dbname = 'bapas2kp';

// script koneksi php postgree
$conn = pg_connect(
    "host=$host port=$port dbname=$dbname user=$dbuser password=$dbpass"
);
