<?php
include('cek.php');
?>
<h3>REKAP PENJUALAN</h3>
<?php
include('db_connection.php');
$querypembelian = mysql_query("SELECT *, sum(detailpembelian.jumlah*game.harga) as total FROM 
pembelian, detailpembelian, game where 
pembelian.idbeli=detailpembelian.idbeli and detailpembelian.idgame=game.idgame 
group by pembelian.idbeli");
echo "<table border='1' class='table table-striped'>
<tr>
<th>No</th>
<th>Nama Pembeli</th>
<th>Tanggal</th>
<th>Total</th>
<th>detail</th>
</tr>";

$no=0;
$total=0;
while($datapembelian=mysql_fetch_array($querypembelian)){
$no++;
echo "
<tr>
<td>$no</td>
<td>".$datapembelian['namapembeli']."</td>
<td>".$datapembelian['tanggal']."</td>
<td>".$datapembelian['total']."</td>
<td><a href=index.php?target=detailpembelian&idbeli=".$datapembelian['idbeli'].">
detail pembelian ke-$no</a></td>
</tr>";
$total=$total+($datapembelian['total']);
}
echo "
<tr>
<th colspan='3'>Total</th>
<th>$total</th>
</tr>";
echo"</table>";
?>