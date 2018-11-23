<?php

require "db_connection.php";

$conn = connection();

$rs = $conn->query("select * from h_section1;");

$arr = [];

while ($row = $rs->fetch_assoc()) {
	$arr["heading"] = $row["heading"];
	$arr["tagline"] = $row["tagline"];
	$arr["phone_no"] = $row["phone_no"];
}

$json = json_encode($arr);
echo $json;

?>