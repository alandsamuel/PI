<?php
include('db_connection.php');
$statusbeli = $_POST['tombol'];
if($statusbeli == 'Batal belanja'){
$hasil = mysql_query("DELETE FROM tempdetailpembelian WHERE idbeli ='".$_SESSION['beli']."'");
$hasil = mysql_query("DELETE FROM temppembelian WHERE idbeli ='".$_SESSION['beli']."'");
unset($_SESSION['beli']);
}
$querygame = mysql_query("SELECT * FROM game where idkategori='k05'");

echo "<table class='table table-striped' border='0' width='800' align='center'>
<tr>
	<th align='center'>No</th>
	<th>Gambar</th>
	<th align='center'>Nama Game</th>
	<th>Harga</th>
	<th>Aksi</th>
</tr>";

$no=0;
while($datagame=mysql_fetch_array($querygame)){
$no++;
echo "
<tr>
<td>$no</td>
<td><a href='home.php?target=beligame&idgame=".$datagame['idgame']."'><img src='img/bk/".$datagame['gambar']."'width=160 height=88 style='border:1px solid black'></td>
<td>
".$datagame['judul']."</a></td>
<td>Rp.".$datagame['harga']."</td>
<td><a class='btn btn-default' href='home.php?target=beligame&idgame=".$datagame['idgame']."' role='button'>BELI</a></td>
</tr>";
}
echo"</table>";
?>