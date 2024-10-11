<?php
include 'atas.php';
include 'koneksi.php';

// Ambil data kasir dari database
$sql = "SELECT * FROM kasir";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<h1>Daftar Kasir</h1>";
  echo "<a href='tambahpengguna.php' class='btn btn-primary'>Tambah</a>";
  echo "<table class='table table-striped table-bordered'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Username</th>";
  echo "<th>Password</th>";
  echo "<th>Nama</th>";
  echo "<th>No. HP</th>";
  echo "<th>Aksi</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["username"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "<td>" . $row["nama"] . "</td>";
    echo "<td>" . $row["HP"] . "</td>";
    echo "<td>";
    echo "<a href='ubahpengguna.php?id=" . $row["id"] . "' class='btn btn-primary'>Ubah</a>";
    echo " | ";
    echo "<a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
} else {
  echo "Tidak ada data kasir ditemukan.";
}

mysqli_close($conn);
include 'bawah.php';
?>