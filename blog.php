<?php
    include "connection.php";
    session_start();

    $id = $_GET['id'];
    $sql = "SELECT blog_id,blog_title,blog_desc,
            substring(blog_image,4) as blog_image, DATE_FORMAT(blog_created_at, '%M %d %Y') as blog_created_at,user_id,blog.bc_id,
            blog_category.bc_title as title
            FROM blog
            JOIN blog_category ON blog.bc_id = blog_category.bc_id
            WHERE blog.blog_id = '$id'";

    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);


//    $postID = 1; // It will be changed with dynamic value
//
//    // Fetch the post and rating info from database
//    $query = "SELECT COUNT(ratingNumber) as rating_num, FORMAT((SUM(ratingNumber) / COUNT(ratingNumber)),1) as average_rating FROM blog_rating WHERE blog_id = '$id'";
//    $result = mysqli_query($conn,$query);
//    $postData = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Food Maniac</title>

<!--    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
<!--    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <!--Navbar-->
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
                                               }else{
                                                echo $_SESSION['name'] = NULL;
                                            }
                                               ?> </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                            <?php if (isset($_SESSION['name'])){
                                echo '<a class="dropdown-item" href="profile.php">My account</a>';
                            }
                            ?>

                            <?php if (isset($_SESSION['name'])){
                                echo '<a class="dropdown-item" href="logout.php">Log Out</a>';
                            }else{
                                echo '<a class="dropdown-item" href="login.php">Log In</a>';
                            }
                            ?>
                            <?php if (isset($_COOKIE['loginTime'])){
                                echo 'Last Login Time: ' .$_COOKIE['loginTime'];
                            }
                            ?>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <!--Blog-->

    <div class="recipe-view-section">

        <img class="img-fluid-blog" src="<?= $data['blog_image']?>" alt="">
    </div>

    <section class="recipe-details-section">
        <div class="container">
            <div class="recipe-meta">
                <div class="racipe-cata">
                    <span><?= $data['title']?></span>
                </div>
                <h2><?= $data['blog_title']?></h2>
                <div class="recipe-date"><?= $data['blog_created_at'].", ".$_SESSION['name']?></div>
                <div class="rating">
                    <div id="rateYo"></div>
<!--                    <i class="fa fa-star" data-index="0"></i>-->
<!--                    <i class="fa fa-star" data-index="1"></i>-->
<!--                    <i class="fa fa-star" data-index="2"></i>-->
<!--                    <i class="fa fa-star" data-index="3"></i>-->
<!--                    <i class="fa fa-star" data-index="4"></i>-->
                </div>

<!--                <script>-->
<!--                    var ratedIndex = -1, uID = 0;-->
<!---->
<!--                    $(document).ready(function () {-->
<!--                        resetStarColors();-->
<!---->
<!--                        if (localStorage.getItem('ratedIndex') != null) {-->
<!--                            setStars(parseInt(localStorage.getItem('ratedIndex')));-->
<!--                            uID = localStorage.getItem('uID');-->
<!--                        }-->
<!---->
<!--                        $('.fa-star').on('click', function () {-->
<!--                            ratedIndex = parseInt($(this).data('index'));-->
<!--                            localStorage.setItem('ratedIndex', ratedIndex);-->
<!--                            // saveToTheDB();-->
<!--                        });-->
<!---->
<!--                        $('.fa-star').mouseover(function () {-->
<!--                            resetStarColors();-->
<!--                            var currentIndex = parseInt($(this).data('index'));-->
<!--                            setStars(currentIndex);-->
<!--                        });-->
<!---->
<!--                        $('.fa-star').mouseleave(function () {-->
<!--                            resetStarColors();-->
<!---->
<!--                            if (ratedIndex != -1)-->
<!--                                setStars(ratedIndex);-->
<!--                        });-->
<!--                    });-->
<!--                    function setStars(max) {-->
<!--                        for (var i=0; i <= max; i++)-->
<!--                            $('.fa-star:eq('+i+')').css('color', 'green');-->
<!--                    }-->
<!---->
<!--                    function resetStarColors() {-->
<!--                        $('.fa-star').css('color', 'white');-->
<!--                    }-->
<!---->
<!---->
<!---->
<!--                </script>-->
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <ul class="recipe-info-list">
                        <li>

                            <p><?= $data['blog_desc']?></p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
<!--    <section class='rating-widget'>-->
<!---->
<!--         Rating Stars Box -->
<!--        <div class='rating-stars text-center'>-->
<!--            <ul id='stars'>-->
<!--                <li class='star' title='Poor' data-value='1'>-->
<!--                    <i class='fa fa-star fa-fw'></i>-->
<!--                </li>-->
<!--                <li class='star' title='Fair' data-value='2'>-->
<!--                    <i class='fa fa-star fa-fw'></i>-->
<!--                </li>-->
<!--                <li class='star' title='Good' data-value='3'>-->
<!--                    <i class='fa fa-star fa-fw'></i>-->
<!--                </li>-->
<!--                <li class='star' title='Excellent' data-value='4'>-->
<!--                    <i class='fa fa-star fa-fw'></i>-->
<!--                </li>-->
<!--                <li class='star' title='WOW!!!' data-value='5'>-->
<!--                    <i class='fa fa-star fa-fw'></i>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!---->
<!--        <div class='success-box'>-->
<!--            <div class='clearfix'></div>-->
<!--            <img alt='tick image' width='32' src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MjYuNjY3IDQyNi42NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQyNi42NjcgNDI2LjY2NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM2QUMyNTk7IiBkPSJNMjEzLjMzMywwQzk1LjUxOCwwLDAsOTUuNTE0LDAsMjEzLjMzM3M5NS41MTgsMjEzLjMzMywyMTMuMzMzLDIxMy4zMzMgIGMxMTcuODI4LDAsMjEzLjMzMy05NS41MTQsMjEzLjMzMy0yMTMuMzMzUzMzMS4xNTcsMCwyMTMuMzMzLDB6IE0xNzQuMTk5LDMyMi45MThsLTkzLjkzNS05My45MzFsMzEuMzA5LTMxLjMwOWw2Mi42MjYsNjIuNjIyICBsMTQwLjg5NC0xNDAuODk4bDMxLjMwOSwzMS4zMDlMMTc0LjE5OSwzMjIuOTE4eiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K'/>-->
<!--            <div class='text-message'></div>-->
<!--            <div class='clearfix'></div>-->
<!--        </div>-->
<!---->
<!---->
<!---->
<!--    </section>-->



    <!--Comment-->
    <section class="comment-section spad pt-0">
        <div class="container">
            <h4>Leave a comment</h4>
            <form class="comment-form">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="E-mail">
                    </div>
                    <div class="col-md-12">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                        <button class="site-btn">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>



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
            <a href="index.php"> Food Maniac</a>
        </div>
        <!-- Copyright -->

    </footer>
<!--    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<!--    <script src='https://codepen.io/depy/pen/LaXVEK.js'></script><script  src="rating.js"></script>-->

</body>

</html>
