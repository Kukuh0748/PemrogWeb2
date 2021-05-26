<?php

$con = mysqli_connect("localhost","root",""); 
if (!$con) 
	{ 
 	die('Could not connect: ' . mysqli_error()); 
 	} 
mysqli_select_db($con, "lat_dbase");

mysqli_query($con, "DELETE FROM tbl_mhs WHERE LastName='Prabowo'");

echo "<br><br> Nama : Raden Wirawan Kukuh Pambudi
	  <br><br> NIM : 181011402940"; 
?> 