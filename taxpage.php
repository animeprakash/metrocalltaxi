
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

.navigationbar{
	margin-left:80%;
	position:static;
}
.formcard{
	width:96%;
	margin:2%;
	padding:2%;
}
.bluebutton{
	margin-left:45%;
}
.carddesign{
	margin:0% 2%;
	padding:2%;
}
td{
	padding:10px;
}
</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {

.gridbox{
	overflow-y:scroll;
	height:80%;
	margin-top:14%;
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
				
		function costcalc(){
			var driverbeta=document.getElementById("driverbeta").value;
			var addkm=document.getElementById("addkm").value;
			var addkmfare=document.getElementById("addkmfare").value;
			var adddayfare=document.getElementById("adddayfare").value;
			var finalamount=document.getElementById("finalamount").value;
			var numdays=document.getElementById("numdays").value;
			var nightfare=document.getElementById("nightfare").value;
			var gstrate=document.getElementById("gstrate").value;
			
			var totaladdkmfare=addkm*addkmfare;
			var totaldayfare=(parseInt(numdays))*adddayfare;
			var totalcost=(parseInt(finalamount))+totaladdkmfare+totaldayfare+(parseInt(nightfare))+(parseInt(driverbeta));
			
			document.getElementById("totalcost").value=totalcost;	
			document.getElementById("totaladdkmfare").value=totaladdkmfare;	
			document.getElementById("totaldayfare").value=totaldayfare;
			
			var gstamount=(totalcost*gstrate)/100;
			var finalgst=Math.round(totalcost+gstamount);
			
			document.getElementById("gstamount").value=gstamount;
			document.getElementById("finalgst").value=finalgst;			
		}
</script>
<script>
		function printdiv() {
			
			var printone = document.getElementById("printone").innerHTML;
			var printtwo = document.getElementById("printtwo").innerHTML;
			var a = window.open('', '', 'height=1000, width=1000');
			a.document.write('<html><body>');
			a.document.write(printone);
			a.document.write(printtwo);
			a.document.write('</body></html>');
			a.document.close();
			a.print();
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
<?php 
		ini_set('display_errors', 0); 
        if(isset($_GET["submit"])) {
            include("database.php");
			
			$customid=$_GET['customerid'];
			$nodays=$_GET['numdays'];
			$famount=$_GET['finalamount'];
			$addkm=$_GET['addkm'];
			$addkmfare=$_GET['addkmfare'];
			$adddayfare=$_GET['adddayfare'];
			$totalcost=$_GET['totalcost'];
			$nightfare=$_GET['nightfare'];
			$totaladdkmfare=$_GET['totaladdkmfare'];
			$totaldayfare=$_GET['totaldayfare'];
			$gstrate=$_GET['gstrate'];
			$gstamount=$_GET['gstamount'];
			$finalgst=$_GET['finalgst'];
			$driverbeta=$_GET['driverbeta'];
			
			$query="create table if not exists billdetails(billid int auto_increment primary key,customid int,nodays int,famount int,addkm int,addkmfare int,adddayfare int,totalcost int,nightfare int,totaladdkmfare int,totaldayfare int ,gstrate float,gstamount float,finalgst int,driverbeta int,billon datetime not null default now())";
			$qry="insert into billdetails(customid,nodays,famount,addkm,addkmfare,adddayfare,totalcost,nightfare,totaladdkmfare,totaldayfare,gstrate,gstamount,finalgst,driverbeta)values('".$customid."','".$nodays."','".$famount."','".$addkm."','".$addkmfare."','".$adddayfare."','".$totalcost."','".$nightfare."','".$totaladdkmfare."','".$totaldayfare."','".$gstrate."','".$gstamount."','".$finalgst."','".$driverbeta."')";
			mysqli_query($con,$query);
			mysqli_query($con,$qry);
		}
?>
<section class="gridbox">
<div class="whole">
		<h5 class="text-white btn bg-primary bluebutton">BILLING PAGE</h5>
	<div class="row scrolling">
	  <div class="col-sm-4">
		<div class="card formcard">
			<form action="taxpage.php" method="get">
				Enter the Customer ID:
				<div class="d-flex">
					<input type="text" name="customerid" id="customerid" class="form-control w-75" required>
					<input type="submit" value="SUBMIT" class="btn bg-primary text-white">
				</div>
			</form>
		</div>
	  </div>
	  <div class="col-sm-4">
		<!--div class="card formcard">	
			<input type="button" value="PRINT BUTTON" class="btn bg-warning text-black w-100" onclick="printdiv()">
		</div-->
	  </div>	  
	</div>
	<div class="row scrolling" >
			<?php 
				ini_set('display_errors', 0);
				include ('database.php');
				$cusid=$_GET['customerid'];
				$qry="select cusid,did,customerid,vehicleid,fromaddress,toaddress,cuspickup,cusdrop,fromdate,fromtime,numdays,taxiname,distance,finalamount,triptype,ridemode from ridedetails inner join bookings on customerid=cusid inner join driverdetails on driverdata=did inner join vehicledetails on did=vehicleid where cusid='".$cusid."'";
				$resultone=mysqli_query($con,$qry);
				while($rowone= mysqli_fetch_assoc($resultone)){ 
					
				$basekm=$rowone['finalamount']/$rowone['distance'];
			?>
		<div class="col-sm-4" id="printone">
			<div class="card carddesign">
				<h4 class="btn bg-success text-white">BOOKING DETAILS</h4>
				<table>
					<tr><td><b>From: </b></td><td> <?php echo $rowone['fromaddress']; ?> </td><tr>
					<tr><td><b>To: </b></td><td> <?php echo $rowone['toaddress']; ?> </td><tr>
					<tr><td><b>From Date : </b></td><td> <?php echo $rowone['fromdate']; ?> </td><tr>
					<tr><td><b>From Time : </b></td><td> <?php echo $rowone['fromtime']; ?> </td><tr>
					<tr><td><b>Days : </b></td><td> <?php echo $rowone['numdays']; ?> </td><tr>
					<tr><td><b>Taxi Name : </b></td><td> <?php echo $rowone['taxiname']; ?> </td><tr>
					<tr><td><b>Distance : </b></td><td> <?php echo $rowone['distance']; ?> Km</td><tr>
					<tr><td><b>Final Amount : </b></td><td>Rs. <?php echo $rowone['finalamount']; ?> </td><tr>
					<tr><td><b>Trip Type : </b></td><td> <?php echo $rowone['triptype']; ?> </td><tr>
					<tr><td><b>Pick up: </b></td><td> <?php echo $rowone['cuspickup']; ?>  </td><tr>
					<tr><td><b>Drop: </b></td><td><?php echo $rowone['cusdrop']; ?>  </td><tr>
					<tr><td><b>Ride Mode : </b></td><td><?php echo $rowone['ridemode']; ?> </td><tr>
				</table>
			</div>
		</div>
			<?php 
				ini_set('display_errors', 0);
				include ('database.php');
				$cusid=$_GET['customerid'];
				$query="select cusid,did,customerid,customid,vehicleid,addkm,addkmfare,adddayfare,totalcost,nightfare,gstrate,gstamount,finalgst from ridedetails inner join bookings on customerid=cusid inner join driverdetails on driverdata=did inner join vehicledetails on did=vehicleid inner join billdetails on customerid=customid where cusid='".$cusid."'";
				$resulttwo=mysqli_query($con,$query);
				$rowtwo= mysqli_fetch_assoc($resulttwo); 
			?>
		<div class="col-sm-5">
			<div class="card carddesign">
				<h4 class="btn bg-info text-white">ADDITIONAL DETAILS</h4>
				<form action="taxpage.php" method="get">
					<input type="hidden" name="customerid" id="customerid" value="<?php echo $rowone['cusid']; ?>" class="form-control form-control-sm" required >
					<input type="hidden" name="finalamount" id="finalamount" class="form-control form-control-sm" required oninput="costcalc()" value="<?php echo $rowone['finalamount']; ?>" >
					<input type="hidden" name="numdays" id="numdays" class="form-control form-control-sm" required oninput="costcalc()" value="<?php echo $rowone['numdays']; ?>" >
					<input type="hidden" name="totaldayfare" id="totaldayfare" class="form-control form-control-sm" required >
					<input type="hidden" name="totaladdkmfare" id="totaladdkmfare" class="form-control form-control-sm" required >
				 <table>
					<tr><td><b>Driver Beta : </b></td><td><input type="text" name="driverbeta" id="driverbeta" class="form-control form-control-sm" required oninput="costcalc()" value="<?php echo $rowtwo['driverbeta']; ?>"></td><tr>
					<tr><td><b>Additional Km : </b></td><td><input type="text" name="addkm" id="addkm" class="form-control form-control-sm" required oninput="costcalc()" value="<?php echo $rowtwo['addkm']; ?>"></td><tr>
					<tr><td><b>Additional Fare/Km : </b></td><td> <input type="text" name="addkmfare" id="addkmfare" class="form-control form-control-sm" required oninput="costcalc()" value="<?php echo $rowtwo['addkmfare']; ?>" > </td><tr>
					<tr><td><b>Fare per Days: </b></td><td> <input type="text" name="adddayfare" id="adddayfare" class="form-control form-control-sm" required oninput="costcalc()" value="<?php echo $rowtwo['adddayfare']; ?>" > </td><tr>
					<tr><td><b>Night Fare: </b></td><td> <input type="text" name="nightfare" id="nightfare" class="form-control form-control-sm" required oninput="costcalc()"  value="<?php echo $rowtwo['nightfare']; ?>"> </td><tr>					
					<tr><td><b>Total Cost: </b></td><td> <input type="text" name="totalcost" id="totalcost" class="form-control form-control-sm" required readonly value="<?php echo $rowtwo['totalcost']; ?>" > </td><tr>
					<tr><td><b>GST Rate: </b></td><td> <input type="text" name="gstrate" id="gstrate" class="form-control form-control-sm" required oninput="costcalc()"  value="<?php echo $rowtwo['gstrate']; ?>"> </td><tr>					
					<tr><td><b>GST: </b></td><td> <input type="text" name="gstamount" id="gstamount" class="form-control form-control-sm" required readonly value="<?php echo $rowtwo['gstamount']; ?>" > </td><tr>									
					<tr><td><b>Final GST: </b></td><td> <input type="text" name="finalgst" id="finalgst" class="form-control form-control-sm" required readonly oninput="costcalc()"  value="<?php echo $rowtwo['finalgst']; ?>"> </td><tr>										
					<tr><td colspan="2" class="text-center"><input type="submit" name="submit" value="SUBMIT" class="btn btn-sm bg-info text-white w-50"> </td></tr>				  
				  </table>
				</form>
			</div>
		</div>
		<?php } ?>
	</div>
	</div>
</section>	

</section>
 <script src="adminscript.js"></script>
 <!-- partial -->

</body>
</html>
