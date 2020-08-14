<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thoát</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$_SESSION=array();
session_destroy();
?>
<script language="javascript">
window.alert("Ban da thoat thanh cong");
window.location="index.php";
</script>
</body>
</html>