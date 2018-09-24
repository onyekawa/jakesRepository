<?php


//connect to database
$db = mysqli_connect ('localhost','root','','cohort7');

$error = array();
$phpusername = '';
$phpemail = '';

//registration
//reads in values from html form and store as php variables

if (isset ($_POST ['reg_user'])){
   
    $phpusername = mysqli_real_escape_string ($db, $_POST['username']);
    
    $phpemail = mysqli_real_escape_string ($db, $_POST['email']);
    
    $phppassword_1 = mysqli_real_escape_string ($db, $_POST['password_1']);
    
    $phppassword_2 = mysqli_real_escape_string ($db, $_POST['password_2']);
    
    
    
//    we wan to check if the username already exists in our table, if it does, give an error message.
    
    $user_check_query = "SELECT * FROM user WHERE username = '$phpusername' OR email = '$phpemail' LIMIT 1";
//    run query
    $result = mysqli_query($db,$user_check_query);
//    store the row returned by the query and then storing it as a variable called user.
    
    
    
    
    $row_returned  =mysqli_fetch_assoc($result);
//checking to see if row returned has value and not just an empty row
    
    
    if ($row_returned){
        //user already exist if data matches and stop
        if ($row_returned['username']==$phpusername){
            array_push ($error, "username already exist");
        }
    
       
        if ($row_returned['email']===$phpusername){
            array_push ($error, "email already exists");
    }
    }
    
//        //if there are no errors

if (count($error) == 0){
    
    //insert php variables into our database 
    echo "success";
    $phppassword = md5($phppassword_1);
    //encrypts password
    
    $query = "INSERT INTO user (username, email, password) VALUES ('$phpusername', '$phpemail', '$phppassword')";
    mysqli_query($db, $query);
    
    $_SESSION ['username']= $phpusername;
    $_SESSION ['success']= "congrats! you are logged in";
    header('location: index.php');

    
}
    

        
}

//loging in existing users
if (isset ($_POST['login_user'])){
    
//
//<!--    //error message to check that the form has been filed proerly ($errors, "you must fil in username")-->
    
     $phpusername = mysqli_real_escape_string ($db, $_POST['username']);

    
    $phppassword= mysqli_real_escape_string ($db, $_POST['password']);
        
    if (count($error)==0){
        //DEFINE THE QUERRY
        $password = md5($phppassword);
        $login_query = "SELECT * FROM user WHERE username = '$phpusername' AND password = '$password'";
    
    
    // run the querry
    
    $result = mysqli_query ($db, $login_query);
    
    if (mysqli_num_rows($result)===1){
        
         $_SESSION ['username']= $phpusername;
    $_SESSION ['success']= "congrats! you are logged in";
    header('location: index.php');
        
    }
    else{
        array_push ($error, "wrong username/password used!");
    } 
    
    }
}




?>
