<?php 
	$serverName = 'localhost'; //$serverName = '127.0.0.1';
	$username = 'root';
	$password = 'none'; //$password = '';
	$database = 'batch138_139';

	$con = mysqli_connect($serverName, $username, $password, $database);

	// Check connection
	if (mysqli_connect_errno()) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>