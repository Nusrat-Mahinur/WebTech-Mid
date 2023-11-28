<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

if(isset($_POST["submit"])){
    header("Location: buyer_premium_confirm.php");
}

?>

<html>

    <body>
    
    <form action="" method="post" >
    Card no. <input type="text" name="cardno" > 
    <br> Pin <input type="text" name="cardpin" id="">
    <br> <input type="submit" name="submit" value="Confirm">

    <!-- buyer_premium2 -->

    </body>
</html>