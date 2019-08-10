
<html lang="en">
<head>
	<title>Plastic Pollution</title>
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
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

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
				<li><a href="campaign.php">Camapign</a></li>
				<li><a href="lonp.php">Latest on Plastic</a></li>
				<li><a href="strategy.php">Strategy</a></li>
				<li ><a href="contact.php">Contact Us</a></li>
				<li><a href="donation.php">Donation</a></li>
				<li class= active><a href="help.php">How To Help</a></li>
				<li><a href="login.php">Login</a></li>
				
				
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
	<body>
			<section class="contact-section set-bg spad" data-setbg="img/contact-bg.jpg">
		<div class="container-fluid contact-warp">
			<div class="contact-text">
				<div class="container p-0">
					<span class="sp-sub-title">Help</span>
					<h3 class="sp-title">How We Help</h3>
					<p>You can send us your query then we will try solve your query as soon as possible by our experts. Your query is really important to us. <br>Thank you. </p>
					</div>
			</div>
			<div class="container p-0">
				<div class="row">
					<div class="col-xl-8 offset-xl-4">
						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="delete Your name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="delete E-mail">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn light">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	  
	
	</body>
	
	<?php include 'footer.php';?>
	
	</html>
	