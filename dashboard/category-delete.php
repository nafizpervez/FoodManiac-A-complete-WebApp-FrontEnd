<?php

    include ('includes/connection.php');
    session_start();
    if (isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "DELETE FROM blog_category WHERE bc_id = '$id'";
        mysqli_query($conn,$sql);

        $_SESSION['msg'] = "Deleted Successfully";
        header("location: categories.php");
    }

?>