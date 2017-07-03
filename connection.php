<?php 
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'pcparts';

	$connect = mysqli_connect($host, $username, $password, $database);

	if($connect){
		echo "connected successfully<br>";
	}
?>