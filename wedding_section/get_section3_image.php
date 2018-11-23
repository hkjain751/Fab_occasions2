<?php

// This code is used for getting Images from DB h_ection3. We call this file from src attribute of the img tag to display the image.


$id = $_GET["id"]; // Id is getting from the all image tag.

require "db_connection_2.php";

$sql = "SELECT * FROM h_section3 WHERE id =".$id;

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

header("content-type:image/jpeg");

echo $row["image"];


?>
