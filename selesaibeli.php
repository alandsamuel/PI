<?php
session_start();
//echo "$_SESSION['beli']";

$namapembeli=$_POST['namapembeli'];
$steamuser=$_POST['steamuser'];
$kontakpembeli=$_POST['kontakpembeli'];
$pembayaran=$_POST['cara'];
$pesan=$_POST['pesan'];
$today = date("Y-m-d");  

echo "<h2>Terima Kasih Telah Berbelanja $namapembeli ...</h3><br>";
echo "<h5>Pembayaran : $pembayaran</h5><br>";
echo "<h6> Tanggal : $today</h6><br><br>";
echo "Berikut ini daftar belanjaan Anda :";
include('db_connection.php');               
$hasil=mysql_query("INSERT INTO pembelian (idbeli,tanggal, namapembeli,steamuser,kontakpembeli,cara)  
VALUES('".$_SESSION['beli']."','$today','$namapembeli','$steamuser','$kontakpembeli','$pembayaran')"); 


$querypembelian=mysql_query("SELECT * FROM temppembelian, tempdetailpembelian, game 
where temppembelian.idbeli=tempdetailpembelian.idbeli and 
		tempdetailpembelian.idgame=game.idgame and
		temppembelian.idbeli='".$_SESSION['beli']."'");
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

$hasil=mysql_query("INSERT INTO detailpembelian (idbeli, idgame,jumlah)   
VALUES('".$_SESSION['beli']."','".$datapembelian['idgame']."','".$datapembelian['jumlah']."')"); 
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
<table></br></br>
<tr>
<form  action='home.php?target=welcome' method='post'>
<td>
<input name='tombol' type='submit' class="btn btn-primary" value='belanja lagi'>&nbsp&nbsp
</td>
</form>
<form  action='home.php?target=welcome' method='post'>
<td>
<input name='tombol' type='submit' class="btn btn-primary" value='selesai'>&nbsp&nbsp
</td>
</form>
<!-- Print Preview (masih error)
<form  action='printprev.php' method='post'>
<td>
<input name='tombol' type='submit' class="btn btn-primary" value='Print'>
</td>
</form>
-->
</tr>
</table>
