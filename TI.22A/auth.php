<?php
//koneksi ke database
include "koneksi.php";

// Ambil data username dan password dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// Query untuk mencari data kasir berdasarkan username dan password
$sql = "SELECT * FROM kasir WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

// Hitung jumlah baris hasil query
$rowcount = mysqli_num_rows($result);
$r = mysqli_fetch_assoc($result);

// Cek apakah data kasir ditemukan
if ($rowcount > 0) {
  // Data kasir ditemukan, login berhasil
  echo "Login berhasil!";

  // Simpan data username ke dalam session
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['namauser'] = $r['nama'];


  // Redirect ke halaman dashboard (atau halaman lain sesuai kebutuhan)
  header("Location: index.php");
  exit;
} else {
  // Data kasir tidak ditemukan, login gagal
  echo "Username atau password salah.";
}
?>