<?php
// if (isset($_POST['login']))
// {
// 	extract($_POST);
// 	mysql_connect("localhost" ,"root", "");
// 	mysql_select_db("parking_system");
	
// 	$p=mysql_query("select * from guard_login where id='$username' AND password='$password'");
// 	$q=mysql_num_rows($p);
	
// 	if($q>0)
// 	{
// 		$f=mysql_fetch_array($p);
// 		session_start();
// 		$_SESSION['guard_id']=$f['id'];
// 		$_SESSION['guard_name']=$f['name'];
// 		$_SESSION['guard_password']=$f['password'];
// 		$_SESSION['guard_contact_no']=$f['contact_no'];
// 		$_SESSION['guard_address']=$f['address'];
// 		header("location:guard_profile.php");
// 	}
	
// 	else echo"<h2>invalid username or password.</h2>";	
// }
// ?>
<?php
session_start();
$email = "";
$password = "";

//Database conection
$conn = new mysqli('localhost', 'root', '', 'parking_system');

if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn, $_POST['mail']);
	$password = mysqli_real_escape_string($conn, $_POST['pass']);

	if (empty($email) || empty($password)) {
		$_SESSION['error']="All fields are required";
	}
	else{
		$query = "SELECT * FROM guard_login WHERE email='$email' AND password='$password'";
		$results = mysqli_query($conn, $query);
		$f=mysqli_fetch_array($results);
		if (mysqli_num_rows($results)==1){
			$_SESSION['user_name']=$f['name'];
			$_SESSION['guard_password']=$f['password'];
			$_SESSION['guard_contact_no']=$f['contact'];
			$_SESSION['guard_address']=$f['address'];

			header('location:guard_profile.php');

		}else{
			echo "<script>window.alert('Wrong login details');</script>";
		}
	}
}
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

	</head>
<body>
<!-- <a href="index.php" ><input type ="button" name ="index" value="BACK"></a><br><br><br> -->
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
							<li class="btn-cta"><a href="user_login.php"><span>Login</span></a></li>
							<li class="btn-cta"><a href="create_profile.php"><span>Sign Up</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>


<form method="POST" >

<table align="center">

<!-- <tr>
<td><b>Login</b><br>
<br>Username
<input type="text" name ="username" required>
<br><br>Password&nbsp;
<input type="password" name="password" required>
<br><br><input type ="submit" name ="login" value="Login">
</td>
</tr>
</table>
<br><br><br><br>




</form></body></html> -->



 <!-- </script> -->
 <form action="user_login.php" method="POST" >



<div class="alignc">
<!-- <div class="h"><legend>Returning Customer? Login below!</legend></div> -->
<br><br>

<div class="form-group has-feedback">
        <label>Username:</label><input type="email" class="form-control" id="in" name="mail"placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	  </div>
	  <br>

      <div class="form-group has-feedback">
	  <label>Password:</label><input type="password" class="form-control" id="in2" name="pass"placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="submit"value="Sign in" onclick="myFunction()">
        </div>
        <!-- /.col -->
	  </div>
	  <br>
	  <div>
	  <p>Don't have an account ! Register.</p>
	  <span><a href="create_profile.php">Create Account</a></span>
</div>
</div>
</form>
 


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
</body></html>