<?php
	include("./../connectdb.php");

	$idsanpham = isset($_GET['idsanpham']) == true ? $_GET['idsanpham'] : null;
	
	if($idsanpham != null){
	$queryData = $conn->prepare("select * from tbl_sanpham where id_sanpham= $idsanpham"); 
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
		<h2>UPDATE SẢN PHẨM</h2>
		<form method="post" action="sp_save.php">
      <div class="form-group">
        <input type="hidden" name="idsanpham"  value="<?= $result['id_sanpham'] ?>">
        <label>Tên sản phẩm </label>
        <input type="text" name="tensp" class="form-control" value="<?= $result['tensanpham'] ?>">
      </div>
      <div class="form-group">
        <label>Nhà sản xuất hiện tại: </label>
        <?php  $queryData0 = $conn->prepare("SELECT * FROM tbl_nhasanxuat as n, tbl_sanpham as s
              where n.id_NSX= s.id_NSX && s.id_sanpham='".$result['id_sanpham']."'"); 
            $queryData0->execute();
            $result0= $queryData0->fetch();?>
            <input type="text" disabled="disabled" class="btn-success" value="<?= $result0['ten_NSX'] ?>">
      </div>
      <div class="form-group">
        <label> Thay đổi nhà sản xuất:</label>
        <select name="nhasanxuat" size="1" >
          <?php
            $queryData1 = $conn->prepare("SELECT * FROM tbl_nhasanxuat"); 
            $queryData1->execute();

            $result1 = $queryData1->fetchAll();
            foreach ($result1 as $value1){?>

          <option value="<?= $value1['id_NSX'] ?>"><?= $value1['ten_NSX'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label>Hình ảnh </label>
        <input type="hidden" name="hinhanh1" value="<?= $result['hinhanh'] ?>" >
        <input class="btn btn-danger" type="file" name="hinhanh" value="<?= $result['hinhanh'] ?>">
      </div>
      <div class="form-group">
        <label>Số lượng</label>
        <input type="number" name="soluong" min="0" class="form-control" onkeypress="return keyPhone(event)" value="<?=  $result['soluong'] ?>" ;>
      </div>
      <div class="form-group">
        <label>Đơn giá </label>
        <input type="text" name="dongia" class="form-control" onkeypress="return keyPhone(event)" value="<?= $result0['dongia'] ?>">
      </div>
      <div class="form-group">
        <label>Khuyến mãi (%)</label>
        <input type="number" name="khuyenmai" min="0" max="100" class="form-control" onkeypress="return keyPhone(event)" 
                value="<?= $result0['khuyenmai'] ?>">
      </div>
      <div class="form-group">
        <label>Thông tin sản phẩm</label>
        <input type="text" name="thongtinsp" class="form-control" value="<?= $result0['thongtinsp'] ?>">
      </div>
      <div class="form-group">
        <label>Bảo hành</label>
        <input type="text" name="baohanh" class="form-control" value="<?= $result0['baohanh'] ?>">
      </div>
      <div class="form-group">
        <label>Đối tượng</label>
        <select name="doituong">
          <option><?= $result0['doituong'] ?></option>
          <option value="nam">Nam
          </option>
          <option value="nu">Nữ
          </option>
          <option value="doi">Đôi
          </option>
          
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <br>
    </form>
	</div>
 		
 	</div>
</body>
</html>
<?php } ?>