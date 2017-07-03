<?php
session_start();
$id = $_GET['id'];
$quantity = $_Post['quantity'];

if(isset($_POST['add_to_cart'])){
	if(isset($_SESSION['cart_items'][$id])){
		$_SESSION['cart_items'][$id]+= $quantity;
	} else {
		$_SESSION['cart_items'][$id] = $quantity;
	}
}

if(isset($_POST['edit_quantity'])){
	$_SESSION['cart_items'][$id] = $quantity;
}

header('location: home.php');
?>