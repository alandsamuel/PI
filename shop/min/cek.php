 <?php 
if (!isset($_SESSION['admin'])) 
{
	echo "<center><h5><b> Error </b> <br> Anda harus login terlebih dahulu</h5></center>"; 
	include('login.php');
	exit; 
}

/*if(!isset($_COOKIE['aktif'])) 
{ 
	echo "Waktu login Anda sudah habis </br>"; 
	include('login.php');
	exit; 
} else
{
	$waktujam = time() + 0.5 * 3600;  
	setcookie(aktif, "masih aktif", $waktujam);  
}*/
?> 
