<?php

require 'db_connection_2.php';

$w_section1_title = $w_section1_description ='';

function get_w_section1_data($id)
{
    require 'db_connection_2.php';
    $sql = "select * from w_section1 where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    global $w_section1_title;
    $w_section1_title =  $row['title'];
    global $w_section1_description;
    $w_section1_description =  $row['description'];
}

$w_section2_venue = '';

function get_w_section2_data($id)
{
    require 'db_connection_2.php';
    $sql = "select * from w_section2 where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    global $w_section2_venue;
    $w_section2_venue =  $row['venue'];
}

$w_section3_title = $w_section_3_sub_title = '';

function get_w_section3_data($id)
{
    require 'db_connection_2.php';
    $sql = "select * from w_section3 where id='$id'";
    $result = mysqli_query($conn,$sql);  
    $row = mysqli_fetch_array($result);
    global $w_section3_title;
    $w_section3_title =  $row['title'];
    global $w_section3_sub_title;
    $w_section3_sub_title = $row['sub_title'];
}

$w_section4_title = $w_section4_description ='';

function get_w_section4_data($id)
{
    require 'db_connection_2.php';
    $sql = "select * from w_section4 where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    global $w_section4_title;
    $w_section4_title =  $row['title'];
    global $w_section4_description;
    $w_section4_description =  $row['description'];
}


?>



    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<!--  style.css  -->
		<script src="../resources/js/jquery.js"></script>
        <link rel="stylesheet" href="resources/css/style_w_section1.css">
        <link rel="stylesheet" href="resources/css/whyfab_style.css">
        <link rel="stylesheet" href="resources/css/footer_style.css" type="text/css">
        <!--  google fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">
        <!--  fontawasome  -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <title>Wedding</title>
    </head>

    <body>

        <?php   include 'nav.html';  ?>


        <div class="back-img-top" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('resources/img/img.jpg');margin-top:130px;">
            <div class="back-img-top-div">

                <h1 class="text-center pt-5" style="font-family: 'Overlock', cursive; font-size: 35px;"><b><span style="color: rgb(244, 72, 58);">&mdash;</span> WEDDING <span style="color: rgb(244, 72, 58);">DELIGHTS </span>WITH FAB <span style="color: rgb(244, 72, 58);">&mdash;</span></b></h1>
                <div class="text-center" style="margin-top: 0px"><img src="resources/img/t11.png" alt="" height="80px" width="300px"></div>
                <p class="text-center  mt-2" style="font-family: 'Overlock', cursive; font-size: 20px">Fully Customizable Packages, Save More With Fab Packs</p>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mt-5">
                            <div class="img-div">
                                <img src="get_image_w_section1.php?id=1" alt="" width="100%" height="300px">
                                <div class="overlay-text">
                                    <h5 class="text-center pt-3">
                                        <?php get_w_section1_data(1); echo $w_section1_title;  ?>
                                    </h5>
                                    <p class="text-center">
                                        <?php echo $w_section1_description; ?> </p>
                                    <div class="text-center "><a href="" class="btn btn-outline-danger">Contact Us</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5">
                            <div class="img-div">
                                <img src="get_image_w_section1.php?id=2" alt="" width="100%" height="300px">
                                <div class="overlay-text">
                                    <h5 class="text-center pt-3">
                                        <?php get_w_section1_data(2); echo $w_section1_title;  ?>
                                    </h5>
                                    <p class="text-center">
                                        <?php echo $w_section1_description; ?>
                                    </p>
                                    <div class="text-center "><a href="" class="btn btn-outline-danger">Contact Us</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5">
                            <div class="img-div">
                                <img src="get_image_w_section1.php?id=3" alt="" width="100%" height="300px">
                                <div class="overlay-text">
                                    <h5 class="text-center pt-3">
                                        <?php get_w_section1_data(3); echo $w_section1_title;  ?>
                                    </h5>
                                    <p class="text-center">
                                        <?php echo $w_section1_description; ?>
                                    </p>
                                    <div class="text-center "><a href="" class="btn btn-outline-danger">Contact Us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="seemore">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center mt-4">
                                <div>
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body" style="background-color: rgb(244,72,58); color: white">
                                            <h5 class="card-title text-center">Siver Package</h5>
                                            <p class="card-text text-center">All Your Basics At The Lowest Ever Prices</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item text-center">Customised & Selected Venue</li>
                                            <li class="list-group-item text-center">Themed & Customised Decor</li>
                                            <li class="list-group-item text-center">Caterers</li>
                                            <li class="list-group-item text-center">Candid Photography</li>
                                            <li class="list-group-item text-center">Themed Invitations</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center mt-1">
                                <div>
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body" style="background-color: rgb(244,72,58); color: white">
                                            <h5 class="card-title text-center">Gold Package</h5>
                                            <p class="card-text text-center">All The Basics Plus Customizable Theme Based Services And 24X7 Assistance & Wedding Log, Reminders & Planning.</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item text-center">All Silver Services</li>
                                            <li class="list-group-item text-center">Themed & Customised Decor</li>
                                            <li class="list-group-item text-center">Themed & Customised Crafted Jewellery</li>
                                            <li class="list-group-item text-center">Bridal Makeup</li>
                                            <li class="list-group-item text-center">Best Designers(Bridal)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center mt-4">
                                <div>
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body" style="background-color: rgb(244,72,58); color: white">
                                            <h5 class="card-title text-center">Platinum Package</h5>
                                            <p class="card-text text-center">The Fully Loaded Pack With the Gold Services at Lowest Prices And Fab Surprises, Ad Ons & Extra Privilege</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item text-center">All Gold Services</li>
                                            <li class="list-group-item text-center">Family Makeup</li>
                                            <li class="list-group-item text-center">Certified Mehendi Artist</li>
                                            <li class="list-group-item text-center">Groom Wear</li>
                                            <li class="list-group-item text-center">Fab Special Gifts & Favours</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 mb-3">
                    <a class="custom-btn" data-toggle="collapse" href="#seemore" role="button" aria-expanded="false" aria-controls="collapseExample">
        See More
        </a>
                </div>

                <!--=================================next section start====================================================-->


                <h1 class="text-center pt-5" style="font-family: 'Overlock', cursive; font-size: 35px"><b><span style="color: rgb(244, 72, 58);">&mdash;</span> `A La <span style="color: rgb(244, 72, 58);">Carte </span>Your Favorites <span style="color: rgb(244, 72, 58);">&mdash;</span></b></h1>
                <h6 class="text-center" style="font-family: 'Overlock', cursive;">Choose Single Services as Required</h6>
                <h2 class="text-center" style="font-family: 'Overlock', cursive;">Services Offered</h2>
                <h4 class="text-center" style="font-family: 'Overlock', cursive;">Browse Among the Best in the Business & Choose the Most Suited Vendor</h4>

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=1" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(1); echo $w_section2_venue; ?> </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=2" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(2); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=3" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(3); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=4" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(4); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center" style="margin-left:140px;">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=9" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(9); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=10" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(10); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=11" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(11); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=5" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(5); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=6" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(6); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=7" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(7); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 d-flex justify-content-center">
                            <div class="vend-div" style="position: relative;">
                                <img src="get_image_w_section2.php?id=8" alt="" width="100%" height="100%" class="img">
                                <h5 style="color:white; position: absolute; top:60px; left: 75px;" class="damn">
                                    <?php get_w_section2_data(8); echo $w_section2_venue; ?>
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- =========================================section start=========================================== -->

                <h1 class="text-center pt-5" style="font-family: 'Overlock', cursive; font-size: 35px"><b><span style="color: rgb(244, 72, 58);">&mdash;</span> Lifelong <span style="color: rgb(244, 72, 58);">Memories </span>With Us. <span style="color: rgb(244, 72, 58);">&mdash;</span></b></h1>
                <h5 class="text-center mt-4" style="font-family: 'Overlock', cursive;">Special Services from Fab, Totally Free & Worth Your Responses</h5>


                <?php  include 'w_icon_section.html' ?>


                <!--==================================== section start=================================================== -->

                <h1 class="text-center pt-5" style="font-family: 'Overlock', cursive; font-size: 35px"><b><span style="color: rgb(244, 72, 58);">&mdash;</span> More <span style="color: rgb(244, 72, 58);">Fab </span>Fab Services <span style="color: rgb(244, 72, 58);">&mdash;</span></b></h1>
                <div class="container">
                    <div class="row ">
                        <div class="col-md-6 mt-5" style="position: relative;">
                            <div style="background-color: black;">
                                <img src="get_image_w_section4.php?id=1" alt="" width="100%" height="300px" class="daz-img">
                            </div>
                            <div style=" position: absolute; top: 70px; color: white; width: 95%">
                                <h3 class="text-center">
                                    <?php get_w_section4_data(1); echo $w_section4_title; ?> </h3>
                                <p class="text-center">
                                    <?php echo $w_section4_description; ?> </p>
                                <div class="text-center"><a href class="btn px-5 btn-danger" style="border-radius:20px 20px;">Let's Go</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5" style="position: relative;">
                            <div style="background-color: black;">
                                <img src="get_image_w_section4.php?id=2" alt="" width="100%" height="300px" class="daz-img">
                            </div>
                            <div style="position: absolute; top: 70px; color: white; width: 93%">
                                <h3 class="text-center">
                                    <?php get_w_section4_data(2); echo $w_section4_title; ?>
                                </h3>
                                <p class="text-center" style="width: 100%;">
                                    <?php echo $w_section4_description; ?>
                                </p>
                                <div class="text-center"><a href class="btn btn-danger px-5" style="border-radius:20px 20px;">Let's Go</a></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ==========================================section start=========================================== -->


                <?php include 'w_section_whyfab.html'; ?>


                <?php include 'gallery.html'; ?>

                <?php  include 'footer.html';?>




            </div>

        </div>










        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>

    </html>
