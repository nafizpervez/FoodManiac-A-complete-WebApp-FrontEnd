<?php
    include ('includes/connection.php');
    $rand = rand(11111, 8999999999999);

    session_start();
//    $image = 'uploads/' .$rand .basename($_FILES["image"]["name"]);
//    $upload = '../uploads/' .$rand .basename($_FILES["image"]["name"]);
//
//    move_uploaded_file($_FILES['$image']['tmp_name'], $upload);


    $image = "../uploads/".$rand;
    $image = $image.basename($_FILES['image']['name']);

    move_uploaded_file($_FILES['image']['tmp_name'],$image);


    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['date'];
    $user_id = $_SESSION['user_id'];
    $bc_id = $_POST['category_id'];




    $sql = "INSERT INTO blog(blog_title,blog_desc,blog_image,blog_created_at,user_id,bc_id) 
            VALUES ('$title','$desc','$image',date('$date'),$user_id,'$bc_id')";
    mysqli_query($conn,$sql);


    $_SESSION['msg'] = "Added Successfully";
    header("location: posts.php");
?>