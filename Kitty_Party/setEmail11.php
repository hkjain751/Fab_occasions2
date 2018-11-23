<?php
$email=$_GET["email"];
require "db_connection_2.php";
$q="INSERT INTO  hsection_113 values (0,'".$email."',Current_timestamp)";
$result=mysqli_query($conn,$q);
echo "<script> alert('Your Email submitted Sucessfully.Now You are Able to get Updates.Thanks......'); ";
if(isset($_SERVER["HTTP_REFERER"]))
{
echo "location='". $_SERVER["HTTP_REFERER"]."'";
}
else
{
	echo "location= './Home.php'";
}
echo "</script>";

?>