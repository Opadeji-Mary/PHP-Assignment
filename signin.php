<?php
require 'database_con.php';

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $query="SELECT * FROM admins WHERE email = '$email'";
    $con=database_con->query($query);
    if($con->num-row>0){
        $user=$con->fetch_assoc();
        $print_r($user);
        $hashed=$user['password'];
        $password_verify=password_verify($pass,$hashed);
        if($password_verify){
            echo $password_verify;
        }
        else{
            echo '<div class="text-center text-danger">incorrect password</div>';
        }
    }
    else{
        echo '<div class="text-center text-danger">Email does not exist</div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
       <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="post">
          <center>
          <h1>Sign In Page</h1>
            <input class="form control" type="text" placeholder="email" name="email" > <br>
            <input class="form control" type="text" placeholder="password" name="Password"> <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-success">
          </center>
        </form>
    <!-- <div class="container">
        <div class="col-6 mx-auto">
            <div class="p-3">
                <form action="" action="" method="post">
                <input type="text">
                <input type="text">
                </form>
            </div>
        </div>
    </div> -->
</body>
</html>