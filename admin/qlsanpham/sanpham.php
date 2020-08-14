<h2 style="color: #0000FF; text-align: center;"> DANH SÁCH SẢN PHẨM </h2>
<?php 
	include("./connectdb.php");
	$queryData = $conn->prepare("SELECT *, n.ten_NSX FROM tbl_sanpham as s, tbl_nhasanxuat as n WHERE s.id_NSX = n.id_NSX"); 
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
		<th>Tên sản phẩm</th>
		<th>Tên nhà sản xuất</th>
		<th>Hình ảnh</th>
		<th>Số lượng</th>
		<th>Đơn giá</th>
		<th>Khuyến mãi (%)</th>
		<th>Bảo hành</th>
		<th>Đối tượng</th>
		<th><a href="homeadmin.php?p=qlsanpham/sp_addnew.php"><i class="fa fa-plus-square" aria-hidden="true">ADD NEW</i></a></th>
	</thead>
	<tbody>
		<?php
			foreach ($result as $value) {
		?>
		<tr><td><?= $value['id_sanpham'] ?></td>
			<td><?= $value['tensanpham'] ?></td>
			<td><?= $value['ten_NSX'] ?></td>
			<td><img style="width: 150px;height: 120px" src="./../webcode/img_produc/<?= $value['hinhanh'] ?>"></td>
			<td><?= $value['soluong'] ?></td>
			<td><?= $value['dongia'] ?> vnđ</td>
			<td><?= $value['khuyenmai'] ?></td>
			<td><?= $value['baohanh'] ?></td>
			<td><?= $value['doituong'] ?></td>
			<td>
				<a href="qlsanpham/sp_remove.php?idsanpham=<?= $value['id_sanpham'] ?>">Delete</a>
				<a href="qlsanpham/sp_update.php?idsanpham=<?= $value['id_sanpham'] ?>">Update</a>
			</td>
		</tr>
		<?php 
			} 
		?>
	</tbody>
</table>
<br>
</div>