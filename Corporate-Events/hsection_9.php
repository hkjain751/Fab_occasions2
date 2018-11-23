<?php
  
  require 'db_connection_2.php';

  $section9_divs_title = $section9_divs_description = $name = $position = $address = "";

  $stars = 0;   

   //Using this function we get all details from DB except Image.

   function getDetails($id)//  We call this where we want to add detail and pass id here.ID is used to get data from DB.
   {
       $sql = "SELECT * FROM h_section9 WHERE id=".$id;

      $result = mysqli_query($GLOBALS['conn'],$sql);

      $row = mysqli_fetch_array($result);
       
       $GLOBALS['section9_divs_title'] = $row['title'];
       $GLOBALS['section9_divs_description'] = $row['description'];
       $GLOBALS['name'] = $row['name'];
        $GLOBALS['position'] = $row['position'];
        $GLOBALS['address'] = $row['address'];
       $GLOBALS['stars'] = $row['stars'];
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
        <!--  main.css  -->
        <link rel="stylesheet" href="resources/css/style_9.css">
        <!--  font awasome link  -->
       <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <title>Section 9</title>
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
            <div class="row">
                <div class="col-sm">
                    <div class="s9-custom-testimonial-1">
                        <h5 class="text-center"><b>
                            <?php getDetails(1);
                            echo $section9_divs_title; ?></b>
                        </h5>
                        <p><i class="fas fa-quote-left" style="color: blue; font-size: 30px"></i><br><span class="text-center">
                            <?php echo $section9_divs_description; ?>
                            </span></p>
                        <div class="text-center"><img src="get_section9_image.php?id=1" alt="" style="border-radius: 50%; border:3px solid blue;"></div>
                        <p class="text-center my-0">
                            <?php echo $name; ?>
                        </p>
                        <p class="text-center my-0">-
                            <?php echo $position; ?>
                        </p>

                        <p class="text-center my-0">
                            <?php echo $address; ?>
                        </p>
                        <!--      This input field is hidden to get value of star from DB and use it to the Script to show given Stars  -->
                        <input type="hidden" value="<?php echo $stars; ?>" id="star1">

                        <p class="text-center">

                            <span class="heart1" style="color:white">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>
                            <span class="heart1" style="color:white">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>
                            <span class="heart1" style="color:white">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>
                            <span class="heart1" style="color:white">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>
                            <span class="heart1" style="color:white">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>

                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="s9-custom-testimonial-2">
                        <h5 class="text-center"><b>
                            <?php getDetails(2);
                            echo $section9_divs_title; ?> </b>
                        </h5>
                        <p><i class="fas fa-quote-left" style="color: deeppink; font-size: 30px"></i><br><span class="text-center"> <?php echo $section9_divs_description; ?></span></p>
                        <div class="text-center"><img src="get_section9_image.php?id=2" alt="" style="border-radius: 50%; border:3px solid deeppink;"></div>
                        <p class="text-center my-0">
                            <?php echo $name; ?>
                        </p>
                        <p class="text-center my-0">-
                            <?php echo $position; ?>
                        </p>
                        <p class="text-center my-0">
                            <?php echo $address; ?>
                        </p>

                        <!--      This input field is hidden to get value of star from DB and use it to the Script to show given Stars  -->
                        <input type="hidden" value="<?php echo $stars; ?>" id="star2">

                        <p class="text-center">

                            <span class="heart2" style="color: white;">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>
                            <span class="heart2" style="color: white;">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>
                            <span class="heart2" style="color: white;">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>
                            <span class="heart2" style="color: white;">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>
                            <span class="heart2" style="color: white;">
                           <i class="fas fa-heart"></i>&nbsp; 
                        </span>

                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="s9-custom-testimonial-3">
                        <h5 class="text-center"><b>
                            <?php getDetails(3); echo $section9_divs_title; ?></b>
                        </h5>
                        <p><i class="fas fa-quote-left" style="color: orange; font-size: 30px"></i><br><span class="text-center"><?php echo $section9_divs_description; ?></span></p>
                        <div class="text-center"><img src="get_section9_image.php?id=3" alt="" style="border-radius: 50%; border:3px solid orange;"></div>
                        <p class="text-center my-0">
                            <?php echo $name; ?>
                        </p>
                        <p class="text-center my-0">-
                            <?php echo $position; ?>
                        </p>
                        <p class="text-center my-0">
                            <?php echo $address; ?>
                        </p>
                        <!--      This input field is hidden to get value of star from DB and use it to the Script to show given Stars  -->
                        <input type="hidden" value="<?php echo $stars; ?>" id="star3">

                        <p class="text-center">

                            <span class="heart3" style="color: white;">  
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>

                            <span class="heart3" style="color: white;">  
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>
                            <span class="heart3" style="color: white;">  
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>
                            <span class="heart3" style="color: white;">  
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>
                            <span class="heart3" style="color: white;"> 
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>

                        </p>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="s9-custom-testimonial-4">
                        <h5 class="text-center"><b>
                            <?php getDetails(4); echo $section9_divs_title; ?></b>
                        </h5>
                        <p><i class="fas fa-quote-left" style="color: #818181; font-size: 30px"></i><br><span class="text-center">
                        <?php echo $section9_divs_description; ?>
                          </span></p>
                        <div class="text-center"><img src="get_section9_image.php?id=4" alt="" style="border-radius: 50%; border:3px solid #818181;"></div>
                        <p class="text-center my-0">
                            <?php echo $name; ?>
                        </p>
                        <p class="text-center my-0">-
                            <?php echo $position; ?>
                        </p>
                        <p class="text-center my-0">
                            <?php echo $address; ?>
                        </p>

                        <!--      This input field is Hidden to get value of star from DB and use it to the Script to show given Stars  -->

                        <input type="hidden" value="<?php echo $stars; ?>" id="star4">

                        <p class="text-center" id="heart">

                            <span class="heart4" style="color: white;">  
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>

                            <span class="heart4" style="color: white;">  
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>
                            <span class="heart4" style="color: white;">  
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>
                            <span class="heart4" style="color: white;"> 
                             
                            <i class="fas fa-heart"></i>&nbsp;
                            
                            </span>
                            <span class="heart4" style="color: white;">  
                            <i class="fas fa-heart"></i>&nbsp;
                            </span>

                        </p>
                    </div>
                </div>
            </div>
        </div>



        <!-- JAVASCRIPT STARTS HERE -->

        <script>
            // This is used to add stars.


            var heart1 = document.getElementsByClassName("heart1");
            var heart2 = document.getElementsByClassName("heart2");
            var heart3 = document.getElementsByClassName("heart3");
            var heart4 = document.getElementsByClassName("heart4");

            var star1 = document.getElementById("star1").value;
            var star2 = document.getElementById("star2").value;
            var star3 = document.getElementById("star3").value;
            var star4 = document.getElementById("star4").value;

            for (var i = 0; i < star1; i++) {

                heart1[i].style.color = "blue";
            }

            for (var i = 0; i < star2; i++) {

                heart2[i].style.color = "deeppink";
            }

            for (var i = 0; i < star3; i++) {

                heart3[i].style.color = "orange";
            }

            for (var i = 0; i < star4; i++) {

                heart4[i].style.color = "#818181";
            }

        </script>










        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>

    </html>
