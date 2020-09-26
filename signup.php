<?php include ('connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Maniac</title>
    <link rel="stylesheet" href="stylesignup.css">

</head>
<body>
<div class="container">
    <div class="header">
        <h2>Create Account</h2>
    </div>

    <form action="sign_up.php" id="form" class="form" method="post">
        <div class="form-control">
            <label for="username">Username</label>
            <input name="user_name" type="text" placeholder="Enter Your User Name" id="username" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="username">Email</label>
            <input name="user_email" type="email" placeholder="Enter Your Email" id="email" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="user_mobile">Mobile Number</label>
            <input name="user_mobile" type="text" placeholder="Enter Your Mobile Number" id="user_mobile" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="username">Password</label>
            <input name="password" type="password" placeholder="Enter Your Password" id="password"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
            <label for="username">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" id="password2"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <a href="login.php"><p>Already Registered? Sign In</p></a>
        <input class="sign_up_btn" name="sign_in_btn" type="submit" value="Submit" onclick="return checkInputs()">
    </form>
</div>
<script src="js/signup.js"></script>
</body>
</html>