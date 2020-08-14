<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$idnhanvien = isset($_POST["idnhanvien"]) == true ? $_POST["idnhanvien"] : false;
	$Name = $_POST["hoten"];
	$ngaysinh = $_POST["ngaysinh"];	
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
		if(empty($_POST['hoten']) == true || empty($_POST['diachi']) == true) {
			header('Location: ../homeadmin.php?p=qlnhanvien/nhanvien.php');
			exit();
		}
	}

	if($idnhanvien != true){
	$query = "	INSERT into tbl_nhanvien
				(hotennv, ngaysinh, diachi, dienthoai)
				values
				('". $Name ."','". $ngaysinh ."','". $diachi ."','". $sdt."' )";
		
	}else
	{
		$query = "	UPDATE `tbl_nhanvien` SET 
						 hotennv = '".$Name."',
						 ngaysinh='".$ngaysinh."',
						 diachi = '".$diachi."', 
						dienthoai = '".$sdt."'
						where id_nhanvien = '".$idnhanvien."'";	

	}
	
	$stmt = $conn->prepare($query);
	$stmt->execute();
	
	if($idnhanvien == true){
		header('../homeadmin.php?p=qlnhanvien/nhanvien.php');
	}
	?>
	<?php 
		header('Location: ../homeadmin.php?p=qlnhanvien/nhanvien.php');
	 ?>
	<?php
}else{

 header('../homeadmin.php?p=qlnhanvien/nhanvien.php');
}

 ?>