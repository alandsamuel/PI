<?php  
// setting koneksi ke database
$hostmysql = "mysql.idhostinger.com";
$username = "u684383093_tiwa";
$password = "dari1sampe5";
$database = "u684383093_toko";

$conn = mysql_connect("$hostmysql","$username","$password");
if (!$conn) die ("Gagal Melakukan Koneksi");
mysql_select_db($database,$conn) or die ("Database Tidak Diketemukan di Server"); 
  
?> 