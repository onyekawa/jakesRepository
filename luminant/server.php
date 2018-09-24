
<?php


// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'career_experience');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: dashboard.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: dashboard.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
<?php

session_start();

// initializing variables
//$username = "";
//$email    = "";
$name = "";
$website = "";
$companyemail = "";
$companyphone = "";
$companyaddress = "";
$cac = "";
$cac_reg = "";
$sector = "";
$password = "";
//$errors = array();
$error = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'career_experience');

// REGISTER COMPANY
if (isset($_POST['company_reg'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['Name']);
  $companyemail = mysqli_real_escape_string($db, $_POST['Email']);
    $companywebsite = mysqli_real_escape_string($db, $_POST['Website']);
    $companyphone = mysqli_real_escape_string($db, $_POST['Phone']);
    $companyaddress = mysqli_real_escape_string($db, $_POST['Address']);
    $cac = mysqli_real_escape_string($db, $_POST['CAC']);
    $cac_reg = mysqli_real_escape_string($db, $_POST['CAC_Reg']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);
  $password2 = mysqli_real_escape_string($db, $_POST['Password2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($error, "Company Name is required"); }
  if (empty($companyemail)) { array_push($error, "Company Email is required"); }
    if (empty($companyphone)) { array_push($error, "Company Phone Number is required"); }
  if (empty($password)) { array_push($error, "Password is required"); }
  if ($password != $password2) {
	array_push($error, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM company WHERE Name='$name' OR Email='$companyemail' OR CAC_Reg = '$cac_reg' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Name'] === $name) {
      array_push($error, "Company already exists");
    }

    if ($user['email'] === $companyemail) {
      array_push($error, "Email already exists");
    }
    if ($user['CAC_Reg'] === $cac_reg) {
      array_push($error, "CAC_Reg already exists");
    }
    
  }

  // Finally, register user if there are no errors in the form
  if (count($error) == 0) {
  	$Password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO company (Name, Website, Email, Phone, Address, CAC, CAC_Reg, Sector, Password) 
  			  VALUES('$name', '$companywebsite','$companyemail', '$companyphone', '$companyaddress', '$cac', '$cac_reg', '$sector','$Password')";
  	mysqli_query($db, $query);
  	$_SESSION['Email'] = $companyemail;
  	$_SESSION['success'] = "You are now logged in successfully";
  	header('location: companydashboard.php');
  }
}

// COMPANY USER
if (isset($_POST['company_login'])) {
  $companyemail = mysqli_real_escape_string($db, $_POST['Email']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($companyemail)) {
  	array_push($error, "Company email is required");
  }
  if (empty($password)) {
  	array_push($error, "Password is required");
  }

  if (count($error) == 0) {
  	$Password = md5($password);
  	$query = "SELECT * FROM company WHERE Email='$companyemail' AND Password='$Password'";
  	$result = mysqli_query($db, $query);
  	if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['Email'] = $companyemail;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: companydashboard.php');
  	}else {
  		array_push($error, "Wrong username/password combination");
  	}
  }
}

?>
