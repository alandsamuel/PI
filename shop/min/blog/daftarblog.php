<?php
 //include('cek.php');
?>
<?php
include('db_connection.php');
$querygame = mysql_query("SELECT * FROM game");
echo "<h3>DAFTAR Game</h3>";
echo "<table border='1' class='table table-striped'>
<tr>
<th>No</th><th>ID Game</th><th>judul</th>
<th>harga</th><th>id kategori</th>
<th>edit</th><th>hapus</th>
</tr>";

$no=0;
while($datagame=mysql_fetch_array($querygame)){
$no++;
echo "
<tr>
<td>$no</td>
<td>".$datagame['idgame']."</td>
<td>".$datagame['judul']."</td>
<td>".$datagame['harga']."</td>
<td>".$datagame['idkategori']."</td>
<td><a href='index.php?target=editgame&idgame=".$datagame['idgame']."'>
edit-game-$no</a></td>
<td><a href='index.php?target=konfirmhapusgame&idgame=".$datagame['idgame']."'>
hapus-game-$no</a></td>
</tr>";
}
echo "</table>";
?>