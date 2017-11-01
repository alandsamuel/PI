<?php
//include('cek.php');
?>
<?php
$idblog=$_GET['idblog'];
include('db_connection.php');
$queryblog=mysql_query("SELECT * FROM blog_post where no_post='".$idblog."'");
$datablog=mysql_fetch_array($queryblog);
?>
<p><b>HAPUS Data blog</b></p>
<form method='post' action='index.php?target=hapusblog'>
<pre>
judul blog 	:<?php echo $datablog['judul_post']; ?></br>
kategori blog 	:<?php echo $datablog['idkategori']; ?></br>
<br>
isi blog : <br>
<?php echo $datablog['prev_isi']; ?></br>
<h4>ANDA YAKIN AKAN MENGHAPUS DATA INI ? </h4>
<input type='hidden' name='idblog' value='<?php echo $idblog; ?>' >
<table>
<tr>
<td><input type='submit' value='Ya' class="btn btn-success"></form> </td>
<form method='post' action='index.php?target=daftarblog'>
<td><input type='submit'  value='Tidak' class="btn btn-primary"></form> </td>
</tr>
</table>

