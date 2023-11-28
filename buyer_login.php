<?php
include("buyer_login_process.php");
if(isset($_SESSION['username']))
{
    header("Location: check_profile.php");
}
$error="";
?>
<html> 
    <body>
  <center>
  <!-- <div class="sticky">
            <div class="topnav">
            <a href="homepage.php">Home </a>
            <a href="buyer_login.php">Login </a>
    
 </div>  
</div> -->
        <h1>Login Here for Continue</h1>
        <hr size="2" width="100%">
    <form action ="" method="POST">             
<table>
    <tr>
        <td>User name:</td>
        <td><input type="text" name="username" ></td> 
</tr>
<tr>
        <td>Password:</td>
        <td><input type="password" name="password" ></td> <br>
</tr>
<tr> </tr>
</table>
                     <table>
                    <tr>
                    <button type="submit" name="submit" value="Login"> Login </button>
                    </tr>
                  </table>                 

Not registered yet? <a href="Buyer_Registration.php"> Click here </a> 
<br>
<a href="homepage.php">Go to homepage</a>               
</center>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<?php include 'footer.php';?>
</form>
</body>
</html>