
<?php include_once "apps/db.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Custromers_Info</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
    <?php 
       
       if ( isset($_POST['submit']) ) {
       	
       	  $cname = $_POST['cname'];
       	  $cell = $_POST['cell'];
       	  $location = $_POST['location'];

       }

       if ( empty($cname) || empty($cell) || empty($location) ) {
       	
       	  $massage = '<p class="alert alert-danger"> All files are requide! </p>';

       }else{
         
         $sql = "INSERT INTO custromers (custromer_name, cell, location) VALUES ('$cname','$cell','$location')";
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
	 					
	 					<label>Custromers_Name</label>
	 					<input type="text" placeholder="Enter Your Name" class="form-control" name="cname">

	 					<label>Cell</label>
	 					<input type="text" placeholder="Enter Your Cell" class="form-control" name="cell">

	 					<label>location</label>
	 					<input type="text" placeholder="Enter Your location" class="form-control" name="location">

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