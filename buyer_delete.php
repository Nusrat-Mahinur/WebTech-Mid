<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

?>
<html>

    <body>
        <h1>Are you sure you want to delete your account? </h1> <br>
        <a href="buyer_delete_confirm.php">YES    </a> 
            <a href="buyer_update.php">    Go back</a>
    </body>
</html>