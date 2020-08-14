<h2 style="color: #0000FF; text-align: center;"> DANH SÁCH NHÂN VIÊN </h2>
<?php 
	include("./connectdb.php");
	$queryData = $conn->prepare("select * from tbl_nhanvien"); 
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
		<th>ID</th>
		<th>Họ tên</th>
		<th>Ngày sinh</th>
		<th>Địa chỉ</th>
		<th>Di động</th>
		<th><a href="homeadmin.php?p=qlnhanvien/nv_addnew.php"><i class="fa fa-plus-square" aria-hidden="true">ADD NEW</i></a></th>
	</thead>
	<tbody>
		<?php
			foreach ($result as $value) {
		?>
		<tr><td><?= $value['id_nhanvien'] ?></td>
			<td><?= $value['hotennv'] ?></td>
			<td><?= $value['ngaysinh'] ?></td>
			<td><?= $value['diachi'] ?></td>
			<td><?= $value['dienthoai'] ?></td>
			<td>
				<a href="qlnhanvien/nv_remove.php?idnhanvien=<?= $value['id_nhanvien'] ?>">Remove</a> ||
				<a href="qlnhanvien/nv_update.php?idnhanvien=<?= $value['id_nhanvien'] ?>">Update</a>
			</td>
		</tr>
		<?php 
			} 
		?>
	</tbody>
</table>
<br>
</div>