<?php 

echo "<br> Nama : Raden Wirawan Kukuh Pambudi
	  <br><br> NIM : 181011402940"; 

$con = mysqli_connect("localhost","root","");
if (!$con) 
 	{ 
 	die('Could not connect: ' . mysqli_error()); 
 	}
mysqli_select_db($con, "lat_dbase");

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES 
('$_POST[Firstname]','$_POST[Lastname]','$_POST[Age]')"; 
if (!mysqli_query($con, $sql)) 
	{ 
  	die('Error: ' . mysqli_error()); 
  	} 
echo "1 record added"; 
mysqli_close($con)
?>