<?php
				ini_set('display_errors', 0); 
				include("database.php");
				
				$email=$_GET['email'];
				$cusid=$_GET['cusid'];
				$sql="select cusid,cusname,cusemail,cusmobile,cuspickup,cusdrop,fromaddress,toaddress,fromdate,fromtime,numdays,taxiname,distance,finalamount,triptype,airporttrip,airportaddress,todate,taxiidnumber from bookings where cusid='".$cusid."'  ";
				$res= mysqli_query($con, $sql);
				$row=mysqli_fetch_assoc($res);
?>
<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["submit"])) {
            include("database.php");
			
			$cusid=$_POST['cusid'];
            $cusname=$_POST['cusname'];
            $cusemail=$_POST['cusemail'];
			$cusmobile=$_POST['cusmobile'];
			$cuspickup=$_POST['cuspickup'];
			$cusdrop=$_POST['cusdrop'];
            $fromdate=$_POST['fromdate'];
            $fromtime=$_POST['fromtime'];
			
			$query="update bookings set cusname='".$cusname."',cusemail='".$cusemail."',cusmobile='".$cusmobile."',cuspickup='".$cuspickup."',cusdrop='".$cusdrop."',fromtime='".$fromtime."',fromdate='".$fromdate."' where cusid='".$cusid."' ";
			
			mysqli_query($con,$query);
				
			header("Location:customerdashboard.php?email=".$cusemail." ");
        }
?>
<html lang="en" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

<style>
* {
	box-sizing: border-box;
    font-family:Arial, Helvetica, sans-serif;
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
<body >
<div>
	<?php include("topnavbar.php");?>
</div>

<div class="" style="margin-top:2%;">

<div class="container-fluid">
<div class="row">
	<div class="details col-sm-6">
		<div class="detailsform">
			<div class="topic">CONTACT & PICKUP DETAILS</div>
			
		<form action="editbookingpage.php" method="POST"  class="needs-validation" novalidate id="" >
		    <div class="formrow row">
				<div class="label">Name</div>
				<div class="col">
					<input type="text" class="form-control" name="cusname" id="cusname" autocomplete="off" placeholder="Enter your name" required value="<?php echo $row['cusname'];?>">
				</div>
		    </div>
		    <div class="formrow row">
				<div class="label">Email</div>
				<div class="col">
					<input type="email" class="form-control" name="cusemail" id="cusemail" autocomplete="off" placeholder="Enter your email" required value="<?php echo $row['cusemail'];?>">

				</div>
		    </div>			
		    <div class="formrow row">
				<div class="label">Mobile</div>
				<div class="col">
					<input type="text" class="form-control" name="cusmobile" id="cusmobile" autocomplete="off" placeholder="Enter your mobile number" required value="<?php echo $row['cusmobile'];?>" pattern="^[0-9]{10}$">

				</div>
		    </div>
		    <div class="formrow row">
				<div class="label">Date</div>
				<div class="col">
					<input type="date" class="form-control"  value="<?php echo  $row['fromdate']; ?>" name="fromdate" id="fromdate">

				</div>
		    </div>
		    <div class="formrow row">
				<div class="label">Time</div>
				<div class="col">
					<input type="time" class="form-control"  value="<?php echo  $row['fromtime']; ?>" name="fromtime" id="fromtime">

				</div>
		    </div>
			<div class="formrow row">
				<div class="label">Pickup</div>
				<div class="col">
					<input type="text" class="form-control" name="cuspickup" id="cuspicup" autocomplete="off" placeholder="Enter your pickup address" required value="<?php echo $row['cuspickup'];?>">

				</div>
		    </div>	
		    <div class="formrow row">
				<div class="label">Drop</div>
				<div class="col">
					<input type="text" class="form-control" name="cusdrop" id="cusdrop" autocomplete="off" placeholder="Enter your drop address" required value="<?php echo $row['cusdrop']; ?>">

				</div>
		    </div>		
			<div >
			<input class="" type="hidden"  value="<?php echo $row['cusid'];?>" name="cusid" id="cusid">
			<input class="btn btnnn" type="submit"  value="UPDATE" name="submit" id="submit">
			</div>
		</form>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="bookingdetails">
			<div class="bookdt">YOUR BOOKING DETAILS</div>
			<div class="bookingrow">
				<div class="bookinglabel">Itinerary :</div>				
				<div >	<?php echo $row['fromaddress']; ?>  <?php echo $row['toaddress'];?> </div>
		    </div>	
			<div class="bookingrow">
				<div class="bookinglabel">Pickup date :</div>				
				<div >	<?php echo $row['fromdate']; ?> at <?php echo $row['fromtime']; ?> </div>				
		    </div>	
			<div class="bookingrow">						
				<div class="bookinglabel">Days :</div>				
				<div >	<?php echo $row['numdays']; ?></div>	
		    </div>	
			<div class="bookingrow">
				<div class="bookinglabel">Car type :</div>				
				<div >	<?php echo $row['taxiname']; ?></div>				
		    </div>	
			<div class="bookingrow">
				<div class="bookinglabel">KMs included :</div>				
				<div >	<?php echo $row['distance']; ?> km</div>				
		    </div>	
			<div class="bookingrow">
				<div class="bookinglabel">Total fare :</div>				
				<div >&#8377;<?php echo $row['finalamount']; ?></div>				
		    </div>			
		</div>

	</div>
</div>
</div>



</div>


</body>
</html>