<?php  
// setting koneksi ke database
//$dbcon=mysql_connect("localhost","root","");  
//mysql_select_db($dbcon,"customers");

 //$con=mysqli_connect("localhost","root","","customers");
//Check connection
//if (!$con)
  /* {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } //else { //echo " sukses";} */
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "toko_online";

$conn = mysql_connect("$hostmysql","$username","$password");
if (!$conn) die ("Gagal Melakukan Koneksi");
mysql_select_db($database,$conn) or die ("Database Tidak Diketemukan di Server"); 
  
?> 