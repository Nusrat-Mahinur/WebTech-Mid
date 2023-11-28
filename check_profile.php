<?php
session_start();


include("db.php");

if(!isset($_SESSION['username']))
{
    header("Location: buyer_login.php");
    echo "<br>Login first<br>";

}
?>

<html>
    
    <body>
        <div class="sticky">
            <div class="topnav">

            
            <a href="homepage.php">Home </a><br></br>

            <a href="buyer_update.php">Update Info </a><br></br>
            <a href="buyer_cart.php">Check Cart </a><br></br>
            <a href="buyer_search.php">Search Product </a><br></br>
            <a href="buyer_premium.php">Premium Membership </a><br></br>
            <a href="buyer_support.php">Get Support </a><br></br>
            <a href="buyer_wishlist.php">Wishlist </a><br></br>
            <a href="buyer_buying_history.php">Buying History </a><br></br>
            <a href="buyer_logout.php">Logut</a>

            
 </div>  
</div>

<hr size="2" width="100%">
<br>
<?php 
            $mydb= new db();
            $myconn = $mydb->openCon();
            $result=$mydb->showdetails($myconn,'buyer_info',$_SESSION["username"]);

            while($row = $result->fetch_assoc()) { ?>

                
            <!-- // $mydb->createcarttable($myconn,$user); -->
            <?php
            }
            

            ?>

           
<h1 align="center">
    <?php
    if(!isset($_COOKIE[$_SESSION['username']])){ ?>
        Welcome
    <?php
    }
    else{ ?>
        Hello Buyer
    <?php
    }
    setcookie($_SESSION['username'], $_SESSION['username'], time() + (86400*30),"/");

    ?>
            
        </h1>
        <?php

$connection = new db();
$conobj=$connection->openCon();

$result=$connection->showdetails($conobj,"buyer_info",$_SESSION['username']);


    while($row = $result->fetch_assoc()) {
        $_SESSION['b_fname']= $row["b_fname"];
        $_SESSION['b_lname']= $row["b_lname"];
        $_SESSION['b_mbl_no']= $row["b_mbl_no"];
        $_SESSION['b_email']= $row["b_email"];
        $_SESSION['b_dob']= $row["b_dob"];
        $_SESSION['b_gender']= $row["b_gender"];

    // echo "lname: " . $row["b_lname"]. " - Name: " . $row["b_fname"]. " " .
    // $row["b_pass"]. "<br>";
    }

    ?>
        
        <a href="homepage.php">Go to homepage</a>
        <br></br>

        <?php include 'footer.php';?>
    </body>
</html>