<?php

//We call both the function from where we want to show the "TITLE" and  "DESCRIPTION".


function section5_div_title($id) // We are using this function to get "TITLE" of the divs like "Wedding".We pass here id to get title from DB.
{
    require 'db_connection_2.php';
    
    $sql = "SELECT * FROM h_section5 WHERE id=".$id;

  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_array($result);

  $section5_div_title = $row["title"];

   $section5_div_description = $row["description"];
    
    echo $section5_div_title;
}

function section5_div_description($id) //We are using this function to get "DESCRIPTION" of the divs.We pass here id to get title from DB.
{
    require 'db_connection_2.php';
    
    $sql = "SELECT * FROM h_section5 WHERE id=".$id;

  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_array($result);

  $section5_div_title = $row["title"];

   $section5_div_description = $row["description"];
    
    echo $section5_div_description;
}

?>



    <!--------------------------------------------------------------------------------------------------------------->
    <!----------------------------------THIS SECTION IS MADE BY NAMAN HAYARAN---------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------->
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">
        <!--  w3css  -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">

        <title>Section 5</title>
    </head>

    <body>

        <h1 class="text-center mb-0 mt-5" style="font-family: 'Overlock', cursive;"><span style="color: rgb(244, 72, 58); ">&mdash;</span> Whatever is the <span style="color: rgb(244, 72, 58);">Occasion</span>, Fab Makes it Fabulous <span style="color: rgb(244, 72, 58);">&mdash;</span></h1>

        <div class="text-center mt-1 mb-5"><img src="resources/img/t11.png" alt="" height="100px" width="500px"></div>


        <div>

            <div class="container mb-4 d-flex justify-content-center">
                <div class="row">
                    <div class="col-sm text-center">
                        <div class="card shadow none-shadow" style="width: 18rem;">
                            <img class="card-img-top w3-hover-sepia" src="get_section5_image.php?id=1" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Overlock', cursive; ">
                                    <span style="border-bottom:2px solid red; padding-bottom:5px;"><strong><?php section5_div_title(1); ?></strong></span>

                                </h5>
                                <p class="card-text" style="font-family: 'Overlock', cursive;">
                                    <?php section5_div_description(1); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm text-center">
                        <div class="card shadow" style="width: 18rem;">
                            <img class="card-img-top w3-hover-sepia" src="get_section5_image.php?id=2" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Overlock', cursive;">
                                    <span style="border-bottom:2px solid red; padding-bottom:5px;"><strong><?php section5_div_title(2); ?></strong></span>
                                </h5>
                                <p class="card-text" style="font-family: 'Overlock', cursive;">
                                    <?php section5_div_description(2); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm text-center">
                        <div class="card shadow" style="width: 18rem;">
                            <img class="card-img-top w3-hover-sepia" src="get_section5_image.php?id=3" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Overlock', cursive;">
                                    <span style="border-bottom:2px solid red; padding-bottom:5px;"><strong><?php section5_div_title(3); ?></strong></span>
                                </h5>
                                <p class="card-text" style="font-family: 'Overlock', cursive;">
                                    <?php section5_div_description(3); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-4 d-flex justify-content-center">
                <div class="row">
                    <div class="col-sm text-center">
                        <div class="card shadow" style="width: 18rem;">
                            <img class="card-img-top w3-hover-sepia" src="get_section5_image.php?id=4" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Overlock', cursive;">
                                    <span style="border-bottom:2px solid red; padding-bottom:5px;"><strong><?php section5_div_title(4); ?></strong></span>
                                </h5>
                                <p class="card-text" style="font-family: 'Overlock', cursive;">
                                    <?php section5_div_description(4); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm text-center">
                        <div class="card shadow" style="width: 18rem;">
                            <img class="card-img-top w3-hover-sepia" src="get_section5_image.php?id=5" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Overlock', cursive;">
                                    <span style="border-bottom:2px solid red; padding-bottom:5px;"><strong><?php section5_div_title(5); ?></strong></span>
                                </h5>
                                <p class="card-text" style="font-family: 'Overlock', cursive;">
                                    <?php section5_div_description(5); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm text-center">
                        <div class="card shadow" style="width: 18rem;">
                            <img class="card-img-top w3-hover-sepia" src="get_section5_image.php?id=6" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Overlock', cursive;">
                                    <span style="border-bottom:2px solid red; padding-bottom:5px;"><strong><?php section5_div_title(6); ?></strong></span>
                                </h5>
                                <p class="card-text" style="font-family: 'Overlock', cursive;">
                                    <?php section5_div_description(6); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>










        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>

    </html>
