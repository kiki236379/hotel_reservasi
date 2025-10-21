<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ichiban Sushi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #d50000;
            box-shadow: 0 3px 6px rgba(0,0,0,0.15);
        }
        .navbar-brand img {
            height: 45px;
        }
        .nav-link {
            font-weight: 500;
            color: #fff !important;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: #ffe082 !important; /* goldish hover */
        }
        .btn-login {
            background-color: #fff;
            color: #d50000;
            border-radius: 50px;
            padding: 6px 18px;
            font-weight: 600;
            transition: 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        .btn-login:hover {
            background-color: #ffe082;
            color: #b00000;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark py-3">
  <div class="container">
    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="assets/images/logo.png" alt="Ichiban Sushi Logo" class="me-2">
      <span class="fw-bold text-white fs-5"></span>
    </a>

    <!-- Toggle for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="menu.php">Menu Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="reservation.php">Reservasi</a></li>
        <li class="nav-item ms-lg-3">
          <a href="login.php" class="btn btn-login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
