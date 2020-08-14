<h2 style="color: #0000FF; text-align: center;"> THÔNG TIN GÓP Ý </h2>
<?php 
	include("./connectdb.php");
	$queryData = $conn->prepare("select * from tbl_gopy"); 
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
		<th>Nội Dung</th>
	</thead>
	<tbody>
		<?php
			foreach ($result as $value) {
		?>
		<tr><td><?= $value['id_gopy'] ?></td>
			<td><?= $value['hoten'] ?></td>
			<td><?= $value['noidung'] ?></td>
			<td>
				<a href="qlgopy/gopy_remove.php?idgopy=<?= $value['id_gopy'] ?>">Remove</a>
			</td>
		</tr>
		<?php 
			} 
		?>
	</tbody>
</table>
<br>
</div>