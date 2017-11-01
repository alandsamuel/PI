<?php
include('db_connection.php');
$idgame=$_GET['idgame'];
$jumlah=$_POST['jumlah'];
$today = date("Y-m-d"); 
$querygame=mysql_query("SELECT * FROM game where idgame='".$idgame."'");
$datagame=mysql_fetch_array($querygame);

if($_SESSION['beli']=='')
{$hasil=mysql_query("INSERT INTO temppembelian (tanggal, namapembeli)  
VALUES($today,'joko')"); 
$querybeli=mysql_query("SELECT * FROM temppembelian order by idbeli desc");
$databeli=mysql_fetch_array($querybeli);
$_SESSION['beli']=$databeli['idbeli'];}


$hasil=mysql_query("INSERT INTO tempdetailpembelian (idbeli, idgame,jumlah)   
VALUES('".$_SESSION['beli']."','".$datagame['idgame']."','$jumlah')"); 

?>
<h3>REKAP PEMBELIAN</h3>
<?php
include('db_connection.php');
$querypembelian=mysql_query("SELECT * FROM temppembelian, tempdetailpembelian, game where 
temppembelian.idbeli=tempdetailpembelian.idbeli and 
tempdetailpembelian.idgame=game.idgame
and temppembelian.idbeli='".$_SESSION['beli']."'");
echo"<table border='0' class='table table-striped'>
<tr>
<th>No</th>
<th>Kode Game</th>
<th>judul</th>
<th>harga</th>
<th>jumlah</th>
<th>total</th>
</tr>";

$no=0;
$total=0;
while($datapembelian=mysql_fetch_array($querypembelian)){
$no++;


echo"
<tr>
<td>$no</td>
<td>".$datapembelian['idgame']."</td>
<td>".$datapembelian['judul']."</td>
<td>".$datapembelian['harga']."</td>
<td>".$datapembelian['jumlah']."</td>
<td>".$datapembelian['harga']*$datapembelian['jumlah']."</td>
</tr>";
$total=$total+($datapembelian['harga']*$datapembelian['jumlah']);
$stock=$datapembelian['stok'] - $jumlah;
$stock = $datapembelian['stok'];
}
echo"
<tr>
<th colspan='4'>Total</th>
<th>$total</th>
</tr>";
echo"</table>";
?>
<table></br></br>
<tr>
	<form  action='home.php?target=welcome' method='post'>
		<td>
		<!-- button name="tombol" type="submit" class="btn btn-primary">Belanja lagi</button -->
		<input name='tombol' type='submit' class="btn btn-primary" value='Belanja lagi'>&nbsp&nbsp
		</td>
	</form>
	<form  action='home.php?target=welcome' method='post'>
		<td>
		<input name='tombol' type='submit' class="btn btn-danger" value='Batal belanja'>&nbsp&nbsp
		</td>
	</form>
	<form action='home.php?target=inputpembeli' method='post'>
		<td>
		<input name='tombol' type='submit' class="btn btn-success" value='Selesai belanja'>
		</td>
	</form>
</tr>
</table>










