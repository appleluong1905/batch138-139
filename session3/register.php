<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
<?php 
	$errName = $errEmail = $errPassword 
	= $errPassword = $errAvatar = "";
	$checkRegister = true;
	if (isset($_POST['register'])) {
		$name = isset($_POST['name'])?$_POST['name']:"";
		$email = isset($_POST['email'])?$_POST['email']:"";
		$password = isset($_POST['password'])?$_POST['password']:"";
		$re_password = isset($_POST['re_password'])?$_POST['re_password']:"";
		$avatarUpload = isset($_FILES['avatar'])?$_FILES['avatar']:"";
		$avatar = isset($avatarUpload['name'])?uniqid().'_'.$avatarUpload['name']:"";
		if ($name == '') {
			$checkRegister = false;
			$errName = "Please input your name!";
		}
		if ($email == '') {
			$checkRegister = false;
			$errEmail = "Please input your email!";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$checkRegister = false;
		    $errEmail = "Invalid email format"; 
		}
		if ($password == '') {
			$checkRegister = false;
			$errPassword = "Please input your password!";
		}
		if ($password != $re_password) {
			$checkRegister = false;
			$errRePassword = "Repassword is not match password!";
		}
		if ($avatarUpload['error']) {
			$checkRegister = false;
			$errAvatar = "Please choose your avatar!";
		}

		if ($checkRegister) {
			// upload file
			$targetUpload = "uploads/".$avatar;
			move_uploaded_file($avatarUpload['tmp_name'], $targetUpload);
			echo "Register success!";
			echo "<br>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo "<img src ='$targetUpload' alt = 'Avatar'>";
		}
		// $_POST, $_GET, $_REQUEST, $_FILES
		//var_dump($avatar);
		
	}
?>
	<h1>Register form</h1>
	<form name="registerForm" action="#" method="post" enctype="multipart/form-data">
		<p>Name: <input type="text" name="name"></p>
		<span class="error"><?php echo $errName;?></span>
		<p>Email: <input type="text" name="email"></p>
		<span class="error"><?php echo $errEmail;?></span>

		<p>Password: <input type="password" name="password"></p>
		<span class="error"><?php echo $errPassword;?></span>
		<p>Re-Password: <input type="password" name="re_password"></p>
		<span class="error"><?php echo $errRePassword;?></span>

		<p>Avatar: <input type="file" name="avatar"></p>
		<span class="error"><?php echo $errAvatar;?></span>

		<p>Gender:
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
		</p>
		<p>City:
			<select name="city">
				<option value="">Choose city</option>
				<option value="quangnam">Quang Nam</option>
				<option value="danang">Da Nang</option>
				<option value="hue">Hue</option>
			</select>
		</p>
		<p>Description:
			<textarea name="description" rows="10" cols="10"></textarea>
		</p>

		<p><input type="submit" name="register" value="Register"></p>
	</form>
</body>
</html>