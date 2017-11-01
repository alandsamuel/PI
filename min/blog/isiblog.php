
<form enctype='multipart/form-data' action='index.php?target=terimagame' method='post'>
<pre>
<b>Id Game 		:<input type='text' name='idgame'>
Judul Game 		:<input type='text' name='judul'>
Harga Game 		:<input type='text' name='harga'>
Kategori Game 	:<select name='idkategori'>
	<option value='K01'>FPS</option>";
	<option value='K02'>RPG</option>
	<option value='K03'>Racing</option>
	<option value='K04'>Strategy</option>
	<option value='K05'>Simulation</option>
	<option value='K06'>Sports</option>
</select>

<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
Gambar Game	:<input name='gambar' type='file' /></b>
</pre>

<br>
<p class='pull-right'>
<input type='submit' value='input' class="btn btn-success">
<input type='reset' value='clear' class="btn btn-primary"><br>
</p>
</form> 
