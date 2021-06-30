<?php
require 'function/functionUser.php';
if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $pass = $_POST["password"];
  $cek_user = mysqli_query($con, "SELECT * FROM datauser WHERE email='$email'");
  $row = mysqli_fetch_assoc($cek_user);
  $num = mysqli_num_rows($cek_user);
  if ($num === 1) {
    if (password_verify($pass,$row['password'])) {
      echo "
      <script>
          alert('Anda Berhasil Login!');
          document.location.href = 'informasi.php'
      </script>";
      //$_SESSION['isLogin'] = true;
      //$_SESSION['user'] = $user;
      //$_SESSION['id'] = $user['IdUser'];
    } else {
      echo "
      <script>
      alert('Anda Tidak Berhasil Login!') ;
      document.location.href = 'login.php'
      </script>";
    }
  }
  $error = true;
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Donor Darah | LOG IN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href=" plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href=" index2.html" class="h1"><b>User</b>Pendonor</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-1">
          <a href="#">Lupa Password</a>
        </p>
        <p class="mb-0">
          <a href="register.php" class="text-center">Registrasi</a>
        </p>


        <!-- /.social-auth-links -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src=" plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src=" plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src=" dist/js/adminlte.min.js"></script>
</body>

</html>