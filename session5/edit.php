<!DOCTYPE html>
<html>
<head>
	<title>Edit product</title>
</head>
<body>
<?php 
include 'connectdb.php';
$id = $_GET['id'];
$sqlEditGet = "SELECT * FROM products WHERE id = $id";

$result = mysqli_query($con, $sqlEditGet);
while($row = $result->fetch_assoc()) {
	$id          = $row['id'];
	$name        = $row['name'];
	$description = $row['description'];
	$price       = $row['price'];
	$discount    = $row['discount'];
	$image       = $row['image'];
}
if (isset($_POST['edit'])) {
	$name = isset($_POST['name'])?$_POST['name']:"";
	$description = isset($_POST['description'])?$_POST['description']:"";
	$price = isset($_POST['price'])?$_POST['price']:"";
	$discount = isset($_POST['discount'])?$_POST['discount']:"";
	$sqlEdit = "UPDATE products SET name = '$name', description = '$description', price = '$price', discount = '$discount' WHERE id = $id";
	mysqli_query($con, $sqlEdit);
	header("Location: list_product.php");
}

?>
<h1>Edit product</h1>
	<form action="#" name="editProduct" method="post" enctype="multipart/form-data">
		<p>Name: <input type="text" name="name" value="<?php echo $name?>"></p>
		<span class="error"><?php echo $errName;?></span>
		<p>Description: 
			<textarea cols="40" rows="10" name="description"><?php echo $description?></textarea>
		</p>
		<span class="error"><?php echo $errDescription;?></span>
		<p>Price: <input type="text" name="price" value="<?php echo $price?>"></p>
		<span class="error"><?php echo $errPrice;?></span>
		<p>Discount: <input type="text" name="discount" value="<?php echo $discount?>"></p>
		<span class="error"><?php echo $errDiscount;?></span>
		<p>Image: <input type="file" name="image"></p>
		<img src="uploads/<?php echo $image?>" alt="Image">
		<span class="error"><?php echo $errImage;?></span>
		<p><input type="submit" name="edit" value="Edit product"></p>
	</form>
</body>
</html>