<!-- ---------Hardik (connection with database & get content from it)-----------   -->
<?php
function getContent8($id)
{
 require "db_connection_2.php";
 $q="Select * from hsection_8 where id=".$id;
 $result=mysqli_query($conn,$q);
 $num=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
	echo $row['content'];
}
?>
<!-- ------------------------------------ html document---------------------------------------------- -->
<!-- ---------SHASHWAT & Hardik (design page)-----------   -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ------------------------------ uikit CSS ---------------------------- -->
    <link rel="stylesheet" href="resources/uikit/css/uikit.min.css">
<!-- ------------------ GOOGLE FONTS----------------------------------------   -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">


<!-- -------------------------------- MAIN CSS -------------------------------  -->
   <link rel="stylesheet" href="resources/css/s8_style2.css">
    <title>Fab Occasions section8</title>
</head>
<body>
    <div class="s8_row" style="margin-left: 70px">
  <div class="s8_column s8_left">
  	<div class="s8_container"> <br>
		<blockquote class="s8-block" style="font-family: 'Overlock',cursive;"><h4><br><?php echo getContent8(2); ?><br><br></h4></blockquote>
</div>
</div>

  <div class="s8_column s8_right" >
    <img src="resources/img/s8.png" width="40" height="180" class="s8_design ">
    <img src="getImage8.php?id=2" width="260" height="200" class="s8_logo1">
  </div>
</div>

</body>
</html>