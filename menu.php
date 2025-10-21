<?php 
include('includes/header.php'); 
include('includes/db.php'); 
$result = mysqli_query($conn, "SELECT * FROM menu");
?>
<div class="container mt-5">
  <h2 class="text-danger text-center mb-4 fw-bold">Menu Kami</h2>
  <div class="row">
    <?php while($row = mysqli_fetch_assoc($result)): ?>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="assets/images/<?= $row['gambar']; ?>" class="card-img-top" alt="<?= $row['nama_menu']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['nama_menu']; ?></h5>
            <p class="card-text"><?php echo $row['deskripsi']; ?></p>
            <p class="fw-bold text-danger">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<?php include('includes/footer.php'); ?>
