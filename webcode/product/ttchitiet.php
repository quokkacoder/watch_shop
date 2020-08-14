<?php 
	include("dbconnect.php");
	$id=$_GET["id_sanpham"];
	$sql = "SELECT *, n.ten_NSX FROM tbl_sanpham as s, tbl_nhasanxuat as n WHERE (s.id_sanpham='".$id."')&&(s.id_NSX = n.id_NSX)";
	$stmt = $conn->prepare($sql);

	$stmt->execute();
	
	$result = $stmt->fetch()
	?>
	<div class="col-md-12 img-thumbnail" style="float: left; padding-top: 20px;padding-bottom: 20px">
       	 <h2 align="center">CHI TIẾT SẢN PHẨM</h2>
    	 <table style="margin-left: 20px; ">
       		 <tr> 
            <td><h2 style="color: red"><?php echo $result["tensanpham"] ?></h2>
            	<?php
					if($result["khuyenmai"]==0){
					$khuyenmai="";
					$giagoc="";
				}else{
				$khuyenmai= "-".$result["khuyenmai"]." %";
				$giagoc= "Giá gốc: ".$result["dongia"]." vnđ";
				} 
					 ?>
           <img  src="img_produc/<?php echo $result["hinhanh"] ?>" width="200px" height="200px" >
            	<p style="border-radius: 8px; position: absolute; margin-top: -4px; background: #eee8aa; margin-left: 60px">
				<a href="index.php?p=giohang/giohang.php&&themgiohang=<?php echo $result["id_sanpham"] ?>">Add to Cart</a>
				</p>
				<p style="position: absolute; margin-top: -235px; background: #00FF66; margin-left: 231px;"><?php echo $khuyenmai ?></p>
			</td>
            <td style="padding-left: 30px" colspan="2"> 
				
				<p><?php echo $giagoc; ?></p>
            	<p><b style="color: red">Giá bán:</b>
				<?php 
				if($result["dongia"]==0){
					$gia="liên hệ";
				}else{
				$gia= ($result["dongia"]-($result["dongia"]*$result["khuyenmai"])/100)." vnđ"; ;
				} echo $gia;
				?></p>
           	 <p>Thông tin: <?php echo $result["thongtinsp"] ?> </p>
      		 <p>Hãng: <?php echo $result["ten_NSX"] ?></p>
      		 
      		 </td>
       		 </tr>
   		 </table>
   		</div>