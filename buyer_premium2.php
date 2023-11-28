<?php
session_start();
include('bkash_payment_process.php');

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}



?>

<html>

    <body>
    
    <form action="" method="post"  onsubmit="return formcheck3()">
        <table>
        

            <tr>
                <td>
                Bkash no. 
                </td>
                <td><input type="text" name="phoneno" id="mobile" placeholder="ignore first '0' e.g. 1758550331" onkeyup="mobilecheck()"> 

                </td>
                <td>
                    <label id="mobchk"></label>
                </td>
            </tr>

            <tr>
                <td>
                Pin  
                </td>
                <td>
                <input type="text" name="pin" id="pincheck" onkeyup="pincheck()">

                </td>
                <td> <label id="pinchk"></label> 
            </td>
                
                
            </tr>
            
            <tr>
                <td>
                <button type="submit" name="submit" value=""> Confirm</button>

                </td>
            </tr>
        
    

     
    </table>
</form>

   

    </body>
</html>