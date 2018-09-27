<?php 
session_start();

$_SESSION['name'] = 'Batch 138 139 Aptech';
$_SESSION['cart'] = 1;
$_SESSION['year'] = 2018;
$a = 'A';

echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['year'];
echo "<br>".$a;


unset($_SESSION['name']);
session_destroy();
?>