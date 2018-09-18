<?php 
include 'connectdb.php';
$id = $_GET['id'];
$sqlEdit = "SELECT * FROM products WHERE id = $id";
echo $sqlEdit;
// $sqlDelete = "DELETE FROM products WHERE id = $id";
// mysqli_query($con, $sqlDelete);
// header("Location: list_product.php");

?>