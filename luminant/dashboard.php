<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
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
        <?php  if (isset($_SESSION['username'])) : ?>

            <section id="topbar" class="d-none d-lg-block">
            <div class="container clearfix">
              <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@careerexperience.ng</a>
                <i class="fa fa-phone"></i> +234 810 5589 5548
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
                  <li class="menu-has-children"><a href=""><i class="fa fa-user avatar" ></i><span>Welcome <strong><?php echo $_SESSION['username']; ?></strong></span></a>
                    <ul>
                      <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Go Pro</a></li>
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
	<h2>Member Dashboard</h2>
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
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <form class="form-inline" role="form" style="width:90%">
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="firstname" style="text-align:left;">
                                First Name:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12"><input type="text" class="form-control" name="firstname"></div>
                    </div>
                    
                </div>
                <div class="form-group form-row">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="lastname">
                                Last Name:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12"><input type="text" class="form-control" name="lastname"></div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="age" style="text-align:left;">
                                Birthday:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12"><input type="date" class="form-control" name="age"></div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="phone">
                                Phone Number:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12"><input type="text" class="form-control" name="phone"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="course">
                                Course of Study:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <input type="text" class="form-control " name="course" required>
                        </div>
                    </div>
                </div>
                <br><div class="form-group form-row">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="education">
                                Education:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <select class="form-control" name="education">
                                <option>SSCE</option>
                                <option>OND</option>
                                <option>HND</option>
                                <option>Degree</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="honors">
                                Class of Honors:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <select class="form-control" name="honors">
                                <option>First Class</option>
                                <option>Distinction</option>
                                <option>Second Class Upper</option>
                                <option>Upper Credit</option>
                                <option>Second Class Lower</option>
                                <option>Lower Credit</option>
                                <option>Third Class</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="nysc">
                                NYSC Cert No(If applicable):
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <input type="text" class="form-control" name="nysc">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="interest">
                                Area of Interest:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <input type="text" class="form-control" name="interest" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row form-row">
                        <div class="col-sm-5 col-xs-12">
                            <label for="skills">
                                Skills Set:
                            </label>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <textarea class="form-control" rows="2" cols="25" name="skills"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <button class="btn btn-primay" type="submit">UPDATE</button>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
        
    </div>
    </div>
    
</div>
<?php include('js.php'); ?>
</body>
</html>