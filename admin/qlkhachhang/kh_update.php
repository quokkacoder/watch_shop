<?php
	include("./../connectdb.php");

	$iduser = isset($_GET['iduser']) == true ? $_GET['iduser'] : null;
	
	if($iduser != null){
	$queryData = $conn->prepare("select * from tbl_user where id_user = '$iduser'"); 
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
	<h2>UPDATE KHACH HANG</h2>
	<form method="POST" action="kh_save.php">
	  <div class="form-group">
	  	<input type="hidden" name="id_user"  value="<?= $result['id_user'] ?>">
	    <label>Họ tên</label>
	    <input type="text" name="hoten" class="form-control" value="<?= $result['hoten'] ?>">
	  </div>
	  <div class="form-group">
	    <label>Tài khoản</label>
	    <input type="text" name="user" class="form-control" value="<?= $result['user'] ?>">
	  </div>
	  <div class="form-group">
	   <label>Mật khẩu </label>
	    <input type="password" minlength="3" maxlength="8" name="pass" class="form-control" value="<?= $result['pass'] ?>" />
	  </div>
	  <div class="form-group">
	    <label>Địa chỉ</label>
	    <input type="text" name="diachi" class="form-control" value="<?= $result['diachi'] ?>">
	  </div>
	  <div class="form-group">
	    <label>Số điện thoại</label>
	    <input type="text" maxlength="14"  name="sdt" onkeypress="return keyPhone(event)" class="form-control" value="<?= $result['dienthoai'] ?>">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	  <br>
	</form>
</div>
 		
 	</div>
</body>
</html>
<?php } ?>