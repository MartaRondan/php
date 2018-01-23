<?php

include ('db.php');

$status = $_POST['order'];

	  $sql = $DBH->prepare("UPDATE order_description SET order_status = ?");
	  
						$sql->bindParam(1,$status, PDO::PARAM_STR);
						$sql->execute();
	
						
						
						
	
				
				
				echo '<script>window.location="delivery.php?updated=1"</script>';


?>