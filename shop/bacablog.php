<?php
include('db_connection.php');
$idblog=$_GET['idblog'];
$queryblog=mysql_query("SELECT * FROM blog_post where no_post='".$idblog."'");
$datablog=mysql_fetch_array($queryblog);
?>
<?php echo "<center><img src='img/bp/".$datablog['gambar']."'width=500 height=200></center>"; ?> 
<br>
<p><b><?php echo $datablog['judul_post']; ?></b></p>
<br>

<?php echo $datablog['isi_post']; ?>

</form> 