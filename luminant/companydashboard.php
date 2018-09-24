<?php 
  session_start(); 

  if (!isset($_SESSION['Email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: companyLogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['Email']);
  	header("location: companyLogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Reveal Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="css/form_style.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
    <style>
        label{text-align: left;}
        .form-row{margin-bottom: px;}
    </style>
</head>

<body id="body">

    

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['Email'])) : ?>

            <section id="topbar" class="d-none d-lg-block">
            <div class="container clearfix">
              <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
                <i class="fa fa-phone"></i> +1 5589 55488 55
              </div>
              <div class="social-links float-right">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </section>

          <!--==========================
            Header
          ============================-->
          <header id="header">
            <div class="container">

              <div id="logo" class="pull-left">
                <h1><a href="#body" class="scrollto"><img src="img/clogo.png"></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
              </div>

              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="#body">Home</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                  <li class="menu-has-children"><a href=""><i class="fa fa-home avatar" ></i><span>Welcome <strong><?php echo $_SESSION['Email']; ?></strong></span></a>
                    <ul>
                      <li><a href="#">Edit Profile</a></li>
                      <li><a href="#"><span> <a href="index.php?logout='1'" style="color: red;">Logout</a> </span></a></li>
<!--
                      <li></li>
                      <li><a href="#">Drop Down 5</a></li>
-->
                    </ul>
                  </li>
                  
                </ul>

              </nav><!-- #nav-menu-container -->
            </div>
          </header><!-- #header -->
    
    <?php endif ?>
<div class="header">
	<h2>Company Dashboard</h2>
</div>
<div class="dashboard_content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
<!--    begininng main content-->
    
    
</div>
<?php include('js.php'); ?>
</body>
</html>