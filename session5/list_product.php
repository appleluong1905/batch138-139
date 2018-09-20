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
	// count total records
	$limit = 3;
	$page = isset($_GET['page'])?$_GET['page']:1;
	$start = ($page - 1) * $limit;

	$searchName = isset($_GET['name'])?$_GET['name']:"";
	$searchDes = isset($_GET['description'])?$_GET['description']:"";
	$sqlTotal = "SELECT id FROM products WHERE name LIKE '%$searchName%' AND description LIKE '%$searchDes%'";
	$countTotal = mysqli_query($con, $sqlTotal);
	$total = $countTotal->num_rows;
	
	$numberPage = ceil($total/$limit);
	$sqlSelect = "SELECT * FROM products WHERE name LIKE '%$searchName%' AND description LIKE '%$searchDes%' LIMIT $start,$limit";
	// page 1: SELECT * FROM `products` LIMIT 0,3
	// page 2: SELECT * FROM `products` LIMIT 3,3
	// page 3: SELECT * FROM `products` LIMIT 6,3
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
<?php 
$serverName = $_SERVER['SERVER_NAME'];
$link = !empty($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:"";
for ($i = 1; $i <= $numberPage; $i++) {
	$linkPage = "http://$serverName$link&page=$i";
	echo "<a href='$linkPage'>$i</a>";
	echo ($i < $numberPage)?" | ":"";
}
?>
</body>
</html>