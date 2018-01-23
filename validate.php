

<?php
session_start();
?>


<?php
			

	if(isset($_POST['g-recaptcha-response'])&& ($_POST['g-recaptcha-response'])){
			
			$url = "https://www.google.com/recaptcha/api/siteverify";
			$secret = "6LfJLQ8UAAAAAJzhJQFjBtAN7XZEg74jTjHbCArm";
			//$ip = $_SERVER['REMOTE_ADDR'];
			//$captcha = $_POST['g-recaptcha-response'];
			$response = file_get_contents($url."?secret=".$secret."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
			$data = json_decode($response);
			
			print_r($_POST['g-recaptcha-response']);
			
	
			
				
				
	
				
			if($_POST){
			$user_email = $_POST['user_email'];
			$user_password = md5($_POST['user_password']);
      


						include('db.php');

						$sql = "SELECT * FROM users WHERE user_email= ? and user_password = ?";
						$sth = $DBH->prepare($sql);

						$sth->bindParam(1,$user_email, PDO::PARAM_INT);
						$sth->bindParam(2,$user_password, PDO::PARAM_INT);
						$sth->execute();
							
							
								

									$rec = $sth->fetch(PDO::FETCH_ASSOC);
			
										//if(password_verify($user_password,$rec['user_password'])){
											//var_dump($rec['user_password']);
				
				//print_r($rec['user_password']);
			
											if ($sth->rowCount() > 0){
				

											$_SESSION['user_id'] = $rec['user_id'];
											$_SESSION['user_email'] = $rec['user_email'];
											$_SESSION['user_type'] = $rec['user_type'];
											$_SESSION['user_firstname'] = $rec['user_firstName'];   


														if($rec['user_type'] == 'customer'){
                  

															echo '<script>window.location="products2.php" </script>';
															die;
														}

														if($rec['user_type'] == 'delivery'){
                  
															 echo '<script>window.location="delivery.php" </script>';
															 die;
														}

														if($rec['user_type'] == 'admin'){
															  
															 echo '<script>window.location="admin.php" </script>';
															 die;
														}

														if($rec['user_type'] == 'staff'){
															  
															 echo '<script>window.location="staff.php" </script>';
															 die;
														}
             
			 
										

						}else{
			    
							echo '<script>window.alert="Sorry, your details are wrong or you are not registered" </script>';
							echo '<script>window.location="register.php"</script>';
							
							
							
							 $sth->execute();
		
	 
	  }
	   
	}else{
		
		echo "ERROR";
	
			}				
			}
 ?>