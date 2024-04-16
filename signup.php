<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
   <div>
    <form class="form" action="signupprocess.php" method="post">
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to your Database. </p>
            <div class="flex">
            <label>
                <input class="input" type="text" name="firstname" placeholder="">
                <span>Firstname</span>
            </label>
    
            <label>
                <input class="input" type="text" name="lastname" placeholder="">
                <span>Lastname</span>
            </label>
        </div>  
                
        <label>
            <input class="input" type="email" name="email" placeholder="" >
            <span>Email</span>
        </label> 

        <label>
            <input class="input" type="age" name="age" placeholder="age">
            <span>Age</span>
        </label>

        <label>
            <input class="input" type="Password" name="Password" placeholder="">
            <span>Password</span>
        </label>
        
        <label>
            <input class="input" type="date" name="date" placeholder="date" >
            <span>Date</span>
        </label>

        <button class="submit" type="submit" name="submit" >Submit</button>
    </form>
    
    <?php
    session_start();
    if(isset($_SESSION['message'])){
        echo '<div>'.$_SESSION['message'].'</div>';
    }
    ?>
   </div>
        
</body>
</html>