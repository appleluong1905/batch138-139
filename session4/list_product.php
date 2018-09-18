<!DOCTYPE html>
<html>
<head>
	<title>List product</title>
	<style type="text/css">
	.image {
		width: 100px;
	}
	table {
		border-collapse: collapse;
		width: 800px;
		margin: 0 auto;
	}
	table, tr, th, td {
		border: 1px solid green;
	}
	.search{
		width: 800px;
		margin: 0 auto;
		padding-bottom: 50px;
	}
	</style>
</head>
<body>
<h1>List product</h1>
<div class="search">
	<form >
		<input type="text" name="name" placeholder="Product name">
		<input type="text" name="description" placeholder="Product description">
		<input type="submit" name="search" value="Search">
	</form>
</div>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Discount</th>
		<th>Image</th>
		<th>Created</th>
		<th>Action</th>
	</tr>
<?php 
	include 'connectdb.php';
	$searchName = isset($_GET['name'])?$_GET['name']:"";
	$searchDes = isset($_GET['description'])?$_GET['description']:"";

	$sqlSelect = "SELECT * FROM products WHERE name LIKE '%$searchName%' AND description LIKE '%$searchDes%'";
	$result  = mysqli_query($con, $sqlSelect);
	if ($result->num_rows > 0) { 
		while($row = $result->fetch_assoc()) {
			$image = $row['image'];
?>
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['description'];?></td>
		<td><?php echo $row['price'];?></td>
		<td><?php echo $row['discount'];?></td>
		<td><img src="uploads/<?php echo $image?>" alt="image" class="image"></td>
		<td><?php echo $row['created'];?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
			| <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
		</td>
	</tr>

<?php
		}
	} else {
		echo "No product!";
	}
?>
</table>	

</body>
</html>