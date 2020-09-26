<?php
include "includes/connection.php";
session_start();

    if (isset($_GET['id'])){

    $id = $_GET['id'];

    $sql1 = "SELECT * FROM blog WHERE blog.blog_id = '$id'";
    $result = mysqli_query($conn,$sql1);
    $data = mysqli_fetch_assoc($result);
    $image_location = '../' .$data['blog_image'];

    if (file_exists($image_location)){
        unlink($image_location);
    }


    $sql = "DELETE FROM blog WHERE blog.blog_id = '$id'";
    mysqli_query($conn,$sql);

    $_SESSION['msg'] = "Deleted Successfully";
    header("location: posts.php");
    }

