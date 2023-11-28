<?php
include("buyer_reg_process2.php");

if(isset($_SESSION['username']))
{
    header("Location: check_profile.php");
}
?>
<html>
    <head>
    

    </head>
    <body>
    <form action ="" method="POST" enctype ="multipart/form-data">

        <center><br><br><br><br>
        <h1> Your registration is complete!</h1>
        
        <h2>
        <table><tr>
        <td><a href="buyer_login.php">Login</a></td>
    </tr>
<tr><td>
<a href="homepage.php">Go to homepage</a>
</td></tr></table>
        </h2>
        </center>
        
</form>

</body>
</html>
