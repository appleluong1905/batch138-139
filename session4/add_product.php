<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
	<style type="text/css"> .error {color: red;}</style>
</head>
<body>
	<?php 
	include 'connectdb.php';
	$errName = $errDescription = $errPrice 
	= $errDiscount = $errImage = "";
	$checkAddProduct = true;
	if (isset($_POST['add'])) {
		$name = isset($_POST['name'])?$_POST['name']:"";
		$description = isset($_POST['description'])?$_POST['description']:"";
		$price = isset($_POST['price'])?$_POST['price']:"";
		$discount = isset($_POST['discount'])?$_POST['discount']:"";
		$imageUpload = isset($_FILES['image'])?$_FILES['image']:"";
		$image = isset($imageUpload['name'])?uniqid().'_'.$imageUpload['name']:"";
		if ($name == '') {
			$checkAddProduct = false;
			$errName = "Please input product name!";
		}
		if ($description == '') {
			$checkAddProduct = false;
			$errDescription = "Please input description!";
		}
		if ($price == '') {
			$checkAddProduct = false;
			$errPrice = "Please input price!";
		}
		if ($discount == '') {
			$checkAddProduct = false;
			$errDiscount = "Please input discount!";
		}
		if ($imageUpload['error']) {
			$checkAddProduct = false;
			$errImage = "Please choose product image!";
		}

		if ($checkAddProduct) {
			// upload file
			$targetUpload = "uploads/".$image;
			move_uploaded_file($imageUpload['tmp_name'], $targetUpload);
			$create =  date('Y-m-d h:i:s');
			$sqlInsert = "INSERT INTO `products`(`name`, `description`, `price`, `discount`, `image`, `created`) VALUES ('$name', '$description', $price, $discount, '$image','$create')";
			mysqli_query($con, $sqlInsert);

			//Chuyen trang bang header
			header("Location: list_product.php");
			//header("Location: http://google.com");
		}	
	}	
	?>
	<h1>Add product</h1>
	<form action="#" name="addProduct" method="post" enctype="multipart/form-data">
		<p>Name: <input type="text" name="name"></p>
		<span class="error"><?php echo $errName;?></span>
		<p>Description: 
			<textarea cols="40" rows="10" name="description"></textarea>
		</p>
		<span class="error"><?php echo $errDescription;?></span>
		<p>Price: <input type="text" name="price"></p>
		<span class="error"><?php echo $errPrice;?></span>
		<p>Discount: <input type="text" name="discount"></p>
		<span class="error"><?php echo $errDiscount;?></span>
		<p>Image: <input type="file" name="image"></p>
		<span class="error"><?php echo $errImage;?></span>
		<p><input type="submit" name="add" value="Add product"></p>
	</form>

</body>
</html>