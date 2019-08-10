<html>
<head>
	<title>HALO - Photography Portfolio Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="HALO photography portfolio template">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body>
<!-- Header section start -->
	<header class="header-section sp-pad">
		<h3 class="site-logo">HALO</h3>
		<form class="search-top">
			<button class="se-btn"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.....">
		</form>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
			<ul>
				<li ><a  href="index.php">Home</a></li>
				<li><a href="about.php">About Plastic</a></li>
				<li ><a href="campaign.php">Camapign</a></li>
				<li ><a href="lonp.php">Latest on Plastic</a></li>
				<li class= "active"><a href="strategy.php">Strategy</a></li>
				<li ><a href="contact.php">Contact</a></li>
				<li><a href="donation.php">Donation</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Signup</a></li>
				
			</ul>
			<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
			
			<script type="text/javascript">
				$(document).on('click', 'ul li', function(){
				$(this).addClass('active').siblings().removeClass('active')
			})
			</script>
		</nav>
	</header>
	<!-- Header section end -->

<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/1.jpg">
				<div class="hs-text">
				<div class="container p-0">
				<div class="row">
					<div class="hs-text">
					<h2 class="hs-title">Strategy</h2>
					<p class="hs-des">We Create Awesome <br>Photographies and more</p>
				</div>
					
					
					
				</div>
			</div>
				</div>
			</div>
			
		</div>
	</section>
	
	<?php include 'footer.php';?>
	</html>