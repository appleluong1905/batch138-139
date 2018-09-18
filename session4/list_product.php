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
	</style>
</head>
<body>
<h1>List product</h1>
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
	$sqlSelect = "SELECT * FROM products";
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
			<a href="#">Edit</a>
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