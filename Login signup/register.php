<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" action="register.php">
  <p><b>Sign Up</></p><br>
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	<input type="text" name="username" placeholder="Full Name" required minlength="2" maxlength="30" value="<?php echo $username; ?>">
  	</div>
	<br>

  	<div class="input-group">
  	  <input type="email" name="email" required minlength="8" maxlength="100" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
	<br>
  	<div class="input-group">
  	  <input type="password" name="password" requirednin required minlength="6"placeholder="Password(6 or more character)">
  	</div>
    <br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">CREATE ACCOUNT</button>
  	</div>
	
  	<p align="right">Have an account?<a href="login.php"> Sign In</a></p>
</form>
</body>
</html>
