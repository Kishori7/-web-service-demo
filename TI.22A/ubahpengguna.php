<?php
include 'atas.php';
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM kasir WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];

    $sql = "UPDATE kasir SET username = '$username', password = '$password', nama = '$nama', hp = '$hp' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
      echo "Data kasir berhasil diubah.";
      header("Location: pengguna.php");
    } else {
      echo "Gagal mengubah data kasir: " . mysqli_error($conn);
    }
  }
} else {
  echo "Kasir dengan ID tersebut tidak ditemukan.";
}

mysqli_close($conn);
?>

<h1>Ubah Kasir</h1>

<form method="post" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="hp">No. HP:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="hp" name="hp" value="<?php echo $row['HP']; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" name="submit" class="btn btn-primary" value="Ubah">
    </div>
  </div>
</form>
<?php
include 'bawah.php';
?>