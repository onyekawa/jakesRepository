<?php
//
//
//echo "hello jake";
//    
//echo "<h5> i love using PHP!</h5>";
//
//
//$mystring = "hello class. my name is:";
//$newline = "</br>";
//echo $mystring."jake".$newline;
//
//    $modulus = 5%2;
//echo "perform modulus: 5%2 =".$modulus;
//$y = 4;
//$x = 5;
//$z =3;
//$z += 6;
//$z = $z +9;
//
//var_dump ($x==$y);
//echo $z;
//
//$y = 5;
//echo ++$y;
//echo  "<br/>".$y;
////    GLOBAL
////function addition(){
////    
////    $GLOBALS[i]= $GLOBALS[g] + $GLOBALS[h];
////    echo "<br/>".$i;
////}
////    addition (75, 25);
//
//function addition($g, $h){
//    
//    $i= $g + $h;
//    echo "<br/>".$i;
//}
//    addition (75, 25);

//php server

echo $_SERVER['PHP_SELF'];
echo "<br/>";
echo $_SERVER['SERVER_NAME'];
echo "<br/>";
echo $_SERVER['SERVER_HOST'];


//creating form using php





    ?>




<!DOCTYPE html> 
<html>
<head>
	<title>Funke's Blog</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
	<link rel="shortcut icon" type="image/png" href="img/icon.jpg"/>
</head>
    
    <?php include ("menu.php"); ?>
<body>
    <header>
        <div id="header-inner">
            <a href="index.html" id="logo"></a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about.php">About Us</a></li>
                    <li><a href="#services.php">Services</a></li>
                    <li><a href="#faq.php">FAQs</a></li>
                    <li><a href="#contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--End of header-->

    <section>
        <div class="banner-inner">
            <img src="img/banner.jpg" alt="">
        </div>
    </section>
     <!--End of banner-->
    
    <div id="services">
            <section class="one-fourth" id="service1">
                
                <h3>Online Consulting</h3>
            </section>    
            <section class="one-fourth" id="service2">
        
                <h3>Precription</h3>
            </section>    
            <section class="one-fourth" id="service3">
            
                <h3>Referrals</h3>
            </section>    
            <section class="one-fourth" id="service4">
               
                <h3>Ask A Doctor</h3>
            </section>
    </div>
    <!--End of Four Col Section-->
    
    <section class="inner-wrapper" id="about">
        <article id="tablet">
           <div class="img-container">
            <img src="img/healthcare-apps.png" alt="">
               
           </div>
        </article>
        
        <aside id="tablet">
            <h2>ABOUT SPECIAL DOCTORS</h2>
            <p>WE TACKLE EVERYDAY HEALTHCARE ISSUES ON OUR EASY TO USE WEB APPLCIATION</p>
        </aside>
    </section>
    <section>
        <aside>
            <h2>MOBILE, TABLET, DESKTOP</h2>
            <p>WE TACKLE EVERYDAY WEB DESIGN PROJECT WITH CARE</p>
        </aside>
        <article>
            <img src="img/medics.png" alt="">
        </article>
    </section>
    <!--End of 2 Col section-->
    
    <section class="contact" id="contact">
       <h3 class="text-center">Fill This Form To Reach Us</h3>
        <form action="#">
            <input type="text" name="name" placeholder="Enter Name Here"><br>
            <input type="email" name="email" placeholder="Enter Emails Address"><br>
            <input type="phone" name="phone" placeholder="Enter Contact Number"><br>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Comments"></textarea><br>
            <input type="submit" name="<submit></submit>" value="Send">
        </form>
    </section>
  
    
    <footer>
           Funke's &copy;2018. All Right Reserved
    </footer>
</body>
</html>
