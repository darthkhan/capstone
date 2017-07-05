<?php 
	session_start();

	if(isset($_POST['additem'])){
		include "connection.php";

		$name = $_POST['name'];
		$description = $_POST['description'];
		$image = $_POST['image'];
		$price = $_POST['price'];

		$sql = "insert into products (name, description, image, price) values ('$name', '$description', '$image', '$price')";

		$result = mysqli_query($connect, $sql);
		
		if($result){
			header('location: home.php');
		}

	}

	if (isset($_POST['cancel'])) {
		header('location: home.php');

	}

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<h1>Add New Item</h1>
	<form method="POST" action="">	
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" name="name" placeholder="name">
		</div>
		<div class="form-group">
			<label for="description">Description: </label>
			<input type="text" class="form-control" name="description" placeholder="description">
		</div>
		<div class="form-group">
			<label for="image">Image: </label>
			<input type="text" class="form-control" name="image" placeholder="image">
		</div>
		<div class="form-group">
			<label for="price">Price: </label>	
			<input type="text" class="form-control" name="price" placeholder="price">
		</div>
		<div class="form-group">
			<input class="btn" type="submit" name="additem" value="Add Item"> 
			<input class="btn" type="cancel" name="cancel" value="Cancel">
		</div>
	</form>
</body>
</html>