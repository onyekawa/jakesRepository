<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
    <?php include('link.php'); ?>
  <link rel="stylesheet" type="text/css" href="form_style.css">
</head>
<body>
    <?php include('menu.php'); ?>
  <div class="header" style="width:50%;">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php" style="width:50%;" class="gradLogin">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
<?php include('js.php'); ?>
</body>
</html>