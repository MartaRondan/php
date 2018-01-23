<?php
	session_start();
	
	include('fpdf.php');
	include('db.php');
	
	
	$id = $_POST['print_pdf'];
	
	if(!isset($_SESSION['pdf_order'])){
		$_SESSION['pdf_order'] = array();
		}
	
		include('db.php');
			
				$q = $DBH->prepare("SELECT * FROM productorder WHERE ID_order_description = ?");
				$q->bindParam(1,$_POST['print_pdf'], PDO::PARAM_STR);
				$q->execute();
				$rec = $q->fetch(PDO::FETCH_ASSOC);
				
				foreach($rec as $row){
					
					//if ($sth->rowCount() > 0){
						

					
											$_SESSION['id_products'] = $rec['ID_products'];
											$_SESSION['order_id'] = $rec['ID'];
											$_SESSION['id_order_descr'] = $rec['ID_order_description'];
											$_SESSION['quantity'] = $rec['quantity']; 
					
						$order = array (
						'order_id' => $rec['ID'],
						'id_products' => $rec['ID_products'],
						'id_order_descr' => $rec['ID_order_description'],
						'quantity' => $rec['quantity'],
					);
					
					
					$idprod = $rec['ID_products'];
					$order_id = $rec['ID'];
					$id_order_descr = $rec['ID_order_description'];
					$quantity = $rec['quantity'];
					
					//echo '<pre>';
					//print_r($order);
					}
					
	$q = $DBH->prepare("SELECT * FROM users WHERE user_id = ?");
				$q->bindParam(1,$id, PDO::PARAM_STR);
				$q->execute();
				$rec = $q->fetch(PDO::FETCH_ASSOC);
				
				foreach($rec as $row){
					
					
					 
					
											$_SESSION['Fname'] = $rec['user_firstname'];
											$_SESSION['Lname'] = $rec['user_lastname'];
											$_SESSION['UAddress'] = $rec['user_address'];
											
											
										$fname = $rec['user_firstname'];
										$flast = $rec['user_lastname'];
										$address = $rec['user_address'];
				
						$order2 =array(
						
						
						'Fname' => $rec['user_firstname'],
						'Lname' => $rec['user_lastname'],
						'UAddress' => $rec['user_address']
						);
							
						
						
						 $_SESSION['pdf_user'] = $order2;
						 
						 
						 
	
	
	$pdf = new FPDF();
	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B',18);
	$pdf -> Cell(0,10,'Order details',1,1);
	$pdf -> Cell(50,10,"Name:{$fname} {$flast}",10,1);
	$pdf -> Cell(50,10,"Address:{$address}",10,1);
	$pdf -> Cell(1,1,"");
	$pdf -> Cell(50,10,"Product ID: {$idprod}",10,1);
	$pdf -> Cell(50,10,"Order ID: {$order_id}",10,1);
	$pdf -> Cell(50,10,"Order Description ID: {$id_order_descr}",10,1);
	$pdf -> Cell(50,10,"Quantity: {$quantity}",10,1);
	
	$pdf -> output();
	
				}
	
	?>