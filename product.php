
<?php include_once "apps/db.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product_name_INfo</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
    <?php 
       
       if ( isset($_POST['submit']) ) {
       	
       	  $pname = $_POST['pname'];
       	  $price = $_POST['price'];
       	  $cid = $_POST['cid'];

       }

       if ( empty($pname) || empty($price) ) {
       	
       	  $massage = '<p class="alert alert-danger"> All files are requide! </p>';

       }else{
         
         $sql = "INSERT INTO products (product_name, price, cid) VALUES ('$pname','$price','$cid')";
         $connection -> query($sql);
         $massage = '<p class="alert alert-success"> Data Stable </p>';

       }

     ?>

	 <div class="container">
	 	<div class="row">
	 		<div class="card mt-3 mx-auto shadow-lg">
	 			<div class="card-header">
	 				<h2>Custromers_INfo</h2>
	 				<?php 
                       
                       if ( isset($massage) ) {
                       	
                       	  echo $massage;

                       }

	 				 ?>
	 			</div>
	 			<div class="card-body">
	 				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	 					
	 					<label>product_name</label>
	 					<input type="text" placeholder="Enter Your Name" class="form-control" name="pname">

	 					<label>Price</label>
	 					<input type="text" placeholder="Enter Your Cell" class="form-control" name="price">

	 					<label>Cid</label>
	 					<input type="text" placeholder="Enter Your location" class="form-control" name="cid">

	 					<input type="submit" class="btn btn-outline-info mt-2" value="Submit" name="submit">

	 				</form>
	 			</div>
	 		</div>
	 	</div>
	 </div>


      <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
      <script src="js/script.js"></script>
</body>
</html>