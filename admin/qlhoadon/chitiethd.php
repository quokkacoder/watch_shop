<b style="color: red"><a href="homeadmin.php?p=qlhoadon/hoadon.php"><i class="fa fa-reply-all" aria-hidden="true"></i> Hóa đơn</a></b>
<h2 style="color: #0000FF; text-align: center;"> CHI TIẾT ĐƠN ĐẶT HÀNG </h2>
<?php 
	include("./connectdb.php");
	$id=$_GET["id_ddh"];
	$sql = "SELECT *, n.tensanpham FROM tbl_sanpham as n, tbl_chitietdonhang as m WHERE (m.id_ddh='".$id."')&&(n.id_sanpham = m.id_sanpham)";
	$stmt = $conn->prepare($sql);

	$stmt->execute();
	
	$result = $stmt->fetchAll()
	?>
	<div >
	<table  class="table table-striped table-hover" style="background: #EEEEEE;">
	<thead>
		<th>Tên sản phẩm</th>
		<th>Số lượng</th>
		<th>Thành tiền</th>
	</thead>
	<tbody>
		<?php
			foreach ($result as $value) {
		?>
		<tr><td><?= $value['tensanpham'] ?></td>
			<td><?= $value['soluong'] ?></td>
			<td><?= $value['thanhtien'] ?> vnđ</td>
		</tr>
		<?php 
			} 
		?>
		<tr style="background: #FF9999">
			<td colspan="2"><b>Tổng hóa đơn: </b></td>
			<td><?php $sqlsum= " SELECT SUM(thanhtien) as tt from tbl_chitietdonhang where id_ddh='$id'" ;
            			$stmtsum = $conn->prepare($sqlsum);
            			$stmtsum->execute();
            			$resultsum = $stmtsum->fetch();
            		 	echo "<b>".$resultsum["tt"]." vnđ</b>";
            		 ?> </td>
		</tr>
	</tbody>
</table>
<br>
</div>