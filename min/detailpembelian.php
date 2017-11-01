<?php
include('cek.php');
?>
<h3>DETAIL PEMBELIAN</h3>
<?php
include('db_connection.php');
$idbeli=$_GET['idbeli'];
$querypembeli=mysql_query("SELECT * FROM pembelian where idbeli='".$idbeli."'");
$datapembeli=mysql_fetch_array($querypembeli);
echo "<pre>";
echo "Nama Pembeli 		:".$datapembeli['namapembeli']." </br>";
echo "Tanggal Pembelian 	:".$datapembeli['tanggal']." </br>";
echo "Cara Bayar : ".$datapembeli['cara']." </br>";
echo "</pre>";

$querypembelian = mysql_query("SELECT * FROM pembelian, detailpembelian, game where 
pembelian.idbeli=detailpembelian.idbeli and 
detailpembelian.idgame=game.idgame and pembelian.idbeli='".$idbeli."'");
echo "<table border='1' class='table table-striped'>
<tr>
<th>No</th><th>Nama Game</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Total</th>
</tr>";

$no=0;
$total=0;
while($datapembelian=mysql_fetch_array($querypembelian)){
$no++;
echo "
<tr>
<td>$no</td>
<td>".$datapembelian['judul']."</td>
<td>".$datapembelian['harga']."</td>
<td>".$datapembelian['jumlah']."</td>
<td>".$datapembelian['harga'] * $datapembelian['jumlah']."</td>
</tr>";
$total = $total+($datapembelian['harga'] * $datapembelian['jumlah']);
}

echo "
<tr>
<th colspan='4'>Total Pembelian</th>
<th>$total</th>
</tr>";
echo "</table>";
?>