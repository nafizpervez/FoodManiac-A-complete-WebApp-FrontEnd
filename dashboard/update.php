<?php
    session_start();
    include 'includes/connection.php';

    $id = $_GET['id'];
    $sql = "SELECT blog.*, blog_category.bc_title as title
            FROM blog
            JOIN blog_category ON blog.bc_id = blog_category.bc_id
            WHERE blog.blog_id = '$id'";

    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);
    $image = '';
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['date'];
    $user_id = "1";
    $bc_id = $_POST['category_id'];

    $sql1 = "UPDATE blog SET blog_title = '$title', blog_desc='$desc', blog_created_at= date('$date'),user_id = '$user_id',bc_id ='$bc_id'";

    if (!empty(basename($_FILES['image']['name']))){

        $rand = rand(11111, 8999999999999);
        $image = "../uploads/".$rand;
        $image = $image.basename($_FILES['image']['name']);

        move_uploaded_file($_FILES['image']['tmp_name'],$image);

        $sql1 .= ", blog_image = '$image'";

        if (!empty($data['blog_image']) && file_exists('../'.$data['blog_image'])){
            unlink('../' .$data['blog_image']);
        }

    }

    $sql1 .= " WHERE blog_id = '$id'";

//    echo $sql1;



    mysqli_query($conn,$sql1);
    $_SESSION['msg'] = "Edited Successfully";
    header("location: posts.php");
