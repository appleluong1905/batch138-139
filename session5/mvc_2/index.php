<?php 
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->HandleRequest();
?>
<a href="index.php?action=home">Home</a>
 | <a href="index.php?action=news">News</a>
 | <a href="index.php?action=contact">Contact</a>