<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

?>

<html>

    <body>
        <h1>
            Congratulations!!! You are now a premium member of sellhobe.com
            <br><br>
            Stay with us
            <br>
            <a href="check_profile.php">Back to profile</a>
        </h1>
    </body>
</html>