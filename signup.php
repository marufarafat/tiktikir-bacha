<html>
<?php include 'test_signup_action.php';?>


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
				<li><a href="campaign.php">Camapign</a></li>
				<li><a href="lonp.php">Latest on Plastic</a></li>
				<li><a href="strategy.php">Strategy</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="donation.php">Donation</a></li>
				<li><a href="login.php">Login</a></li>
				<li class= active><a href="signup.php">Signup</a></li>
				
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


	<!-- Hero section start -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/1.jpg">
				<div class="hs-text">
				<div class="container p-0">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<form class="contact-form" action="signup.php" method="post">
							<div class="row">
								
								
								
								
								
								
								
								<div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="id" id="id"value="<?php echo $id;?>" placeholder="id" required>
                                    </div>
                                </div>
								
								
								
								
								
								
								
                                    <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input class="form-control item" type="text" name="first_name" pattern="^[a-zA-Z.]*$" id="first_name" value="<?php echo $first_name;?>" placeholder="First Name" required>
										
                                    </div>
                                </div>
								
								<div class="col-12 col-md-6">
                                    <div class="form-group">
									<input class="form-control item" type="text" name="last_name" pattern="^[a-zA-Z.]*$" id="last_name" value="<?php echo $last_name;?>" placeholder="First Name" required>
                                       
                                    </div>
                                </div>
								
								
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" value="<?php echo $email;?>" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone"value="<?php echo $phone;?>" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" cols="30"value="<?php echo $address;?>" placeholder="Address" required></input>
                                    </div>
                                </div>
								<div class="col-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" value="<?php echo $password;?>" placeholder="Password" required></input>
                                    </div>
                                </div>
								<div class="col-6">
                                    <div class="form-group">
                                        <input name="cpassword" type="password" id="cpassword" value="<?php echo $cpassword;?>" placeholder="Confirm password" required></input>
                                    </div>
                                </div>
                               
								<div class="col-xl-8 offset-xl-5">
									<br>
									<br>
									<br>
                                    <button type="submit" name="submit" class="btn-new" >Submit</button>
									
									
                                </div>
                            
                        		
								</div>
								
								
							
						</form>
					</div>
				</div>
			</div>
				</div>
			</div>
			
		</div>
	</section>
	<body>


<?php include 'footer.php';?>

</html>