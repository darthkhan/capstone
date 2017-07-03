<?php 
	require_once('connection.php');

	$sql = "SELECT * from products";

	$result = mysqli_query($connect, $sql);

	// function ajaxPost(id)
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Products Page</title>

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<table>
	<tr>
		<th>Product Name</th>		
		<th>Description</th>
		<th>Image</th>
		<th>Price</th>
		<th></th>
	</tr>
	<?php
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				extract($row);

				$name = $row['name'];
				$description = $row['description'];
				$image = $row['image'];
				$price = $row['price'];

				echo "<tr>";
				echo "<td><img height=100px src=".$image."</td><br><a href='addtocart.php'>Add to Cart</a>";
				echo "<td>".$name."</td>";
				echo "<td>".$description."</td>";				
				echo "<td>".$price."</td>";
				echo "<td><a href='delete.php?id=$id'>delete</a><br><a href='edit.php?id=$id'>edit</a></td>";
				echo "</tr>";				
			}
		}
	?> 	
</table>
<a href="additem.php">Add Item</a>
</body>
</html>