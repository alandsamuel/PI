<?php
//include('cek.php');
?>
<!DOCTYPE html>
<html>
<body>

</body>
</html>
<?php
$idgame     = $_POST['idgame'];
$judul      = $_POST['judul'];
$harga      = $_POST['harga'];
$idkategori = $_POST['idkategori'];
echo "<pre>";
echo "ID Buku : $idbuku </br>";
echo "Judul Buku : $judul </br>";
echo "Harga Buku : $harga </br>";
echo "Kategori Buku : $idkategori </br>";
echo "</pre>";

$gambar = $_FILES['gambarbuku']['name'];
$uploaddir = '/shop/img/item/';
$uploadfile = $uploaddir . $gambar; 
echo "$uploadfile";

if (move_uploaded_file($_FILES['gambarbuku']['tmp_name'],$uploadfile)) {
	echo " File telah berhasil diupload";
} else {
	echo " File gagal diupload";
}
echo "</br>";

include ('db_connection.php');
$hasil = mysql_query("INSERT INTO buku(idbuku, judul, harga, idkategori, gambar) VALUES 
					('$idgame', '$judul', '$harga', '$idkategori', '$gambar')");
//print($hasil);exit;

if($hasil!=0) {
	echo "Data berhasil dimasukkan";
	//echo "<meta http-equiv='refresh' content='2;url=index.php'>";
} else {
	echo "Data gagal dimasukkan";
	//include ('isigame.php');
} 
?>