<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: ../login.php"); exit; }
include('../includes/db.php');

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM menu WHERE id=$id"));

if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    if($_FILES['gambar']['name'] != ""){
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "../uploads/".$gambar);
        mysqli_query($conn, "UPDATE menu SET nama_menu='$nama', deskripsi='$deskripsi', harga='$harga', gambar='$gambar' WHERE id=$id");
    } else {
        mysqli_query($conn, "UPDATE menu SET nama_menu='$nama', deskripsi='$deskripsi', harga='$harga' WHERE id=$id");
    }
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3 class="fw-bold text-danger mb-3">Edit Menu</h3>
  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama Menu</label>
      <input type="text" name="nama" class="form-control" value="<?= $data['nama_menu']; ?>" required>
    </div>
    <div class="mb-3">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control" rows="3"><?= $data['deskripsi']; ?></textarea>
    </div>
    <div class="mb-3">
      <label>Harga</label>
      <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
    </div>
    <div class="mb-3">
      <label>Ganti Gambar</label>
      <input type="file" name="gambar" class="form-control">
      <small>Gambar saat ini: <?= $data['gambar']; ?></small>
    </div>
    <button type="submit" name="update" class="btn btn-danger">Update</button>
    <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
