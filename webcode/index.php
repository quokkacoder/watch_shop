<?php session_start() ?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>donghoviet.com</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
 	<style type="text/css">
 		body{
 			padding-top: 68px;
 			padding-bottom: 70px;
 		}
 		footer{
 			padding-top: 20px;
			padding-bottom: 20px;
 			background-color: #FCF;
 			float:left; 
 			text-align: center;
 		}
 	</style>
</head>
<body>
	<header class="container">
		 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top nav-pills">
      <a class="navbar-brand" href="index.php?p=product/home.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i>HOME</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=product/dhnam.php"><i class="fa fa-male" aria-hidden="true">Đồng hồ nam</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=product/dhnu.php"><i class="fa fa-female" aria-hidden="true">Đồng hồ nữ</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=product/dhdoi.php"><i class="fa fa-users" aria-hidden="true">Đồng hồ đôi</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=product/gopy.php"><i class="fa fa-comments" aria-hidden="true">Đóng góp ý kiến</i></a>
          </li>
        </ul>
        <form action="index.php?p=timsp.php" method="POST" class="form-inline my-2 my-lg-0">
			<div>
            <a class="nav-link btn-outline-danger btn-sm" href="index.php?p=giohang/chitietgiohang.php">
          <!--   <?php
            if($_SESSION["giohang"]){ 
              echo count($_SESSION["giohang"]);
            }
          ?> -->
            	<i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
            </a>
 			</div>
            <div >
            	<input class="form-control mr-sm-2" type="text" name="txtsearch" autofocus="autofocus" placeholder="Search" />
            	<button type="submit" name="btnsearch" class="btn btn-outline-danger"><a href="index.php?p=timsp.php">
                <i class="fa fa-search" aria-hidden="true">Search</i></a>
                </button>
            </div></form>

      </div>
    </nav>
    
    <div class="container">
    	<?php include("frontend/header.php"); ?>
    </div>
    </header>
    <section >
    	<div class="container" style="height: auto;">
      	<div class="col-md-8" style="padding-top: 35px; padding-bottom: 40px; float: left;">
            <?php
            define("DEFAULT_PAGE", "product/home.php");
            $p = DEFAULT_PAGE;

            if(isset($_GET["p"])) {
                $p = $_GET["p"];
            }

            include_once($p);  
        ?>
      	</div>
      		<div class="col-md-4" style="float: left;padding-top: 35px;">
      			<div>
      			<a href="index.php?p=dkythanhvien/dangky.php"><button type="button" class="btn btn-outline-warning">Đăng Ký Thành Viên</button></a>
      			</div>
      			<div style="padding-top: 15px;">
      				<ul class="list-group list-group-item-action">
					  <li class="list-group-item active">THƯƠNG HIỆU</li>
					  <li class="list-group-item list-group-item-action">
              <a href="index.php?p=nhasanxuat/casio.php">CASIO</a></li>
					  <li class="list-group-item list-group-item-action">
              <a href="index.php?p=nhasanxuat/orient.php">ORIENT</a>
            </li>
					  <li class="list-group-item list-group-item-action">
              <a href="index.php?p=nhasanxuat/rolex.php">ROLEX</a>
            </li>
					  <li class="list-group-item list-group-item-action">
             <a href="index.php?p=nhasanxuat/jensen.php">GEORG JENSEN </a>
           </li>
           <li class="list-group-item list-group-item-action">
             <a href="index.php?p=nhasanxuat/komono.php">KOMONO</a>
           </li>
					</ul>

      			</div>
      			<div style="padding-top: 15px;">
      				<button type="button" class="btn btn-success btn-lg btn-block">Mặt hàng bán chạy</button>
      			</div>
      			<div style="padding-top: 15px;">
      				<ul class="list-group list-group-item-action">
					  <li class="list-group-item active">KHUYÊN DÙNG</li>
					  <li class="list-group-item list-group-item-action">
             <a href="index.php?p=nhasanxuat/skgen.php">SKAGEN</a>
           </li>
					  <li class="list-group-item list-group-item-action">
             <a href="index.php?p=nhasanxuat/bulova.php">BULOVA</a>
           </li>
					  <li class="list-group-item list-group-item-action">
             <a href="index.php?p=nhasanxuat/seiko.php">SEIKO</a>
           </li>
					 <li class="list-group-item list-group-item-action">
             <a href="index.php?p=nhasanxuat/omega.php">OMEGA</a>
           </li>
					</ul>

      			</div>
            <form action="index.php?p=giasp.php" method="POST">
            <div style="padding-top: 15px;">
              <h5>Tìm kiếm sản phẩm với giá gần đúng</h5>
              <input class="form-control mr-sm-2" type="number" name="txtgia" autofocus="autofocus" placeholder="Giá sản phẩm" />
              <button type="submit" name="btnsearch" class="btn btn-outline-danger"><a href="index.php?p=giasp.php">
                <i class="fa fa-search" aria-hidden="true">Search</i></a>
                </button>
            </div>
            </form>
      		
      		</div>
        </div>

  	</section>

     <footer class="container-fluid">
	    <h4>CÔNG TY CỔ PHẦN ĐỒNG HỒ VIỆT</h4>
	    Trụ sở chính: Ngõ 196 Đường Cầu Giấy,TP. Hà Nội
	    Giấy phép hoạt động số 84/GXN-TTĐT do Bộ VHTT Cấp ngày 10/10/2013.
    </footer>


</body>
</html>