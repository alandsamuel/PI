<?php
session_start();
error_reporting(0);
$target = $_GET['target'];
?>
<!doctype html>

<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Goldie Game Store - HomePage</title>
		<meta name="description" content="Welcome To Goldie Game Store">
		<meta name="keywords" content="Game, Golidie, Steam, origin, Games, sale" />
        <link rel="shortcut icon" href="img/icon.png" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css"> <!-- load owl css -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css"> <!-- load owl css -->

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css"> <!-- load reset css -->
		<link rel="stylesheet" href="css/style.css"> <!-- load style css -->
		<link rel="stylesheet" href="css/mobile.css"> <!-- load css mobile -->

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin/cool-gray.css">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="index.html">Unika</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="body">Home</a></li>
                            <li><a class="page-scroll" href="#about">about</a></li>
                            <li><a class="page-scroll" href="#services">Services</a></li>                         
                            <li><a class="page-scroll" href="#testimonial">Reviews</a></li>
                            <li><a class="page-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.jpg);">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1>Goldie Game Store</h1>
								<p>Menyediakan Jasa Pembelian Steam</p>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="home.php" target="_blank" role="button">View More!</a>
							</div>
							<div class="item">
								<h1>Goldie Game Store</h1>
								<p>Menyediakan Jasa Pembelian Origin</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="home.php" target="_blank" role="button">View More!</a>
							</div>
							<div class="item">
								<h1>Goldie Game Store</h1>
								<p>Menyediakan Jasa Pembelian Bundle-Bundle</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="home.php" target="_blank" role="button">View More!</a>
							</displayv>
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                <div class="extra-space-l"></div>


             <!-- Begin about section -->
            <section id="about">
            <br>
            <br>
            <br>
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>About Us</h2>
                            <div class="devider"></div>
                            <p class="subtitle">What We Are</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="container">
                    <center>
                    <p>Goldie Game Store, menyediakan jasa pembelian game dari Steam.</br>
                    Open Hours : 09.00-21.00</br></br>
                </div>
                
            </section>
            <!-- End social section -->
                
                             
              
              
            <!-- Begin Services -->
            <section id="services" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Services</h2>
                            <div class="devider"></div>
                            <p class="subtitle">what we really know how</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <!-- Begin roatet box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-8">
                                <a href="home.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-key"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Game Key</h4>
                                        <p>Kami Menyediakan Bermacam-macam game key dari berbagai publisher</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-4 col-sm-8">
                                <a href="home.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa Example of cubes fa-cubes"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Bundle Game</h4>
                                        <p>Jasa untuk membeli bermacam-macam bundle, dari humblebundle, indiegala, dll.</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-4 col-sm-8">
                                <a href="home.php" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-gift"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Gift Game</h4>
                                        <p>Kami juga menyediakan game yang di gift langsung dari store (Steam)</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    
                    <div class="container">
                        <!-- Cta Button -->
                        <div class="extra-space-l"></div>
                        <div class="text-center">
                    		<a class="btn btn-default btn-lg-xl" href="home.php" target="_blank" role="button">See What We Got !!</a>
                        </div>
                    </div> <!-- /.container -->                       
                </div>
                <!-- End rotate-box-2 -->
            </section>
            <!-- End Services -->
              
              
              
              
            <!-- Begin testimonials -->
            <section id="testimonial">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
                    <div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Reviews</h2>
                                <div class="devider"></div>
                                <p class="subtitle">What people say about us</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    <div class="container">
                        <div class="testimonial-inner center-block text-center">
                            <div id="owl-testimonial" class="owl-carousel">
                                <div class="item">
                                    <blockquote>
                                        <p>"Signatured by Aiko 'hakunamatata' Warren :) trusted seller !".</p>
                                        <footer><cite title="Source Title"><a href="http://steamcommunity.com/id/alandsamueltiwa/">Aiko Warren</a></cite></footer>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>"+Rep Great trader. Quick, smooth transaction. Recommended!"</p>
                                        <footer><cite title="Source Title"><a href="http://steamcommunity.com/id/alandsamueltiwa/">Taotio</a></cite></footer>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>"+rep orangnya ganteng dan terpercaya".</p>
                                        <footer><cite title="Source Title"><a href="http://steamcommunity.com/id/alandsamueltiwa/">Ade Wijaya</a></cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End testimonials -->
                <br>
                <br>
            <!-- Begin social section -->
			<section id="social">
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Join Us</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Follow us on social networks</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="container">
                	<ul class="social-list">
                		<li> <a href="https://www.facebook.com/GoldieGameStore" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                		<li> <a href="http://twitter.com/GoldieGS" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon"><i class="fa fa-twitter"></i></span></a></li>                    
                    </ul>
                </div>
                
            </section>
            <!-- End social section -->
                
                <br>
                <br>
                
                
            <!-- Begin contact section -->
			<section id="contact" class="page parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contacts</h2>
                            <div class="devider"></div>
                            <p class="subtitle">All to contact us</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Our Address</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-phone"></i>&nbsp; +62-877-187-91-005</li>
                                        <li><i class="fa fa-phone"></i> whatsapp : +62-877-187-91-005</li>
			                            <li><i class="fa fa-phone"></i> line : aland_samuel</li>
                                        <li><i class="fa fa-envelope"></i> aland_samuel@yahoo.com</li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.6345132240535!2d106.84229307888687!3d-6.359214998975072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjEnMzMuMiJTIDEwNsKwNTAnMzYuMCJF!5e0!3m2!1sen!2sid!4v1469871461768" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2016 - Aland Samuel Tiwa, Credit : UniKa</div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop" alt="back to surface"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body> 
        
            
</html>
	