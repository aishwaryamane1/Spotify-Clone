<?php

session_start();

include('db_connect.php');

$msg = "Account Created Successfully!";

if (isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password."' limit 1" ;
    $result = mysqli_query($con , $query);

    if (mysqli_num_rows($result)==1) {
        header('Location:welcome.php');
    } else {
        $msg = "Incorrect Password!" ;
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website login</title>
    <style>
    <?php include "signup.css" ?>
    <?php include "responsive.css" ?> 
    </style>
</head>
<body>
    <header>
        <div class="left_box1">
            <div class="content">
                <form method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Username</label>
                        <input type="text" name="user_name" placeholder="Enter Your Username" required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Username" required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <!-- show password remaining -->
                    <div class="check">
                        <input type="checkbox" name="" id=""> <span>Remember Me</span>
                    </div>
                    <p>Don't have a account yet? <a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>
        <div class="right_box1">
            <div class="quote">
                <div class="static-txt">Harmonize Your</div>
                <ul class="dynamic-txts">
                    <li><span>Soul</span></li>
                    <li><span>Heart</span></li>
                    <li><span>Spirit</span></li>
                    <li><span>Essence</span></li>
                    <li><span>Emotions</span></li>
                    <li><span>Mind</span></li>
                </ul>
                <h4>"Unlock Your Journey into the Enchanting Melody!"</h4>
            </div>
            <!-- <h3> Incorrect Password!</h3> -->
            <?php
            echo('<h3>'.$msg.'</h3>');
            ?>
        </div>
    </header>
</body>
</html>