
<?php 
if($_SERVER['REQUEST_METHOD'] == "GET"){
	require("../connectdb.php");
	
	$idsanpham = isset($_GET["idsanpham"]) == true ? $_GET["idsanpham"] : null;
	if($idsanpham != null){
		$queryData = $conn->prepare("select * from tbl_sanpham where id_sanpham = $idsanpham"); 
		$queryData->execute();

		$result = $queryData->fetch();
		if($result == false){
			header('Location: ../homeadmin.php?p=qlsanpham/sanpham.php');
		}else{
			$removeQueryData = $conn->prepare("delete from tbl_sanpham where id_sanpham = $idsanpham"); 
			if($removeQueryData->execute()){
				header('Location: ../homeadmin.php?p=qlsanpham/sanpham.php');
			}else{
				
				echo "Không thể xóa";
				header('Location: ../homeadmin.php?p=qlsanpham/sanpham.php');
			}
		}
	}
		}
?>