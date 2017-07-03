<?php
	require_once('connection.php');

	$sql = "SELECT firstname, lastname FROM employees;";

	$result = mysqli_query($connect, $sql);

	// if(mysqli_num_rows($result)){
	// 	while($row  = mysqli_fetch_assoc($result)){
	// 		extract($row);
	// 		echo $firstname . ' ' . $lastname . '<br>';
	// 	};
	// };
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
</head>
<body>
	
</body>
</html>