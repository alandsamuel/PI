<?php
//include('cek.php');
?>
<?php
$idgame=$_GET['idgame'];
include('db_connection.php');
$querygame=mysql_query("SELECT * FROM game where idgame='".$idgame."'");
$datagame=mysql_fetch_array($querygame);
?>
<p><b>HAPUS Data Game</b></p>
<form method='post' action='index.php?target=hapusgame'>
<pre>
id game 	:<?php echo $datagame['idgame']; ?> </br>
judul game 	:<?php echo $datagame['judul']; ?></br>
harga game 	:<?php echo $datagame['harga']; ?></br>
kategori game 	:<?php echo $datagame['idkategori']; ?></br>
<h4>ANDA YAKIN AKAN MENGHAPUS DATA INI ? </h4>
<input type='hidden' name='idgame' value='<?php echo $idgame; ?>' >
<table>
<tr>
<td><input type='submit' value='Ya' class="btn btn-success"></form> </td>
<form method='post' action='index.php?target=daftargame'>
<td><input type='submit'  value='Tidak' class="btn btn-primary"></form> </td>
</tr>
</table>

