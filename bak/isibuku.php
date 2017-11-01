<?php
//include('cek.php');
?>
<!DOCTYPE html>
<html>
<body>
<center>
<p>INPUTAN BUKU</p>
<form enctype='multipart/form-data' action='index.php?target=terimabuku' method='post'>
<table border='0'>
	<tr><td>ID Buku</td><td>:</td><td><input type='text' name='idbuku'></td></tr>
	<tr><td>Judul Buku</td><td>:</td><td><input type='text' name='judul'></td></tr>
	<tr><td>Harga Buku</td><td>:</td><td><input type='text' name='harga'></td></tr>
	<tr><td>Kategori Buku</td><td>:</td><td>
			<select name='idkategori'>
				<option value='K01'>Cerita</option>
				<option value='K02'>Pengetahuan</option>
			</select>
	</td></tr>
	<tr><td><input type='hidden' name='MAX_FILE_SIZE' value='500000' /></td></tr>
	<tr><td>Gambar Buku</td><td>:</td><td><input name='gambarbuku' type='file' /></td></tr>
	<tr><td align='center' colspan='3'><input type='submit' value='input'><input type='reset' value='clear'></td></tr>
</table>
</form>
</center>
</body>
</html>