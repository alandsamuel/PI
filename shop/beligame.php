<?php
include('db_connection.php');
$idgame=$_GET['idgame'];
$querygame=mysql_query("SELECT * FROM game where idgame='".$idgame."'");
$datagame=mysql_fetch_array($querygame);
?>
<p><b>BELI GAME</b></p>
<form method='post' action='home.php?target=terimabeli&idgame=<?php echo $idgame; ?>'>
<pre>
Id Game				:<?php echo $idgame; ?></br>
Judul Game 			:<?php echo $datagame['judul']; ?></br>
Harga 				:<?php echo $datagame['harga']; ?></br>
Jumlah yang dibeli 		:<input type='text' name='jumlah' size='3'> </br>
</pre>
<br>
<table>
<tr>
	<td>	
	<input type='Submit' class="btn btn-primary" value='Tambahkan'>&nbsp&nbsp
	</td>	
	</form>
	<form method='post' action='index.php'> 
	<td><input type='Submit' class="btn btn-warning" value='Batal'></td>
</tr>
</table>
<br>
<pre>
Deskripsi Game :

<?php echo "<img src='img/bk/".$datagame['gambar']."'width=480 height=220>"; ?>
<br>

<?php echo $datagame['deskripsi']; ?>
</pre>
</form> 