
<h1 align="center">ĐỒNG HỒ NAM</h1>
<?php 
	include("dbconnect.php");
	$sql = "SELECT * FROM tbl_sanpham as s WHERE (s.doituong like '%doi%')";
	$stmt = $conn->prepare($sql);

	$stmt->execute();
	
		while ($result = $stmt->fetch())
		{?>

	
		<div class="col-md-4 img-thumbnail" style="float: left; padding-top: 20px;padding-bottom: 20px">
				<a href="index.php?p=product/ttchitiet.php&&id_sanpham=<?php echo $result["id_sanpham"] ?>">
					<img  src="img_produc/<?php echo $result["hinhanh"] ?>" width="200px" height="200px" ></a>

					<?php
					if($result["khuyenmai"]==0){
					$khuyenmai="";
					$giagoc="";
				}else{
				$khuyenmai= "-".$result["khuyenmai"]." %";
				$giagoc=$result["dongia"]."đ";
				} 

					 ?>
					<p style="position: absolute; margin-top: -200px; background: #00FF66;"><?php echo $khuyenmai ?></p>
				
				<span><h5><?php echo $result["tensanpham"] ?></h5></span><p style="position: absolute; margin-top: -1px; background: #eee8aa; margin-left: 135px"><strike><?php echo $giagoc; ?></strike></p>
				
				<p style="border-radius: 8px; position: absolute; margin-top: 25px; margin-left: 65px">
					<a href="index.php?p=giohang/giohang.php&&themgiohang=<?php echo $result["id_sanpham"] ?>">Mua Ngay</a>
				</p>
				<p><b style="color: red">Giá:</b>
				<?php 
				if($result["dongia"]==0){
					$gia="liên hệ";
				}else{
				$gia= ($result["dongia"]-($result["dongia"]*$result["khuyenmai"])/100)."đ"; ;
				} echo $gia;
				
				?></p>
		</div>
	
		
<?php 
		}
 ?>