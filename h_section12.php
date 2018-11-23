<?php

require 'db_connection_2.php';

function get_image_title_section12($id)
  {
      $sql = "select * from h_section12 where id=".$id;
       
       $result = mysqli_query($GLOBALS['conn'],$sql);
       
       $row = mysqli_fetch_array($result);
      
      echo $row['image-title'];
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
        <link rel="stylesheet" href="resources/css/style_section12.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <title>Made by Naman Hayaran</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-2 px-1">
                    <div style="background-color: black; width:100%; height:200px;">
                        <img src="get-image-section12.php?id=1" alt="" width="100%" height="200px" class="blog-img">
                    </div>
                    <p style="margin-bottom: 0px;" class="p-alink"><a href="">&nbsp;<?php  get_image_title_section12(1) ?></a></p>
                </div>
                <div class="col-md-6 mb-2 px-1">
                    <div style="background-color: black; width:100%; height:200px;">
                        <img src="get-image-section12.php?id=2" alt="" width="100%" height="200px" class="blog-img">
                    </div>
                    <p style="margin-bottom: 0px;" class="p-alink"><a href="">&nbsp;<?php  get_image_title_section12(2) ?></a></p>
                </div>
                <div class="col-md-3 mb-2 px-1">
                    <div style="background-color: black; width:100%; height:200px;">
                        <img src="get-image-section12.php?id=3" alt="" width="100%" height="200px" class="blog-img">
                    </div>
                    <p style="margin-bottom: 0px;" class="p-alink"><a href="">&nbsp;<?php  get_image_title_section12(3) ?></a></p>
                </div>
                <div class="col-md-3 mb-2 px-1">
                    <div style="background-color: black; width:100%; height:200px;">
                        <img src="get-image-section12.php?id=4" alt="" width="100%" height="200px" class="blog-img">
                    </div>
                    <p style="margin-bottom: 0px;" class="p-alink"><a href="">&nbsp;<?php  get_image_title_section12(4) ?></a></p>
                </div>
                <div class="col-md-3 mb-2 px-1">
                    <div style="background-color: black; width:100%; height:200px;">
                        <img src="get-image-section12.php?id=5" alt="" width="100%" height="200px" class="blog-img">
                    </div>
                    <p style="margin-bottom: 0px;" class="p-alink"><a href="">&nbsp;<?php  get_image_title_section12(5) ?></a></p>
                </div>
                <div class="col-md-3 mb-2 px-1">
                    <div style="background-color: black; width:100%; height:200px;">
                        <img src="get-image-section12.php?id=6" alt="" width="100%" height="200px" class="blog-img">
                    </div>
                    <p style="margin-bottom: 0px;" class="p-alink"><a href="">&nbsp;<?php  get_image_title_section12(6) ?></a></p>
                </div>
                <div class="col-md-3 mb-2 px-1 d-flex justify-content-center">
                    <div style="margin: auto auto;">
                        <p style="font-size: 20px;"><span style="border-bottom: 2px solid black; padding-bottom: 5px;"><b>VIEW ALL</span> BLOGS </b>
                        </p>
                        <p class="blog-a"><a href=""><span style="font-size: 18px;">READ NOW &nbsp;<i class="fas fa-hand-point-right"></i></span></a></p>
                    </div>
                </div>
            </div>
        </div>






        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>

    </html>
