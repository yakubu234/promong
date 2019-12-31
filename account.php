<!DOCTYPE html>
<html>
<head>
	<title>promo tours homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	<header class="col-sm-12">
		<nav id='cssmenu'>
			<div class="logo"><a href="index.html">PromoNG </a></div>
			<div id="head-mobile"></div>
			<div class="button"></div>
			<ul class="topnav-centered">
				<li ><a href='index.php'>HOME</a></li>
				<li><a href='about.php'>ABOUT</a></li>
				<li  ><a href='contact.php'>CONTACT</a></li>
				<li class='active' ><a href='account.php'>ACCOUNTS</a></li>
					<li><a href='company.php'>COMPANY</a></li>
			</ul>
		</nav>
	</header>
	
	<!-- the call to action and all its family -->
	<div class="sectiion-before-contact" >
		<div class="sectiion-before-contact-cover" >
			<div class="col-md-12 section-two-contact" >
				<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

				<div class="container-contact">
					<div class="frame">
						<div class="nav">
							<ul class="links">
								<li class="signin-active"><a class="btn">Sign in</a></li>
								<li class="signup-inactive"><a class="btn">Create Account </a></li>
							</ul>
						</div>
						<div ng-app ng-init="checked = false">
							<form class="form-signin" action="" method="post" name="form">
								<label for="username">Username</label>
								<input class="form-styling" type="text" name="username" placeholder=""/>
								<label for="password">Password</label>
								<input class="form-styling" type="text" name="password" placeholder=""/>
								<input type="checkbox" id="checkbox"/>
								<label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
								<div class="btn-animate">
									<a class="btn-signin">Sign in</a>
								</div>
							</form>

							<form class="form-signup" action="" method="post" name="form">
								<label for="fullname">Full name</label>
								<input class="form-styling" type="text" name="fullname" placeholder=""/>
								<label for="email">Email</label>
								<input class="form-styling" type="text" name="email" placeholder=""/>
								<label for="password">Password</label>
								<input class="form-styling" type="text" name="password" placeholder=""/>
								<label for="confirmpassword">Confirm password</label>
								<input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
								<a ng-click="checked = !checked" class="btn-signup">Sign Up</a>
							</form>

							<div  class="success">
								<svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
								<path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
								c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
								c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
								<div class="successtext">
									<p> Thanks for signing up! Check your email for confirmation.</p>
								</div>
							</div>
						</div>

						<div class="forgot">
							<a href="#">Forgot your password?</a>
						</div>

						<div>
							<div class="cover-photo"></div>
							<div class="profile-photo"></div>
							<h1 class="welcome">Welcome, Chris</h1>
							<a class="btn-goback" value="Refresh" onClick="history.go()">Go back</a>
						</div>
					</div>

					<a id="refresh" value="Refresh" onClick="history.go()">
						<svg class="refreshicon"   version="1.1" id="Capa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;"
						xml:space="preserve">
						<path  d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224
						c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5
						c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5
						c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025
						c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614
						l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z"/>
					</svg>
				</a>
			</div>

		</div>
	</div>
</div>
<!-- the call to action and all its family ended -->
<!-- footer started -->
<!-- Site footer -->
<footer class="site-footer">
	<div class="container">
		<!-- <div class="row">
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
		</div> -->
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
<script type="text/javascript">
	$(function() {
	$(".btn").click(function() {
		$(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".frame").toggleClass("frame-long");
    $(".signup-inactive").toggleClass("signup-active");
    $(".signin-active").toggleClass("signin-inactive");
    $(".forgot").toggleClass("forgot-left");   
    $(this).removeClass("idle").addClass("active");
	});
});

$(function() {
	$(".btn-signup").click(function() {
  $(".nav").toggleClass("nav-up");
  $(".form-signup-left").toggleClass("form-signup-down");
  $(".success").toggleClass("success-left"); 
  $(".frame").toggleClass("frame-short");
	});
});

$(function() {
	$(".btn-signin").click(function() {
  $(".btn-animate").toggleClass("btn-animate-grow");
  $(".welcome").toggleClass("welcome-left");
  $(".cover-photo").toggleClass("cover-photo-down");
  $(".frame").toggleClass("frame-short");
  $(".profile-photo").toggleClass("profile-photo-down");
  $(".btn-goback").toggleClass("btn-goback-up");
  $(".forgot").toggleClass("forgot-fade");
	});
});
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>