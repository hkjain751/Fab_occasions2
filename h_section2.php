<!--Hardik connection with database-->
<?php
 require 'db_connection_2.php';
 $q="Select * from hsection_2 where id=1";
 $result=mysqli_query($conn,$q);
 $num=mysqli_num_rows($result);
 $image;
 $content;
if($num==1)
				 {
				   $row=mysqli_fetch_array($result);
				   $content=$row['content'];
				 }
?>
<!-- ---------SHASHWAT-----------   -->
<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
    .s2_button {
    position: relative;
    background-color: white;
    border: 1px solid rgb(244, 72, 58);
    border-radius: 50px;
    font-size: 18px;
    font-family: 'Overlock', cursive;
    color: rgb(244, 72, 58);
    padding: 13px 10px;
    margin: 0px;
    width: 165px;
    text-align: center;
    -webkit-transition-duration: 0.4s;
    /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.s2_button:hover {
    background-color: rgb(244, 72, 58);
    color: #fff;

}
  </style>
    <meta charset="UTF-8">
    <!-- ------------------------------ uikit CSS ---------------------------- -->
    <link rel="stylesheet" href="resources/uikit/css/uikit.min.css">
<!-- ------------------ GOOGLE FONTS----------------------------------------   -->
   <!--<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">-->
   <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">


<!-- -------------------------------- MAIN CSS -------------------------------  -->
   <link rel="stylesheet" href="resources/css/style_section2.css">
    <title>Fab Occasions section2</title>
</head>
<body>
    <div class="uk-block uk-block-default  s2_section2">
        <div style="margin-left: 500px">
            <h2 style="font-size: 35px; padding-left: 50px;margin-left:-5px;line-height: 15px;font-family: 'Overlock', cursive;" ><span style="color: rgb(244,72,58);">&mdash;</span>&nbsp;&nbsp;&nbsp;Personalized With<span style="color:rgb(244,72,58) ;"> Love</span>&nbsp;&nbsp;&nbsp;<span style="color: rgb(244,72,58);">&mdash;</span></h2>
            <!--<img src="resources/img/img1.png" alt=""
            width="250" height="100px;" style="padding-left: 65px; margin-top: ">-->
            <img class="s2_img" src="resources/img/t11.png" alt=""
            width="350px;" height="80px;" style="padding-left: 95px; align-items: center;margin-left: 20px;">
        </div>
<!-- -----------------  GRID STARTS HERE --------------------------     -->
       <div class="uk-grid">
          <div class="uk-width-1-2">
              <p class="s2_txt" style="border-bottom: 2px solid rgb(244,72,58); padding-bottom: 100px;line-height: 27px;font-size: 18px;">
              	<!-- Hardik (getting content from database)-->
              	<?php
              	echo $content;
              	?>
              	<br><br>
              	
				        <button class="s2_button">Know More</button>

              </p>
          </div>
          
          
          <div class="uk-width-1-2 s2_img2">
            <div class="s2_zoomimage">
            	<!-- hardik getting image location by database -->
                <img class="s2_img" src="getImage_2.php?id=1"
                 alt="" title="Occasions close to your Heart!" style="margin-left: 20px;">
            </div>
                          
                                                                 
          </div>
           
       </div>
        
    </div>
    
    
</body>
</html>