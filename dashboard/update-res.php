<?php
session_start();
include 'includes/connection.php';

$id = $_GET['id'];
$sql = "SELECT *
        FROM restaurant
        WHERE res_id = '$id'";

$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);

$image = '';
$title = $_POST['title'];
$desc = $_POST['description'];
$date = $_POST['date'];
$user_id = $_SESSION['user_id'];


$sql1 = "UPDATE restaurant SET res_name = '$title', res_desc='$desc', res_created_at= date('$date'),user_id = '$user_id'";

if (!empty(basename($_FILES['image']['name']))){

    $rand = rand(11111, 8999999999999);
    $image = "../uploads/".$rand;
    $image = $image.basename($_FILES['image']['name']);

    move_uploaded_file($_FILES['image']['tmp_name'],$image);

    $sql1 .= ", res_image = '$image'";

    if (!empty($data['res_image']) && file_exists('../'.$data['res_image'])){
        unlink('../' .$data['res_image']);
    }

}

$sql1 .= " WHERE res_id = '$id'";

//    echo $sql1;



mysqli_query($conn,$sql1);
$_SESSION['msg'] = "Edited Successfully";
header("location: restaurants.php");
