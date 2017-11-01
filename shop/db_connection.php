<?php  
// setting koneksi ke database
$hostmysql = "localhost";
$username = "alandsamuel";
$password = "root";
$database = "toko_online";

$conn = mysql_connect("$hostmysql","$username","$password");
if (!$conn) die ("Gagal Melakukan Koneksi");
mysql_select_db($database,$conn) or die ("Database Tidak Diketemukan di Server"); 
  
?> 