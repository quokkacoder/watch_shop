<?php 
	session_start();
	if(!isset($_SESSION["LOGIN_USER"])){
		header('Location: index.php');
	}?>
	
 	<!DOCTYPE html>
 	<html>
 	<head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 		<title><?php echo "Welcome ". $_SESSION["LOGIN_USER"]["hoten"];
 				?> 
 		</title>
 		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

 	</head>
 	<body>
 	 <div class="container">
		<img src="images/Banner.png" class="rounded mx-auto d-block">
      <div class="masthead">
        
        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                <a class="nav-link" href="homeadmin.php?p=qladmin/admin.php"><i class="fa fa-home fa-2x">Home</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="homeadmin.php?p=qlnhanvien/nhanvien.php"><i class="fa fa-users">Nhân viên</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="homeadmin.php?p=qlkhachhang/khachhang.php"><i class="fa fa-user-secret">Khách hàng</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="homeadmin.php?p=qlsanpham/sanpham.php"><i class="fa fa-clock-o">Sản phẩm</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="homeadmin.php?p=qlhoadon/hoadon.php"><i class="fa fa-book">Hóa đơn</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="homeadmin.php?p=qlgopy/gopy.php"><i class="fa fa-book">Góp Ý</i></a>
              </li>
              <li class="nav-item">
                <a href="logout.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    <div class="container" style="background: #99FFFF">
	<section class="container" >
 			 <div>
            <?php
            define("DEFAULT_PAGE", "qladmin/admin.php");
            $p = DEFAULT_PAGE;

            if(isset($_GET["p"])) {
                $p = $_GET["p"];
            }

            include_once($p);  
        ?>
        </div>
 	</section>

    </div>
 		
 	</div>
 	</body>
 	</html>