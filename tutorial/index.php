<?php
session_start();
//to makeonly logged in users can access this page

if(!isset($_SESSION['username'])){
    
    header ('location: login.php');
}


    


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/csss" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
    <div class="content">
<!--        <!notification message here>-->
        <?php if (isset($_SESSION['success'])) : ?>
         <h3>
        <?php 
            echo $_SESSION['success'];
         unset ($_SESSION['success']);
            ?></h3>
        <?php endif ?>
        
         <?php if (isset($_SESSION['username'])) : ?>
        
        
             <p> welcome<strong>
                 <?php echo $_SESSION['username'];
                 ?> 
                 </strong>
        </p>
        <p>
     <a href="index.php?logout='1'" style="color:red;">logout</a>        
        </p>
     <?php endif ?>
	
</div>
    
</body>
</html>
 