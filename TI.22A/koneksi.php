<?php

// Koneksi database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cafe";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Cek koneksi
if (!$conn) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}

?>
