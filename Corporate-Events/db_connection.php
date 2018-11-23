<?php
/* by Manan Trimbakey */
// to establish the connection
	function connection() {
		$conn = new mysqli("localhost", "root","","faboccasions");
		 if(!$conn)
		{
  	die("Connection Failed!:".mysqli_connect_error());
		}
  else	{
		return $conn;
       }
	}
?>