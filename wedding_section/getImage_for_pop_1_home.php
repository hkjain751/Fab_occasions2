<?php
   require 'db_connection_2.php';

  $sql = "SELECT * FROM home_pop_up_1";

  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_array($result);

   header("content-type:image/jpeg");
  echo $row["img"];

?>