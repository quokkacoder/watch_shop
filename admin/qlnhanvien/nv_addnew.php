<!DOCTYPE html>
<html>
<head>
	
	<title>
		ADD NHANVIEN
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

	<div class="container form-group">
		<h2>ADD NhÂN VIÊN</h2>
		<form method="post" action="qlnhanvien/nv_save.php">
		  <div class="form-group">
		    <label>Họ tên <font color="red">* không để trống trường này</font></label>
		    <input type="text" name="hoten" class="form-control" placeholder="Họ tên">
		  </div>
		  <div class="form-group">
		    <label>Ngày sinh</label>
		    <input type="date" maxlength="8" name="ngaysinh" class="form-control">
		  </div>
		  <div class="form-group">
		    <label>Địa chỉ <font color="red">* không để trống trường này</font></label>
		    <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ">
		  </div>
		  <div class="form-group">
		    <label>Số điện thoại</label>
		    <input type="text" name="sdt" maxlength="14" class="form-control" placeholder="Số điện thoại" onkeypress="return keyPhone(event)";>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <button type="reset" class="btn btn-primary">Clear</button>	
		  <br>
		</form>
	</div>
</body>
</html>
				
			
			