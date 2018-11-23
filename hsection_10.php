
<!-- ---------Hardik connection with database & get content-----------   -->
<?php
function getContent10($id)
{
 require 'db_connection_2.php';
 $q="Select * from hsection_10 where id=".$id;
 $result=mysqli_query($conn,$q);
 $num=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
	echo $row['content'];
}
?>
<!-- ---------SHASHWAT & Hardik (all design)-----------   -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ------------------------------ uikit CSS ---------------------------- -->
    <link rel="stylesheet" href="resources/uikit/css/uikit.min.css">
<!-- ------------------ GOOGLE FONTS----------------------------------------   -->
   <!--<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">-->
   <link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">


<!-- -------------------------------- MAIN CSS -------------------------------  -->
   <link rel="stylesheet" type="text/css" href="resources/css/s10_style2.css">
    <title>Fab Occasions section10</title>
</head>
<body>
	<div class="s10_row">
		<div class="s10_container" style="background-color: #eee;"><br>
			<DIV class="s10_testimony">
    <blockquote ><h4 style="font-family: 'Overlock',cursive;"><br><?php getContent10(10); ?><br><br></h4></blockquote>
</DIV>
</div>
	</div>
</body>
</html>