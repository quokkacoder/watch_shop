
<h1 align="center">TẤT CẢ SẢN PHẨM</h1>
<?php 
	include("dbconnect.php");
	$page_url = "http://localhost:8080/doan_donghoviet.com/webcode/index.php?p=product/home.php"; // địa chỉ truy cập file index.
 
	$display = 9;

	$records = $conn->query("SELECT * FROM tbl_sanpham");
 
	$total_rows = $records->rowCount();


	if(isset($_GET['page']) && is_numeric($_GET['page']))
		{
		      $curr_page = $_GET['page'];
		}
		 
		else
		{
		     $curr_page = 1;
		}

		$position = (($curr_page -1)* $display);
		$total_pages = ceil($total_rows/$display);
		


	$sql = "SELECT *, n.ten_NSX FROM tbl_sanpham as s, tbl_nhasanxuat as n WHERE s.id_NSX = n.id_NSX LIMIT $position, $display";
	$stmt = $conn->prepare($sql);

	$stmt->execute();
	
		while ($result = $stmt->fetch()) {
			?>

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
 <div class="container" style="float:left; padding-top:25px;padding-left: 268px;">

      <nav aria-label="Page navigation example" >
      <ul class="pagination">
      	<?php 
      	if($curr_page > 1)
               { ?>
        <li class="page-item"><a class="page-link" href="<?php echo $page_url.'&&page='.($curr_page-1) ?>"> <i class="fa fa-fast-backward" aria-hidden="true">  Back</i></a></li>
        <?php } 
         if($curr_page < $total_pages )
             { ?>
        <li class="page-item"><a class="page-link" href="<?php echo $page_url.'&&page='.($curr_page+1) ?>"> Next <i class="fa fa-fast-forward" aria-hidden="true"></i></a></li>
        <?php } ?>
      </ul>
    </nav>

    </div>
