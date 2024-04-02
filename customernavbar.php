<?php
				ini_set('display_errors', 0); 
				include("database.php");
				
				$email=$_GET['email'];

				$cusid=$rows['cusid'];
				
				$sqltwo="select username from userdetails where useremail='".$email."' ";
				$result= mysqli_query($con, $sqltwo);
				$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	
<style>	
@media only screen and (min-device-width : 600px){
.loginbutton{
	margin:0% 0 0% 140%;
}	
}
@media only screen and (min-device-width :0px) and (max-device-width :575px) {
.navbar-toggler{
	margin:0% 3% 0 75%;
}	
li{
	margin-left:8%;
}
.navbar-toggler-icon{
	font-size:10px;
}
.bttnn{
	margin-top:1%;
}
}
</style>
</head>
<body>
<div>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#0096FF;border-radius:0px;">
		<div class="d-flex">
		<button class="btn btn-sm text-white py-2 px-4 ms-3 h-100 d-flex" style="background-color:#4db34d;font-family: 'Poppins', sans-serif;"><img src="images/user-icon.png" width="22px" height="22px">&nbsp;<?php echo $row['username']; ?></button>

	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
			<span class="navbar-toggler-icon "></span>
	    </button>
		</div>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item ">
				<a class="nav-link text-white" href="index.php" style="font-family: 'Poppins', sans-serif;">Home </a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="about.php" style="font-family: 'Poppins', sans-serif;">About</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="service.php" style="font-family: 'Poppins', sans-serif;">Services</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="contact.php" style="font-family: 'Poppins', sans-serif;">Contact</a>
			  </li>

			  <!--li class="">
				<button class="btn btn-sm text-white py-2 px-4 ms-3 h-100" style="background-color:#4db34d;font-family: 'Poppins', sans-serif;">Welcome&nbsp;<?php echo $row['username']; ?></button>
			  </li-->
		  <li class="bttnn loginbutton">
				<a href="customersetting.php?email=<?php echo $email; ?>" class="btn btn-sm text-white py-2 px-4 ms-3 h-100" style="background-color:#4db34d;font-family: 'Poppins', sans-serif;">Setting</a>
			  </li>
		  <li class="bttnn">
				<a href="logout.php?email=<?php echo $email; ?>" class="btn btn-sm text-white py-2 px-4 ms-3 h-100" style="background-color:#4db34d;font-family: 'Poppins', sans-serif;">Log&nbsp;Out</a>
			  </li>
			</ul>
		  </div>
</nav>
</div>
</body>
</html>
