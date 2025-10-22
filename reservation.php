<?php 
include('includes/header.php'); 
include('includes/db.php'); 

if(isset($_POST['kirim'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $tanggal = $_POST['tanggal'];
  $waktu = $_POST['waktu'];
  $jumlah_tamu = $_POST['jumlah_tamu'];
  $catatan = $_POST['catatan'];

  $query = "INSERT INTO reservasi (nama, email, tanggal, waktu, jumlah_tamu, catatan)
            VALUES ('$nama', '$email', '$tanggal', '$waktu', '$jumlah_tamu', '$catatan')";
  $result = mysqli_query($conn, $query);

  if($result){
      $success = "Reservasi berhasil dikirim! Kami akan menghubungi Anda segera.";
  } else {
      $error = "Terjadi kesalahan: " . mysqli_error($conn);
  }
}
?>
<div class="container mt-5">
  <h2 class="text-danger text-center mb-4 fw-bold">Reservasi</h2>

  <?php if(isset($success)): ?>
    <div class="alert alert-success text-center"><?= $success; ?></div>
  <?php elseif(isset($error)): ?>
    <div class="alert alert-danger text-center"><?= $error; ?></div>
  <?php endif; ?>

  <form class="w-75 mx-auto" method="POST">
    <div class="mb-3">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
      </div>
      <div class="col-md-6 mb-3">
        <label>Waktu</label>
        <input type="time" name="waktu" class="form-control" required>
      </div>
    </div>
    <div class="mb-3">
      <label>Jumlah Tamu</label>
      <input type="number" name="jumlah_tamu" class="form-control" min="1" required>
    </div>
    <div class="mb-3">
      <label>Catatan / Permintaan Khusus</label>
      <textarea name="catatan" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" name="kirim" class="btn btn-danger w-100">KIRIM</button>
  </form>
</div>
<?php include('includes/footer.php'); ?>
