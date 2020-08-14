<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		session_start();
		$username = $_POST['user'];
		$password = $_POST['pass'];

		$conn = new PDO("mysql:host=localhost;dbname=sql_dongho;", "root", "");


		$query = "	select * 
					from tbl_user 
					where user = '" .$username ."'
					and pass = '" .$password ."'
					and id_quyen =1";

		$stmt = $conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetch();

	if ($_SESSION["LOGIN_USER"] = $result) {
			header('Location: homeadmin.php');
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<title>Login page</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<style>
 		.log{
 			margin-top: 80px;
 			padding: 12px 2px;
 			height: 255px;
 			width: 40%;
 			background: #cccccc;
  		}
 	</style>
 </head>
 <body>

 <div class="container log" style="color: #000000">
 	<form method="POST">
 	<div class="form-group">
 		<h6><label for="name">Tên Đăng Nhập</label></h6>
 		<input type="text" class="form-control" name="user" id="name" placeholder="User name" />
 		<br>
 		<h6><label for="pass">Mật Khẩu</label></h6>
 		<input type="password" class="form-control" name="pass" id="adpass"  placeholder="password" />
 		<br>
 		<button type="submit" class="btn btn-lg btn-primary btn-block" id="login">Login</button>

	</div>
	</form>
 	
 </div>
 	
 <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
 </body>
 </html>