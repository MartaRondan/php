<?php include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	 <!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

	</head>
<body>
<div class="container" col-md-12>


	<br>
	<h2>STAFF</h2>

<div data-role="page">
		<div class="container">

			<div class="table-responsive">

				<table class="table">
			<tr>
				<th>Product ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				
			</tr>

			

<?php

			include('db.php');
			
				$q = $DBH->prepare("SELECT * FROM products");
				$q->execute();
				$check = $q->fetchAll(PDO::FETCH_ASSOC);
				
				foreach($check as $row){

?>


				
				<tr>
				<form data-ajax='false' action='updatestaff.php' method='POST'  style='display: block;'>
				<td><input type='text' name='product_id' value='<?php echo $row['product_id']; ?>'></td>
				<td><input type='text' name='product_name' value='<?php echo $row['product_name']; ?>'></td>
				<td><input type='text' name='product_description' value='<?php echo $row['product_description']; ?>'></td>
				<td><input type='text' name='product_price' value='<?php echo $row['product_price']; ?>'></td>
				
				<td>
					<input type='hidden' name='pro_id' value='<?php echo $row['product_id']; ?>'>
					<button type='submit' class='btn btn-default active'>Edit</button>
				</td>
				</form>
				
				<form action='addaproduct.php' method='POST' data-ajax='false'>
				
				<td>
					<input type='hidden' name='user2_id'>
					<button type='submit' class='btn btn-default active'>ADD</button>
				</td>
				</form>
					</tr>
				
				<?php 
			}

		?>

				</table>	



			</div>

		</div>
		
			
			

		</div>


<?php 

		if(isset($_GET['updated'])){
			
			echo '<script>window.alert="Details updated succesfully" </script>';
			
		}




?>


<?php  include('footer.php'); ?>


</body>
</html>