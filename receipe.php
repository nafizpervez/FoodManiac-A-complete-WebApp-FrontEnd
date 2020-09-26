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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylereceipe.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

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
                        <a class="dropdown-item" href="#">My account</a>
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

<div class="receipe_body">
    <!--===Menubar design start form here======-->

    <div class="menu">





    </div>
    <!--=====Menubar design end here======-->

    <!--start of carouselslide-->


    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/biryani.jpg">
                <div class="carousel-caption">
                    <h1>Biryani, Hydrabadi.</h1>
                    <h4>Save this rich and delicious step by step biryani recipe prepared in dum style for a festive time! This easy Hyderabadi chicken biryani dish, can ...</h4>
                    <a href="viewreceipe.php" class="btn btn-outline-light btn lg" role="button">Receipe</a>
                    <a href="restaurant.php" class="btn btn-outline-light btn lg" role="button">Restaurants</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/taco.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Taco, Mexican</h1>
                    <h4>This is an easy beef taco recipe that shows you how to make tacos at home. Tacos are crunchy, messy and great fun to eat, so it's no wonder they're a hit!.</h4>
                    <a href="viewreceipe.php" class="btn btn-outline-light btn lg" role="button">Receipe</a>
                    <a href="restaurant.php" class="btn btn-outline-light btn lg" role="button">Restaurants</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/lavacake.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Lavacake, American</h1>
                    <h4>Did you know about this secret of what happens when Nutella and chocolate chip cookies meet? Honestly, magical stuff! The flavor goes beyond what a good chocolate chip cookie means.</h4>
                    <a href="viewreceipe.php" class="btn btn-outline-light btn lg" role="button">Receipe</a>
                    <a href="restaurant.php" class="btn btn-outline-light btn lg" role="button">Restaurants</a>
                </div>
            </div>
        </div>
    </div>
    <!--End of carousel slide-->


    <!-- start of receipe part-->


    <!--Start of receipe card-->

    <section id="receipe">
        <div class="container my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <h1>All Recipes</h1>
                    <p></p>

                </div>
            </div>

            <div class="row">
                <?php
                $sql = "SELECT blog_id,blog_title,blog_desc,substring(blog_image,4) as blog_image,blog_created_at,user_id,bc_id FROM blog
            ORDER BY blog_id DESC ";
                $result = mysqli_query($conn,$sql);
                while ( $row = mysqli_fetch_assoc($result)){ ?>
                <div class=" col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?= $row['blog_image']?>" alt="chicken soup" class="img-fluid rounded-circle w-50 mb-3">
                            <h3><?= $row['blog_title']?></h3>
<!--                            <h5>The most exotic chicken soup in the city are made by the chef named by ...</h5>-->
                            <p><?php echo substr($row['blog_desc'],0,350)?></p>
                            <a href="blog.php?id=<?= $row['blog_id'];?>" class="btn btn-outline-dark btn lg" role="button">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>


            </div>
        </div>

    </section>


</div>
<!-- End of receipe card-->

<!-- Start of Footer-->
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
        <a href="index.php"> Food Maniac</a>
    </div>
    <!-- Copyright -->

</footer>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
</script>
</body>
</html>