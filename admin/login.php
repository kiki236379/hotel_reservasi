<?php
session_start();
include('../includes/db.php');

$error = "";

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Cek apakah ada username & password cocok
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['admin'] = $username;
        header("Location: ../admin/index.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Ichiban Sushi</title>
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
        .login-card {
            width: 380px;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }
        .login-card h3 {
            margin-bottom: 25px;
            color: #e63946;
            font-weight: bold;
        }
        .btn-login {
            background-color: #e63946;
            border: none;
            color: white;
            font-weight: 500;
        }
        .btn-login:hover {
            background-color: #d62828;
        }
        .error-text {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h3>Admin Ichiban Sushi 🍣</h3>
    <form method="POST">
        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" name="login" class="btn btn-login w-100">Login</button>
    </form>

    <?php if ($error): ?>
        <p class="error-text"><?= $error ?></p>
    <?php endif; ?>
</div>

</body>
</html>
