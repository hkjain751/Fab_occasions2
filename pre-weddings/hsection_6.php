<!--hardik done connection with database & get data-->
<?php

        function getContent($id)
          {
            require 'db_connection_2.php';
          $q="Select * from hsection_6 where id='".$id."'";
          $result=mysqli_query($conn,$q);
          $num= mysqli_num_rows($result);
            for($i=0;$i<$num;$i++)
            {
            $row=mysqli_fetch_array($result);
            echo $row['content'] ;
            }
         }
?>
<!-- All design by Shashwat & Hardik -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ------------------------------ uikit CSS ---------------------------- -->
    <link rel="stylesheet" href="resources/uikit/css/uikit.min.css">
<!-- ------------------ GOOGLE FONTS----------------------------------------   -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">
<!-- -------------------------------- MAIN CSS -------------------------------  -->
   <link rel="stylesheet" href="resources/css/s6_style.css">
   <link rel="stylesheet" href="resources/css/s6_style1.css">

    <title>Fab Occasions section6</title>
</head>
<body>
    <div class="uk-block uk-block-default  s6_section2">
        <div style="margin-left: 30px">
           <center> 
           	<h2 style="font-size: 35px; padding-left: 12px;line-height: 15px;font-family: 'Overlock', cursive;" ><span style="color: rgb(244,72,58);">&mdash;</span>&nbsp;&nbsp;&nbsp;<span style="color:rgb(244,72,58) ;">Fab</span> Services&nbsp;&nbsp;&nbsp;<span style="color: rgb(244,72,58);">&mdash;</span></h2>
            <img src="resources/img/t11.png" alt=""
            width="300px;" height="700px;" style="padding-left: 65px; align-items: center;margin-left: -47px;" class="s6_img">
           	<h6 style="margin-right: 150px; margin-left: 150px; font-family: 'Overlock', cursive;font-size: 18px;line-height: 23px;">
              <!-- Hardik content from database -->
              <?php 
              getContent(1);
              ?>
              </h6>
           	<h2>Experience Fab At Your Next Event...!</h2>
            </center>
        </div>
        <div style="margin-left: 0px;"> 
           <div  style="background:linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)), url(./resources/img/back.webp);height: 400px;width: 100%;background-size: cover">
               <table><tr><td>
              <div class="s6_division" style="margin-left: 66px;">
                  <div class="s6_zoomimage"> <img src="resources/img/icons8-gift-100.png" alt="" width="70px" height="70px;" class="s6_icon"></div>
                   <h3 class="s6_heading" style="margin-bottom: 0px;"><b>GIFT & ACTIVITIES</b></h3>
                   <p class="s6_heading s6_hr-line" style="color: rgb(244,72,58);"><b>-----------------------------------</b></p>
                   <p class="s6_para" style="font-size: 14px;">No Gathering Is Complete Without Fun Activities And Complementary Gifts. Get Inspired By Our Latest And Unique Blogs. </p>
             
             </div></td><td>
            <div class="s6_division" style="margin-left: 36px;">
                   <div class="s6_zoomimage"><img src="resources/img/icons8-inspection-96.png" alt="" width="70px" height="70px;" class="s6_icon2"></div>
                  <h3 class="s6_heading" style="margin-bottom: 0px;"><b>CONCEPTS & PLANNING</b></h3>
                  <p class="s6_heading s6_hr-line" style="color: rgb(244,72,58);"><b>-----------------------------------------------</b></p>
                   <p class="s6_para" style="font-size: 14px;">Perfectly Planned With Personal Assistance Throughout,Concepts Are Latest Which Is Best In Occassions.</p>
           
             
             </div></td><td>
            <div class="s6_division" style="margin-left: 36px;">
                   <div class="s6_zoomimage"><img src="resources/img/icons8-idea-480.png" alt="" width="70px" height="70px;" class="s6_icon"></div>
                   <h3 class="s6_heading"style="margin-bottom: 0px;" style="margin-left: 6px;"><b>IDEAS & INSPIRATIONS</b></h3>
                   <p class="s6_heading s6_hr-line" style="color: rgb(244,72,58);"><b>--------------------------------------------</b></p>
                   <p class="s6_para" style="font-size: 14px;">Get The Most Unique And Fun Ideas For All Your Events, Custom Thought As Per Your Wish.Custom Thought As Per Your Wish.  </p>
          
             </div></td><td>
                  
            <div class="s6_division" style="margin-left: 36px;">
                   <div class="s6_zoomimage"><img src="resources/img/icons8-ask-question-96.png" alt="" width="70px;" height="70px;" class="s6_icon"></div>
                   <h3 class="s6_heading" style="margin-bottom: 0px;"><b>TIPS & TRICKS</b></h3>
                   <p class="s6_heading s6_hr-line" style="color: rgb(244,72,58);"><b>---------------------------</b></p>
                   <p class="s6_para" style="font-size: 14px;">Manage Your Events Yourself Without Panic & Manage Guests With Poise, Just Ask FAB For Tips & Tricks For A Better Experience </p>
              
             </div></td></tr></table>
             
           </div>
       </div>
     </div>
   
</body>
</html>