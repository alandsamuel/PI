<?php
include('db_connection.php');
$idgame=$_GET['idgame'];
$querygame=mysql_query("SELECT * FROM game ORDER BY no DESC LIMIT 1");
$datagame=mysql_fetch_array($querygame);
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><b>Lastest Item</b></h3>
	</div>
  <div class="panel-body">
   <center>
<p color=#FF0000><b></b></p>
<?php echo "<img src='img/bk/".$datagame['gambar']."'width=160 height=88>"; ?>
<br>
<hr>
Judul Game 			:<br><b><?php echo $datagame['judul']; ?></b></br>
<b>Harga 				:Rp.<?php echo $datagame['harga']; ?></br></b>
Deskripsi Game :<br>
<?php echo substr($datagame['deskripsi'], 0,255) ?>
</pre> 
<br>
<a class="btn btn-default" href="home.php?target=newadded" role="button">Lihat Game</a>
 </center>
  </div>
  
</div>