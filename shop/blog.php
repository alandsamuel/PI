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

	

    <title>Goldie Game Store | Blogpost</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/custombootstrap.css" rel="stylesheet">

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
			<a href="index.php?target=welcome" name="Menu Utama"><b>Home</b></a> |
			<a href="index.php?target=kontak" name="Menu Utama"><b>Hubungi</b></a> |
			<a href="index.php?target=tentang" name="Menu Utama"><b>Tentang</b></a> 
	</div>
	</div>
	<hr>
    
	<div class="container">
	<?php 
	include('carousel.php');
	?>
    </div>
  
	<!-- blogpost -->
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<center>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Sidebar</h3>
				  </div>
				  <div class="panel-body">
				    Ini Sidebar kiri
				  </div>
				</div>
			</div>
			
			<div class="col-md-8">
				
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Blog Post</h3>
				  </div>
				  <div class="panel-body">
				    <?php 
				    if($target=='welcome' or $target== ''){
						include ("genre/blog.php");} else
					if($target=='tentang') {
						include('tentang.php');} else
					if($target=='kontak') {
						include('kontak.php');} else					
					if($target=='terimagame') { // 
						include('terimagame.php');} else					
					if($target=='beliblog') { // form beli
						include('blog.php');} else
					{ echo ""; }
					?>
				  </div>
				</div>
			</div>

			<div class="col-md-2">
				<center>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Sidebar</h3>
				  </div>
				  <div class="panel-body">
				    Ini Sidebar kanan
				  </div>
				</div>
			</div>
    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>