<?php

include ('db.php');


	  $sql = $DBH->prepare("UPDATE users SET user_email = ?,user_password = ?,user_firstname = ?,user_lastname = ?,user_address = ?,user_type = ? WHERE user_id = ?");

						$sql->bindParam(1,$_POST['user_email'], PDO::PARAM_STR);
						$sql->bindParam(2,$_POST['user_password'], PDO::PARAM_STR);
						$sql->bindParam(3,$_POST['user_firstname'], PDO::PARAM_STR);
						$sql->bindParam(4,$_POST['user_lastname'], PDO::PARAM_STR);
						$sql->bindParam(5,$_POST['user_address'], PDO::PARAM_STR);
						$sql->bindParam(6,$_POST['user_type'], PDO::PARAM_STR);
						$sql->bindParam(7,$_POST['user_id'], PDO::PARAM_STR);
						$sql->execute();
	
				//print_r ($sql->errorInfo()); die;
				
				echo '<script>window.location="admin.php?updated=1"</script>';


?>