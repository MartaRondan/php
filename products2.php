<?php
session_start();

include('header.php');


?>





<!DOCTYPE html>
<html>

<head>
  <title> Product Details</title>
  <link rel="stylesheet" href="themes/LightBlue.min.css" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </head>



  

<?php
   include('db.php');


	$q = $DBH->prepare("SELECT * FROM products");
    $q->execute();

    $check = $q->fetchAll(PDO::FETCH_ASSOC);
	foreach($check as $row){
		
			
      
			echo '<div data-role="form">';
			echo '<form data-ajax = false id=products-form action=cart2.php method=GET  style="display: block;">';
			echo '<br>';
		    echo  '<h4><strong> Name: '.$row['product_name'].'</strong></h4>';
			echo '<br>';
			echo '<div >';
            echo '<div>';
            echo  '<h4> <strong>Product ID: '.$row['product_id'].'</h4>';
            echo  '<img src="'.$row['product_image'].'">';
            echo  '<h4><strong> Price: </strong>'.$row['product_price'].'</h4>';
            echo  '<h4><strong> Description:</strong> '.$row['product_description'].'</h4>';
			echo '<h4> Quantity  </h4>';		
			echo '<br>';
			echo '<input type = hidden name = product_id value ='.$row["product_id"].'>';
			echo '<input type = hidden name = product_price value ='.$row["product_price"].'>';
			echo '<input type = hidden name = product_name value ='.$row["product_name"].'>';
			echo '<input type=text name="Quantity">';
			echo '<input type=submit name = submit value = add>';
			echo '</form>';
			echo '<br>';
			echo '</div>';
			echo'</div>';
	    } 
	
	
?>
			
				

 