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
	
  <form method="post" action="companySignup.php" style="width:50%;" class="gradLogin">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Company Name</label>
  	  <input type="text" name="Name" value="<?php echo $name; ?>">
  	</div>
  	
    <div class="input-group">
  	  <label>Company Website</label>
  	  <input type="text" name="Website" value="<?php echo $website; ?>">
  	</div>
    <div class="input-group">
  	  <label>Company Email</label>
  	  <input type="email" name="Email" value="<?php echo $companyemail; ?>">
  	</div>
    <div class="input-group">
  	  <label>Company Phone No</label>
  	  <input type="text" name="Phone" value="<?php echo $companyphone; ?>">
  	</div>
    <div class="input-group">
  	  <label>Company Address</label>
  	  <input type="text" name="Address" value="<?php echo $companyaddress; ?>">
  	</div>
    <div class=" radio">
  	  <label>Is Your Company Registered with CAC?</label>
  	  <input type="radio" name="CAC" value="<?php echo $cac; ?>">Yes
        <input type="radio" name="CAC" value="<?php echo $cac; ?>">No
  	</div>
    <div class="input-group">
  	  <label>If Yes, CAC Reg No</label>
  	  <input type="text" name="CAC_Reg" value="<?php echo $cac_reg; ?>">
  	</div>
    <div class="input-group">
  	  <label>Sector</label>
  	  <input type="text" name="Sector" value="<?php echo $sector; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="Password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="Password2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="company_reg">Partner With Us</button>
  	</div>
  	<p>
  		Already a partner? <a href="companyLogin.php">Sign in</a>
  	</p>
  </form>
    <?php include('js.php'); ?>
</body>
</html>