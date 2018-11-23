<?php

  $id = $_GET['id'];
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'faboccasions';
  $conn = mysqli_connect($server,$user,$password,$db);

  if(!$conn)
  {
  	die("Connection Failed!:".mysqli_connect_error());
  }

  $sql = "SELECT * FROM portfolio_family WHERE id=".$id;

  $result = mysqli_query($conn,$sql);

  $row = mysqli_fetch_array($result);

   header("content-type:image/jpeg");
  echo $row["image"];

?>
