<!DOCTYPE html>
<html>
<head>
	
	<title>
		ADD KHACH HANG
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
		<h2>ADD KHACH HANG</h2>
		<form method="post" action="qlkhachhang/kh_save.php">
		  <div class="form-group">
		    <label>Họ tên</label>
		    <input type="text" name="hoten" class="form-control" placeholder="Họ tên">
		  </div>
		  <div class="form-group">
		    <label>Tài khoản <font color="red">* không để trống trường này</font></label>
		    <input type="text" name="user" class="form-control" placeholder="Tên đăng nhập">
		  </div>
		  <div class="form-group">
		   <label>Mật khẩu <font color="red">* không để trống trường này</font></label>
		    <input type="password" minlength="3" maxlength="8" name="pass" class="form-control"  placeholder="password" />
		  </div>
		  <div class="form-group">
		    <label>Địa chỉ</label>
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
				
			
			