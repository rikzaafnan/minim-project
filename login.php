<?php

/**
 * @Author: Rick
 * @Date:   2018-01-11 04:31:12
 * @Last Modified by:   Rick
 * @Last Modified time: 2018-11-08 15:02:51
 */

session_start();

if (isset($_SESSION["login"])) {
  header("Location:admin/index.php");
  exit;
}

require ('admin/config/koneksi.php');

if (isset($_POST["login"])) {
    
    $username =  $_POST["username"];
    $password =  $_POST["password"];

    $result = mysqli_query($koneksi_db, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");

    //cek username
    if (mysqli_num_rows($result) === 1) {
      //cek password
      $row = mysqli_fetch_assoc($result);
          //set session
          $_SESSION["login"] = true;
          header("Location:admin/index.php");
          exit;
      }else{
        echo "<script>
          alert('maaf, password salah');
          window.location='login.php';
        </script>";
      }
}

?>
<html>
	<head>
		<title>Form  Login</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		</head>
	<section style="background:url('2.jpg') no-repeat;width: 100%;height: 600px;background-size: 100%;">
		<div class="col-md-4 col-md-offset-4 form-login">
			<div class="outter-form-login">
				<!-- <div class="logo-login">
                	<em class="glyphicon glyphicon-user"></em>
            	</div> -->
				<form style="margin:0;" action="" method="post">
					<h3 class="text-center title-login">Login</h3>
	                <div class="form-group">
	                    <input type="text" class="form-control" name="username" placeholder="Username">
	                </div>

	                <div class="form-group">
	                    <input type="password" class="form-control" name="password" placeholder="Password">
	                </div>
					<button class="btn btn-block btn-custom-green" type="submit" name="login">Login</button>
				<!-- <input type="submit" <a href="" class="btn btn-block btn-custom-green"  name="login"/> -->
				<!-- <a href="data-skripsi.php"><button type="submit" class="btn btn-block btn-custom-green" value="login"></button></a> -->
					<br>
					<!-- <a href="daftaradmin.php" target="_blank">Daftar jadi admin</a> -->
					<a href="indexx.php" style="float: right;">Kembali</a><br/><br/>
	 			</form>
	 		</div>
		</div>
	</section>
</html>

<?php require 'footer.php' ?>