<?php include('includes/header.php'); ?>

<!-- HERO BANNER (FULL IMAGE) -->
<section class="hero position-relative">
  <img src="assets/images/saikoro.PNG" alt="Banner Ichiban Sushi" class="w-100" style="max-height: 600px; object-fit: cover;">
</section>

<!-- TENTANG KAMI -->
<section class="py-5 text-center">
  <div class="container">
    <h2 class="fw-bold text-danger mb-3">SELALU ADA <span class="text-warning">KEBAHAGIAAN</span> DI SETIAP GIGITAN</h2>
    <p class="lead text-muted mb-4">
      Ichiban Sushi adalah jaringan restoran sushi halal yang berdiri sejak tahun 1995. 
      Kami hadir dengan pilihan menu yang beragam dan cita rasa autentik Jepang, 
      disajikan dengan bahan berkualitas tinggi dan pelayanan ramah. 
      Setiap gigitan memberikan kenikmatan luar biasa, membawa Anda ke suasana Jepang sesungguhnya.
    </p>
  </div>
</section>

<!-- MENU KAMI (2 KOLOM) -->
<section class="bg-light py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Gambar -->
      <div class="col-md-6 mb-4 mb-md-0 text-center">
        <img src="assets/images/kolom1.png" alt="Menu Sushi"     style="max-width: 90%;">
      </div>
      <!-- Teks -->
      <div class="col-md-6 text-center text-md-start">
        <h3 class="fw-bold text-danger mb-3">NIKMATI MAKANAN JEPANG <span class="text-warning">SUSHI</span></h3>
        <p class="text-muted mb-4">
          Kami menyajikan sushi, ramen, dan berbagai hidangan khas Jepang dengan rasa autentik. 
          Nikmati pengalaman kuliner yang tak terlupakan hanya di Ichiban Sushi.
        </p>
        <div>
          <a href="menu.php" class="btn btn-danger px-4 py-2 me-2">Lihat Menu</a>
          <a href="reservation.php" class="btn btn-outline-danger px-4 py-2">Reservasi</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CABANG (2 KOLOM) -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center flex-column-reverse flex-md-row">
      <!-- Teks -->
      <div class="col-md-6 text-center text-md-start">
        <h3 class="fw-bold text-danger mb-3">KAMI <span class="text-warning">SELAU DEKAT</span></h3>
        <p class="text-muted mb-4">
          Temukan gerai Ichiban Sushi terdekat di kotamu dan nikmati sajian khas Jepang kapan pun Anda mau.
        </p>
        <a href="#" class="btn btn-danger px-4 py-2">Lihat Lokasi</a>
      </div>
      <!-- Gambar -->
      <div class="col-md-6 mb-4 mb-md-0 text-center">
        <img src="assets/images/kolom2.png" alt="Delivery" style="max-width: 90%;">
      </div>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
