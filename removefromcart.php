<?php 
session_start();
$id = $_GET['id'];

unset($_SESSION['cart_items'][$id]);

header('location: addtocart.php');
?>