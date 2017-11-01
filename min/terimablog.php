<?php
//include('cek.php');
?>
<?php
$judul_post = $_POST['judul_post'];
$idkategori = $_POST['idkategori'];
$isi_post = $post['isi_post']

echo "<pre>";
echo "judul post 	:$judul_post </br>";
echo "kategori post :$idkategori </br>";
echo "</pre>";
echo "<br>
		<pre>
		isi post : <br>
		$isi_post"

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
$hasil=mysql_query("INSERT INTO post(judul_post, isi_post,idkategori,gambar)  VALUES('$judul_post','$isi_post' ,'$gambar','$idkategori')" ; "UPDATE blog_post set prev_isi=isi_post");   
if($hasil!=0){
	echo "Data berhasil dimasukkan <br> ";
} else {
	echo "Data gagal dimasukkan <br>";
}
?>