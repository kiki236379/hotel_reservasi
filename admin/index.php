<?php
session_start();
include '../includes/db.php';
if(!isset($_SESSION['admin'])){
    header("Location: ../admin_login/login.php");
    exit();
}
$page = $_GET['page'] ?? 'dashboard';
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Ichiban Sushi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<style>
/* Reset & Font */
body { margin:0; font-family:'Poppins', sans-serif; background:#fff6f5; }

/* Sidebar */
.sidebar {
    width: 220px; height:100vh;
    background:#e63946; color:white;
    position:fixed; top:0; left:0; padding:30px 15px;
    display:flex; flex-direction:column; gap:10px;
}
.sidebar h3 { font-family:'Playfair Display', serif; text-align:center; margin-bottom:30px; font-weight:700; }
.sidebar a {
    color:white; text-decoration:none; padding:12px 15px; border-radius:10px; display:flex; align-items:center;
    transition:0.3s;
}
.sidebar a i { margin-right:12px; }
.sidebar a:hover, .sidebar a.active { background:white; color:#e63946; font-weight:500; }

/* Content */
.content { margin-left:220px; padding:40px; min-height:100vh; background:#fff6f5; }
h2.dashboard-title { color:#e63946; margin-bottom:20px; }

/* Dashboard Cards */
.dashboard-cards { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; }
.card { border-radius:15px; padding:25px; box-shadow:0 4px 15px rgba(0,0,0,0.1); background:white; transition:0.3s; }
.card:hover { transform:translateY(-5px); }
.card i { font-size:40px; margin-bottom:15px; color:#e63946; }

/* Buttons */
.btn-custom { background:#e63946; color:white; border:none; border-radius:8px; transition:0.3s; }
.btn-custom:hover { background:#d62828; }

/* Footer */
footer { margin-top:40px; text-align:center; color:#999; }
</style>
</head>
<body>

<div class="sidebar">
<h3>🍣 Ichiban Sushi</h3>
<a href="?page=dashboard" class="<?= $page=='dashboard'?'active':'' ?>"><i class="fas fa-home"></i> Dashboard</a>
<a href="?page=menu" class="<?= $page=='menu'?'active':'' ?>"><i class="fas fa-utensils"></i> Menu</a>
<a href="?page=add_menu" class="<?= $page=='add_menu'?'active':'' ?>"><i class="fas fa-plus"></i> Tambah Menu</a>
<a href="?page=reservasi" class="<?= $page=='reservasi'?'active':'' ?>"><i class="fas fa-book"></i> Reservasi</a>
<a href="logout.php" class="mt-auto text-white"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<div class="content">
<?php
switch($page){
    case 'dashboard':
        ?>
        <h2 class="dashboard-title">Selamat Datang, <?= $_SESSION['admin']; ?> 👋</h2>
        <div class="dashboard-cards">
            <div class="card text-center">
                <i class="fas fa-utensils"></i>
                <h5>Kelola Menu</h5>
                <p>Tambah, edit, dan hapus menu restoran</p>
                <a href="?page=menu" class="btn btn-custom w-100">Lihat Menu</a>
            </div>
            <div class="card text-center">
                <i class="fas fa-book"></i>
                <h5>Data Reservasi</h5>
                <p>Lihat reservasi pelanggan</p>
                <a href="?page=reservasi" class="btn btn-custom w-100">Lihat Reservasi</a>
            </div>
        </div>
        <?php
        break;

    case 'menu':
        include 'menu/index.php';
        break;
    case 'add_menu':
        include 'menu/add_menu.php';
        break;
    case 'edit_menu':
        include 'menu/edit_menu.php';
        break;
    case 'delete_menu':
        include 'menu/delete_menu.php';
        break;
    case 'reservasi':
        include 'reservasi/index.php';
        break;
    default:
        echo "<h4>Halaman tidak ditemukan 😅</h4>";
        break;
}
?>
<footer>
<p>© <?= date('Y'); ?> Ichiban Sushi | Admin Panel</p>
</footer>
</div>

</body>
</html>
