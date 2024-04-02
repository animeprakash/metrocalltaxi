<?php
			ini_set('display_errors', 0); 
            include("database.php");
			$trip=$_GET['trip'];
            $sourcecity=$_GET['sourcecity'];
            $destinationcity=$_GET['destinationcity'];
			$fromdate=$_GET['fromdate'];
			$todate=$_GET['todate'];
            $fromtime=$_GET['fromtime'];
			$airporttrip=$_GET['airporttrip'];
			$airportaddress=$_GET['airportaddress'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	
<style>	
@media only screen and (min-device-width : 600px){
.loginbutton{
	margin:0% 0 0% 200%;
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
}
</style>
</head>
<body>
<div>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#0096FF;border-radius:0px;">
		<a class="navbar-brand" href=""></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon "></span>
	    </button>

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
			  <li class="loginbutton">
				<a href="loginpage.php?trip=<?php echo $trip; ?>&sourcecity=<?php echo $sourcecity; ?>&destinationcity=<?php echo $destinationcity; ?>&airportaddress=<?php echo $airportaddress; ?>&fromdate=<?php echo $fromdate; ?>&fromtime=<?php echo $fromtime; ?>&airporttrip=<?php echo $airporttrip; ?>&todate=<?php echo $todate; ?>" class="btn btn-sm text-white py-2 px-4 ms-3 h-100" style="background-color:#4db34d;font-family: 'Poppins', sans-serif;">LOGIN&nbsp;/&nbsp;SIGNUP</a>
			  </li>
			</ul>
		  </div>
</nav>
</div>
</body>
</html>
