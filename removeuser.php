<?php

include('db.php');
	
	//print_r($_POST);
	

	
$sql = $DBH->prepare("DELETE FROM users WHERE user_id = '$_POST[user2_id]'");
$sql->execute();

 
	
echo '<script>window.location="admin.php?removed=1"</script>';


?>