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
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(empty($_POST['user']) == true || empty($_POST['pass']) == true) {
			 header('Location: ../index.php?p=dkythanhvien/dangky.php');
		}
	}
	$query = "	select * 
					from tbl_user 
					where user = '" .$user."'
					and id_quyen =2";

		$stmt = $conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetch();

	if($stmt->rowCount()==0 ){
		$query = "	INSERT into tbl_user
				(id_quyen, hoten, user, pass, diachi, dienthoai)
				values
				('2','". $Name ."','".$user."', '". $pass ."','". $diachi ."','". $sdt."'  )";
				 header('Location: ../index.php');
				}else
					{

			?>
			<script type="text/javascript">
				alert("tài khoản đã tồn tại");
				window.location.assign('../index.php?p=dkythanhvien/dangky.php');

			</script>
			<?php
				}

				$stmt = $conn->prepare($query);
				$stmt->execute();
			}else
			{

	 header('Location: index.php?p=dkythanhvien/dangky.php');
	}

 ?>