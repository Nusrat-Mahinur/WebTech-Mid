<?php

session_start();

include('db.php');


if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}



?>

<html>
    <head>

    
        
    </head>
    <body>

    <h1>Your review has been posted</h1><br><br>
    <a href="check_profile.php"></a>
            
        </body>
</html>