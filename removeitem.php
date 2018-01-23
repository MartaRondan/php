<?php 

		session_start();
		
		
		unset($_SESSION['cart'][$_POST['item_id']]);
		
		
		echo '<script>window.location="cart2.php?itemremoved=1"</script>';
		
?>
		