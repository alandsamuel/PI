<?php
 //include('cek.php');
?>
<?php
include('db_connection.php');
$querygame = mysql_query("SELECT * FROM blog_post");
echo "<h3>DAFTAR Post Blog</h3>";
echo "<table border='1' class='table table-striped'>
<tr>
<th>No</th><th>ID Post</th><th>judul</th>
<th>Tanggal Post</th>
<th>edit</th><th>hapus</th>
</tr>";

$no=0;
while($datagame=mysql_fetch_array($querygame)){
$no++;
echo "
<tr>
<td>$no</td>
<td>".$datagame['no_post']."</td>
<td>".$datagame['judul_post']."</td>
<td>".$datagame['tanggal_post']."</td>
<td><a href='index.php?target=editblog&idblog=".$datagame['no_post']."'>
edit-blog-$no</a></td>
<td><a href='index.php?target=konfirmhapusblog&idblog=".$datagame['no_post']."'>
hapus-blog-$no</a></td>
</tr>";
}
echo "</table>";
?>