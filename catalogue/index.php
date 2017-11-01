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
    <meta name="description" content="Website penjual game original steam">
    <meta name="author" content="Aland Samuel Tiwa">
	<link rel="shortcut icon" href="img/icon.png" />
	
	<?php include('api.php'); ?>

	

    <title>Goldie Game Store | Catalogue</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">
	
	<!-- Carousel CSS -->
	<link href="assets/css/carousel.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
	<div id="menu-atas">
	<div id="atas">
		<div class="logo">
			<a href="http://goldiegamestore.ga/" name="menu utama"><img src="img/logo.png" height="100" width="100" /></a> &nbsp;
			<a href="http://goldiegamestore.ga/index.php?target=welcome" name="Menu Utama"><b>Home</b></a> |
			<a href="http://goldiegamestore.ga/index.php#contact-section" name="Menu Utama"><b>Hubungi</b></a> |
			<a href="http://goldiegamestore.ga/index.php#about-section" name="Menu Utama"><b>Tentang</b></a> 
	</div>
	</div>
	<hr>
    <!-- Page Content -->
    <div class="container">
	<?php
		include('jumbotron.php');
		?>
		
        <div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-1">
				<p class="lead" align="center">Categories</img></p>
                <div class="list-group">
				<?php
					echo "
						<a href='home.php?target=welcome' class='list-group-item'>Home</a>
						<a href='home.php?target=newadded' class='list-group-item'>New Added</a>
						<a href='home.php?target=fps' class='list-group-item'>FPS</a>	
						<a href='home.php?target=rpg' class='list-group-item'>RPG</a>
						<a href='home.php?target=strategy' class='list-group-item'>Straregy</a>
						<a href='home.php?target=simulation' class='list-group-item'>Simulation</a>
						<a href='home.php?target=racing' class='list-group-item'>Racing</a>
						<a href='home.php?target=sports' class='list-group-item'>Sports</a>
						";
					?>
					<br />
                </div>
            </div>

            <div class="col-md-7">
			  <div class="panel panel-default">
					  <div class="panel-heading">
					  	<?php
					  	if($target=='welcome' or $target== ''){
						echo 'Welcome';} else
						if($target=='newadded'){
						echo 'Newly Added';} else
						if($target=='fps'){ // menampilkan kategori
						echo 'First Person Shooter';} else
						if($target=='rpg') {
						echo 'Role Playing Game';} else
						if($target=='strategy') {
						echo 'Straegy';} else					
						if($target=='simulation') { 
						echo 'Simulation';} else
						if($target=='racing') { // 
						echo 'Racing';} else					
						if($target=='sports') { 
						echo 'Sports';} else
						if($target=='tentang') {
						echo 'Tentang';} else
						if($target=='kontak') {
						echo 'Kontak';} else										
						if($target=='beligame') { // form beli
						echo 'Form Pembelian';} else
						if($target=='terimabeli') { // proses setelah user membeli
						echo 'Keranjang';} else
						if($target=='inputpembeli') {
						echo 'Isi data di bawah ini';} else
						if($target=='selesaibeli') {
						echo 'Terima Kasih';} else
					{ echo ""; }
					  	?>
					  </div>
					  <div class="panel-body">

					
					<?php
					if($target=='welcome' or $target== ''){
						include ("facebookplugins.php");} else
					if($target=='newadded'){
						include('genre/newadded.php');} else
					if($target=='discord'){
						include('discordplugins.php');} else
					if($target=='fps'){ // menampilkan kategori
						include('genre/fps.php');} else
					if($target=='rpg') {
						include('genre/rpg.php');} else
					if($target=='strategy') {
						include('genre/strategy.php');} else					
					if($target=='simulation') { 
						include('genre/simulation.php');} else
					if($target=='racing') { // 
						include('genre/racing.php');} else					
					if($target=='sports') { 
						include('genre/sports.php');} else
					if($target=='tentang') {
						include('tentang.php');} else
					if($target=='kontak') {
						include('kontak.php');} else										
					if($target=='beligame') { // form beli
						include('beligame.php');} else
					if($target=='terimabeli') { // proses setelah user membeli
						include('terimabeli.php');} else
					if($target=='inputpembeli') {
						include('inputpembeli.php');} else
					if($target=='selesaibeli') {
						include('selesaibeli.php');} else
					{ echo ""; }
					?>
					
					  </div>
				</div>
            </div>
			
			<div class="col-md-2">
					<?php
					if($target=='welcome' or $target== ''){
						include('lastestitem.php');} else
						{ echo ""; }
					?>
			</div>
			
			<div class="col-sm-1">
		</div>

        </div>

    </div>
    <!-- /.container -->
    <!-- /.container -->

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>