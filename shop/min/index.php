<?php
session_start();
error_reporting(0);
$target = $_GET['target'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Goldie Game Store | ADMIN!!</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">
    
    <!-- Carousel CSS -->
    <link href="assets/css/carousel.css" rel="stylesheet">
	<!-- <link href="css/full-slider.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->

    <!-- Page Content -->

    <div class="container">
		
        <div class="row">

            <div class="col-md-2">
                    
            </div>

            <div class="col-md-8">
                    <hr><center>
                    <h2> Admin Area !! </h2>

                    <h5><a href="../">Kembali Ke Main Site</a></h5>
                    <hr></center>
            </div>

            <div class="col-md-2">
                    
            </div>

        </div>

    </div>

                    <hr>
                    <div class="menu" id="nav">
                    <ul>
                        <?php
        //if(!isset($_SESSION['admin']))
        if((!isset($_SESSION['admin'])) and (!isset($_COOKIE['aktif'])))
        { echo "
          <a href='index.php?target=welcome'><li>Home</a> |</li>                                                             
          <a href='index.php?target=login'><li>Login</a></li>
            "; } else {                     
          echo "
          <a href='index.php?target=welcome'><li>Home</a> |</li>
          <a href='index.php?target=daftargame'><li>Daftar Game</a> |</li>
          <a href='index.php?target=isigame'><li>Tambah Game</a> |</li>                              
          <a href='index.php?target=isiadmin'><li>Tambah Admin</a> |</li>
          <a href='index.php?target=penjualan'><li>Penjualan Game</a> |</li>
          <a href='index.php?target=logout'><li>Logout</a></li>
          ";
            }
                    ?>
                    
                    </ul>
                    </div>
                    <hr>

    <div class="container">
        
        <div class="row">

            <div class="col-md-2">
                    
            </div>

            <div class="col-md-8">
                    <?php
                    if($target=='welcome' or $target== ''){
                        include('welcome.php');                             
                        include('cek.php');} else
                    if($target=='login') { // ke halaman login
                        include('login.php');} else
                    if($target=='terimalogin') { // proses setelah login
                        include('terimalogin.php');} else

                    if($target=='terimagame') { // 
                        include('terimagame.php');} else
                    if($target=='daftargame') {
                        include('daftargame.php');} else
                    if($target=='editgame') {
                        include('editgame.php');} else
                    if($target=='terimaeditgame') {
                        include('terimaeditgame.php');} else                            
                    if($target=='konfirmhapusgame') {
                        include('konfirmhapusgame.php');} else
                    if($target=='hapusgame') {
                        include('hapusgame.php');} else
                    if($target=='isigame') {
                        include('isigame.php');} else  

                    if($target=='isiadmin') { // 
                        include('isiadmin.php');} else  
                    if($target=='terimaadmin') { // 
                        include('terimaadmin.php');} else                           
                    
                    if($target=='terimablog') { // 
                        include('terimablog.php');} else
                    if($target=='daftarblog') {
                        include('daftarblog.php');} else
                    if($target=='editblog') {
                        include('editblog.php');} else
                    if($target=='terimaeditblog') {
                        include('terimaeditblog.php');} else                            
                    if($target=='konfirmhapusblog') {
                        include('konfirmhapusblog.php');} else
                    if($target=='hapusblog') {
                        include('hapusblog.php');} else
                    if($target=='isiblog') {
                        include('isiblog.php');} else
                                     
                    if($target=='penjualan') {
                        include('penjualan.php');} else
                    if($target=='detailpembelian') {
                        include('detailpembelian.php');} else
                    if($target=='logout') {
                        include('logout.php');} else    
                    { echo "Belum ada halaman <br>"; }
                    ?>
                
            </div>

            <div class="col-md-2">
                    
            </div>

        </div>

    </div>

    <!-- /.container -->


    <div class="container">

    
    <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-2">

                </div>

                <div class="col-md-8">
                    <center>
                    <p>Copyright &copy; <a href="https://www.facebook.com/GoldieGameStore/" name="Fans Page">Goldie Game Store 2016</a></p>
                    </center>
                </div>

                <div class="col-md-2">

                </div>
            </div>
        </footer>

    <hr>
    </div>
    <!-- /.container -->
			
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>