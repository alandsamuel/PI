<?php
//include('cek.php');
?>
<?php
$idgame = $_POST['idgame'];
$judul = $_POST['judul'];
$harga = $_POST['harga'];
$idkategori = $_POST['idkategori'];

echo "<pre>";
echo "id game 	:$idgame </br>";
echo "judul game 	:$judul </br>";
echo "harga game 	:$harga </br>";
echo "kategori game :$idkategori </br>";
echo "</pre>";

$gambar = $_FILES['gambar']['name'];
$uploaddir = '../img/';
$uploadfile = $uploaddir . $gambar;
echo "$uploadfile";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile)) {
echo "<br>File telah berhasil diupload <br><br>";
} else {
echo "<br>File gagal diupload <br><br>";
}

include('db_connection.php');
$hasil=mysql_query("INSERT INTO game(idgame, judul, harga ,idkategori,gambar)  VALUES('$idgame', '$judul','$harga','$idkategori','$gambar')");   
if($hasil!=0){
	echo "Data berhasil dimasukkan <br> ";
} else {
	echo "Data gagal dimasukkan <br>";
}
?>