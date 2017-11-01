<?php
//include('cek.php');
?>
<?php
$username = $_POST['password'];
$password = $_POST['username'];


echo "<pre>";
echo "Username 	:$username </br>";
echo "Password 	:$password </br>";
echo "</pre>";


include('db_connection.php');
$hasil=mysql_query("INSERT INTO admin(username, password)  VALUES('$username', '$password')");   
if($hasil!=0){
	echo "Akun berhasil dibuat <br> ";
} else {
	echo "Akun gagal dibuat <br>";
}
?>