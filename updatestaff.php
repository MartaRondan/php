<?php

include ('db.php');


	  $sql = $DBH->prepare("UPDATE products SET product_name= ?,product_description= ?,product_price = ? WHERE product_id = ?");

						$sql->bindParam(1,$_POST['product_name'], PDO::PARAM_STR);
						$sql->bindParam(2,$_POST['product_description'], PDO::PARAM_STR);
						$sql->bindParam(3,$_POST['product_price'], PDO::PARAM_STR);
						$sql->bindParam(4,$_POST['product_id'], PDO::PARAM_STR);
						$sql->execute();
	
				//print_r ($sql->errorInfo()); die;
				
				echo '<script>window.location="staff.php"</script>';


?>