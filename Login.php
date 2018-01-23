

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
<link rel="stylesheet" href="themes/LightBlue.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
			
  
  
 
  
</head>

<body>

<div class="container">
					<div class="row">
					<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
					<div class="panel-heading">
					<div class="row">
					<div class="col-xs-6">
					<h3 href="#" class="active" id="login-form-link">Login</h3>
					</div>
					
					</div>
					</div>
					<hr>
					</div>
					<div class="panel-body">
					<div class="row">
					<div class="col-lg-12">
								
								<form data-ajax = "false" id="login-form" action="validate.php" method="POST" data-role="form" style="display: block;">
									<div class="form-group">
									<input type="text" name="user_email" id="user_email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
									<input type="password" name="user_password" id="user_password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="g-recaptcha" data-sitekey="6LfJLQ8UAAAAAPuiut2wSp5HmlD-zVZcxAFQzebA"></div>
									<div class="form-group">
									<div class="row">
									<div class="col-sm-6 col-sm-offset-3">
									<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
									
									</div>
									<div class="col-xs-6">
									<a href="register.php" id="register-form-link">Register</a>
									</div>
									
									</div>
									
								</form>
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
	</div>
	</body>
	</html>
	<?php  include('footer.php'); ?>