<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<h1>Register form</h1>
	<form name="registerForm" action="#" method="get">
		<p>Name: <input type="text" name="name"></p>
		<p>Email: <input type="text" name="email"></p>
		<p><input type="submit" name="submit" value="Register"></p>
	</form>
	<?php 
	if (isset($_GET['submit'])) {
		echo "Da submit".'<br>';
		echo $_GET['name'].'<br>';
		echo $_GET['email'].'<br>';
	} else {
		echo "Chua submit";
	}
	?>
</body>
</html>