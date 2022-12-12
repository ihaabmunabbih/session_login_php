<?php
	// require_once('header-css.php');
	// include 'koneksi.php';
	if(isset($_POST['log']))
	{
		$user = trim($_POST['username']);
		$pass = trim($_POST['password']);
		$passmd5 = md5($pass);

		// $query = mysqli_query($conn, "Select * from admin where username = '$user' AND password = '$pass'");
		// $data = mysqli_fetch_array($query);
		$username = 'admin';
		$password = 'admin123';
		$md5 = md5($password);
		$nama = 'admin';
		// $foto = $data['link'];

		if ($user==$username && $passmd5==$md5)
		{
			session_start();
			$_SESSION['nama'] = $nama;
			$_SESSION['status'] = "login";
			// $_SESSION['foto'] = $foto;

			echo "<script> alert('Selamat Datang $nama'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}
		else
		{
			header("location:login.php?pesan=gagal");
		}


	}


?>