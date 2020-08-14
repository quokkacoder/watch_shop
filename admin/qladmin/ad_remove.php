
<?php 
if($_SERVER['REQUEST_METHOD'] == "GET"){
	require("../connectdb.php");
	
	$iduser = isset($_GET["iduser"]) == true ? $_GET["iduser"] : null;
	if($iduser != null){
		$queryData = $conn->prepare("select * from tbl_user where id_user = $iduser"); 
		$queryData->execute();

		$result = $queryData->fetch();
		if($result == false){
			header('Location: ../homeadmin.php');
		}else{
			$removeQueryData = $conn->prepare("delete from tbl_user where id_user = $iduser."); 
			if($removeQueryData->execute()){
				header('Location: ../homeadmin.php');
			}else{
				
				echo "Không thể xóa";
				header('Location: ../homeadmin.php');
			}
		}
	}
		}
?>
