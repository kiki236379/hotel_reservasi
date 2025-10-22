<?php
session_start();
include('../includes/db.php');

$error = "";
$success = "";

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

    // Cek apakah username sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
    if(mysqli_num_rows($cek) > 0){
        // Username sudah ada
        $error = "Username '$username' sudah digunakan. Silakan pilih username lain.";
    } elseif($password !== $password2){
        // Password tidak cocok
        $error = "Password tidak sama!";
    } else {
        // Insert admin baru
        mysqli_query($conn, "INSERT INTO admin (username, password) VALUES ('$username','$password')");
        $success = "Registrasi berhasil! <a href='login.php'>Login sekarang</a>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Admin - Ichiban Sushi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffb6b9, #fae3d9, #bbded6);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            width: 380px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            background: #fff;
            text-align: center;
        }
        .card h3 {
            margin-bottom: 25px;
            color: #e63946;
            font-weight: bold;
        }
        .btn-register {
            background-color: #e63946;
            border: none;
            color: white;
            font-weight: 500;
        }
        .btn-register:hover {
            background-color: #d62828;
        }
        .error-text { color: red; margin-top: 10px; }
        .success-text { color: green; margin-top: 10px; }
    </style>
</head>
<body>

<div class="card">
    <h3>Registrasi Admin 🍣</h3>
    <form method="POST">
        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password" required>
        </div>
        <button type="submit" name="register" class="btn btn-register w-100">Daftar</button>
    </form>

    <?php if($error): ?>
        <p class="error-text"><?= $error ?></p>
    <?php endif; ?>

    <?php if($success): ?>
        <p class="success-text"><?= $success ?></p>
    <?php endif; ?>

    <p class="mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>
</div>

</body>
</html>
