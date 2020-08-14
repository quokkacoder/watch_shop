<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$idsanpham = isset($_POST["idsanpham"]) == true ? $_POST["idsanpham"] : false;
	$nhasanxuat = $_POST["nhasanxuat"];	
	$namesp = $_POST["tensp"];	
	
	if ($_POST["hinhanh"]) {
		$hinhanh = $_POST["hinhanh"];
	}else{$hinhanh = $_POST["hinhanh1"];}
	
	$soluong = $_POST["soluong"];	
	$dongia = $_POST["dongia"];
	$khuyenmai = $_POST["khuyenmai"];
	$thongtin = $_POST["thongtinsp"];
	$baohanh = $_POST["baohanh"];			
	$doituong = $_POST["doituong"];	
	
	//connectdata
	define('HOST', 'localhost');
	define('DB_NAME', 'sql_dongho');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');

	$conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME.";charset=utf8", DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(empty($_POST['tensp']) == true) {
			header('Location: ../homeadmin.php?p=qlsanpham/sanpham.php');
			exit();
		}
	}

	if($idsanpham != true){
	$query = "	INSERT into tbl_sanpham
				(id_NSX, tensanpham, hinhanh, soluong, dongia, khuyenmai, thongtinsp, baohanh, doituong)
				values
				('". $nhasanxuat ."','". $namesp ."','". $hinhanh ."','". $soluong ."','". $dongia."', '". $khuyenmai."','". $thongtin."','". $baohanh."','". $doituong."' )";
	}else
	{
		$query = "	UPDATE `tbl_sanpham` SET 
						 id_NSX = '".$nhasanxuat."',
						 tensanpham='".$namesp."',
						 hinhanh = '".$hinhanh."', 
						soluong = '".$soluong."',
						dongia = '".$dongia."',
						khuyenmai = '".$khuyenmai."',
						thongtinsp = '".$thongtin."',
						baohanh = '".$baohanh."',
						doituong = '".$doituong."'
						where id_sanpham = '".$idsanpham."'";	

	}
	$stmt = $conn->prepare($query);
	$stmt->execute();
	
	if($idsanpham == true){
		header('Location: ../homeadmin.php?p=qlsanpham/sanpham.php');
	}
	?>
	<?php 
		header('Location: ../homeadmin.php?p=qlsanpham/sanpham.php');
	 ?>
	<?php
}else{

 header('Location:../homeadmin.php?p=qlsanpham/sanpham.php');
}

 ?>