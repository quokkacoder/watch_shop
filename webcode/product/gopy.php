
<h1 align="center">Nội dung góp ý</h1>
<?php 
	include("dbconnect.php");
	?>

	
		<div class="col-md-12 img-thumbnail" style="float: left; padding-top: 20px;padding-bottom: 20px">
			<form method="post" action="product/gopy_save.php">
			  <div class="form-group">
			    <label>Họ tên <font color="red">* không để trống trường này</font></label>
			    <input type="text" name="hoten" class="form-control" placeholder="Họ tên" required>
			  </div>
			  <div class="form-group">
			    <label>Nội dung<font color="red">* không để trống trường này</font></label>
			    <input type="text" name="noidung" class="form-control" placeholder="Nội dung" required>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>	
			  <button type="cancel" name="btnsearch" class="btn btn-outline-danger"><a href="index.php">CANCEL</a>
                </button>
			  <br>
			  <hr>
		</form>
		<?php 
			$queryData = $conn->prepare("select * from tbl_gopy ORDER BY id_gopy DESC"); 
			$queryData->execute();

			$result = $queryData->fetchAll();
				?>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
		 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
		 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		 	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
			<table  class="table table-striped table-hover" style="background: #EEEEEE">
			<thead>
				<th>Họ tên</th>
				<th>Nội Dung</th>
			</thead>
			<tbody>
				<?php
					foreach ($result as $value) {
				?>
				<tr>
					<td><b style="color: #0033CC"><?= $value['hoten'] ?></b></td>
					<td><?= $value['noidung'] ?></td>
				</tr>
				<?php 
					} 
				?>
			</tbody>
		</table>
		</div>
			
