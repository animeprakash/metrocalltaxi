<?php			
			ini_set('display_errors', 0); 

            include("database.php");
			$taxiid=$_GET['taxiid'];
            $fromaddress=$_GET['fromaddress'];
            $toaddress=$_GET['toaddress'];
            $fromdate=$_GET['fromdate'];
			$todate=$_GET['todate'];
            $fromtime=$_GET['fromtime'];
            $numdays=$_GET['numdays'];			
			$finalamount=$_GET['finalamount'];
			$distance=$_GET['distance'];
			$taxiname=$_GET['taxiname'];
			$triptype=$_GET['triptype'];
			$airporttrip=$_GET['airporttrip'];
			$airportaddress=$_GET['airportaddress'];
			$useremail=$_GET['useremail'];
			$usermobile=$_GET['usermobile'];
			$username=$_GET['username'];
			
			$sql="select userid,username,useremail,usermobile from userdetails where useremail='".$useremail."'";
			$res=mysqli_query($con,$sql);
			$row=mysqli_fetch_assoc($res);
			$username=$row['username'];
			$usermobile=$row['usermobile'];
?>
<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["submit"])) {
            include("database.php");
            $cusname=$_POST['cusname'];
            $cusemail=$_POST['cusemail'];
			$cusmobile=$_POST['cusmobile'];
			$cuspickup=$_POST['cuspickup'];
			$cusdrop=$_POST['cusdrop'];
			$fromaddress=$_POST['fromaddress'];
            $toaddress=$_POST['toaddress'];
            $fromdate=$_POST['fromdate'];
            $fromtime=$_POST['fromtime'];
			$numdays=$_POST['numdays'];
			$finalamount=$_POST['finalamount'];
			$distance=$_POST['distance'];
			$taxiname=$_POST['taxiname'];		
			$triptype=$_POST['triptype'];
			$todate=$_POST['todate'];			
			$airporttrip=$_POST['airporttrip'];
			$airportaddress=$_POST['airportaddress'];	
			$taxiidnumber=$_POST['taxiidnumber'];
			$useremail=$_POST['useremail'];
			 
			$q="create table if not exists bookings (cusid int not null auto_increment primary key,cusname varchar(100),cusemail varchar(200),cusmobile long,cuspickup varchar(500),cusdrop varchar(500),fromaddress varchar(100),toaddress varchar(100),fromdate date,fromtime time,todate varchar(50),airporttrip varchar(100),airportaddress varchar(500),numdays int,taxiname varchar(100),distance int(10),finalamount int(10),triptype varchar(100),taxiidnumber int,cuscreatedon datetime not null default now())";
			$qq=" ALTER TABLE bookings AUTO_INCREMENT = 10001";
			mysqli_query($con,$qq);
			
			$query="insert into bookings (cusname,cusemail,cusmobile,cuspickup,cusdrop,fromaddress,toaddress,fromdate,fromtime,numdays,taxiname,distance,finalamount,triptype,airporttrip,airportaddress,todate,taxiidnumber)values('".$cusname."','".$cusemail."','".$cusmobile."','".$cuspickup."','".$cusdrop."','".$fromaddress."','".$toaddress."','".$fromdate."','".$fromtime."','".$numdays."','".$taxiname."','".$distance."','".$finalamount."','".$triptype."','".$airporttrip."','".$airportaddress."','".$todate."','".$taxiidnumber."')";

			mysqli_query($con,$q);
			mysqli_query($con,$query);
				
			header("Location:airportbooking.php?cusemail=".$useremail."&phonenumber=".$cusmobile." ");
			//echo "<script>alert('Thanks for your booking!');window.location.href='customerdashboard.php?email=".$useremail."';</script>";

        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"  crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />

		
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>
* {
	box-sizing: border-box;
    font-family: 'Poppins';
}

.form-control{
	border:0 solid black;
	border-bottom:1px solid gray;
	width:85%;
	margin-left:10%;
}
.label{
	font-weight:bold;
	margin-top:4px;
	width:7%;
}
.formrow{
	height:50px;
}

.totalsec{
	width:100%;
	height:90%;
	display:flex;
}
.details{
	width:50%;
	height:60%;
	margin-top:1%;
	margin-left:8.33%;
	border:1px solid black;
	border-radius:10px;
}
.detailsform{
	margin:3%;
}
.topic{ 
	font-size:100%;
	font-weight:bold;
	text-align:center;
	margin:0 20% 20px 20%;
	border-top:2px solid #0096FF;
	border-bottom:2px solid #0096FF;	
}
.getdata{
	width:30%;
	height:40%;
	margin-right:12.5%;
}
.bookingdetails{
	width:100%;
	height:250px;
	margin-top:3%;
	border:1px solid black;
	border-radius:10px;
}
.invalid-tooltip{
	margin:-8% 0 0 55%;
}
.chkbox{
	margin:12px 0px 0px 20%;
}
.btnnn{
	color:white;
	width:100%;
	font-weight:bold;
	background-color:#0096FF;
}
.btnnn:hover{
	color:white;
	background-color:#4db34d;
}
.bookingrow{
	display:flex;
	padding:3px 0px;
}
.bookinglabel{
	font-weight:bold;
	width:30%;
	margin-left:2%;
}
.bookdt{
	color:white;
	text-align:center;
	padding:10px 0px;
	font-weight:bold;
	background-color:#0096FF;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
}
.roundborder{
	border:1px solid #0096FF;
	border-radius:100px;
	font-size:10px;
	padding:4px;
	color:#0096FF;
}
.but{
	border:1px solid black;
	font-weight:bold;
	color:gray;	
	background-color:white;
}
.buttongroup{
	margin:4px;
}
.inclusions, .exclusions, .facilities, .tandc{
	margin:8px;
}
.box{
	position:fixed; 
	z-index:1;
	left: 0; 
	top: 0;
	right:0	;
	width:40%;
	height:500px;	
	background-color:white;
	opacity:1;
	margin:5% 30% 0 30%;
	border:1px solid #0096FF;
	border-radius:20px;
}
.blankpage{
	background-color:white;
	position:fixed; 
	z-index:1;
	left: 0; 
	top: 0;
	right:0	;
	width:100%;
	height:100%;	
	background-color:white;
	opacity:1;
}
</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.invalid-tooltip{
	margin:-12px 0px 0px 13%;
}
.details{
	width:94%;
	margin:3%;
	border:1px solid black;
	border-radius:10px;
}
.bookingdetails{
	width:100%;
	height:auto;
	margin:3% 0 3% 0;
	border:1px solid black;
	border-radius:10px;
}
.but{
	min-width:2%;
	max-width:30%;
	border:1px solid black;
	font-weight:bold;
	color:gray;	
	background-color:white;
}
.spanword{
	min-width:2%;
	max-width:30%;
	font-size:75%;
}
.box{
	position:fixed; 
	z-index:1;
	left: 0; 
	top: 0;
	right:0	;
	width:90%;
	height:500px;	
	background-color:white;
	opacity:1;
	margin:5% 5% 0 5%;
	border:1px solid #0096FF;
	border-radius:20px;
}
.blankpage{
	background-color:white;
	position:fixed; 
	z-index:1;
	left: 0; 
	top: 0;
	right:0	;
	width:100%;
	height:100%;	
	background-color:white;
	opacity:1;
}
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
				


		document.addEventListener('DOMContentLoaded', function() { 
		var form = document.getElementById('myform'); 
		var modal = document.querySelector('.modal');
		var closeButton = document.querySelector('.close');
		form.addEventListener('submit', function(event) { 
		//	event.preventDefault(); 
		modal.style.display = 'block';
		});
		closeButton.addEventListener('click', function() { 
		modal.style.display = 'none'; }); }); 
</script>
<script>
				function inclusions(){
					$(".inclusions").css({"display":"block"});
					$(".exclusions").css({"display":"none"});
					$(".facilities").css({"display":"none"});
					$(".tandc").css({"display":"none"});
					$(".inclusionsbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".exclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".facilitiesbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tandcbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function exclusions(){
					$(".exclusions").css({"display":"block"});
					$(".inclusions").css({"display":"none"});
					$(".facilities").css({"display":"none"});
					$(".tandc").css({"display":"none"});
					$(".exclusionsbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".inclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".facilitiesbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tandcbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}				
				
				function facilities(){
					$(".facilities").css({"display":"block"});
					$(".inclusions").css({"display":"none"});
					$(".exclusions").css({"display":"none"});
					$(".tandc").css({"display":"none"});
					$(".facilitiesbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".inclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".exclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tandcbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function tandc(){
					$(".tandc").css({"display":"block"});
					$(".inclusions").css({"display":"none"});
					$(".exclusions").css({"display":"none"});
					$(".facilities").css({"display":"none"});
					$(".tandcbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".inclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".facilitiesbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".exclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				
</script>


</head>
<body>

<section class="" style="">
	<?php include("topnavbarcar.php");?>
</section>
<?php
				ini_set('display_errors', 0); 
				include("database.php");
				
				$cusemail=$_GET['cusemail'];
				$phonenumber=$_GET['phonenumber'];
				$sql2="select cusid,cusname,cusemail,cusmobile,cuspickup,cusdrop,fromaddress,toaddress,fromdate,fromtime,numdays,taxiname,distance,finalamount,triptype,airporttrip,airportaddress,todate,taxiidnumber from bookings where cusemail='".$cusemail."' and cusmobile='".$phonenumber."'";
				$res2= mysqli_query($con, $sql2);
				while($row2=mysqli_fetch_assoc($res2)){
?>
<center>
<div class="blankpage">
<div class="box container-fluid">
		<div class="row">
			<div class="col-sm-12 ">
				<div class="col-sm-12" >
					<h3 class="text-primary mt-4">Thank you <?php echo $row2['cusname'];?> !</h3>
					<h6 class="text-center">Your booking( ID:<?php echo $row2['cusid'];?> ) is received.</h6><br>
					<h6 class="text-justify">You will receive the reservation details with <b>Booking ID <?php echo $row2['cusid'];?> </b>on your mobile soon.You will receive your driver details within 30 minutes of your pickup time.We seek your cooperation to avoid enquiring about the driver details before the specific time.</h6>
				</div>
			</div>				
		</div>
		<div class="row">
			<div class="col-sm-12 ">
				<div class="col-sm-12 d-flex" >
					<div class="col-sm-6 text-left mt-3" >
						<a href="index.php" class="btn text-white bg-primary">Home</a>
					</div>
					<div class="col-sm-6 text-right mt-3" >
						<a href="customerdashboard.php?email=<?php echo $cusemail; ?>" class="btn text-white bg-primary">Dashboard</a>
					</div>
				</div>
			<h3 class="text-primary mt-4 text-center">Booking Details</h3>
				<div class="col-sm-10 d-flex" >
					<div class="col-sm-6 text-left" >
						Pick up City:	
					</div>
					<div class="col-sm-6 text-right" >
						<?php echo $row2['cuspickup'];?>
					</div>
				</div>
				<div class="col-sm-10 d-flex" >
					<div class="col-sm-6 text-left" >
						Total Fare:
					</div>
					<div class="col-sm-6 text-right" >
						Rs.<?php echo $row2['finalamount'];?>
					</div>
				</div>
				<div class="col-sm-10 d-flex" >
					<div class="col-sm-6 text-left" >
						Trip Type:
					</div>
					<div class="col-sm-6 text-right" >
						<?php echo $row2['airporttrip'];?>
					</div>
				</div>
				<div class="col-sm-10 d-flex" >
					<div class="col-sm-6 text-left" >
						Pickup Date and Time:
					</div>
					<div class="col-sm-6 text-right" >
						<?php echo $row2['fromdate'];?>  <?php echo $row2['fromtime'];?>
					</div>
				</div>
			</div>				
		</div>
</div>
</div>
</center>
<?php } ?>
<div class="container-fluid">
<div class="row">
	<div class="details col-sm-6">
		<div class="detailsform">
			<div class="topic">CONTACT & PICKUP DETAILS</div>
			
		<form action="airportbooking.php" method="POST"  class="needs-validation" novalidate id="myform" >
		    <div class="formrow row">
				<div class="label">Name</div>
				<div class="col">
					<input type="text" class="form-control" name="cusname" id="cusname" autocomplete="off" placeholder="Enter your name" required value="<?php echo $username;?>" >
					<span class="invalid-tooltip">
						Please enter your name.
					</span>
				</div>
		    </div>
		    <div class="formrow row">
				<div class="label">Email</div>
				<div class="col">
					<input type="email" class="form-control" name="cusemail" id="cusemail" autocomplete="off" placeholder="Enter your email" required value="<?php echo $useremail;?>">
					<span class="invalid-tooltip">
						Please enter your email.
					</span>
				</div>
		    </div>			
		    <div class="formrow row">
				<div class="label">Mobile</div>
				<div class="col">
					<input type="text" class="form-control" name="cusmobile" id="cusmobile" autocomplete="off" placeholder="Enter your mobile number" required pattern="^[0-9]{10}$" value="<?php echo $usermobile;?>">
					<span class="invalid-tooltip">
						Please enter 10 digit mobile number.
					</span>
				</div>
		    </div>
			<div class="formrow row">
				<div class="label">Pickup</div>
				<div class="col">
					<input type="text" class="form-control" name="cuspickup" id="cuspicup" autocomplete="off" placeholder="Enter your pickup address" required>
					<span class="invalid-tooltip">
						Please enter your pickup address.
					</span>
				</div>
		    </div>	
		    <div class="formrow row">
				<div class="label">Drop</div>
				<div class="col">
					<input type="text" class="form-control" name="cusdrop" id="cusdrop" autocomplete="off" placeholder="Enter your drop address" required>
					<span class="invalid-tooltip">
						Please enter your drop address.
					</span>
				</div>
		    </div>		
			<div >
			<input type="hidden"  value="<?php echo $taxiid;?>" name="taxiidnumber" id="taxiidnumber">
			<input type="hidden"  value="<?php echo $airporttrip;?>" name="airporttrip" id="airporttrip">
			<input type="hidden"  value="<?php echo $airportaddress;?>" name="airportaddress" id="airportaddress">
			<input type="hidden"  value="<?php echo $fromaddress;?>" name="fromaddress" id="fromaddress">
			<input type="hidden"  value="<?php echo $toaddress='-';?>" name="toaddress" id="toaddress">
			<input type="hidden"  value="<?php echo $fromdate;?>" name="fromdate" id="fromdate">
			<input type="hidden"  value="<?php echo $todate;?>" name="todate" id="todate">
			<input type="hidden"  value="<?php echo $fromtime;?>" name="fromtime" id="fromtime">
			<input type="hidden"  value="<?php echo $numdays;?>" name="numdays" id="numdays">
			<input type="hidden"  value="<?php echo $taxiname;?>" name="taxiname" id="taxiname">
			<input type="hidden"  value="<?php echo $distance;?>" name="distance" id="distance">
			<input type="hidden"  value="<?php echo $finalamount;?>" name="finalamount" id="finalamount">
			<input type="hidden"  value="<?php echo $triptype;?>" name="triptype" id="triptype">
			<input type="hidden"  value="<?php echo $useremail;?>" name="useremail" id="useremail">
			
			<input class="btn btnnn" type="submit"  value="PROCEED" name="submit" id="submit">
			</div>
		</form>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="bookingdetails">
			<div class="bookdt">YOUR BOOKING DETAILS</div>
			<div class="bookingrow">
				<div class="bookinglabel">Pick up City :</div>				
				<div >	<?php echo $fromaddress;?> </div>
		    </div>	
			<div class="bookingrow">
				<div class="bookinglabel">Trip Type:</div>				
				<div >	<?php echo $airporttrip;?> </div>
		    </div>
			<div class="bookingrow">
				<div class="bookinglabel">Pickup date :</div>				
				<div >	<?php echo $fromdate;?> at <?php echo $fromtime;?> </div>				
		    </div>		
			<div class="bookingrow">
				<div class="bookinglabel">Car type :</div>				
				<div >	<?php echo $taxiname;?></div>				
		    </div>	
			<div class="bookingrow">
				<div class="bookinglabel">KMs included :</div>				
				<div >	<?php echo $distance;?> km</div>				
		    </div>	
			<div class="bookingrow">
				<div class="bookinglabel">Total fare :</div>				
				<div >&#8377;<?php echo $finalamount;?></div>				
		    </div>			
		</div>
		<div class="bookingdetails">
<?php
			ini_set('display_errors', 0);
			include("database.php");
			
			$query="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxiid='".$taxiid."'";
			$result= mysqli_query($con, $query);
			while($datas= mysqli_fetch_assoc($result)) {		
?>	
	<div class="buttongroup" >
		   <div class="btn-group d-flex" role="group" > 
				<button class="btn but btn-sm inclusionsbut" onclick="inclusions()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;"><span class="spanword">INCLUSIONS</span></button>
				<button class="btn but btn-sm exclusionsbut" onclick="exclusions()" ><span class="spanword">EXCLUSIONS</span></button>
				<button class="btn but btn-sm facilitiesbut" onclick="facilities()" ><span class="spanword">FACILITIES</span></button>
				<button class="btn but btn-sm tandcbut" onclick="tandc()" ><span class="spanword">T&C </span></button>
			</div>
	</div>
	<div class="inclusion inclusions " id="inclusions" >
			<p class="para"><i class="fa-solid fa-gas-pump roundborder"></i> Base fare for <?php echo $distance; ?> km</p>
			<p class="para"><i class='fas fa-user-circle roundborder'></i> Driver Allowance </p>
			<p class="para"><i class='far fa-money-bill-alt roundborder'></i> State Tax & Toll</p>
			<p class="para" ><i class="fa-solid fa-rupee roundborder"></i> GST (5%)</p>
	</div>
	<div class="exclusion exclusions" id="exclusions" style="display:none">
			<p class="expara"> </p>
			<p class="expara"><i class='fas fa-taxi roundborder'></i> Multiple pickups/drops </p>
			<p class="expara"><i class='fas fa-taxi roundborder'></i> Parking </p>
	</div>
	<div class="facilities" id="facilities" style="display:none">
			<p class="facipara"><i class="fas fa-chair roundborder"></i> <?php echo $datas['taxiseats']; ?>  Seats</p>
			<p class="facipara"><i class='fa fa-shopping-bag roundborder'></i> <?php echo $datas['taxibags']; ?>  bags</p>
			<p class="facipara"><i class='fas fa-wind roundborder'></i> <?php echo $datas['taxiactype']; ?> </p>
	</div>
	<div class="tandc" id="tandc" style="display:none">
			<p class="tandcpara"><?php echo $datas['taxifacility']; ?></p>
	</div>

<?php } ?>			
		</div>
	</div>
</div>
</div>

</body>
</html>