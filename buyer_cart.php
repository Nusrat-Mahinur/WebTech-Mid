<?php
include("db.php");
// include("../control/cart_delete.php");
session_start();

if(!isset($_SESSION['username'])){
    header("location: buyer_login.php");
}

if(isset($_GET["id"])){
    
    // echo "dhukse";
    $id=$_GET["id"];
    $mydb= new db();
    $myconn = $mydb->openCon();

    $mydb->deletefromcart($myconn,'buyer_cart',$id);

     header("Location: buyer_cart.php");

}



?>
<html>

    <body>
        <a href="check_profile.php">HOME</a><br>
    <?php

$connection = new db();
$conobj=$connection->openCon();

//  $result=$connection->insertIntoCart("product_1",10,$_SESSION['username'],$conobj);
$result=$connection->showcart($conobj,'buyer_cart',$_SESSION['username']);


// $check=0;
    while($row = $result->fetch_assoc()) {
    echo "Id: ".$row['id']."<br>Product name: " . $row["product_name"]. "<br> Product id: " . $row['product_id']." 
        <br>
     <a href='buyer_cart.php?id=".$row['id']."' > Delete </a> <br>
     <a href='buyer_see_product.php?id=".$row['product_id']."'>See product </a><br><br>";
     

    
    // </form>
    
    // if(isset($_POST["user_delete1"])){
    //     echo "ling<br>";
    //     $mydb= new db();
    //     $myconn = $mydb->openCon();
    //     $mydb->deletefromcart($conobj,$_SESSION['username'],$row['id']);
    // }
    // echo $check;
    }

    

    ?>
    </body>
</html>