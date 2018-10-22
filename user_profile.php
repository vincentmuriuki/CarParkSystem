
<?php
include('connection.php');
session_start();
$name=$_SESSION['user_name'];
if($name===""){
header("location:user_login.php");}
$vehicle_id=$_SESSION['vehicle_id'];
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Parking Management &mdash; We make it efficient for you to park your car</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="We make it efficient for you to park your car" />
	<meta name="keywords" content="parking, security" />
	<meta name="author" content="Vinc" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="new/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="new/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="new/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="new/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="new/css/owl.carousel.min.css">
	<link rel="stylesheet" href="new/css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="new/css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="new/css/style.css">

	<!-- Modernizr JS -->
	<script src="new/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="tt/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tt/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tt/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tt/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tt/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tt/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="tt/css/util.css">
	<link rel="stylesheet" type="text/css" href="tt/css/main.css">
<!--===============================================================================================-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html">Parking<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="#"></a>About</li>
							<li><a href="user_login.php">Available Slots</a></li>
							<li class="has-dropdown">
								<a href="#">Extra Services</a>
								<ul class="dropdown">
									<li><a href="#">Car Wash</a></li>
									<li><a href="#">Painting</a></li>
									<li><a href="#">Front Check</a></li>
									<li><a href="#">Servicing</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="admin_login.php">Admin</a></li>
							<li class="btn-cta"><a href="logout.php"><span>Logout</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(cars.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner">
							   <?php

?>
<?php
$p=mysqli_query($conn,"select * from reservation where vehicle_id='$vehicle_id'");
$q=mysqli_num_rows($p);
if($q==0)
	echo "You have <b>Not</b> parked your vehicle";
else
{

	//$no=mysql_query("select MAX(s_n) from reservation where vehicle_id='$vehicle_id'");
	$r=mysqli_query($conn,"select * from reservation where vehicle_id='$vehicle_id' ");

	
}
?>
<br>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
							<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Vehicle ID</th>
								<th class="column100 column3" data-column="column3">Date IN</th>
								<th class="column100 column4" data-column="column4">Time In</th>
								<th class="column100 column5" data-column="column5">Fee</th>
							</tr>
						</thead>
						<tbody>
						<?php
				
				while ($s = mysqli_fetch_array($r))
			{
			
				echo '<tr>
						<td>Vincent</td>
						<td>'.$s['vehicle_id'].'</td>
						<td>'.$s['fee'].'</td>
						<td>'.$s['entry_date'].'</td>
						<td>'. $s['entry_time']. '</td>
									
					</tr>';
				
			}?>
						</tbody>
					</table>
				</div>


									
									<!-- <p><a class="btn btn-primary btn-lg" href="create_profile.php">Book a Slot</a></p> -->
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>

		<div id="fh5co-counter" class="fh5co-counters fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="icon-user"></i></span>
					<span class="fh5co-counter js-counter" data-from="0" data-to="27539" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Satisfied Clients</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="icon-speech-bubble"></i></span>
					<span class="fh5co-counter js-counter" data-from="0" data-to="23563" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Cases Won</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="icon-trophy"></i></span>
					<span class="fh5co-counter js-counter" data-from="0" data-to="5067" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Awards Won</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="icon"><i class="icon-users"></i></span>
					<span class="fh5co-counter js-counter" data-from="0" data-to="2587" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Lawyers</span>
				</div>
			</div>
		</div>
	</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#" target="_blank">Parking Management</small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="new/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="new/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="new/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="new/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="new/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="new/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="new/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="new/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="new/js/jquery.magnific-popup.min.js"></script>
	<script src="new/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="new/js/main.js"></script>
	<!--===============================================================================================-->	
	<script src="tt/vendor/jquery/jquery-3.2</body>
</html>.1.min.js"></script>
<!--===============================================================================================-->
	<script src="tt/vendor/bootstrap/js/popper.js"></script>
	<script src="tt/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="tt/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="tt/js/main.js"></script>

	</body>
</html>

