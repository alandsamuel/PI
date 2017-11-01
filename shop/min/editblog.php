<?php
include('cek.php');
?>
<?php
$idblog=$_GET['idblog'];
include('db_connection.php');
$queryblog=mysql_query("SELECT * FROM blog_post where no_post='".$idblog."'");
$datablog=mysql_fetch_array($queryblog);
?>
<p><b>EDIT blog</b></p>
<form method='post' action='index.php?target=terimaeditblog'>
<pre>
Judul blog 	:<input type='text' name='judul_post' value='<?php echo $datablog['judul_post']; ?>'>
Kategori blog 	:<select name='idkategori'>
</pre>
<option value='K01'<?php if($datablog['idkategori']=='news'){echo"selected";}?>>News</option>
<option value='K02'<?php if($datablog['idkategori']=='gaming'){echo"selected";}?>>Gaming</option>
<option value='K03'<?php if($datablog['idkategori']=='gb'){echo"selected";}?>>Global</option>
</select></br>
<pre>
	Isi Post : <br>
	<textarea name="isi_post" rows="20" cols="80"><?php echo $datablog['isi_post']; ?></textarea>

<br><br>
<input type='submit' value='edit' class="btn btn-success">
</form> 