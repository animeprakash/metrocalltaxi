<!DOCTYPE html>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="UTF-8">
 
    <link rel="stylesheet" href="adminstyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>


<style>
*{
	font-family:Serif;
	box-sizing:border-box;
}
.gridbox{
	overflow-y:scroll;
	height:95%;
	margin-top:1%;
}
::-webkit-scrollbar {
	width: 5px;
	height:3px;
	background-color:white;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background:#5D3FD3; 
  border-radius: 10px;
}
.home-content{
	font-size:30px;
}
.card{
	border:1px solid white;
	margin:1%;
}
.carddesign{
	margin:2% 2%;
	padding:2% 2%;	
}
td{
	padding:10px;
}
.driverimage{
	width:100px;
	height:auto;
	border:1px solid white;
	border-radius:15px;
}
.vehiclephoto{
	width:48%;
	height:auto;
	padding:10px;
}
a{
	text-decoration:none;
}
</style>
<script>
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
			var forms = document.getElementsByClassName('needs-validation');
			var validation = Array.prototype.filter.call(forms, function(form) {
			  form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
				  event.preventDefault();
				  event.stopPropagation();
				}
				form.classList.add('was-validated');
			  }, false);
			});
		  }, false);
		})();

			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
				}	
</script>

</head>
<body>

  <div class="sidebar close">
    <div class="logo-details">
	  <i class='bx bxs-taxi' style="padding:3px;"></i>
      <span class="logo_name text-center" style="font-size:18px;font-weight:bold;">METRO&nbsp;CALL&nbsp;TAXI</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="adminhome.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="adminhome.php">Dashboard</a></li>
        </ul>
      </li>
	   <li>
        <div class="iocn-link">
          <a href="#">
             <i class='bx bx-user-plus'></i>
            <span class="link_name">Driver</span>
          </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Drivers</a></li>
           <li><a href="driversdetails.php">All Drivers</a></li>
  
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-taxi'></i>
            <span class="link_name">Vehicle</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Vehicle</a></li>
          <li><a href="taxidetails.php">Taxi Trip Details</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Rides</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Rides</a></li>
          <li><a href="allrides.php">Booked Rides</a></li>
		  <li><a href="cancelledrides.php">Cancelled Rides</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
           <i class='bx bx-dollar-circle' ></i>
            <span class="link_name">Tax Page</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Tax Page</a></li>
          <li><a href="taxpage.php">Bill Page</a></li>
          <li><a href="taxdetails.php">Bill Details</a></li>
        </ul>
      </li>	  
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-account'></i>
            <span class="link_name">User Page</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">User Accounts</a></li>
          <li><a href="userdetails.php">User Details</a></li>
        </ul>
      </li>		  

    	<!--Logo details-->
	<li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="images/delivery-man-white.png" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name"> </div>
        <div class="job"> </div>
      </div>
		<a href="index.php" ><i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
</div>


<section class="home-section ">
    <div class="home-content ">
      <i class='bx bx-menu' ></i>
	       <span class="text"> </span>
    </div>
<!--section class="whole">
	<a href=".php"  class="btn adddriver"></a>

<div class="top">
		<div class="topbox">
			<form action="driversdetails.php" method="post">
				<div class="searchbox">
					<input type="date" name=" " placeholder="  ">
					<input type="submit" class="btn searchcolor " name="searchsubmit">
			    </div>				  
			</form>
		</div>
</div>
</section-->

<section class="gridbox">
	<div class="row">
			<?php 
				ini_set('display_errors', 0);
				include ('database.php');
				$cusid=$_GET['cusid'];
				$qry="select cusid,cusname,cusemail,cusmobile,fromaddress,toaddress,fromdate,fromtime,cuspickup,cusdrop,numdays,taxiname,distance,finalamount,triptype,cuscreatedon from bookings where cusid='".$cusid."'";
				$resultone=mysqli_query($con,$qry);
				while($rowone= mysqli_fetch_assoc($resultone)){ 
			?>

		    <div class="col-4">
			    <div class="card carddesign">
			       <h4 class="btn bg-primary text-white"> CONTACT DETAILS</h4>
					<table>
						<tr><td><b>Name :</b></td><td> <?php echo $rowone['cusname']; ?></td><tr>

						<tr><td><b>Email :</b></td><td> <?php echo $rowone['cusemail']; ?></td><tr>

						<tr><td><b>Mobile :</b> </td><td><?php echo $rowone['cusmobile']; ?></td><tr>

						<tr><td><b>From :</b></td><td> <?php echo $rowone['fromaddress']; ?></td><tr>

						<tr><td><b>To : </b></td><td><?php echo $rowone['toaddress']; ?></td><tr>

						<tr><td><b>Pick up :</b></td><td> <?php echo $rowone['cuspickup']; ?></td><tr>

						<tr><td><b>Drop : </b></td><td><?php echo $rowone['cusdrop']; ?></td><tr>
					</table>
				</div>
		    </div>			
		<div class="col-4">
			<div class="card carddesign">
				<h4 class="btn bg-success text-white">BOOKING DETAILS</h4>
				<table>
					<tr><td><b>From Date : </b></td><td> <?php echo $rowone['fromdate']; ?> </td><tr>
					<tr><td><b>From Time : </b></td><td> <?php echo $rowone['fromtime']; ?> </td><tr>
					<tr><td><b>Days : </b></td><td> <?php echo $rowone['numdays']; ?> </td><tr>
					<tr><td><b>Taxi Name : </b></td><td> <?php echo $rowone['taxiname']; ?> </td><tr>
					<tr><td><b>Distance : </b></td><td> <?php echo $rowone['distance']; ?> Km</td><tr>
					<tr><td><b>Final Amount : </b></td><td>Rs. <?php echo $rowone['finalamount']; ?> </td><tr>
					<tr><td><b>Trip Type : </b></td><td> <?php echo $rowone['triptype']; ?> </td><tr>
					<tr><td><b>Booked on : </b></td><td> <?php echo $rowone['cuscreatedon']; ?> </td><tr>
				</table>
			</div>
		</div>
		<div class="col-4">
			<?php 
				ini_set('display_errors', 0);
				include ('database.php');
				$cusid=$_GET['cusid'];
				$query="select customerid,did,driverdata,driverid,driverimage,drivername,drivergender,drivingsince,drivermobile,driverlicenseno from ridedetails inner join driverdetails on driverdata=did where customerid='".$cusid."'";
				$res=mysqli_query($con,$query);
				while($data= mysqli_fetch_assoc($res)){ 
					 $image= 'uploads/'.$data["driverimage"];				
			?>
			<div class="card carddesign">
				<h4 class="btn bg-black text-white">DRIVER DETAILS</h4>
				<div class="text-center " style="width:100%;">
					<img src="<?php echo $image;?>" class="driverimage">
				</div>
				<table>
					<tr><td><b>Driver ID: </b></td><td> <?php echo $data['driverid']; ?> </td><tr>
					<tr><td><b>Name : </b></td><td> <?php echo $data['drivername']; ?> </td><tr>
					<tr><td><b>Gender : </b></td><td> <?php echo $data['drivergender']; ?> </td><tr>
					<tr><td><b>Mobile: </b></td><td> <?php echo $data['drivermobile']; ?> </td><tr>
					<tr><td><b>Driving Since: </b></td><td> <?php echo $data['drivingsince']; ?></td><tr>
					<tr><td><b>License no: </b></td><td><?php echo $data['driverlicenseno']; ?> </td><tr>
				</table>
				<h4 class="btn bg-warning text-white"><a href="ridedriverdelete.php?customerid=<?php echo $data['customerid'];?>" class="text-black" >DELETE DRIVER</a></h4>
			</div>			
			<?php } ?>
		</div>
		<div class="col-12">
			<div class="row">		
			<?php 
				ini_set('display_errors', 0);
				include ('database.php');
				$cusid=$_GET['cusid'];
				$querytwo="select cusid,did,customerid,vehicleid,vehiclenumber,vehicleowner,vehicletype,vehiclebrand,vehiclefrontphoto,vehiclebackphoto from ridedetails inner join bookings on customerid=cusid inner join driverdetails on driverdata=did inner join vehicledetails on did=vehicleid where cusid='".$cusid."'";
				$restwo=mysqli_query($con,$querytwo);
				while($datatwo= mysqli_fetch_assoc($restwo)){ 
					 $vehiclefrontphoto= 'uploads/'.$datatwo["vehiclefrontphoto"];
					$vehiclebackphoto= 'uploads/'.$datatwo["vehiclebackphoto"];					 
			?>

				<div class="col-4">
					<div class="card carddesign">
						<h4 class="btn bg-danger text-white">VEHICLE DETAILS</h4>
						<table>
							<tr><td><b>Taxi No : </b></td><td> <?php echo $datatwo['vehiclenumber']; ?> </td><tr>
							<tr><td><b>Owner Name: </b></td><td> <?php echo $datatwo['vehicleowner']; ?>  </td><tr>
							<tr><td><b>Type : </b></td><td> <?php echo $datatwo['vehicletype']; ?>  </td><tr>
							<tr><td><b>Brand: </b></td><td> <?php echo $datatwo['vehiclebrand']; ?>  </td><tr>
						</table>	
					</div>	
				</div>
				<div class="col-8">
					<div class="card">
						<h4 class="btn bg-primary text-white">VEHICLE FRONT AND BACK PHOTO</h4>
						<div class="" style="width:100%;">
							<img src="<?php echo $vehiclefrontphoto;?>" class="vehiclephoto">
							<img src="<?php echo $vehiclebackphoto;?>" class="vehiclephoto">
						</div>
					</div>	
				</div>

			<?php } ?>
			</div>
		</div>

		<?php } ?>
	</div>
	
</section>	

</section>
 <script src="adminscript.js"></script>
</body>
</html>
