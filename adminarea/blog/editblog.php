<?php
include('cek.php');
?>
<?php
$idgame=$_GET['idgame'];
include('db_connection.php');
$querygame=mysql_query("SELECT * FROM game where idgame='".$idgame."'");
$datagame=mysql_fetch_array($querygame);
?>
<p><b>EDIT BUKU</b></p>
<form method='post' action='index.php?target=terimaeditbuku'>
<pre>
Id Buku 	:<input type='text' name='idgame' value='<?php echo $datagame['idgame']; ?>' readonly>
Judul Buku 	:<input type='text' name='judul' value='<?php echo $datagame['judul']; ?>'>
Harga Buku 	:<input type='text' name='harga' value='<?php echo $datagame['harga']; ?>'>
Kategori Buku 	:<select name='idkategori'>
</pre>
<option value='K01'<?php if($datagame['idkategori']=='K01'){echo"selected";}?>>FPS</option>
<option value='K02'<?php if($datagame['idkategori']=='K02'){echo"selected";}?>>RPG</option>
<option value='K03'<?php if($datagame['idkategori']=='K03'){echo"selected";}?>>Racing</option>
<option value='K04'<?php if($datagame['idkategori']=='K04'){echo"selected";}?>>Strategy</option>
<option value='K05'<?php if($datagame['idkategori']=='K04'){echo"selected";}?>>Simulation</option>
<option value='K06'<?php if($datagame['idkategori']=='K04'){echo"selected";}?>>Sports</option>
</select><br>
<input type='submit' value='edit' class="btn btn-success">
</form> 