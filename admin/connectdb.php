<?php 
	define('HOST', 'localhost');
	define('DB_NAME', 'sql_dongho');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');

	$conn = new PDO("mysql:host=".HOST.";dbname=".DB_NAME.";charset=utf8", DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
 ?>