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
				<li class="active" ><a  href="videos.php">Home</a></li>
				<li><a href="about.php">About Plastic
				 <span></span><span></span><span></span><span></span>
				</a></li>
				<li><a href="campaign.php">Camapign</a></li>
				<li><a href="lonp.php">Latest on Plastic</a></li>
				<li><a href="strategy.php">Strategy</a></li>
				<li><a href="contact.php">Contact Us</a></li>
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

<body>
	<!-- Hero section start -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/1.jpg">
				<div class="hs-text">
					 <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="blog-posts-area">
							<?php
								$i = 0;
								$query = "select * from video";
							$run = mysqli_query($conn,$query);
							
								
								if (!$query) {
								printf("Error: %s\n", mysqli_error($conn));
								exit();
								}
								error_reporting(0);
								while($row = mysqli_fetch_array($run)){
								$i++;					  
							 ?>

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title"><?php echo $row['video_title'];?></h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><?php echo $row['video_category'];?></a>
                                </div>
                                <div class="post-thumbnail mb-30">
								<div class="col-12">
									<div class="alazea-video-area bg-overlay mb-100">
                                        <iframe width="700" height="360" src="https://www.youtube.com/embed/<?php echo str_replace('https://youtu.be/', '', $row['video_link']);?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
								</div>
                                </div>
                            </div>
                        </div>
							<?php }?>
                        <!-- Post Tags & Share -->
                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <form action="#" method="get" class="search-form">
                                <input type="search" name="search" id="widgetSearch" placeholder="Search...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </form>
                        </div>

                       
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
				</div>
			</div>
			
		</div>
	</section>
	
	
	  <!-- ##### Breadcrumb Area Start ##### -->
  
    <!-- ##### Breadcrumb Area End ##### -->

   
	
</body>



  
    <!-- ##### Blog Content Area End ##### -->

<?php include 'footer.php';?>
