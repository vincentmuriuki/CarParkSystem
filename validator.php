
<?php

session_start();
$email= "";
$password= "";

// connect to the database
//include("connection.php");
$conns = new mysqli('localhost', 'root', '','parking_system');

if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conns, $_POST['mail']);
  $password = mysqli_real_escape_string($conns, $_POST['pass']);

  if (empty($email) || empty($password) ) {
  	
  	$_SESSION['error']="All fields are required!";
  }
  else{  	
  	$query = "select * from user where email='$email' AND password='$password'";

  	$results = mysqli_query($conns, $query);
  	$f=mysqli_fetch_array($results);
  	if (mysqli_num_rows($results)==1) {

  	$_SESSION['vehicle_id']=$f['vehicle_id'];
	$_SESSION['user_name']=$f['name'];
	$_SESSION['user_password']=$f['password'];
	$_SESSION['user_contact_no']=$f['contact'];
	$_SESSION['user_address']=$f['address'];
		 	 
  	
  	  header('location:user_profile.php');  	
  }else{echo "wrong!";}
}
}
?>





		
	
