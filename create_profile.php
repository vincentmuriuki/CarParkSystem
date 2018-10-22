<?php
// mysql_connect("localhost" ,"root", "");
// mysql_select_db("parking_system");
?>

<html>
<head><title>Create Profile</title></head>
<!-- <link href="style1.css" rel="stylesheet" type="text/css"> -->
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/boot/css/bootstrap.min.css">
<body>
<div class="alignc">
<form name="form" method="post" enctype="multipart/form-data" onSubmit="return(validate());">
<h3 class="h">USER REGISTRATION</h3>
<label>Name<span id="must">*</span></label><input type="text" name="name" class="form-control" required="required" placeholder="max 50 characters">


 <label>Vehicle ID<span id="must">*</span></label><input type="text" name="vehicle_id" class="form-control" required="required">

<br>
 <div class="form-group has-feedback">
        <label>Email<span id="must">*</span></label><input type="email" class="form-control" id="in" name="email"placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	  </div>
 
  
 <label>Password<span id="must">*</span></label><input type="password" name="pass" class="form-control" required="required">
  
 <label>Contact<span id="must">*</span></label><input type="text" name="no" maxlength="10" class="form-control" required="required"></td>
 <label>Address<span id="must">*</span></label><input type="text" name="addr" maxlength="200" class="form-control" required="required"></td>
 <br>
<div class="col-xs-4s">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="submit"value="Sign up">
		  
        </div>
 
 
 <p>Already a Member?Click here to
 <span><a href="user_login.php">Login</a></span></p>
 
 <p>Fields marked with <span id="must">*</span> cannot be blank!<p>
 
 </form> 
 </div>
 </body>
 </html>
 
 <?php
 extract($_POST);
 //$z=MD5($pass);

 if(isset($_POST['go']))
 {
	 	$qry=mysql_query("select vehicle_id from user where '$vehicle_id'=vehicle_id");
 		$num=mysql_num_rows($qry);
		
	    if($num==0){
		extract($_POST); 
	 	 
	$q=mysql_query("insert into user (name,vehicle_id,password,contact_no,address) values ('$name','$vehicle_id','$pass','$no','$addr')");
	 if($q)
	 {		 
		 echo"value entered successfully";

		 if($vehicle_id!="")
		 header("location:index.php");
	 }
 	}	
 }
 
 ?>