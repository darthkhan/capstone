<?php
	require 'connection.php';

	session_start();

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users WHERE username = '$username' AND password  = '$password'";

		$result = mysqli_query($connect,$sql);

		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				extract($row);
				$_SESSION['message'] = "Login Successful";
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;
				echo "Login Successful";
				header('location:home.php');
			}	
		}else{
			echo "Wrong Credentials";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Login</h1>
	<form method="POST" action="">	
		<div class="form-group">
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<input class="btn" type="submit" name="login" value="login"> 
		</div>
	</form>
</body>
</html>