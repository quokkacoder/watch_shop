<?php
	include("./../connectdb.php");

	$idnhanvien = isset($_GET['idnhanvien']) == true ? $_GET['idnhanvien'] : null;
	
	if($idnhanvien != null){
	$queryData = $conn->prepare("select * from tbl_nhanvien where id_nhanvien= $idnhanvien"); 
	$queryData->execute();

	$result = $queryData->fetch();

	?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
 	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<title>
		UPDATE
	</title>
	<script>
function keyPhone(e)
{
var keyword=null;
    if(window.event)
    {
    keyword=window.event.keyCode;
    }else
    {
        keyword=e.which; 
    }
    
    if(keyword<48 || keyword>57)
    {
        if(keyword==48 || keyword==127 || keyword==43)
        {
            return ;
        }
        return false;
    }
}

</script>
</head>

<body>
	 <div class="container">
		<img src="../images/Banner.png" class="rounded mx-auto d-block">
      <div class="masthead">
        
        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item active">
                <a class="nav-link" href="./../homeadmin.php?p=qladmin/admin.php"><i class="fa fa-home fa-2x">Home</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./../homeadmin.php?p=qlnhanvien/nhanvien.php"><i class="fa fa-users">Nhân viên</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./../homeadmin.php?p=qlkhachhang/khachhang.php"><i class="fa fa-user-secret">Khách hàng</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./../homeadmin.php?p=qlsanpham/sanpham.php"><i class="fa fa-clock-o">Sản phẩm</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./../homeadmin.php?p=qlhoadon/hoadon.php"><i class="fa fa-book">Hóa đơn</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./../homeadmin.php?p=qlgopy/gopy.php"><i class="fa fa-book">Góp Ý</i></a>
              </li>
              <li class="nav-item">
                <a href="./../logout.php"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container form-group" style="background: #99FFFF">
		<h2>UPDATE NHÂN VIÊN</h2>
		<form method="post" action="nv_save.php">
		  <div class="form-group">
		  	<input type="hidden" name="idnhanvien"  value="<?= $result['id_nhanvien'] ?>">
		    <label>Họ tên</label>
		    <input type="text" name="hoten" class="form-control" placeholder="Họ tên" value="<?= $result['hotennv'] ?>">
		  </div>
		  <div class="form-group">
		    <label>Ngày sinh</label>
		    <input type="date" maxlength="8" name="ngaysinh" class="form-control" value="<?= $result['ngaysinh'] ?>">
		  </div>
		  <div class="form-group">
		    <label>Địa chỉ</label>
		    <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ" value="<?= $result['diachi'] ?>">
		  </div>
		  <div class="form-group">
		    <label>Số điện thoại</label>
		    <input type="text" name="sdt" maxlength="14" class="form-control" placeholder="Số điện thoại" value="<?= $result['dienthoai'] ?>" onkeypress="return keyPhone(event)";>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>	
		  <br>
		</form>
	</div>
 		
 	</div>
</body>
</html>
<?php } ?>