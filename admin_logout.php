<?php
    session_start();


        setcookie("currentUser", "", time() - (86400 * 500));
        session_destroy();
        header("location: admin_login.php");


