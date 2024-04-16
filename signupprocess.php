<?php
require 'database_con.php';
// echo'submitting'
if(isset($_POST['submit'])){
    // print_r($_POST);
$first_name=$_POST["firstname"];
$last_name=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["Password"];
$age=$_POST["age"];           
$date=$_POST["date"];

$query="SELECT * FROM admins WHERE email='$email'";
$connection=$database_con->{($query)};
    if($connection->num_rows>0){
        $user = $connection->fetch_assoc();
        $_SESSION['message']='Email already exist';
        header('location:signup.php');
    }
    else{  
     $hashpassword=password_hash($password,PASSWORD_DEFAULT);
     // echo $hashpassword;
    
     $runquery="INSERT INTO admins (`first_name`, `last_name`, `email`, 
     `password`,`age`, `date`) VALUES('$first_name', '$last_name', 
     '$email', '$age', '$date','$hashpassword')";
    
     $querycon=$database_con->query($runquery);
            if($querycon){
                echo $querycon;
                header('location:signin.php');
            }else{
                echo 'query not ran';
                header('location:');
            }
    }
    
}  else{
        header('location:signup.php');
    } 
?>