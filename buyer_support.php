<?php

session_start();
include('buyer_support_process.php');
if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}



?>

<html>


    <form action="" method="post">
    <body>
        <h3>Write your problem here</h3>
        <br>
        <textarea name="support" id=" rows="10"></textarea>
        <br><br><button type="submit" name="submit" >Send </button>
        </form>
    </body>
</html>