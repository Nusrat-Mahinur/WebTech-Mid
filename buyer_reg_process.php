 <?php
session_start();
include("db.php");
$nameError="";
$emailError="";
$passError="";
$conditionError="";
$unameError="";
$confError="";
$dobError="";
$genderError="";
$mblerror="";
$gen="";

if(isset($_POST["Submit"]))
{
   // header("Location: Registration2.php");
    $bool1=TRUE;

    $password = $_POST["pass"];
    $user=  $_POST["uname"];
    $first= $_POST["fname"];
    $last= $_POST["lname"];;
    $mobile= $_POST["mbl_no"];
    $email= $_POST["email"];
    $confirm= $_POST["c_pass"];
    $dob= $_POST["dob"];

    //$gen= $_POST["gen"];
    $patternName="/^[a-zA-z ]*$/";
    // $patternPass="/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

    if( empty($password) || empty($user) || empty($first) || empty($last) || empty($email) || empty($confirm)  ){
        echo "wrong";
        echo "Please fill up the form correctly";
        $bool1=FALSE;
    }

    
    if(empty($first) || empty($last)){
        //$nameError=" First name or last name cannot be empty ";
        echo "wrong";
        $bool1=FALSE;
    }
    else  if (!preg_match ($patternName, $first) || !preg_match ($patternName, $last) ) {  
        // $nameError = "Only alphabets and whitespace are allowed.";  
        echo "wrong";
        $bool1=FALSE;
                 //echo $ErrMsg;  
    }
    else{
        $_SESSION["name"]=$first;
        //echo "<br>Name: ".$first." ".$last;
    }

    $patternUname='/^[A-Za-z][A-Za-z0-9]{5,31}$/';
    if(empty($user)){
        // $unameError=" Username cannot be empty ";
        echo "wrong";
        $bool1=FALSE;
    }
    else  if (!preg_match ($patternUname, $user)  ) {  
        // $unameError = "Only alphabets and numbers allowed and first character should be a letter (length 6-30)";
        echo "wrong";  
        $bool1=FALSE;
                 
    }
    else{
        //echo "Username: ".$user;
    }

    $patternPass="/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/"; //Minimum eight characters, at least one letter and one number


    if(empty($password)){
        // $passError=" Password is not given ";
        echo "wrong";
        $bool1=FALSE;
    }
    else if(!preg_match ($patternPass, $password)){
        // $passError="Password should contain at least - length 8, one lowercase letter, one uppercase letter, one number ";
        echo "wrong";
        $bool1=FALSE;
    }
    else{
        //echo "<br>Password :".$password;
    }

    if(empty($confirm)){
        // $confError=" Confirm password ";
        echo "wrong";
        $bool1=FALSE;
    }
    else if($confirm!=$password){
        // $confError="Password did not match";
        echo "wrong";
        $bool1=FALSE;
    }
    
    $patternEmail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
  

    if(empty($email)){
        // $emailError=" Email cannot be empty ";
        echo "wrong";
        $bool1=FALSE;
    }
    else if(!preg_match ($patternEmail, $email)){
        // $emailError="Email is not valid ";
        echo "wrong";
        $bool1=FALSE;
    }
    else{
        //echo "<br>Email: ".$email;
    }

    $date2=date("Y-m-d");//today's date

   $date1=new DateTime($dob); //dob hocche date attribute er variable
   $date2=new DateTime($date2);

   $interval = $date1->diff($date2);

   $myage= $interval->y; //$myage is his current age


    if(empty($dob)){
        $dobError=" Enter date of birth ";
        $bool1=FALSE;
    }
    else if($myage < 14 || $date1 > $date2){
        // $dobError="Age must be above 15";
        echo "wrong";
               $bool1=FALSE;
    }
    else{
        //echo "<br>Date of birth: ".$dob;
    } 

    if(!isset($_POST["gen"])){
        // $genderError="select a gender";   
        echo "wrong";
                $bool1=FALSE;
    }
    else{
        $gen=$_POST["gen"];
        //echo "<br>Gender: ".$_POST["gen"];
    }

    $patternmob='/^1[13456789][0-9]{8}$/';

    if(!preg_match ($patternmob, $mobile))
    {
        echo "wrong";
        $bool1=FALSE;

    }

    if(!isset($_POST["chk"])){
        // $conditionError="You must accept term and conditions to continue";
        echo "wrong";
        $bool1=FALSE;
    }
    


    if($bool1){
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($first,$last,$user,$mobile,$email,$password,$dob,$gen,"buyer_info",$myconn);
    // $mydb->createcarttable($myconn,$user);
    header("Location: Buyer_Registration2.php");

    }

}

?>


