<?php
session_start();
//echo "$_SESSION['beli']";

$namapembeli=$_POST['namapembeli'];
$alamatpembeli=$_POST['alamatpembeli'];
$kontakpembeli=$_POST['kontakpembeli'];
$pesan=$_POST['pesan'];
$today = date("Y-m-d"); 

echo "<h5>Tanggal : $today</h5>";
echo "<center><h3>Terima Kasih $namapembeli ...</h3><center>";
echo "<center><h4>Telah Berbelanja Di Goldie Game Store</h4><center><br>";
echo "Berikut ini daftar belanjaan Anda :";
include('db_connection.php');
                
$hasil=mysql_query("INSERT INTO pembelian (idbeli,tanggal, namapembeli,alamatpembeli,kontakpembeli,pesan)  
VALUES('".$_SESSION['beli']."','$today','$namapembeli','$alamatpembeli','$kontakpembeli','$pesan')"); 


$querypembelian=mysql_query("SELECT * FROM temppembelian, tempdetailpembelian, buku where 
temppembelian.idbeli=tempdetailpembelian.idbeli and 
tempdetailpembelian.idbuku=buku.idbuku
and temppembelian.idbeli='".$_SESSION['beli']."'");
echo"<table border='0' class='table table-striped'>
<tr>
<th>No</th>

<th>Judul</th>
<th>Harga</th>
<th>Jumlah</th>
<th>Total</th>
</tr>";
$no=0;
$total=0;
while($datapembelian=mysql_fetch_array($querypembelian)){
$no++;
echo"
<tr>
<td>$no</td>

<td>".$datapembelian['judul']."</td>
<td>".$datapembelian['harga']."</td>
<td>".$datapembelian['jumlah']."</td>
<td>".$datapembelian['harga']*$datapembelian['jumlah']."</td>
</tr>";
$total=$total+($datapembelian['harga']*$datapembelian['jumlah']);

$hasil=mysql_query("INSERT INTO detailpembelian (idbeli, idbuku,jumlah)   
VALUES('".$_SESSION['beli']."','".$datapembelian['idbuku']."','".$datapembelian['jumlah']."')"); 
}
echo"
<tr>
<th colspan='4'>Total</th>
<th>$total</th>
</tr>";
echo"</table>";

$hasil=mysql_query("DELETE FROM tempdetailpembelian WHERE idbeli ='".$_SESSION['beli']."'");
$hasil=mysql_query("DELETE FROM temppembelian WHERE idbeli ='".$_SESSION['beli']."'");
unset($_SESSION['beli']);
?>