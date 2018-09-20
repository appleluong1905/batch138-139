<?php 
include 'connectdb.php';
$id = $_GET['id'];
$sqlDelete = "DELETE FROM products WHERE id = $id";
mysqli_query($con, $sqlDelete);
header("Location: list_product.php");

?>