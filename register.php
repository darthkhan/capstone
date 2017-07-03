<?php
	require 'connection.php';
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$pw2 = $_POST['pw2'];

		if($password = $pw2){
			$password = sha1($password);
			$sql = "INSERT INTO users(username, password, role) VALUES('$username', '$password', 'regular')";
			mysqli_query($connect,$sql);

			echo "Registered successfully.";
		} else{
			echo "Passwords did not match.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Register</h1>
	<form method="POST" action="">	
		<div class="form-group">
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password">
		</div>	
		<div class="form-group">
			<input type="password" name="pw2" placeholder="Confirm Password">
		</div>	
		<div class="form-group">
			<!-- <button onclick="register">Register</button> -->
			<input class="btn" type="submit" name="register" value="register"> 
		</div>
	</form>
</body>
</html>