<?php
// Pastikan admin login
if(!isset($_SESSION['admin'])){
    header("Location: ../admin_login/login.php");
    exit();
}

$error = "";
$success = "";

if(isset($_POST['add'])){
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

    if(empty($nama) || empty($harga) || empty($deskripsi)){
        $error = "Semua field wajib diisi!";
    } else {
        $query = "INSERT INTO menu (nama, harga, deskripsi) VALUES ('$nama', '$harga', '$deskripsi')";
        if(mysqli_query($conn, $query)){
            $success = "Menu berhasil ditambahkan!";
        } else {
            $error = "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }
}
?>

<h2 class="dashboard-title mb-4">Tambah Menu Baru 🍣</h2>

<?php if($error): ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>
<?php if($success): ?>
    <div class="alert alert-success"><?= $success ?></div>
<?php endif; ?>

<form method="POST">
    <div class="mb-3">
        <label>Nama Menu</label>
        <input type="text" name="nama" class="form-control" placeholder="Contoh: Sushi Salmon" required>
    </div>
    <div class="mb-3">
        <label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" placeholder="Contoh: 50000" required>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="4" placeholder="Contoh: Sushi salmon segar dengan nasi khas Ichiban" required></textarea>
    </div>
    <button type="submit" name="add" class="btn btn-custom"><i class="fas fa-plus"></i> Tambah Menu</button>
    <a href="?page=menu" class="btn btn-secondary ms-2">Kembali</a>
</form>
