<?php
 
  session_start();
  if (isset ($_SESSION['status'])){
  if($_SESSION['status']=="login"){
    header("location: index.php");
  }
  }

  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "<script> alert('Username atau Password Salah'); </script>";
    }else if($_GET['pesan'] == "logout"){
      echo "<script> alert('Anda telah berhasil logout'); </script>";
      
    }else if($_GET['pesan'] == "belum_login"){
      echo "<script> alert('Anda harus login untuk mengakses halaman ini'); </script>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    form {
      background-color: white; padding: 20px;
      border-radius:10px;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="cek_login.php" method="post" style="">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name = username placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name=password placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div style="text-align: center;">
          <button name="log" type="submit" class="btn btn-primary btn-block btn-flat" style="width: 100px;display: inline-block; border-radius:3px;">Sign In</button>
        </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
