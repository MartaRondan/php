<?php
session_start();
?>

<?php
include('db.php');

				


						if($_POST){

						$user_email = $_POST['reg_email'];
						$user_password = $_POST['reg_password'];
						$user_firstname = $_POST['reg_firstname'];
						$user_lastname = $_POST['reg_lastname'];
						$user_address = $_POST['reg_address'];
						$user_type = 'customer';

			
				$q = $DBH->prepare('SELECT user_email FROM users WHERE user_email = :user_email');
				$q->bindValue(':user_email', $user_email);
				$q->execute();
				$check = $q->fetch(PDO::FETCH_ASSOC);
				
				
				
				
				if($check['user_email']){
					
					
					
					header("Location:login.php");
					
					//echo "<script>alert('Customer already exists, please use another email!')</script>";
					//echo"<script>window.open('register.php')</script>";
					
				}else{
					
						
						$pass_hash = md5($user_password);
					
						  
				
						$q = $DBH->prepare("INSERT INTO users (user_email,user_password,user_firstname,user_lastname,user_address,user_type) VALUE (?,?,?,?,?,?)");
						$q->bindParam(1,$user_email, PDO::PARAM_STR);
						$q->bindParam(2,$pass_hash, PDO::PARAM_STR);
						$q->bindParam(3,$user_firstname, PDO::PARAM_STR);
						$q->bindParam(4,$user_lastname, PDO::PARAM_STR);
						$q->bindParam(5,$user_address, PDO::PARAM_STR);
						$q->bindParam(6,$user_type, PDO::PARAM_STR);
						$q->execute();
						
						
						echo "<script>alert('Succesfully saved')</script>";				
						echo "<script>window.open('Login.php')</script>";
						
						
						
			}	
				
				
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="themes/LightBlue.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>

<body>


					<form data-ajax = "false" role="form" method="POST" action="register.php">
							
					
							<div class="form-group">
                                <input class="form-control" placeholder="Firstname" name="reg_firstname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Lastname" name="reg_lastname" type="text" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Address" name="reg_address" type="text" required>
							</div>
							
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="reg_email" type="email" required>
							</div>
							
							<div class="form-group">
                                <input class="form-control" placeholder="Password" name="reg_password" type="password" required>
							</div >
								
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="reg-submit" id="reg-submit" tabindex="4" class="form-control btn btn-login" value="Register">
										</div>
									</div>
								</div>
					</form>
						
			  
			  
</body>
</html> 