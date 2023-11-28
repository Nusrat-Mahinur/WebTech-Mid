<?php
include("db.php");
session_start();

if(isset($_POST["submit"])){

    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "Username or Password is invalid";
        }
        else
        {
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $connection = new db();
        $conobj=$connection->openCon();
        
        $userQuery=$connection->CheckUser($conobj,"buyer_info",$username,$password);
        
        if ($userQuery->num_rows > 0) {
            
          $_SESSION['username']=$_POST['username'];
          $_SESSION['password']=$_POST['password'];

           }
         else {
        echo "Username or Password is invalid";
        }

        $connection->CloseCon($conobj);
        
        }

    $flag=0;

    
    
}


?>