<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}
?>
<html>
<head>
    
    </head>
    
    <body>
        
        <h1>Successfuly Updated</h1>
        <br><br>
        <h2><a href="check_profile.php">Home</a></h2>

    </body>
</html>