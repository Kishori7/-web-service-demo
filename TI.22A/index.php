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
    <title>Dashboard Admin - Cafe Saburai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <header class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Sistem Informasi Penjualan Cafe Saburai. Selamat datang <?php echo $_SESSION['namauser']; ?></a>
        </header>

        <div class="row">
            <nav class="col-md-2 d-md-block bg-light sidebar">
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action active" aria-current="page">
                        <span class="me-2"><i class="bi bi-speedometer"></i></span>
                        Dashboard
                    </a>
                    <a href="pengguna.php" class="list-group-item list-group-item-action">
                        <span class="me-2"><i class="bi bi-people"></i></span>
                        Pengguna
                    </a>
                    <a href="menu.php" class="list-group-item list-group-item-action">
                        <span class="me-2"><i class="bi bi-list"></i></span>
                        Menu
                    </a>
                    <a href="order.php" class="list-group-item list-group-item-action">
                        <span class="me-2"><i class="bi bi-cart"></i></span>
                        Order
                    </a>
                    <a href="laporan.php" class="list-group-item list-group-item-action">
                        <span class="me-2"><i class="bi bi-bar-chart"></i></span>
                        Laporan
                    </a>
                    <a href="logout.php" class="list-group-item list-group-item-action">
                        <span class="me-2"><i class="bi bi-door-open"></i></span>
                        Keluar
                    </a>
                </div>
            </nav>

            <main class="col-md-10 ms-md-auto p-3">
                <h1>Dashboard</h1>
                <p>Selamat datang di Dashboard Admin Cafe Saburai!</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Jumlah Pengguna
                            </div>
                            <div class="card-body">
                                <h2>100</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Total Penjualan Hari Ini
                            </div>
                            <div class="card-body">
                                <h2>Rp 1.500.000</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-danger text-white">
                                Stok Bahan Habis
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Kopi Bubuk</li>
                                    <li>Susu</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>


<footer class="footer mt-auto py-3 bg-dark text-white">
            <div class="container">
                <span class="me-2">Copyright &copy; 2024 Cafe Saburai.</span>
                <a href="#" class="text-white">Privacy Policy</a>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>