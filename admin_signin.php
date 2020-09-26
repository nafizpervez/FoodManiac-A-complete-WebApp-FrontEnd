<?php
session_start();
require 'connection.php';

$username_err = $password_err = '';

if (isset($_POST['admin_login'])){

    $user_name = $_POST['admin_user'];
    $password = $_POST['admin_pass'];

    if (empty($user_name)||empty($password)){
        $user_name = "Username/Password Cannot be empty";
        header("location: admin_login.php");
    }else{
        $sql = "SELECT * FROM users WHERE user_name= '$user_name' and user_password = '$password' and role_id = '1'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

        if ($count > 0){

            $_SESSION['name'] = $user_name;
            $data = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['role_id'] = $data['role_id'];
            setcookie("currentUser",$user_name,time()+(86400*7));
            header("location: dashboard/dash.php");

        }else{
             $_SESSION['name'] = $user_name;
            $_SESSION['error'] = "Invalid Username/Password !!";
            header("location: admin_login.php?wrong_info");

        }
    }



//        if (empty($user_name)||empty($password)){
//            header("location: admin_login.php?error=emptyfields");
//            exit();
//        }
//        else{
//            $sql = "SELECT * FROM users WHERE user_name=?; ";
//
//        }

}


mysqli_close($conn);


?>
