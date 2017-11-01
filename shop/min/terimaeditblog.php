<?php
//include('cek.php');
?>
<?php
$idblog=$_GET['idblog'];
$judul=$_POST['judul_post'];
$idkategori=$_POST['idkategori'];
$isi_post = $_POST['isi_post'];

echo "<pre>";
echo "judul blog 		:$judul_post </br>";
echo "kategori blog 	:$idkategori </br>";
echo "</pre>";
echo "<br>
		<pre>
		isi blog : <br>
		$isi_post"

include('db_connection.php');
$hasil=mysql_query("UPDATE blog_post SET 
judul_post = '$judul_post',
idkategori = '$idkategori' 
WHERE idblog = '$idblog'");   

if($hasil!=0){
	echo "Data berhasil diedit";
} else {
	echo "Data gagal diedit";
} 
?>