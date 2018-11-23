<?php

  require 'db_connection_2.php';

function get_section7_video($id) // We are getting path of the video from the DB. We call this function from "src" attribue of "video" tag.
{
    
    $sql = "SELECT * FROM h_section7 WHERE id =".$id;

   $result = mysqli_query($GLOBALS['conn'],$sql);

   $row = mysqli_fetch_array($result);
    
   echo $row["video"];
}

?>




    <!doctype html>
    <html lang="en">

    <head>

        <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Caudex" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Overlock:400,700" rel="stylesheet">

        <title>Section 7</title>
    </head>

    <body>

        <h1 class="text-center h1 mt-2 mb-2">

            <span style="color: rgb(244, 72, 58); font-weight:bolder;">&mdash;</span>

            <span style="font-family: 'Overlock', cursive;"> 
            Exclusive Fab <span style="color: rgb(244, 72, 58);">Specials</span>, Found Nowhere
            </span>

            <span style="color: rgb(244, 72, 58); font-weight:bolder;">&mdash;</span>

        </h1>

        <div class="text-center mt-1 mb-5"><img src="resources/img/t11.png" alt="" height="100px" width="500px"></div>

        <div class="container-fluid">

            <div class="row no-gutters">

                <div class="col-sm mr-1">

                    <video width="100%" height="100%;" autoplay loop muted>
                
                <source src="<?php get_section7_video(2); ?>" type="video/mp4">
                
            </video>

                </div>

                <div class="col-sm ml-1">

                    <video width="100% " height="100%" autoplay loop muted>
                
                <source src="<?php get_section7_video(1); ?>" type="video/mp4">
                
            </video>

                </div>

            </div>

            <div class="row no-gutters mt-2">

                <div class="col-md mb-1 mr-1">

                    <img src="photo.webp " width="100% " height="100% " class="section7_image">

                    <div class="text-center" style="background-color: white;height: 30%; width: 100%; position: absolute; top: 145px;opacity: 0.6;">

                        <h2 style="color: black;font-size: 23px; font-family: 'Overlock', cursive;position: absolute;top: 15px;left:125px;">Weddings</h2>

                    </div>

                </div>

                <div class="col-md mb-1 mr-1">

                    <img src="photo.webp " width="100% " height="100% " class="section7_image">

                    <div class="text-center" style="background-color: white;height: 30%; width: 100%; position: absolute; top: 145px;opacity: 0.6;">

                        <h2 style="color: black;font-size: 23px; font-family: 'Overlock', cursive;position: absolute;top: 15px;left:125px;">Birthdays</h2>

                    </div>

                </div>
                <div class="col-md mb-1 mr-1">

                    <img src="photo.webp " width="100% " height="100% " class="section7_image">

                    <div class="text-center" style="background-color: white;height: 30%; width: 100%; position: absolute; top: 145px;opacity: 0.6;">

                        <h2 style="color: black;font-size: 23px; font-family: 'Overlock', cursive;position: absolute;top: 15px;left:125px;">Annivarsaries</h2>

                    </div>

                </div>

                <div class="col-md">

                    <img src="photo.webp " width="100% " height="100%" class="section7_image">

                    <div class="text-center" style="background-color: white;height: 30%; width: 100%; position: absolute; top: 145px;opacity: 0.6;">

                        <h2 style="color: black;font-size: 23px; font-family: 'Overlock', cursive;position: absolute;top: 15px;left:125px;">Family Events</h2>

                    </div>

                </div>


            </div>

        </div>


        <!--  This script is using to change images after every 2 second.   -->

        <script>
            // Images changes in divs 1 and 3.

            var id = 1;

            var section7_image = document.getElementsByClassName("section7_image");

            var renew = setInterval(function() {
                if (id == 5) {
                    id = 1;
                } else {
                    section7_image[0].src = "get_section7_image.php?id=" + id;

                    section7_image[2].src = "get_section7_image.php?id=" + id;

                    id++;
                }

            }, 2000);



            // Images Change  in divs  2 and 4. 

            id1 = 4;

            var renew1 = setInterval(function() {
                if (id1 == 0) {
                    id1 = 4;
                } else {
                    section7_image[1].src = "get_section7_image.php?id=" + id1;

                    section7_image[3].src = "get_section7_image.php?id=" + id1;

                    id1--;
                }

            }, 2000);

        </script>



        <!-- Optional JavaScript -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    </body>

    </html>
