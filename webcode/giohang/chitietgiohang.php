<?php 
	include("dbconnect.php");
	// 2. Kiem tra co sp trong gio hang hay khong
	$cartData = isset($_SESSION["giohang"]) == true ? $_SESSION["giohang"] : [];

	// 3. Kiem tra xem cart data có bị rong khong - neu rong thi hien Khong co sp nao trong gio hang - neu co thi hien thi bang  
 		if(count($cartData) == 0){
 			?>
 			<h3 style="color: red">BẠN CHƯA ĐẶT MUA MẶT HÀNG NÀO.</h3>
 			<h6>Click <a href="index.php">Mua tiếp</a> để chọn mua sản phẩm.</h6>

 			<?php	
 		}else{
 			?><h3>Giỏ hàng của bạn:</h3>
 			<hr>
 			<table class="table table-stripped" style="background:  #66FFFF; border-radius: 10px">
 				<thead> 					
					<th>Tên Sản Phẩm</th> 					
					<th>Số lượng</th> 					
					<th>Đơn giá bán</th> 					
					<th><a href="javascript:goback()">Chọn sản phẩm khác</a></th> 					
 				</thead>
 				<tbody>
 					<?php
 					$totalPrice = 0;
 					foreach ($cartData as $id_sanpham => $value) {
 						$sql= " SELECT * from tbl_sanpham where id_sanpham='$id_sanpham'" ;
            			$stmt = $conn->prepare($sql);
            			$stmt->execute();
            			$result = $stmt->fetch();
 						$totalPrice += $value["soluong"] * ($result["dongia"]-($result["dongia"]*$result["khuyenmai"])/100);
 							?>
							<tr>
								<td><?= $result["tensanpham"]?></td>
								<td><?= $value["soluong"]?></td>
								<td><?= $value["soluong"] * ($result["dongia"]-($result["dongia"]*$result["khuyenmai"])/100)?> vnđ</td>
								<td>
									<a href="index.php?p=giohang/minus.php&&themgiohang=<?= $result["id_sanpham"]?>" class="btn btn-sm btn-success">
										<span>-</span>
									</a>
									<?php if($value["soluong"]<$result["soluong"]){ ?>
									<a href="index.php?p=giohang/plus.php&&themgiohang=<?= $result["id_sanpham"]?>" class="btn btn-sm btn-danger">
										<span>+</span>
									</a>
									<?php } else echo "<b style='color: red;'>"."Hết hàng!"."</b>" ; ?>
									<a href="index.php?p=giohang/xoasach.php&&themgiohang=<?= $result["id_sanpham"]?>">Hủy mua</a>
								</td>
								
							</tr>
 							<?php
 						}	
 					?>
 					<tr>
 						<td colspan="2" class="text-center">
 							<strong>Tổng tiền: </strong>
 						</td>
 						<td colspan="2"><strong><?= $totalPrice?></strong> vnđ</td>
 					</tr>
 				</tbody>
 			</table>
 			
 			<form action="giohang/datmua.php">
 			<div style="background:  #00CC66;border-radius: 10px; padding-bottom: 10px">
 			<div class="form-group" style="margin: 20px;">
		    <label><b>Tên tài khoản</b></label>
		    <input type="text" name="user" class="form-control" placeholder="Tên đăng nhập" required="" ;>
		  </div>
		  <div class="form-group" style="margin: 20px;">
		    <label><b>Điện thoại liên lạc </b></label>
		    <input type="text" name="sdt" maxlength="14" class="form-control" placeholder="Số điện thoại" onkeypress="return keyPhone(event)";>
		  </div>
		  <div class="form-group" style="margin: 20px;">
		    <label><b>Địa chỉ giao hàng</b></label>
		    <input type="text" name="diachi" class="form-control" placeholder="Nhập địa chỉ" required="">
		  </div>
		  <div style="text-align: center;"><button type="submit" class="btn btn-primary">ĐẶT MUA</button></div>
 			</div>
 			</form>
 			<?php
 		}
 		 ?>

 	</div>
<script type="text/javascript">
	function goback() {
    history.back(-1)
	}

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
