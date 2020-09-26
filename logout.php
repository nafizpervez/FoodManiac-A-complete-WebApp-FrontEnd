<?php


    session_start();
    setcookie("currentUser","",time()-(86400*500));
    setcookie("loginTime","",time()-(86400*500));
    session_destroy();
    header("location: index.php");
