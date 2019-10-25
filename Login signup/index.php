<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
  	<p>
  	  <?php if (isset($_SESSION['success'])) : ?>
  	  <?php endif ?>
  	  
  	  <?php  if (isset($_SESSION['username'])) : ?>
  	  <span class="user"><strong><?php echo $_SESSION['username']; ?></strong></span></p>
  	<p>&nbsp;</p>
  	<p><strong>Now you are logged in</strong></p>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Upload Your .cvs File here:
      <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" class=btn value="Submit" name="submit">
    <?php endif ?>
</form>
</div>
		
</body>
</html>