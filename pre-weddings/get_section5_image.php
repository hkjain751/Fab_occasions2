<?php

$id = $_GET["id"];  //Getting id from "src" attribute where we call this file . This id is used to get image from DB.

 require ('db_connection_2.php');

$sql = "SELECT * FROM h_section5 WHERE id =".$id;

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

header("content-type:image/jpeg");

echo $row["image"];


?>
