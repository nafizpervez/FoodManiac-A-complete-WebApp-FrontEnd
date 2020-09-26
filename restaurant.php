<?php

//creating connection for the database
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php';?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->

    <link rel="stylesheet" href="stylerestaurant.css">
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
</head>
<body>

<div class="restaurant_body">
    <!--===Menubar design start form here======-->

    <div class="container mt-4">
        <nav class="mb-4 navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand font-bold" href="#">Food Maniac</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <!--            <li class="nav-item active">-->
                    <!--                <a class="nav-link" href="#"><i class="fa fa-envelope"></i> Home <span class="sr-only">(current)</span></a>-->
                    <!--            </li>-->
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="receipe.php">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="restaurant.php">Restaurant</a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['name'])){
                            echo '<a class="nav-link" href="dashboard/dash.php">Dashboard</a>';
                        }
                        //                else{
                        //                    echo $_SESSION['name'] = NULL;
                        //                }
                        ?>

                        <!--                <a class="nav-link" href="dashboard/index.php">Dashboard</a>-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                            <?php if (isset($_SESSION['name'])){
                                echo $_SESSION['name'];
//                                                   echo $_SESSION['user_id'];
                            }else{
                                echo $_SESSION['name'] = NULL;
                            }
                            ?> </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <?php if (isset($_SESSION['name'])){
                                echo '<a class="dropdown-item" href="profile.php">My account</a>';
                            }
                            ?>
                            <!--                    --><?php //if (isset($_COOKIE['currentUser'])){
                            //                                                echo '<a class="dropdown-item" href="logout.php">Log Out</a>';
                            //                                            }else{
                            //                                                echo '<a class="dropdown-item" href="admin_login.php">Log In</a>';
                            //                                            }
                            //                                            ?>
                            <?php if (isset($_SESSION['name'])){
                                echo '<a class="dropdown-item" href="logout.php">Log Out</a>';
                            }else{
                                echo '<a class="dropdown-item" href="login.php">Log In</a>';
                            }
                            ?>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--=====Menubar design end here======-->

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4"> Exploring The City of Restaurants</h1>
            </div>
            <hr>

        </div>

        <!--- Two Column Section  part 1-->
        <div class="container-fluid padding">
            <div class=" row padding">
                <?php
                $sql = "SELECT res_id,res_name,res_desc,substring(res_image,4) as res_image,res_created_at,user_id FROM restaurant
            ORDER BY res_id DESC ";
                $result = mysqli_query($conn,$sql);
                while ( $row = mysqli_fetch_assoc($result)){ ?>
                <div class="col-md-12 col-lg-6">
                    <h2><?= $row['res_name']?></h2>
                    <p><?= $row['res_created_at'];?></p>
                    <p>
<!--                        --><?php //echo substr($row['blog_desc'],0,350)?>
                        <?php echo $row['res_desc'];?>
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Hottest Sell</a>
                    <a href="#" class="btn btn-primary">Whats New</a>
                    <a href="#" class="btn btn-primary">Contact Now</a>
                </div>
                <div class="col-lg-6">
                    <img src="<?= $row['res_image']?>" class="img-thumbnail img-fluid">
                </div>
                <?php } ?>

            </div>
        </div>

<!--        <hr class="my-4">-->
<!---->
<!---->
<!--         Two Column Section Mirror part 2 -->
<!--        <div class="container-fluid padding">-->
<!--            <div class=" row padding">-->
<!--                <div class="col-lg-6">-->
<!--                    <img src="img/Restaurant/sultan2.jpg" class="img-fluid" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="col-md-12 col-lg-6">-->
<!--                    <h2>Sultan's Dine</h2>-->
<!--                    <p>Dhanmondi, Dhaka</p>-->
<!--                    <p>Sultan's Dine is a restaurant dedicated to satisfy the opulent cravings with our delicious take on the traditional feast of the Sultans.</p>-->
<!--                    <p>Well, the first look gave a good impression, taste gave better. Quantity is abundant, quality and size of meat pieces are good, taste great (someone who doesnot like spicy food, might find little hot). Take some time to get your seat, especially in dhanmondi branch, there is no reservation system, so you have to be physically present to book your table.</p>-->
<!--                    <p>Green Akshay Plaza, 146/G (old), 59 (new), Satmasjid Road Dhaka, Bangladesh</p>-->
<!--                    <br>-->
<!--                    <a href="#" class="btn btn-primary">Hottest Sell</a>-->
<!--                    <a href="#" class="btn btn-primary">Whats New</a>-->
<!--                    <a href="#" class="btn btn-primary">Contact Now</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <hr class="my-4">-->
<!---->
<!---->
<!---->
<!--        - Caption of category -->
<!--        <div class="container-fluid padding">-->
<!--            <div class="row welcome text-center">-->
<!--                <div class="col-12">-->
<!--                    <h1 class="display-4">Category</h1>-->
<!--                </div>-->
<!--                <hr>-->
<!--            </div>-->
<!--        </div>-->
<!--        - Cards -->
<!--        <div class="container-fluid padding">-->
<!--            <div class="row padding">-->
<!--                First card-->
<!--                <div class="col-xs-12 col-sm-6 col-md-4">-->
<!--                    <div class="card">-->
<!--                        <div class="col-md-12">-->
<!--                            <img src="img/Restaurant/sultan1.jpg" class="img-fluid" class="img-responsive">-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <h4 class="card-title">Sultan's Dine-->
<!--                            </h4>-->
<!--                            <p class="card-text">This biryani has mild fragrance, sticky rice, distinct taste of rice with hot and tangy flavour along with soft meat or vegetables. Use TasteMeter language to universally describe the unique taste of different biryanis.</p>-->
<!--                            <a href="biryanirestaurents.php" class="btn btn-outline-secondary">View Menu</a>-->
<!--                            <a href="biryanirestaurents.php" class="btn btn-outline-secondary">See More Items</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                 second card-->
<!--                <div class="col-xs-12 col-sm-6 col-md-4">-->
<!--                    <div class="card">-->
<!--                        <div class="col-md-12">-->
<!--                            <img src="img/Restaurant/sultan1.jpg" class="img-fluid" class="img-responsive">-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <h4 class="card-title">Sultan's Dine-->
<!--                            </h4>-->
<!--                            <p class="card-text">This biryani has mild fragrance, sticky rice, distinct taste of rice with hot and tangy flavour along with soft meat or vegetables. Use TasteMeter language to universally describe the unique taste of different biryanis.</p>-->
<!--                            <a href="biryanirestaurents.php" class="btn btn-outline-secondary">View Menu</a>-->
<!--                            <a href="biryanirestaurents.php" class="btn btn-outline-secondary">See More Items</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--               third card-->
<!--                <div class="col-xs-12 col-sm-6 col-md-4">-->
<!--                    <div class="card">-->
<!--                        <div class="col-md-12">-->
<!--                            <img src="img/Restaurant/sultan1.jpg" class="img-fluid" class="img-responsive">-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <h4 class="card-title">Sultan's Dine-->
<!--                            </h4>-->
<!--                            <p class="card-text">This biryani has mild fragrance, sticky rice, distinct taste of rice with hot and tangy flavour along with soft meat or vegetables. Use TasteMeter language to universally describe the unique taste of different biryanis.</p>-->
<!--                            <a href="biryanirestaurents.php" class="btn btn-outline-secondary">View Menu</a>-->
<!--                            <a href="biryanirestaurents.php" class="btn btn-outline-secondary">See More Items</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!---->
<!--        - Two Column Section part 3 -->
<!--        <div class="container-fluid padding">-->
<!--            <div class=" row padding">-->
<!--                <div class="col-md-12 col-lg-6">-->
<!--                    <h2>Sultan's Dine</h2>-->
<!--                    <p>Dhanmondi, Dhaka</p>-->
<!--                    <p>Sultan's Dine is a restaurant dedicated to satisfy the opulent cravings with our delicious take on the traditional feast of the Sultans.</p>-->
<!--                    <p>Well, the first look gave a good impression, taste gave better. Quantity is abundant, quality and size of meat pieces are good, taste great (someone who doesnot like spicy food, might find little hot). Take some time to get your seat, especially in dhanmondi branch, there is no reservation system, so you have to be physically present to book your table.</p>-->
<!--                    <p>Green Akshay Plaza, 146/G (old), 59 (new), Satmasjid Road Dhaka, Bangladesh</p>-->
<!--                    <br>-->
<!--                    <a href="#" class="btn btn-primary">Hottest Sell</a>-->
<!--                    <a href="#" class="btn btn-primary">Whats New</a>-->
<!--                    <a href="#" class="btn btn-primary">Contact Now</a>-->
<!--                </div>-->
<!--                <div class="col-lg-6">-->
<!--                    <img src="img/Restaurant/sultan2.jpg" class="img-fluid">-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <hr class="my-4">-->
<!---->
<!--        - Two Column Section Mirror -->
<!--        <div class="container-fluid padding">-->
<!--            <div class=" row padding">-->
<!--                <div class="col-lg-6">-->
<!--                    <img src="img/Restaurant/sultan2.jpg" class="img-fluid" class="img-responsive">-->
<!--                </div>-->
<!--                <div class="col-md-12 col-lg-6">-->
<!--                    <h2>Sultan's Dine</h2>-->
<!--                    <p>Dhanmondi, Dhaka</p>-->
<!--                    <p>Sultan's Dine is a restaurant dedicated to satisfy the opulent cravings with our delicious take on the traditional feast of the Sultans.</p>-->
<!--                    <p>Well, the first look gave a good impression, taste gave better. Quantity is abundant, quality and size of meat pieces are good, taste great (someone who doesnot like spicy food, might find little hot). Take some time to get your seat, especially in dhanmondi branch, there is no reservation system, so you have to be physically present to book your table.</p>-->
<!--                    <p>Green Akshay Plaza, 146/G (old), 59 (new), Satmasjid Road Dhaka, Bangladesh</p>-->
<!--                    <br>-->
<!--                    <a href="#" class="btn btn-primary">Hottest Sell</a>-->
<!--                    <a href="#" class="btn btn-primary">Whats New</a>-->
<!--                    <a href="#" class="btn btn-primary">Contact Now</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <hr class="my-4">-->
<!---->
<!---->
<!--        <div class="row welcome text-center">-->
<!--            <div class="col-12">-->
<!--                <a href="#" class="btn btn-outline-secondary">See More Items</a>-->
<!--            </div>-->
<!--            <hr>-->
<!--            <hr>-->
<!--            <hr class="my-4">-->
<!--        </div>-->

    </div>


        <!--Footer-->
        <footer class="page-footer font-small unique-color-dark pt-4">

            <!-- Footer Elements -->
            <div class="container">

                <!-- Call to action -->
                <ul class="list-unstyled list-inline text-center py-2">
                    <li class="list-inline-item">
                        <h5 class="mb-1">Register for free</h5>
                    </li>
                    <li class="list-inline-item">
                        <a href="signup.php" class="btn btn-outline-white btn-rounded">Sign up!</a>
                    </li>
                </ul>
                <!-- Call to action -->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> Food Maniac</a>
            </div>
            <!-- Copyright -->

        </footer>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
        </script>

</body>