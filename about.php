<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodManiac</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
    <link rel="stylesheet" href="styleabout.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e390b3d3f0.js" crossorigin="anonymous"></script>
<!--    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>-->
<!--    <script-->
<!--            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7MkK_qroNWZ_qDrDCCKT1gDzFog-xOmA&callback=initMap&libraries=&v=weekly"-->
<!--            defer-->
<!--    ></script>-->
<!--    <script src="demo.js"></script>-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>

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
                    <a class="nav-link" href="index.php"> Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="receipe.php">Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restaurant.php">Restaurant</a>
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
                        }else {
                            $_SESSION['name'] = NULL;
                        }

                        ?> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="profile.php">My account</a>
                        <?php if (isset($_COOKIE['currentUser'])){
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

<!--=========================About Section start===========================-->
<!--

    <header class="header">
        <img src="img/about/bi.jpg" class="header-img" alt="">

    </header>

    -->

<!--About Us section start-->
<section id="about">
    <div>
        <h2 class="title-text">About Us</h2>
    </div>
    <div class="about-center">
        <!--article 1 start-->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-mug-hot"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Drinks</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </article>
        <!--article 1 end-->

        <!--article 2 start-->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-utensils"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Delicious Pasta</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </article>
        <!--article 2 end-->

        <!--article 3 start-->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-mortar-pestle"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Healthy food</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </article>
        <!--article 3 end-->

        <!--article 4 start-->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-fish"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Fish Item</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </article>
        <!--article 4 end-->

        <!--article 5 start-->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-pepper-hot"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Spicy Food</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </article>
        <!--article 5 end-->

        <!--article 6 start-->
        <article class="about">
            <div class="about-icon">
                <i class="fas fa-drumstick-bite"></i>
            </div>
            <div class="about-text">
                <h2 class="about-subtitle">Meat</h2>
                <p class="about-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </article>
        <!--article 6 end-->
    </div>
</section>

<!--about us section end-->


<!--Menu section start-->
<section class="menu" id="menu">
    <article class="menu-image"></article>
    <article class="menu-text">
        <div class="menu-text-center">
            <h1>Our Menu</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur voluptatibus exercitationem nulla vitae animi autem ex eligendi minus commodi? Voluptatem tempora, cumque deserunt inventore est aliquid? Optio, dolor! A, autem.</p>
            <a href="#">Look for</a>
            <h1>About Our Story</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ea, ipsum doloribus iusto enim obcaecati error porro explicabo ex quis asperiores.</p>
        </div>
    </article>
</section>
<!--Menu section end-->

<br>
<br>

<!--Social Icon Start-->
<section id=social-icons>
    <h2 class="title-text">Follow Us</h2> <br>

    <a href="#"><i class="fab fa-facebook facebook"></i></a>
    <a href="#"><i class="fab fa-twitter twitter"></i></a>
    <a href="#"><i class="fab fa-instagram instagram"></i></a>
    <a href="#"><i class="fab fa-google-plus plus"></i></a>

</section>
<!--social icon end-->

<br>
<br>
<br>

<!--food fusion start-->
<section id="food">
    <div>
        <h2 class="title-text">Food Fusion</h2>
    </div>
    <div class="food-container">
        <!--articel A start-->
        <article class="food-card">
            <img src="img/about/breakfast.jpg" class="food-img" alt="">
            <div class="img-text">
                <h1>Breakfast</h1>
            </div>
            <div class="img-footer">
                <div class="footer-icon">
                    <i class="fas fa-dollar-sign">25</i>
                </div>
                <div class="footer-btn">
                    <button type="button" class="food-btn">Order now</button>
                </div>
            </div>
        </article>
        <!--articel A end-->

        <!--articel B start-->
        <article class="food-card">
            <img src="img/about/lunch.jpg" class="food-img" alt="">
            <div class="img-text">
                <h1>Lunch</h1>
            </div>
            <div class="img-footer">
                <div class="footer-icon">
                    <i class="fas fa-dollar-sign">35</i>
                </div>
                <div class="footer-btn">
                    <button type="button" class="food-btn">Order now</button>
                </div>
            </div>
        </article>
        <!--articel B end-->

        <!--articel C start-->
        <article class="food-card">
            <img src="img/about/dinner.jpg" class="food-img" alt="">
            <div class="img-text">
                <h1>Dinner</h1>
            </div>
            <div class="img-footer">
                <div class="footer-icon">
                    <i class="fas fa-dollar-sign">45</i>
                </div>
                <div class="footer-btn">
                    <button type="button" class="food-btn">Order now</button>
                </div>
            </div>
        </article>
        <!--articel C end-->

    </div>
</section>
<!--food fusion end-->

<section>
    <div>
        <h2 class="title-text">Our Location</h2>
    </div>
    <div id="map"></div>
    <script>
        var mymap = L.map('map').setView([23.744758, 90.413031], 15);

        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}@2x.png?key=kFHtHGDHjt33iaBsqJRL', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        }).addTo(mymap);

        var marker = L.marker([23.744758, 90.413031]).addTo(mymap);
        var circle = L.circle([23.744758, 90.413031],{
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 100
        }).addTo(mymap);
        marker.bindPopup("<b>FOODMANIAC</b>").openPopup();

    </script>
</section>


<!--team section start-->
<section class="team">
    <h1>Our Team</h1>
    <div class="container">
        <!--card section 1 start-->
        <div class="card">
            <div class="box">
                <img src="img/about/pic1.jpg" class="team-img" alt="">
                <h4>Nafis</h4>
                <h5>Manager</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit ducimus ex animi.
                </p>
            </div>
        </div>
        <!--card section 1 end-->

        <!--card section 2 start-->
        <div class="card">
            <div class="box">
                <img src="img/about/pic2.jpg" class="team-img" alt="">
                <h4>Rahat</h4>
                <h5>Manager</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit ducimus ex animi.
                </p>
            </div>
        </div>
        <!--card section 2 end-->

        <!--card section 3 start-->
        <div class="card">
            <div class="box">
                <img src="img/about/pic3.jpg" class="team-img" alt="">
                <h4>Farzana</h4>
                <h5>Manager</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit ducimus ex animi.
                </p>
            </div>
        </div>
        <!--card section 3 end-->

        <!--card section 4 start-->
        <div class="card">
            <div class="box">
                <img src="img/about/pic4.jpg" class="team-img" alt="">
                <h4>Saad</h4>
                <h5>Manager</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit ducimus ex animi.
                </p>
            </div>
        </div>
        <!--card section 4 end-->
    </div>

</section>

<!--team section end-->


<!--=========================About Section end===========================-->

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
                <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a>
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
<!-- Footer -->



</body>

</html>













