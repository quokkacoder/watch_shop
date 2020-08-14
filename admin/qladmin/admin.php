<h2 style="color: #0000FF; text-align: center;"> DANH SACH ADMIN </h2>
<?php 
	include("./connectdb.php");
	$queryData = $conn->prepare("select * from tbl_user where id_quyen=1"); 
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
		<th>Tài khoản</th>
		<th>Mật khẩu</th>
		<th>Địa chỉ</th>
		<th>Di động</th>
		<th><a href="homeadmin.php?p=qladmin/ad_addnew.php"><i class="fa fa-plus-square" aria-hidden="true">ADD NEW</i></a></th>
	</thead>
	<tbody>
		<?php
			foreach ($result as $value) {
		?>
		<tr><td><?= $value['id_user'] ?></td>
			<td><?= $value['hoten'] ?></td>
			<td><?= $value['user'] ?></td>
			<td><?= $value['pass'] ?></td>
			<td><?= $value['diachi'] ?></td>
			<td><?= $value['dienthoai'] ?></td>
			<td>
				<a href="qladmin/ad_remove.php?iduser=<?= $value['id_user'] ?>">Remove</a> ||
				<a href="qladmin/ad_update.php?iduser=<?= $value['id_user'] ?>">Update</a>
			</td>
		</tr>
		<?php 
			} 
		?>
	</tbody>
</table>
<br>
</div>