<?php 
	require_once('connection.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM products WHERE id='$id';";

	$result = mysqli_query($connect, $sql);

	if(isset($_POST['save'])) {
		$name = $_POST['name'];
		$description = $_POST['description'];
		$image = $_POST['image'];
		$price = $_POST['price'];

		$sql = "UPDATE products SET name = '$name', description = '$description', image = '$image', price = '$price' WHERE id = '$id';";

		//Reroute to homepage
		mysqli_query($connect, $sql);
		header("location: home.php");
	} else if(isset($_POST['no'])) {
		header("location: home.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Item</title>
</head>
<body>
	<?php
		while($row = mysqli_fetch_assoc($result)){
			$name = $row['name'];
			$description = $row['description'];
			$image = $row['image'];
			$price = $row['price'];			
		}
	?>	
	<form method='POST' action=''>
	<?php 
		echo "Product Name: <input type='text' name='name' value='$name'><br>";
		echo "Product Description: <input type='text' name='description' value='$description'><br>";
		echo "Product Image: <input type='text' name='image' value='$image'><br>";
		echo "Product Price: <input type='text' name='price' value='$price'><br>";
	?>
		<p>Save Changes?</p>
		<input type="submit" name="save" value="Save Changes">
		<input type="submit" name="no" value="Cancel">
	</form>		
</body>
</html>