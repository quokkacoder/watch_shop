<!DOCTYPE html>
<html>
<head>
	
	<title>
		THÊM MỚI SẢN PHẨM
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
        if(keyword==48 || keyword==127)
        {
            return ;
        }
        return false;
    }
}

</script>
</head>

<body>

	<div class="container form-group">
		<h2>THÊM MỚI SẢN PHẨM</h2>
		<form method="post" action="qlsanpham/sp_save.php">
		  <div class="form-group">
		    <label>Tên sản phẩm </label>
		    <input type="text" name="tensp" class="form-control" placeholder="Tên sản phẩm">
		  </div>
		  <div class="form-group">
		    <label>Nhà cung cấp</label>
		    <select name="nhasanxuat" size="1" style="height: 10">
		   			<?php 
		   			include("./connectdb.php");
		   			$queryData = $conn->prepare("SELECT * FROM tbl_nhasanxuat s"); 
						$queryData->execute();

						$result = $queryData->fetchAll();
						foreach ($result as $value){?>

		    	<option value="<?= $value['id_NSX'] ?>"><?= $value['ten_NSX'] ?></option>
		    	<?php } ?>
		    </select>
		  </div>
		  <div class="form-group">
		    <label>Hình ảnh </label>
		    <input class="btn btn-danger" type="file" name="hinhanh">
		  </div>
		  <div class="form-group">
		    <label>Số lượng</label>
		    <input type="number" name="soluong" min="0" class="form-control" onkeypress="return keyPhone(event)";>
		  </div>
		  <div class="form-group">
		    <label>Đơn giá </label>
		    <input type="text" name="dongia" class="form-control" placeholder="Giá sản phẩm" onkeypress="return keyPhone(event)";>
		  </div>
		  <div class="form-group">
		    <label>Khuyến mãi (%)</label>
		    <input type="number" name="khuyenmai" min="0" max="100" class="form-control" placeholder="phần trăm khuyến mãi" onkeypress="return keyPhone(event)";>
		  </div>
		  <div class="form-group">
		    <label>Thông tin sản phẩm</label>
		    <input type="text" name="thongtinsp" class="form-control" placeholder="Thông tin sản phẩm...">
		  </div>
		  <div class="form-group">
		    <label>Bảo hành</label>
		    <input type="text" name="baohanh" class="form-control" placeholder="Thời gian bảo hành">
		  </div>
		  <div class="form-group">
		    <label>Đối tượng</label>
		    <select name="doituong">
		    	<option value="nam">Nam
		    	</option>
		    	<option value="nu">Nữ
		    	</option>
		    	<option value="doi">Đôi
		    	</option>
		    	
		    </select>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <button type="reset" class="btn btn-primary">Clear</button>	
		  <br>
		</form>
	</div>
</body>
</html>
				
			
			