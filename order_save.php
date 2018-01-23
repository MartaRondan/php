<?php

session_start();

?>
<?php

include("db.php");
if(isset($_POST['order_save']))
{

	if($_POST){
	
	
		$user_id = $_POST['user_id'];
		$order_name = $_POST['product_name'];
		$order_price = $_POST['product_price'];
		$order_quantity = $_POST['Quantity'];
		$order_total = number_format($order_price,2,",",".") * $order_quantity;
		$order_status='Pending';
		$order_id ='';

				//$q = $DBH->prepare('SELECT * FROM order_description');
				//$check = $q->fetch(PDO::FETCH_ASSOC);
					//var_dump;
					
					$q = $DBH->prepare("INSERT INTO order_description(order_id,user_id,order_name,order_price,order_total,order_status) VALUE (?,?,?,?,?,?)");
						$q->bindParam(1,$order_id, PDO::PARAM_STR);
						$q->bindParam(2,$user_id, PDO::PARAM_STR);
						$q->bindParam(3,$order_name, PDO::PARAM_STR);
						$q->bindParam(4,$order_price, PDO::PARAM_STR);
						$q->bindParam(5,$order_total, PDO::PARAM_STR);
						$q->bindParam(6,$order_status, PDO::PARAM_STR);
						$q->execute();
						
						
		echo "<script>alert('Item successfully added to cart!')</script>";				
		echo "<script>window.open('cart.php?id=1','_self')</script>";


				
	
			
		
	
		
    }
}

?>
