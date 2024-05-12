<?php
session_start();
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM dokter WHERE nama_dokter='$username' AND pass_dokter='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Ganti dengan halaman tujuan setelah login
    } else {
        // Login gagal
        $error_message = "Username atau password salah!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Fonts Pre Connect -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts Links (Roboto 400, 500 and 700 included) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

  <!-- CSS Files Links -->
  <link rel="stylesheet" href="./stylles.css">

  <!-- Title -->
  <title>Login Dokter</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login">
                    <h1> Login Dokter Umum </h1>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="User name / Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="Password">
                    </div>
                    <button class="button login__submit">
                    <a href="listDoc.php" class="button__text">Log In Now</a>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
                        
                </form>               
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
</body>
</html>