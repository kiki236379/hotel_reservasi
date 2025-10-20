<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <h2 class="text-danger text-center mb-4 fw-bold">Reservasi</h2>
  <form class="w-75 mx-auto">
    <div class="mb-3">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" class="form-control" required>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Tanggal</label>
        <input type="date" class="form-control" required>
      </div>
      <div class="col-md-6 mb-3">
        <label>Waktu</label>
        <input type="time" class="form-control" required>
      </div>
    </div>
    <div class="mb-3">
      <label>Jumlah Tamu</label>
      <input type="number" class="form-control" min="1" required>
    </div>
    <div class="mb-3">
      <label>Catatan / Permintaan Khusus</label>
      <textarea class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-danger w-100">KIRIM</button>
  </form>
</div>
<?php include('includes/footer.php'); ?>
