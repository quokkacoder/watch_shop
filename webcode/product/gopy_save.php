<?php 
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$idgopy = isset($_POST["idgopy"]) == true ? $_POST["idgopy"] : false;
			$name = $_POST["hoten"];	
			$noidung = $_POST["noidung"];

		define('HOST', 'localhost');
		define('DB_NAME', 'sql_dongho');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		$conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME.";charset=utf8", DB_USERNAME, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$query = "	INSERT into tbl_gopy
				(hoten,noidung) values ('". $name ."','". $noidung."' )";
			$stmt = $conn->prepare($query);
			$stmt->execute();
			?>
			<script type="text/javascript">
				alert("góp ý thành công");
				window.location.assign('../index.php?p=product/gopy.php');

			</script>
			<?php

		}else{

 		header('../index.php?p=product/gopy.php');
}
 ?>