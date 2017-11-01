<?php
include('db_connection.php');
$statusbeli = $_POST['tombol'];
if($statusbeli == 'Batal belanja'){
$hasil = mysql_query("DELETE FROM tempdetailpembelian WHERE idbeli ='".$_SESSION['beli']."'");
$hasil = mysql_query("DELETE FROM temppembelian WHERE idbeli ='".$_SESSION['beli']."'");
unset($_SESSION['beli']);
}
$querybuku = mysql_query("SELECT * FROM buku");

echo "<table class='table table-striped' border='0' width='800' align='center'>
<tr>
	<th align='center'>No</th>
	<th align='center'>Judul</th>
	<th>Harga</th>
	<th>Stock</th>
	<th>Aksi</th>
</tr>";

$no=0;
while($databuku=mysql_fetch_array($querybuku)){
$no++;
echo "
<tr>
<td>$no</td>
<td><a href='index.php?target=belibuku&idbuku=".$databuku['idbuku']."'><img src='img/bk/".$databuku['gambar']."'width=110 height=160>
".$databuku['judul']."</a></td>
<td>".$databuku['harga']."</td>
<td>".$databuku['stok']."</td>
<td><a href='index.php?target=belibuku&idbuku=".$databuku['idbuku']."'>BELI</a></td>
</tr>";
}
echo"</table>";
?>