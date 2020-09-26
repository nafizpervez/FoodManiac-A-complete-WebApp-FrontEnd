<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--​-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compaible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
    <link rel="stylesheet" href="stylecontact.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FoodManiac</title>
</head>
<!--​-->
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
                        }else{
                            echo $_SESSION['name'] = NULL;
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
<!--                        ​-->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--<br>-->
<!--​-->
<!--=============================contact section start==================================-->
<section id="contact-section">
    <div class="con">
        <h2>Contact Us</h2>
        <p>Email us and keep upto date with our latest news</p>
        <div class="contact-form">
<!--            ​-->
            <!--grid section 1-->
            <div>
                <i class="fa fa-map-marker"></i><span class="form-info">Dhaka,Mirpur 10</span><br>
                <i class="fa fa-phone"></i><span class="form-info">Phone no +00 99999</span><br>
                <i class="fa fa-envelope"></i><span class="form-info">foodmaniac@gmail.com</span>
            </div>
<!--            ​-->
            <!--grid section 2-->
            <div>
                <form>
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required>
                    <input type="Email" placeholder="Email" required>
                    <input type="text" placeholder="Subject of this message" required><br>
                    <textarea name="message" placeholder="Message" rows="5" required></textarea><br>
                    <button class="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--​-->
<!--<br>-->
<!--<br>-->
<!--=============================contact section end==================================-->
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">
<!--    ​-->
    <!-- Footer Elements -->
    <div class="container">
<!--        ​-->
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
<!--        ​-->
    </div>
    <!-- Footer Elements -->
<!--    ​-->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> Food Maniac</a>
    </div>
    <!-- Copyright -->
<!--    ​-->
</footer>
<!-- Footer -->
<!--​-->
</body>
<!--​-->
</html>
