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

	

    <title>Goldie Game Store | Home Page</title>
	
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
			<a href="index.php" name="menu utama"><img src="img/logo.png" height="100" width="100" /></a> &nbsp;
			<a href="index.php" name="Menu Utama"><b>Home</b></a> |
			<a href="index.php?target=kontak" name="Kontak"><b>Hubungi</b></a> |
			<a href="index.php?target=tentang" name="Tentang"><b>Tentang</b></a>
	</div>
	</div>
	<hr>
    
<div class="container">
	<?php 
	include('carousel.php');
	?>
	<hr>
	<center>
    <div class="menu" id="nav">
	<ul>
		<a href="index.php?target=welcome"><li><b>Home</li></a>
    	<a href="home.php"><li>Catalogue</li></a>
    	<a href="https://www.facebook.com/GoldieGameStore/"><li>Facebook</li></a>
    	<a href="https://twitter.com/GoldieGStore"><li>Twitter</li></b></a>
	</ul>
	</div>
</center>
</div>
<div class="container">
	<hr>
</div>

<div class="container">
	<div class="col-md-2">

	</div>

	<div class="col-md-8">
		<?php 
				if($target=='welcome' or $target== ''){
					} else
		    	if($target=='kontak') {
						include('kontak.php');} else
				if($target=='tentang') {
						include('Tentang.php');}else	
					{ echo "ERROR 404, Contact Admin For More Info"; }
				?>	
	</div>

	<div class="col-md-2">

	</div>
</div>



    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>