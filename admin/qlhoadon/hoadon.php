<h2 style="color: #0000FF; text-align: center;"> DANH SÁCH ĐƠN ĐẶT HÀNG </h2>
<?php 
	include("./connectdb.php");
	$queryData = $conn->prepare("SELECT *,tbl_nhanvien.hotennv, tbl_user.hoten, tbl_trangthai.trangthai FROM (((tbl_dondathang
									INNER JOIN tbl_nhanvien ON tbl_dondathang.id_nhanvien = tbl_nhanvien.id_nhanvien)
									INNER JOIN tbl_user ON  tbl_dondathang.id_user= tbl_user.id_user)
									INNER JOIN tbl_trangthai ON  tbl_dondathang.id_trangthai= tbl_trangthai.id_trangthai);"); 
	$queryData->execute();

	$result = $queryData->fetchAll();
?>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

<div>
	<table  class="table table-striped table-hover" style="background: #EEEEEE">
	<thead>
		<th>ID Hóa đơn</th>
		<th>Nhân viên</th>
		<th>Khách hàng</th>
		<th>Thanh toán</th>
		<th>Địa chỉ giao</th>
		<th>Ngày giao</th>
		<th>Tổng tiền</th>
	</thead>
	<tbody>
		<?php
			foreach ($result as $value) {
		?>
		<tr><td><?= $value['id_ddh'] ?></td>
			<td><?= $value['hotennv'] ?></td>
			<td><?= $value['hoten'] ?></td>
			<td><?= $value['trangthai'] ?></td>
			<td><?= $value['diachigiao'] ?></td>
			<td><?= $value['ngaygiao'] ?></td>
			<td><?= $value['tongtien'] ?> vnđ</td>
			<td>
				<a href="qlhoadon/or_remove.php?id_ddh=<?= $value['id_ddh'] ?>">Delete</a> |
				<a href="qlsanpham/sp_update.php?id_ddh=<?= $value['id_ddh'] ?>">Update</a><br>
				<a href="homeadmin.php?p=qlhoadon/chitiethd.php&&id_ddh=<?php echo $value["id_ddh"] ?>">Xem chi tiết <i class="fa fa-share" aria-hidden="true"></i></a>
			</td>

		</tr>
		<?php 
			} 
		?>
	</tbody>
</table>
<br>
</div>

