<?php
include("db.php");
session_start();
if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}




?>
<html>

    <body>
        <a href="check_profile.php">HOME</a><br>


                    <tr>
                        <td>
                        <font face="arial" size="7">    
                        <strong>This page is showing buying history</strong>
                        </font>
                    </td><br></br>



    <?php


    

    ?>
    </body>
</html>