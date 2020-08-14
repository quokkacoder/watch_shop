<?php 
if($_SERVER['REQUEST_METHOD'] == "GET"){
	require("../connectdb.php");
	
	$idhd = isset($_GET["id_ddh"]) == true ? $_GET["id_ddh"] : null;
	if($idhd != null){
		$queryData = $conn->prepare("select * from tbl_dondathang where id_ddh = $idhd"); 
		$queryData->execute();
		$result = $queryData->fetch();
		if($result == false){
			header('Location: ../homeadmin.php?p=qlhoadon/hoadon.php');
		}else{
			$removeQueryData = $conn->prepare("DELETE FROM tbl_chitietdonhang WHERE id_ddh = '$idhd'"); 
			$removeQueryData->execute();
			$removeQueryData = $conn->prepare("DELETE FROM tbl_dondathang WHERE id_ddh = '$idhd'"); 
			if($removeQueryData->execute()){
				header('Location: ../homeadmin.php?p=qlhoadon/hoadon.php');
			}else{
				
				echo "Không thể xóa";
				header('Location: ../homeadmin.php?p=qlhoadon/hoadon.php');
			}
		}
	}
		}
?>