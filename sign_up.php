<?php
    session_start();
    require 'connection.php';



//    $first_name = "";
//    $last_name = "";
    $user_name = "";
    $user_mobile = "";
    $user_email = "";
    //$errors = array();

    //If the sign up button is clicked

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $user_name = $_POST['user_name'];
        $user_mobile = $_POST['user_mobile'];
        $password = $_POST['password'];
        $user_email = $_POST['user_email'];


        //If no errors found

            $role = "2";
            $password = md5($password);
            $timestamp = date("Y-m-d H:i:s");
            $sql = "INSERT INTO users(user_name, user_mobile, user_email, user_created_at, user_password, role_id)
                    VALUES ('$user_name', '$user_mobile', '$user_email', '$timestamp', '$password','$role')";

            mysqli_query($conn,$sql);

            setcookie("currentUser",$user_name,time()+(86400*7));
            $_SESSION['name'] = $user_name;
            $_SESSION['loggedin'] = "You are now Logged In";

            header('location: dash.php');






    }