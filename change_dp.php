<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}
include("changedp_process.php");

?>


<html>
<head>
    
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">

            <table>
            <tr>
                <td> Upload a picture of yours </td>
                <td> <input type="file" name="imagee" id="uploadBox" > </td>
                
                </tr>
                <tr>
                    <td><input type="submit" name="confirm" value="confirm"> </td>
                </tr>
            </table>

        </form>
    </body>
</html>
