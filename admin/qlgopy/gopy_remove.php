
<?php 
if($_SERVER['REQUEST_METHOD'] == "GET"){
	require("../connectdb.php");
	
	$idgopy = isset($_GET["idgopy"]) == true ? $_GET["idgopy"] : null;
	if($idgopy != null){
		$queryData = $conn->prepare("select * from tbl_gopy where id_gopy = $idgopy"); 
		$queryData->execute();

		$result = $queryData->fetch();
		if($result == false){
			header('Location: ../homeadmin.php?p=qlgopy/gopy.php');
		}else{
			$removeQueryData = $conn->prepare("delete from tbl_gopy where id_gopy = $idgopy."); 
			if($removeQueryData->execute()){
				header('Location: ../homeadmin.php?p=qlgopy/gopy.php');
			}else{
				
				echo "Không thể xóa";
				header('Location: ../homeadmin.php?p=qlgopy/gopy.php');
			}
		}
	}
		}
?>