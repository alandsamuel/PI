<?php
session_start();
include ('db_connection.php');

$username = $_POST['username'];
$password = $_POST['password'];  

$query = "SELECT username, password FROM admin WHERE username = '$username' and password = '$password' ";
$hasil = mysql_query($query) or die(mysql_error());

$ditemukan = mysql_num_rows($hasil);
if ($ditemukan==1) {
	$_SESSION['admin'] = $username;
	$setengahjam = time() + 0.5 * 3600;
	setcookie(aktif, 'masih aktif', $setengahjam);
	echo "Login sukses ! <br>";
	echo "<meta http-equiv='refresh' content='2;url=index.php'>";
} else {
	echo "Login gagal ! <br>";
	include ('login.php');
}
?>

<html>
<body>

</body>
</html>



<?php 
/*$username = $_POST['username']; 
$password = $_POST['password'];
echo "Nama user Anda adalah: $username </br>";
echo "Password Anda adalah: $password </br> ";

include('db_connection.php');
echo "$database";

$queryadmin = mysql_query("SELECT * FROM admin where username='".$username."' and password='".$password."'");
print_r "$queryadmin";
$ditemukan=mysql_num_rows($queryadmin);

if($ditemukan==1) {
	$_SESSION['admin']=$username; 
	$setengahjam = time() + 0.5 * 3600;  
	setcookie(aktif, "masih aktif", $setengahjam);  
	echo "Login Sukses ! </br>";
	echo"<meta http-equiv='refresh' content='2;url=index.php'>";
} else {	
	echo "Login Gagal ! </br>"; include('login.php');
} */
?> 
