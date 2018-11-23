<?php
  require "db_connection.php";

  $conn = connection();
  
  $sql = "SELECT * FROM h_section1;";

  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

   header("content-type:image/jpeg");
  echo $row["logo"];

?>
