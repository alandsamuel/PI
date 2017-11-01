<?php
include('koneksi.php');
$statusbeli=$_POST['tombol'];
if($statusbeli=='batal belanja'){
$hasil=mysql_query("DELETE FROM tempdetailpembelian WHERE idbeli ='".$_SESSION['beli']."'");
$hasil=mysql_query("DELETE FROM temppembelian WHERE idbeli ='".$_SESSION['beli']."'");
unset($_SESSION['beli']);
}
$querybuku=mysql_query("SELECT *FROM buku");
echo"<table border='1' width='500' align='center'>
<tr>
<th>No</th><th>judul</th>
<th>harga</th><th>aksi</th>
</tr>";

$no=0;
while($databuku=mysql_fetch_array($querybuku)){
$no++;
echo"
<tr>
<td>$no</td>
<td><a href='index.php?target=belibuku&idbuku=".$databuku['idbuku']."'><img src='gambarbuku/".$databuku['gambar']."'width=100 height=150>
".$databuku['judul']."</a></td>
<td>".$databuku['harga']."
</td><td>beli</td>
</tr>";
}
echo"</table>";
?>