<?php
$email=$_GET["email"];
require 'db_connection_2.php';
$q="INSERT INTO  hsection_113 values (0,'".$email."',Current_timestamp)";
$result=mysqli_query($conn,$q);
header("Location: ./f11.php");
exit;

?>