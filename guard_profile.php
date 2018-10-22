<?php
include("connection.php");
session_start();
$name=$_SESSION['guard_name'];
if($name=="")
// header("location:guard_login.php");
$email=$_SESSION['email'];
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
<!-- <h1 align="center">WELCOME<br><?php echo $name?></h1><br>
<a href="logout.php"><input type ="button" name ="logout" value="LOGOUT"></a><br><br>
<a href="collect_fare.php"><input type ="button" name ="collect" value="Collect Fare"></a>
<hr>

<h2 align="center">Available Spaces</h2> -->
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

<?php 

	$q=mysql_query("select * from space order by s_n asc");
	$num=mysql_num_rows($q);
	
	if($num>0)
	{
?>

<table id="report" align="center" cellpadding = "5">
        <tr>
            <th>S.No</th>
            <th>Space Id</th>
            <th>Status</th>
        </tr>
        <?php 
		$i=1;
		while($f=mysql_fetch_array($q))
		{
			$temp=$f['status'];
			if($temp==0)
			{
		?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $f['space_id']; ?></td>
            <td><?php echo 'Vacant'; ?></td>
        </tr>
        <tr>
            <td colspan="3">
                <ul>
                    <li><a href="reserve_parking.php?space_id=<?php echo $f['space_id']; ?>"><input type="button" name="reserve" value="RESERVE PARKING" /></a></li>
                 </ul>   
            </td>
        </tr>
        <?php
		$i++;
			}
	 	}
		?> -->
        


<?php

}
?>
    </table>
 </form>
 
</body>

</html>