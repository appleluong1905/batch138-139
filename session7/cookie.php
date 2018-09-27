<?php 
	setcookie('name', 'Aptech 138 139', time() + 10);

	echo $_COOKIE['name'];
	
	unset($_COOKIE['name']);
	setcookie('name', 'aaa', time() - 10);
	echo $_COOKIE['name'];
?>