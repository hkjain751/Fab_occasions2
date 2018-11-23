<?php
$email=$_GET["email"];
$conn = mysqli_connect('localhost','root','','faboccasions')
 or die('Error connecting to MySQL server.');
$q="INSERT INTO  hsection_113 values (0,'".$email."',Current_timestamp)";
$result=mysqli_query($conn,$q);
header("Location: ./Home.php");
exit;

?>