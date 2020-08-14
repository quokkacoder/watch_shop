<?php 
		session_start();
		ob_start();
		if(isset($_GET['themgiohang'])){
			unset($_SESSION["giohang"][$_GET['themgiohang']]);
		header("Location: index.php?p=giohang/chitietgiohang.php");
		}


?>