<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: ../login.php"); exit; }
include('../includes/db.php');
$result = mysqli_query($conn, "SELECT * FROM menu");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-danger p-3">
  <div class="container">
    <span class="navbar-brand">Admin Panel - Ichiban Sushi</span>
    <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
  </div>
</nav>

<div class="container mt-4">
  <h3 class="fw-bold text-danger mb-3">Daftar Menu</h3>
  <a href="add_menu.php" class="btn btn-success mb-3">+ Tambah Menu</a>
  <table class="table table-bordered text-center align-middle">
    <thead class="table-danger">
      <tr>
        <th>ID</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama_menu']; ?></td>
        <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
<td><img src="../assets/images/<?= $row['gambar']; ?>" width="80" alt="<?= $row['nama_menu']; ?>"></td>
        <td>
          <a href="edit_menu.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete_menu.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
