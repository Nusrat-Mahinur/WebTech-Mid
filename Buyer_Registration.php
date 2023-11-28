<?php
include("buyer_reg_process.php");
if(isset($_SESSION['username']))
{
    header("Location: check_profile.php");
}
?>
 
<html>
        
    <body>
    <div class="sticky">
            <div class="topnav">
            <a href="homepage.php">Go to Home </a><br></br>
           
    
</div> 
</div>
        <div class="bg">

        
   <left>
<form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">
    <!-- <img src="B2B Ecommerce 0 Buyer Y.png" alt="" width="100" height="100"> -->
    <br>
<h1 align="left">Buyer Registration Form</h1>
<hr size="2" width="100%">
<table>
    <tr>
<td> First name </td>
<td> <input type="text" name="fname" placeholder="Enter first name here" id="fname" onkeyup="fnamecheck()"> </td><td><label id="fnamechk" ></label> </td>
</tr>
<tr>
<td>Last name </td>
<td> <input type="text" name="lname" placeholder="Enter last name here" id="lname" onkeyup="lnamecheck()"></td>
<td><label id="lnamechk"></label></td>
</tr>
<tr>
<td>Username </td>
<td> <input type="text" name="uname" placeholder="Enter your username here" id="uname" onkeyup="unamecheck()"></td>
<td><label id="unamechk"></label></td>
</tr>
<tr>
<td>Mobile no. </td>
    <td><input type="text" name="mbl_no" placeholder="ignore first '0' e.g. 1987654321"id="mobile" onkeyup="mobilecheck()"></td>
<td><label id="mobchk"></label></td>
</tr>
<tr>
<td>Email </td>
    <td><input type="text" name="email" placeholder="e.g. abc123@gmail.com" id="email" onkeyup="emailcheck()"></td>
<td><label id="emailchk"></label></td>
</tr>
<tr>
<td> Password </td>
<td> <input type="password" name="pass" placeholder="Enter your password here" id="pass" onkeyup="passcheck()"></td>
<td><label id="passchk"></label></td>
</tr>
<tr>
<td> Confirm password </td>
<td> <input type="password" name="c_pass" placeholder="Enter your password again" id="conpass" onkeyup="conpasscheck()"></td>
<td><label id="conpasschk"></label></td>
</tr>
<tr>
<td> Date of birth </td>
<td> <input type="date" name="dob" id="dobid" onclick="dobcheck()"></td>
<td><label id="dobchk"></label></td>
</tr>
<tr> 
<td>Gender</td>
<td><input type="radio" name="gen" value="Male" id="genderm" onclick="gencheck()">Male  
<input type="radio" name="gen" value="Female" id="genderf" onclick="gencheck()">Female</td> 
<td><label id="genderchk"></label></td>
</tr>

<table>
    <tr>        
       <h6><input type="checkbox"  name="chk" value="agree" id="checkbox">BY CLICKING THIS YOU ARE AGREEING TO OUR TERMS & CONDITIONS</h6> <td><label id="checkboxchk"></label></td>  
    </tr>
</table>
<table>
    <tr>
     <button type="submit" name="Submit"  value ="Next"> Register </button> 
 <button type="reset" name="Reset"  value ="Reset"> Reset </button> 
    </tr>

</table>

<table>
    <tr>
        <label id="write"></label>
    </tr>
</table>
</form>
<!-- <a href="homepage.php">Go to homepage</a> -->
</center>
<br></br>
<h9>Already Have an account? press</h9> 
<a href="buyer_login.php">Login </a>
<?php include 'footer.php';?>

</div>
</body>

    </html>