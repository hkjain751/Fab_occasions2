<?php

  $id = $_GET['id'];


 require "db_connection_2.php";

  $sql = "SELECT * FROM hsection_8 WHERE id=".$id;

  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_array($result);

   header("content-type:image/jpeg");
  echo $row["image"];

?>
