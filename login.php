<?php include 'signin.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesignup.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <title>Login</title>
</head>

<body>

<div class="container">
    <div class="header">
        <h2>Welcome to FoodManiac !</h2>
    </div>
    <form action="signin.php" id="form" class="form" method="post">
        <div class="form-control">
            <p class="alert-danger"><?php
                if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    $_SESSION['error'] = null;
                }
                ?></p>
            <label for="username">Username</label>
            <input name="user_name" type="text" value="<?php if (isset($_SESSION['username'])) {
                echo htmlspecialchars($_SESSION['user_name'], ENT_QUOTES);
            } ?>" placeholder="Enter Your User Name" id="username" />
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>
            </small>
        </div>
        <div class="form-control">
            <label for="username">Password</label>
            <input name="password" type="password" placeholder="Enter Your Password" id="password"/>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <a href="signup.php"><p>Need an account? Click here to register</p></a>

        <input class="sign_up_btn" name="login" type="submit" value="Submit">
    </form>
</div>

</body>

</html>