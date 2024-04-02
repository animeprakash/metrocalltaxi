
<html lang="en" dir="ltr" >
  <head>
    <meta charset="UTF-8">
 
    <link rel="stylesheet" href="adminstyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

<style>
*{
	font-family:Serif;
	box-sizing:border-box;
}
.gridbox{
	overflow-y:scroll;
	height:90%;
	margin-top:1%;
	overflow-x:hidden;
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
.licensephoto{
	width:50%;
	height:auto;
	padding:5px;
}
.pngimages{
	width:27px;
	height:auto;
	margin:-3px 0 0 -12px;
}
.driverimage{
	width:150px;
	height:auto;
	border:1px solid white;
	border-radius:10px;
}
.driverdetails{
	padding:10px;
}
td{
	padding:10px;
}
</style>
<style>
.card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4,9,20,0.03), 0 0.9375rem 1.40625rem rgba(4,9,20,0.03), 0 0.25rem 0.53125rem rgba(4,9,20,0.05), 0 0.125rem 0.1875rem rgba(4,9,20,0.03);
    border-width: 0;
    transition: all .2s;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(26,54,126,0.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.vertical-timeline {
    width: 100%;
    position: relative;
    padding: 1.5rem 0 1rem;
}

.vertical-timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 67px;
    height: 100%;
    width: 4px;
    background: #e9ecef;
    border-radius: .25rem;
}

.vertical-timeline-element {
    position: relative;
    margin: 0 0 1rem;
}

.vertical-timeline--animate .vertical-timeline-element-icon.bounce-in {
    visibility: visible;
    animation: cd-bounce-1 .8s;
}
.vertical-timeline-element-icon {
    position: absolute;
    top: 0;
    left: 60px;
}

.vertical-timeline-element-icon .badge-dot-xl {
    box-shadow: 0 0 0 5px #fff;
}

.badge-dot-xl {
    width: 30px;
    height: 30px;
    position: relative;
}


.badge-dot-xl::before {
    content: '';
    width: 10px;
    height: 10px;
    border-radius: .25rem;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -5px 0 0 -5px;

}

.vertical-timeline-element-content {
    position: relative;
    margin-left: 90px;
    font-size: .8rem;
}

.vertical-timeline-element-content .timeline-title {
    font-size: .8rem;
    text-transform: uppercase;
    margin: 0 0 .5rem;
    padding: 2px 0 0;
    font-weight: bold;
}

.vertical-timeline-element-content .vertical-timeline-element-date {
    display: block;
    position: absolute;
    left: -90px;
    top: 0;
    padding-right: 10px;
    text-align: right;
    color: #adb5bd;
    font-size: .7619rem;
    white-space: nowrap;
}

.vertical-timeline-element-content:after {
    content: "";
    display: table;
    clear: both;
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
<div class="navigationbar">

</div>

<section class="gridbox">
<?php
		ini_set('display_errors', 0); 
            include("database.php");	
				$did=$_GET['did'];
				$vehicleid=$_GET['vehicleid'];
				$query="select driverid,vehicleid,did,drivername,drivermobile,drivergender,driverdob,drivingsince,driverimage,driverlicenseno,driveraadharno,driverlicensefront,driverlicenseback,driveraadharfront,driveraadharback,vehiclenumber,vehicleowner,vehicletype,vehiclebrand,vehiclercfront,vehiclercback,vehiclefrontphoto,vehiclebackphoto,vehicleinsurance,driveron,vehicleon from driverdetails  full join vehicledetails on did=vehicleid where did='".$did."' and vehicleid='".$vehicleid."' ";
				$result= mysqli_query($con, $query);
				$row=mysqli_fetch_assoc($result);
				
				$driverimage= 'uploads/'.$row["driverimage"];
				$licensefront= 'uploads/'.$row["driverlicensefront"];
				$licenseback= 'uploads/'.$row["driverlicenseback"];
				$driveraadharfront= 'uploads/'.$row["driveraadharfront"];
				$driveraadharback= 'uploads/'.$row["driveraadharback"];	
				$vehiclercfront= 'uploads/'.$row["vehiclercfront"];
				$vehiclercback= 'uploads/'.$row["vehiclercback"];	
				$vehiclefrontphoto= 'uploads/'.$row["vehiclefrontphoto"];
				$vehiclebackphoto= 'uploads/'.$row["vehiclebackphoto"];	
				$vehicleinsurance= 'uploads/'.$row["vehicleinsurance"];					
?>
	<div class="row d-flex">
		<div class="col-3" style="margin-left:10px;">
			<div class="card bg-white" >
			  <div class="card-header text-center text-uppercase text-primary" style="font-weight:bold;"><?php echo $row['drivername']; ?></div>
				<div class="card-body text-center">
					<img src="<?php echo $driverimage; ?>" class="driverimage">
				</div>
				<hr>
				<div class="driverdetails text-center">
				<table>
					<tr><td><b>Gender:</b></td><td><?php echo $row['drivergender']; ?></td></tr>
					<tr><td><b>DOB:</b></td><td><?php echo $row['driverdob']; ?></td></tr>
					<tr><td><b>Mobile:</b></td><td><?php echo $row['drivermobile']; ?></td></tr>
					<tr><td><b>Driving Since:</b></td><td><?php echo $row['drivingsince']; ?></td></tr>
					<tr><td><b>License no:</b></td><td><?php echo $row['driverlicenseno']; ?></td></tr>
					<tr><td><b>Aadhar no:</b></td><td><?php echo $row['driveraadharno']; ?></td></tr>
				</table>
					<h4 class="text-white btn bg-primary ">VEHICLE INFO</h4>
				<table>
				
					<tr><td><b>Vehicle no:</b></td><td><?php echo $row['vehiclenumber']; ?></td></tr>
					<tr><td><b>Owner:</b></td><td><?php echo $row['vehicleowner']; ?></td></tr>
					<tr><td><b>Type:</b></td><td><?php echo $row['vehicletype']; ?></td></tr>
					<tr><td><b>Brand:</b></td><td><?php echo $row['vehiclebrand']; ?></td></tr>
				</table>
				</div>
			</div>
		</div>
		<div class="col-8">
		  <div class="row d-flex justify-content-center">
            <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="bg-danger btn text-white"><?php echo $row['driveron'];?> </h5>
											<h5 class="bg-primary btn text-white">DRIVER DETAILS</h5>
                                            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot-xl "><img src="images/License.png" class="pngimages"> </i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                             <div class="card bg-light mb-3" style="min-width: 18rem;">
																  <div class="card-header text-primary text-uppercase" style="font-size:15px;font-weight:bold;">License PHOTO FRONT AND BACK SIDE</div>
																  <div class="card-body d-flex " style="width:100%;">
																			<img src="<?php echo $licensefront; ?>"  class="licensephoto">
																			<img src="<?php echo $licenseback; ?>" class="licensephoto">
																  </div>
															</div>                                                           
															<!--span class="vertical-timeline-element-date">12:25 PM</span-->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot-xl "><img src="images/id-badge1.png" class="pngimages"> </i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                             <div class="card bg-light mb-3" style="min-width: 18rem;">
																  <div class="card-header text-black text-uppercase" style="font-size:15px;font-weight:bold;">AADHAR PHOTO FRONT AND BACK SIDE</div>
																  <div class="card-body d-flex " style="width:100%;">
																			<img src="<?php echo $driveraadharfront; ?>"  class="licensephoto">
																			<img src="<?php echo $driveraadharback; ?>" class="licensephoto">
																  </div>
															</div>                                                           
															<!--span class="vertical-timeline-element-date">12:25 PM</span-->
                                                        </div>
                                                    </div>
                                                </div>                                                                         
                                                
                                                   
                                                
                                            </div>
											
      <h5 class="bg-success btn text-white"><?php echo $row['vehicleon'];?> </h5>
											<h5 class="bg-black btn text-white">VEHICLE DETAILS</h5>
                                            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot-xl "><img src="images/license1.png" class="pngimages"> </i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                             <div class="card bg-light mb-3" style="min-width: 18rem;">
																  <div class="card-header text-primary text-uppercase" style="font-size:15px;font-weight:bold;">RC PHOTO FRONT AND BACK SIDE</div>
																  <div class="card-body d-flex " style="width:100%;">
																			<img src="<?php echo $vehiclercfront; ?>"  class="licensephoto">
																			<img src="<?php echo $vehiclercback; ?>" class="licensephoto">
																  </div>
															</div>                                                           
															<!--span class="vertical-timeline-element-date">12:25 PM</span-->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot-xl "><img src="images/id-badge2.png" class="pngimages"> </i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                             <div class="card bg-light mb-3" style="min-width: 18rem;">
																  <div class="card-header text-black text-uppercase" style="font-size:15px;font-weight:bold;">VEHICLE PHOTO FRONT AND BACK SIDE</div>
																  <div class="card-body d-flex " style="width:100%;">
																			<img src="<?php echo $vehiclefrontphoto; ?>"  class="licensephoto">
																			<img src="<?php echo $vehiclebackphoto; ?>" class="licensephoto">
																  </div>
															</div>                                                           
															<!--span class="vertical-timeline-element-date">12:25 PM</span-->
                                                        </div>
                                                    </div>
                                                </div>                                                                         
                                                
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot-xl "><img src="images/license2.png" class="pngimages"> </i>
                                                        </span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                             <div class="card bg-light mb-3" style="min-width: 18rem;">
																  <div class="card-header text-black text-uppercase" style="font-size:15px;font-weight:bold;">VEHICLE INSURANCE PHOTO FRONT AND BACK SIDE</div>
																  <div class="card-body d-flex " style="width:100%;">
																			<img src="<?php echo $vehicleinsurance; ?>"  class="licensephoto">
																			
																  </div>
															</div>                                                           
															<!--span class="vertical-timeline-element-date">12:25 PM</span-->
                                                        </div>
                                                    </div>
                                                </div>                                                   
                                                
                                            </div>											
                                        </div>
                                    </div>        
           
				</div>
		</div>
		</div>
</section>	

</section>
 <script src="adminscript.js"></script>
 <!-- partial -->
<!--   Core JS Files   -->

</body>
</html>
