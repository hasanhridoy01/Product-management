
<?php include_once "apps/db.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Data</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	 <div class="conatiner">
	 	<div class="row">
	 		<div class="card mt-2 mx-auto shadow-lg">
	 			<div class="card-header">
	 				<h2>All Info</h2>
	 			</div>
	 			<div class="card-body">
	 				<table class="table table-striped">
	 					<tr>
	 						<th>ID</th>
	 						<th>Cname</th>
	 						<th>Cell</th>
	 						<th>Location</th>
	 						<th>Product_name</th>
	 						<th>Price</th>
	 						<th>Status</th>
	 					</tr>
	 					<?php 
                           
                           $sql = "SELECT * FROM custromers INNER JOIN products ON custromers.id = products.cid";
                           $data = $connection -> query($sql);
                           
                           $i = 1;
                           while( $single_data = $data -> fetch_assoc() ):

	 					 ?>
	 					<tr>
	 						<td><?php echo $i; $i++; ?></td>
	 						<td><?php echo $single_data['custromer_name']; ?></td>
	 						<td><?php echo $single_data['cell']; ?></td>
	 						<td><?php echo $single_data['location']; ?></td>
	 						<td><?php echo $single_data['product_name']; ?></td>
	 						<td><?php echo $single_data['price']; ?></td>
	 						<td>
	 							<a href="" class="btn btn-sm btn-info">View</a>
	 							<a href="" class="btn btn-sm btn-warning">Edit</a>
	 							<a href="" class="btn btn-sm btn-danger">Delete</a>
	 						</td>
	 					</tr>
	 				    <?php endwhile; ?>
	 				</table>
	 			</div>
	 		</div>
	 	</div>
	 </div>
      

      <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
      <script src="js/script.js"></script>
</body>
</html>