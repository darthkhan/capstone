<?php 
	require_once('connection.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM products WHERE id='$id'";

	$result = mysqli_query($connect, $sql);

	if(isset($_POST['yes'])) {
		$sql = "DELETE FROM products WHERE id='$id'";

		//Requery database
		mysqli_query($connect, $sql);

		//Reroute to homepage
		header("location: home.php");
	} else if(isset($_POST['no'])) {
		header("location: home.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Item</title>
</head>
<body>
	<?php
		while($row = mysqli_fetch_assoc($result)){
			$name = $row['name'];
			$description = $row['description'];
			$image = $row['image'];
			$price = $row['price'];

			echo "Product Name: ".$name."<br>";
			echo "Product Description: ".$description."<br>";
			echo "Product Image: <img height=100px src=".$image."/><br>";
			echo "Product Price: ".$price."<br>";
		}
	?>

	<p>Are you sure you want to delete this item?</p>
	<form method='POST' action=''>
		<input type="submit" name="yes" value="Yes, delete this item">
		<input type="submit" name="no" value="Cancel">
	</form>		
</body>
</html>