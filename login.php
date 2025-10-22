<?php 
session_start(); 
include('includes/db.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['admin'] = $username;
        header("Location: admin/dashboard.php");
    } else {
        $error = "Username atau password salah!";
    }
}
include('includes/header.php');
?>

<style>
body {
    background: linear-gradient(135deg, #d31027, #ea384d);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* supaya konten login di tengah antara navbar dan footer */
.main-content {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.login-card {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    width: 400px;
    padding: 40px 30px;
    backdrop-filter: blur(10px);
    animation: fadeIn 0.8s ease-in-out;
}

.login-card img {
    width: 100px;
    margin-bottom: 15px;
}

.login-card h2 {
    font-weight: 700;
    color: #c71c1c;
}

.btn-login {
    background-color: #c71c1c;
    color: #fff;
    border-radius: 30px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-login:hover {
    background-color: #a71515;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

<div class="main-content">
    <div class="login-card text-center">
        <img src="assets/images/saikoro.PNG" alt="Logo Ichiban Sushi">
        <h2 class="mb-4">Login Admin</h2>

        <?php if(isset($error)): ?>
          <div class="alert alert-danger py-2"><?= $error; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit" name="login" class="btn btn-login w-100 py-2">Login</button>
        </form>
    </div>
</div>

<?php include('includes/footer.php'); ?>
