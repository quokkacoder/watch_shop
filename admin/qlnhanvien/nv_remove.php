
<?php 
if($_SERVER['REQUEST_METHOD'] == "GET"){
	require("../connectdb.php");
	
	$idnhanvien = isset($_GET["idnhanvien"]) == true ? $_GET["idnhanvien"] : null;
	if($idnhanvien != null){
		$queryData = $conn->prepare("select * from tbl_nhanvien where id_nhanvien = $idnhanvien"); 
		$queryData->execute();

		$result = $queryData->fetch();
		if($result == false){
			header('Location: ../homeadmin.php?p=qlnhanvien/nhanvien.php');
		}else
		{
			$removeQueryData = $conn->prepare("delete from tbl_nhanvien where id_nhanvien = $idnhanvien."); 
			if($removeQueryData->execute()){
				header('Location: ../homeadmin.php?p=qlnhanvien/nhanvien.php');
			}else{
				
				echo "Không thể xóa";
				header('Location: ../homeadmin.php?p=qlnhanvien/nhanvien.php');
			}
		}
	}
		}
?>