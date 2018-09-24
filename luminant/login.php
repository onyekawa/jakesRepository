<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Member Login Page</title>
    <?php include('link.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/form_style.css">
</head>
<body>
    <?php include('menu.php'); ?>
  <div class="header" style="width:50%;">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php" class="gradLogin" style="width:50%;">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>