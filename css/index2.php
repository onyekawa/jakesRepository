<!doctype html>

<head>

<body>
    <?php
    $name= "";  
     $email= "";
    $nameErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){$nameErr= "name is required";}
    else{
        $name=test_input($_POST["name"]);
    }
    
$name=test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
}
    function test_input($data){
$data = htmlspecialchars($data);
return $data;

}
//required field

    
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"> 
   name: <input type="text"
           name="name" placeholder="surname first">
        <span class="error">*
            <?php echo $nameErr;?> </span>
        
        
   email: <input type="text"
           name="email" >
          <br>
    <input type="submit">
        
        <?php
   
        echo "<hi>output</hi>";
        
        echo "$name";
                echo "$email";
        
        ?>
    
    </form>
    
    </body>


</head>
    