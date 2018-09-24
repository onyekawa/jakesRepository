<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Company Login Page</title>
    <?php include('link.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/form_style.css">
</head>
<body>
    <?php include('menu.php'); ?>
  <div class="header" style="width:50%;">
  	<h2>Company Login</h2>
  </div>
	 
  <form method="post" action="companyLogin.php" class="gradLogin" style="width:50%;">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Company Email</label>
  		<input type="email" name="Email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="Password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="company_login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="companySignup.php">Join Us Today</a>
  	</p>
  </form>
    <?php include('js.php'); ?>
</body>
</html>