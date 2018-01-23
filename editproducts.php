<?php
	session_start();
	include('db.php');
	include('header.php'); 
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit products</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	



</head>
<body>




<?php


          $sql = "SELECT * FROM products";
          $sth = $DBH->prepare($sql);
		  $sth->execute();
		  $check = $sth->fetchAll(PDO::FETCH_ASSOC);
		  


?>


	

	

	<div class="container">

			

			
		

			<h4>Edit products</h4>
			<br>
		

			<div class="table-responsive">
			<table class="table">
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
			</tr>

<?php
					

				foreach($check as $row){
			
				echo "<tr><form action='productupdate.php' method='POST' data-ajax='false'>";
				echo "<td><input type='text' name='product_name' value='".$row['product_name']."'></td>";
				echo "<td><input type='text' name='product_description' value='".$row['product_description']."'></td>";
				echo "<td><input type='text' name='product_price' value='".$row['product_price']."'></td>";
				echo "<input type='hidden' name='product_id' value='".$row['product_id']."'>";
				echo "<td><button type='submit' class='btn btn-default active'>Edit</button>";
				echo "</tr>";
				echo "</form>";
			
		  }
?>

			</table>
			</div>
			
			<a href="registerproduct.php" data-transiction="flow">
			<h5><b> New product</b></h5></a><br>	
			

		</div>

		<?php  include('footer.php'); ?>

</body>
</html>