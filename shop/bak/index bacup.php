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
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=138230682879266";
		  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <title>Goldie Game Store </title>
	
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Header -->
		

    <!-- Navigation -->
	
	
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everyting">
				Goldie Game Store
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?target=tentang">Tentang</a>
                    </li>                    
                    <li>
                        <a href="index.php?target=kontak">Kontak</a>
                    </li>
					<li>
						<a href="index.php?target=discord">Chat with us</a>
                </ul>
          </ul>
        </li>
      </ul>
	  </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


	
    <!-- Page Content -->
    <div class="container">
		<?php
		include('jumbotron.php');
		?>
		</br>
        <div class="row">
			<div class="col-md-1">
				
			</div>
            <div class="col-sm-1 col-sm-5 col-xs-12">
                <p class="lead" align="center">Categories</img></p>
                <div class="list-group">
				<?php
					echo "
						<a href='index.php?target=welcome' class='list-group-item'>Home</a>
						<a href='index.php?target=newadded' class='list-group-item'>New Added</a>
						<a href='index.php?target=fps' class='list-group-item'>FPS</a>	
						<a href='index.php?target=rpg' class='list-group-item'>RPG</a>
						<a href='index.php?target=strategy' class='list-group-item'>Straregy</a>
						<a href='index.php?target=simulation' class='list-group-item'>Simulation</a>
						<a href='index.php?target=racing' class='list-group-item'>Racing</a>
						<a href='index.php?target=sports' class='list-group-item'>Sports</a>
						";
					?>
					<br />
					
					
                </div>
            </div>

            <div class="col-md-7">
					
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
						include('genre/sports.php');} 
					if($target=='tentang') {
						include('tentang.php');} else
					if($target=='kontak') {
						include('kontak.php');} else					
					if($target=='terimalogin') { // proses setelah login
						include('terimalogin.php');} else
					if($target=='terimagame') { // 
						include('terimagame.php');} else					
					if($target=='beligame') { // form beli
						include('beligame.php');} else
					if($target=='terimabeli') { // proses setelah user membeli
						include('terimabeli.php');} else
					if($target=='inputpembeli') {
						include('inputpembeli.php');} else
					if($target=='selesaibeli') {
						include('selesaibeli.php');} else					
					if($target=='isigame') {
						include('isigame.php');} else	
					if($target=='cetakgame') {
						include('cetakgame.php');} else	
					if($target=='penjualan') {
						include('penjualan.php');} else
					if($target=='logout') {
						include('logout.php');}else	
					{ echo ""; }
					?>

            </div>
			<div class="col-md-3">
			
			</div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="index.php?target=login">Aland Samuel Tiwa</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
			
    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>