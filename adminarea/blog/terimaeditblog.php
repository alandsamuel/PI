<?php
//include('cek.php');
?>
<?php
$idgame=$_POST['idgame'];
$judul=$_POST['judul'];
$harga=$_POST['harga'];
$idkategori=$_POST['idkategori'];

echo "<pre>";
echo "id buku 	:$idgame </br>";
echo "judul buku 	:$judul </br>";
echo "harga buku 	:$harga </br>";
echo "kategori buku 	:$idkategori </br>";
echo "</pre>";

include('db_connection.php');
$hasil=mysql_query("UPDATE buku SET 
judul = '$judul',
harga = '$harga',
idkategori = '$idkategori' 
WHERE idgame = '$idgame'");   

if($hasil!=0){
	echo "Data berhasil diedit";
} else {
	echo "Data gagal diedit";
} 
?>