<!DOCTYPE html>
<html>
<head>
	<title>test for carousel slider</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	<header>
		<nav id='cssmenu'>
			<div class="logo"><a href="index.html">PromoNG </a></div>
			<div id="head-mobile"></div>
			<div class="button"></div>
			<ul class="topnav-centered">
				<li class='active'><a href='#'>HOME</a></li>
				<li><a href='#'>ABOUT</a></li>
				<li><a href='#'>CONTACT</a></li>
			</ul>
		</nav>
	</header>

	<style type="text/css">
		div .item {
			height: 60vh;
			position: relative;
		}
		div .item img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		div .item .cover {
			padding: 75px 0;
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background: rgba(0, 0, 0, 0.6);
			display: flex;
			align-items: center;
		}
		div .item .cover .header-content {
			position: relative;
			padding: 56px;
			overflow: hidden;
		}
		div .item .cover .header-content .line {
			content: "";
			display: inline-block;
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			position: absolute;
			border: 9px solid #fff;
			-webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
			clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
		}
		div .item .cover .header-content h2 {
			font-weight: 300;
			font-size: 35px;
			color: #fff;
		}
		div .item .cover .header-content h1 {
			font-size: 56px;
			font-weight: 600;
			margin: 5px 0 20px;
			word-spacing: 3px;
			color: #fff;
		}
		div .item .cover .header-content h4 {
			font-size: 24px;
			font-weight: 300;
			line-height: 36px;
			color: #fff;
		}
		div .owl-item.active h1 {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
			animation-name: fadeInDown;
			animation-delay: 0.3s;
		}
		div .owl-item.active h2 {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
			animation-name: fadeInDown;
			animation-delay: 0.3s;
		}
		div .owl-item.active h4 {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
			animation-name: fadeInUp;
			animation-delay: 0.3s;
		}
		div .owl-item.active .line {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
			animation-name: fadeInLeft;
			animation-delay: 0.3s;
		}
		div .owl-nav .owl-prev {
			position: absolute;
			left: 15px;
			top: 43%;
			opacity: 0;
			-webkit-transition: all 0.4s ease-out;
			transition: all 0.4s ease-out;
			background: rgba(0, 0, 0, 0.5) !important;
			width: 40px;
			cursor: pointer;
			height: 40px;
			position: absolute;
			display: block;
			z-index: 1000;
			border-radius: 0;
		}
		div .owl-nav .owl-prev span {
			font-size: 1.6875rem;
			color: #fff;
		}
		div .owl-nav .owl-prev:focus {
			outline: 0;
		}
		div .owl-nav .owl-prev:hover {
			background: #000 !important;
		}
		div .owl-nav .owl-next {
			position: absolute;
			right: 15px;
			top: 43%;
			opacity: 0;
			-webkit-transition: all 0.4s ease-out;
			transition: all 0.4s ease-out;
			background: rgba(0, 0, 0, 0.5) !important;
			width: 40px;
			cursor: pointer;
			height: 40px;
			position: absolute;
			display: block;
			z-index: 1000;
			border-radius: 0;
		}
		div .owl-nav .owl-next span {
			font-size: 1.6875rem;
			color: #fff;
		}
		div .owl-nav .owl-next:focus {
			outline: 0;
		}
		div .owl-nav .owl-next:hover {
			background: #000 !important;
		}
		div:hover .owl-prev {
			left: 0px;
			opacity: 1;
		}
		div:hover .owl-next {
			right: 0px;
			opacity: 1;
		}
	</style>


	<div class="module top">
  <h2>Skyscrapers</h2>
</div>

<div class="module mid">
  <h2>Skyscrapers</h2>
</div>

<br style="clear: both;">

<div class="module cap">
  <p>Skyscraper are really neat and stuff because they are tall.</p>
</div>

<div class="module lr">
  <p>Skyscrapers sometimes have nicknames like jim or shim.</p>
</div>

	


	<div>
		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="https://cdn.pixabay.com/photo/2017/10/24/10/30/business-2884023_960_720.jpg" alt="images not found">
				<div class="cover">
					<div class="container">
						<div class="header-content">
							<div class="line"></div>
							<h2>Teimagine Digital Experience with</h2>
							<h1>Start-ups and solutions</h1>
							<h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
						</div>
					</div>
				</div>
			</div>                    

		</div>
	</div>



	<div class="header-img" >		
		<img class="" src="images/193468.jpg" >					
	</div>
	<div class="container-color" >
		<div class="main-middle" >
			<div class="boxed-flap" >
				<div class="boxed-flap-header" >
					
				</div>
			</div>
		</div>
	</div>

	<!-- footer started -->
	<!-- Site footer -->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6>About</h6>
					<p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>Categories</h6>
					<ul class="footer-links">
						<li><a href="http://scanfcode.com/category/c-language/">C</a></li>
						<li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
						<li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
						<li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
						<li><a href="http://scanfcode.com/category/android/">Android</a></li>
						<li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
					</ul>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>Quick Links</h6>
					<ul class="footer-links">
						<li><a href="http://scanfcode.com/about/">About Us</a></li>
						<li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
						<li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
						<li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
						<li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
					</ul>
				</div>
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
						<a href="#">Scanfcode</a>.
					</p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<ul class="social-icons">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer ended -->

	<script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/nav.min.js" ></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>