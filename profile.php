<!--Author Rahat Islam Akash -->
<?php include 'connection.php'?>
<?php

session_start();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Food Maniac</title>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleProfile.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--About page link start-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e390b3d3f0.js" crossorigin="anonymous"></script>
    <!--About page link end-->


    <!--map api start from here-->

    <script type="text/javascript" src='../test-credentials.js'></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script type="text/javascript" >window.ENV_VARIABLE = 'https://developer.here.com'</script><script src='https://developer.here.com/javascript/src/iframeheight.js'></script>
    <!--map api ends here-->
</head>

<body>

<div class="profile_body">



    <!--====nevigation or manue start from here======-->
    <div class="menu">


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
                            <a class="nav-link" href="dashboard/index.php">Dashboard</a>
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

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


    </div>







    <!---=====nevigation or menu end here=======-->

    <div class="profile_con">

        <div class="search">
            <div class="search_mid">
                <form action="" method="post">
                    <input type="text" placeholder="Search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>


        </div>

        <!--=====profile_bottom=======-->
        <div class="profile_bottom">
            <!--====left side of the body====-->
            <div class="profile_bottom_left">
                <div class="left_con">
                    <div class="left_profile">

                        <img src="img/rahat.jpg" alt="">
                        <h2><?php echo $_SESSION['name'];?></h2>


                    </div>
                    <div class="pro_contact">
                        <i class="fa fa-phone"><span><?php echo $_SESSION['phone'];?></span></i>
                        <i class="fa fa-envelope-open-text"><span><?php echo $_SESSION['email'];?></span></i>
                    </div>
                </div>
                <div class="map">

                    <h1>Location</h1>

                    <div class="location" id="map">

                        <script>
                            // Create a Platform object (one per application):
                            var platform = new H.service.Platform({
                                'apikey': 5r5TXQusbcPkhlOlhDig6bhB8h3i3830ZhbvF1FCYWM
                            });

                            // Get an object containing the default map layers:
                            var defaultLayers = platform.createDefaultLayers();

                            // Instantiate the map using the vecor map with the
                            // default style as the base layer:
                            var map = new H.Map(document.getElementById('mapContainer'),
                                defaultLayers.vector.normal.map);
                        </script>




                    </div>

                </div>
            </div>
            <!--====Right side of the body======-->
            <div class="profile_bottom_right">
                <div class="right_contant">

                    <!--==Post div===-->
                    <!--=======adding new post =============-->
                    <?php

                    if(isset($_POST['post_sub'])){
                        $title = $_POST['Title'];
                        $blog_post = $_POST['blog_post'];


                        $blog_img = $_FILES['image']['name'];
                        $blog_imgt = $_FILES['image']['temp_name'];


                        $conn-> query("INSERT into blog(blog_title,blog_desc,blog_image) VALUES('$title','$blog_post','$blog_img')");

                        move_uploaded_file($blog_imgt,'img/'.$blog_img);


                    }




                    ?>

                    <div class="add_post">

                        <button id ="post_button" type="button" class="btn-primary">Add Post</button>

                        <div id = "post_inputs" class="add_post_inputs">
                            <form action="" method="post" enctype = "multipart/form-data">
                                <input name = "Title" type="text" placeholder="Add Title">
                                <input name = "image" type="file" placeholder="Upload Image">
                                <textarea name="blog_post" id="" cols="30" rows="10" placeholder="Add description"></textarea>
                                <button name = "post_sub" type="submit" class="btn-primary">Post</button>

                            </form>
                        </div>



                    </div>
                    <hr>

                    <!--====Adding post end here======-->

                    <!--====post view part===-->

                    <?php

                    $post_data =$conn ->query("SELECT * FROM  blog");

                    while($dataAll = $post_data ->fetch_assoc()):


                        ?>


                        <div class="post_view">

                            <h1><u><?php echo $dataAll['blog_title'];?></u></h1>

                            <h3><?php echo $dataAll['blog_created_at'];?></h3>
                            <img src="img/<?php $dataAll['blog_image']?>" alt="">

                            <p><?php echo $dataAll['blog_desc'];?></p>



                            <!--===blog view post end here ======-->

                            <!--===blog comment part start form here====-->

                            <div class="container">
                                <form method="POST" id="comment_form">
                                    <div class="form-group">
                                        <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="comment_id" id="comment_id" value="0" />
                                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                    </div>
                                </form>
                                <span id="comment_message"></span>
                                <br />
                                <div id="display_comment"></div>
                            </div>







                            <!--=======blog comment part end here======-->

                        </div>
                    <?php endwhile;?>

                    <!--====getting comment from the user====-->





                </div>
            </div>
        </div>

    </div>









</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>

<!--====this part of  script code is for the comment part========-->

<script>







    /*============for comment part======*/
    $(document).ready(function(){

        $('#comment_form').on('submit', function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url:"add_comment.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data)
                {
                    if(data.error != '')
                    {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
            })
        });

        load_comment();

        function load_comment()
        {
            $.ajax({
                url:"fetch_comment.php",
                method:"POST",
                success:function(data)
                {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function(){
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });

    });






</script>


<script>

    $(document).ready(function(){
        $("#post_button").click(function(){
            $(".add_post_inputs").css('display','block');
            $("#post_button").css('display','none');
        });
    });




</script>




</body>

</html>