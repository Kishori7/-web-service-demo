<?php

// Memulai session
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
  // User belum login, redirect ke halaman login
  header("Location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>

<?php if (isset($_SESSION['username'])) : ?>
  <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
  <h3><a href="logout.php">Keluar<a></h3>
  <?php endif; ?>

</body>
</html>
