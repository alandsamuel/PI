<?php
//include('cek.php');
?>
<?php
$idgame=$_POST['idgame'];
include('db_connection.php');
$hasil = mysql_query("DELETE FROM game WHERE idgame ='".$idgame."'");

if($hasil!=0){
	echo "Data berhasil dihapus";
} else {
	echo "Data gagal dihapus";
}
?>