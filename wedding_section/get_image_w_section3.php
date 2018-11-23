<?php 

require 'db_connection_2.php';

$id = $_GET['id'];

$sql = "select image from w_section3 where id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

header("content-type:image/jpeg");

echo $row['image'];

?>
