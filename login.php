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
<div class="container mt-5">
  <h2 class="text-danger text-center mb-4 fw-bold">Login Admin</h2>
  <div class="w-50 mx-auto">
    <?php if(isset($error)): ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST">
      <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" name="login" class="btn btn-danger w-100">Login</button>
    </form>
  </div>
</div>
<?php include('includes/footer.php'); ?>
