<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "lat_dbase");

$hasil = mysqli_query($con, "select * from tbl_mhs");
$hit = mysqli_num_rows($hasil); 
echo "jumlah record $hit";

echo "<br><br> Nama : Raden Wirawan Kukuh Pambudi
	  <br><br> NIM : 181011402940"; 
?> 