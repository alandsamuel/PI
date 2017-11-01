
<form enctype='multipart/form-data' action='index.php?target=terimablog' method='post'>
<pre>
<b>
Judul blog 		:&nbsp;<input type='text' name='judul'><br>
Kategori blog 		:&nbsp;<select name='idkategori'>
	<option value='news'>News</option>";
	<option value='gaming'>Gaming</option>
	<option value='gb'>global</option>
</select>

<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
Gambar blog	:<input name='gambar' type='file' /></b>
</pre>

<pre>
	Isi Post : <br>
	<textarea name="isi_post" rows="20" cols="80"></textarea>

<br>
<center>
<input type='submit' value='input' class="btn btn-success"> <input type='reset' value='clear' class="btn btn-primary">
</center>
</form> 
