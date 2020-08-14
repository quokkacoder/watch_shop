<?php 
// 1.Kiem tra request dang get 
		session_start();
		if($_SERVER["REQUEST_METHOD"] == "GET"){
			if(!isset($_SESSION["giohang"])) {
			header("Location: chitietgiohang.php");
		}
		$cartData = $_SESSION["giohang"];
//lấy id từ url
			$id_sanpham = $_GET["themgiohang"];

// Neu co thi tim san pham co id = id url co trong session
		for ($i=0; $i < count($cartData); $i++) { 
			if($_SESSION['giohang'][$id_sanpham]["soluong"]==1)
			{
				unset($_SESSION["giohang"][$id_sanpham]);
				header("Location: index.php?p=giohang/chitietgiohang.php");
			}
			if(isset($_SESSION['giohang'][$id_sanpham])){
                  $_SESSION['giohang'][$id_sanpham]["soluong"]--;
                  header("Location: index.php?p=giohang/chitietgiohang.php");
                  break;
               }


		}
}
 ?>