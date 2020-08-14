<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$iduser = isset($_POST["id_user"]) == true ? $_POST["id_user"] : false;
	$Name = $_POST["hoten"];
	$user = isset($_POST["user"])==true? $_POST["user"] : false;
	$pass = $_POST["pass"];	
	$diachi = $_POST["diachi"];
	$sdt = $_POST["sdt"];	
	define('HOST', 'localhost');
	define('DB_NAME', 'sql_dongho');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');


	$conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME.";charset=utf8", DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(empty($_POST['user']) == true || empty($_POST['pass']) == true) {
			header('Location: ../homeadmin.php?p=qlkhachhang/khachhang.php');
			exit();
		}
	}

	if($iduser != true){
		$query = "	INSERT into tbl_user
				(id_quyen, hoten, user, pass, diachi, dienthoai)
				values
				('2','". $Name ."','".$user."', '". $pass ."','". $diachi ."','". $sdt."'  )";
		
	}else
	{
		$query = "	UPDATE `tbl_user` SET
						id_quyen=2, 
						 hoten = '".$Name."',
						 user='".$user."',
						pass = '".$pass."', 
						 diachi = '".$diachi."', 
						dienthoai = '".$sdt."'
						where id_user = '".$iduser."'";	
	}
	
	$stmt = $conn->prepare($query);
	$stmt->execute();
	

	if($iduser == true){
		header('Location: ../homeadmin.php?p=qlkhachhang/khachhang.php');
	}
	?>
	<?php 
		header('Location: ../homeadmin.php?p=qlkhachhang/khachhang.php');
	 ?>
	<?php
}else{

 header('Location: ../homeadmin.php?p=qlkhachhang/khachhang.php');
}

 ?>