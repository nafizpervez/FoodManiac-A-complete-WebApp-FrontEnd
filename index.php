<!--Author : Saad Ibne Lukman Ali-->
<!--Id: 1611597042-->
<!--Course: Cse482-->

<?php
    include 'connection.php';
    session_start();

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if(isset($_GET['country']) && !empty($_GET['country'])) {

    curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api/countries/' . urlencode($_GET['country']));
    $result = curl_exec($ch);
    $data = json_decode($result, true);

    curl_setopt($ch, CURLOPT_URL, 'https://covid19.mathdro.id/api');
    $MainApi = curl_exec($ch);
    $totalStatistics = json_decode($MainApi, true);

}

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Food Maniac</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
<!--    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="style.css">
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->

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



    <!--Carousel-->
    <div class="container main-slider">
        <div class="row">
            <div class="col-12">
                <div class="carousel slide" id="wooSlide" data-ride="carousel">
                    <!--                    Indicators-->
                    <ol data-target="wooSlide" data-slide-to="0" class="active"></ol>
                    <ol data-target="wooSlide" data-slide-to="1"></ol>
                    <ol data-target="wooSlide" data-slide-to="2"></ol>
                    <ol data-target="wooSlide" data-slide-to="3"></ol>
                    <!--                    Inner-->
                    <div class="carousel-inner">
                        <?php
                        $sql1 = "SELECT blog_title,substring(blog_image,4) as blog_image FROM blog
                        ORDER BY blog_id DESC
                        LIMIT 0, 1 ";
                        $NewResult = mysqli_query($conn,$sql1);
                        while ( $row1 = mysqli_fetch_assoc($NewResult)){

                            ?>
                        <div class="carousel-item active">
                            <img src="<?=$row1['blog_image']?>" height="800" class="w-100" alt="Slide First">
<!--                            <div class="carousel-caption">-->
<!--                                <h5>--><?//=$row1['blog_title']?><!--</h5>-->
<!--                            </div>-->
                        </div>
                        <?php } ?>
                        <?php
                        $sql1 = "SELECT blog_title,substring(blog_image,4) as blog_image FROM blog
                        ORDER BY blog_id DESC
                        LIMIT 1, 1 ";
                        $NewResult = mysqli_query($conn,$sql1);
                        while ( $row1 = mysqli_fetch_assoc($NewResult)){

                        ?>
                        <div class="carousel-item">
                            <img src="<?=$row1['blog_image']?>" height="800" class="w-100" alt="Slide Two">
<!--                            <div class="carousel-caption">-->
<!--                                <h5>--><?//=$row1['blog_title']?><!--</h5>-->
<!--                            </div>-->
                        </div>
<!--                        <div class="carousel-item">-->
<!--                            <img src="img/photo-1.jpg" class="w-100" alt="Slide Three">-->
<!--                            <div class="carousel-caption">-->
<!--                                <h5>Slide Three</h5>-->
<!--                            </div>-->
                        </div>
                        <?php } ?>
                    </div>
                    <!--                    Control-->
                    <a href="#wooSlide" class="carousel-control-prev" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" arial-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#wooSlide" class="carousel-control-next" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" arial-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>

        </div>
    </div>
    <!--Carousel-->

    <!--Recipe-->
    <section class="recipes-section spad pt-0">
        <div class="container">
            <div class="section-title">
                <h2>Latest recipes</h2>
            </div>
            <div class="row">
            <?php
            $sql = "SELECT blog_id,blog_title,blog_desc,substring(blog_image,4) as blog_image,blog_created_at,user_id,bc_id FROM blog
            ORDER BY blog_id DESC 
            LIMIT 0, 3 ";
            $result = mysqli_query($conn,$sql);
            while ( $row = mysqli_fetch_assoc($result)){ ?>

                <div class="col-lg-4 col-md-6">
                    <div class="recipe">
                        <img src="<?= $row['blog_image']?>" class="blog-img" alt="">
                        <div class="recipe-info-warp">
                            <div class="recipe-info">
                                <a href="blog.php?id=<?= $row['blog_id'];?>"> <h3><?= $row['blog_title']?></h3></a>
                                <div class="rating">
                                    <i class="fa fa-star" data-index="0"></i>
                                    <i class="fa fa-star" data-index="1"></i>
                                    <i class="fa fa-star" data-index="2"></i>
                                    <i class="fa fa-star" data-index="3"></i>
                                    <i class="fa fa-star" data-index="4"></i>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <div class="row">
                <?php
                $sql = "SELECT blog_id,blog_title,blog_desc,substring(blog_image,4) as blog_image,blog_created_at,user_id,bc_id FROM blog
            ORDER BY blog_id DESC 
            LIMIT 3, 3 ";
                $result = mysqli_query($conn,$sql);
                while ( $row = mysqli_fetch_assoc($result)){ ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="recipe">
                            <img src="<?= $row['blog_image']?>"  class="blog-img" alt="">
                            <div class="recipe-info-warp">
                                <div class="recipe-info">
                                    <a href="blog.php?id=<?= $row['blog_id'];?>"> <h3><?= $row['blog_title']?></h3></a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star is-fade"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>


            </div>
        </div>
    </section>
    <section class="recipes-section spad pt-0">
        <div class="container">
            <div class="section-title">
                <h2>My recipes</h2>
            </div>
            <div class="row">
                <?php
                $user_id = '';
                if(isset($_SESSION['user_id'])){
                    $user_id = $_SESSION['user_id'];
                }
                $sql = "SELECT blog_id,blog_title,blog_desc,substring(blog_image,4) as blog_image,blog_created_at,user_id,bc_id FROM blog WHERE user_id = '$user_id'
            ORDER BY blog_id DESC 
            LIMIT 0, 3 ";
                $result = mysqli_query($conn,$sql);
                while ( $row = mysqli_fetch_assoc($result)){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="recipe">
                        <img src="<?= $row['blog_image']?>" class="blog-img" alt="">
                        <div class="recipe-info-warp">
                            <div class="recipe-info">
                                <a href="blog.php?id=<?= $row['blog_id'];?>"> <h3><?= $row['blog_title']?></h3></a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star is-fade"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <?php
                $user_id = '';
                if(isset($_SESSION['user_id'])){
                    $user_id = $_SESSION['user_id'];
                }
                $sql = "SELECT blog_id,blog_title,blog_desc,substring(blog_image,4) as blog_image,blog_created_at,user_id,bc_id FROM blog WHERE user_id = '$user_id'
            ORDER BY blog_id DESC 
            LIMIT 3, 3 ";
                $result = mysqli_query($conn,$sql);
                while ( $row = mysqli_fetch_assoc($result)){ ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="recipe">
                            <img src="<?= $row['blog_image']?>" class="blog-img" alt="">
                            <div class="recipe-info-warp">
                                <div class="recipe-info">
                                    <a href="blog.php?id=<?= $row['blog_id'];?>"> <h3><?= $row['blog_title']?></h3></a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star is-fade"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section>

    <!--Recipe-->

    <!--Most Like-->

<!--    <section class="bottom-widgets-section spad">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-6 col-md-8 ftw-warp">-->
<!--                    <div class="section-title">-->
<!--                        <h3>Top rated recipes</h3>-->
<!--                    </div>-->
<!--                    <ul class="sp-recipes-list">-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/photo-2.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Italian pasta</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/2.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>French Onion Soup</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/3.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Homemade pasta</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/4.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Onion Soup Gratinee</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/4.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Feta Cheese Burgers</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="col-lg-6 col-md-8 ftw-warp">-->
<!--                    <div class="section-title">-->
<!--                        <h3>Most liked recipes</h3>-->
<!--                    </div>-->
<!--                    <ul class="sp-recipes-list">-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/6.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Traditional Food</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/7.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Baked Salmon</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/8.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Deep Fried Fish</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/9.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Raw Tomato Soup</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <div class="rl-thumb set-bg" data-setbg="img/thumb/10.jpg"></div>-->
<!--                            <div class="rl-info">-->
<!--                                <span>March 14, 2018</span>-->
<!--                                <h6>Vegan Food</h6>-->
<!--                                <div class="rating">-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                    <i class="fa fa-star is-fade"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <section class="bottom-widgets-section">
    <div class="container">
        <div class="row">

            <div class="jumbotron mt-5">
                <h1 class="mb-2">COVID-19 Statistics Checker</h1>
                <form class="form-group" method="get">
                    <input class="form-control" type="text" name="country" placeholder="Check Statistics By Country Name">
                    <button class="btn btn-primary float-right mt-3" type="submit">Check It</button>
                </form>

                <?php if(!empty($data['confirmed'])): ?>
                    <h4>Statistics of <?php echo htmlspecialchars($_GET['country'], ENT_QUOTES); ?></h4>
                    <ul>
                        <li>Infected - <?php echo number_format($data['confirmed']['value']) ?></li>
                        <li>Recovered - <?php echo number_format($data['recovered']['value']) ?></li>
                        <li>Death(s) - <?php echo number_format($data['deaths']['value']) ?></li>
                        <li>Last Updated @ <?php echo $data['lastUpdate'] ?></li>
                    </ul>
                    <hr>
                <?php endif; ?>

                <!--        <img class='mt-2 text-center' src='https://covid19.mathdro.id/api/og' height="300px" width="1050px" />-->
            </div>
            </div>



        </div>

</section>

    <!--Most Like-->


<!-- Footer -->
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
<!-- Footer -->

<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
    </script>


</body>

</html>