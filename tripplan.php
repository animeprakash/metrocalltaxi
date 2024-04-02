<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["submit"])) {
            include("database.php");
            $taxiname=$_POST['taxiname'];
            $taxiabout=$_POST['taxiabout'];
			$taxirate=$_POST['taxirate'];
			$taxidiscount=$_POST['taxidiscount'];
			$taxitriptype=$_POST['taxitriptype'];
			$taxiactype=$_POST['taxiactype'];
			$taxiseats=$_POST['taxiseats'];
			$taxibags=$_POST['taxibags'];
			$taxifacility=$_POST['taxifacility'];
			$taximinimumkm=$_POST['taximinimumkm'];
			$taxiextrakm=$_POST['taxiextrakm'];
			$taxiextrahour=$_POST['taxiextrahour'];
			
			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$taxiimage=$_FILES["taxiimage"]["name"];
			$target_file = $target_dir . basename($_FILES["taxiimage"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["taxiimage"]["tmp_name"], $target_file);
			
			$q="create table if not exists taxidetails (taxiid int not null auto_increment primary key,taxiimage longblob,taxiname varchar(100),taxiabout varchar(500),taxirate int,taxidiscount float,taxitriptype varchar(100),taxiactype varchar(100),taxiseats int(10),taxibags int(10),taxifacility varchar(2000),taximinimumkm int(10),taxiextrakm int(10),taxiextrahour int(10))ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
			$query="insert into taxidetails(taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility,taximinimumkm,taxiextrakm,taxiextrahour)values('".$taxiimage."','".$taxiname."','".$taxiabout."','".$taxirate."','".$taxidiscount."','".$taxitriptype."','".$taxiactype."','".$taxiseats."','".$taxibags."','".$taxifacility."','".$taximinimumkm."','".$taxiextrakm."','".$taxiextrahour."')";

			mysqli_query($con,$q);
			mysqli_query($con,$query);
			
			header("location:taxidetails.php");
        }
?>

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
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<style>
*{
	font-family:Serif;
}
.firstrow{
		padding:10px;
}
.column{
	padding:10px;
	width:50%;
}
.onewayform{
	margin:1% 10%;
}
.onewayform{
	border:1px solid gray;
	background-color:rgb(250,250,250);
	border-radius:10px;
	padding:1%;
}

.home-content{
	font-size:30px;
}

.buttonrow{
	text-align:center;
}
</style>
<style>
#driver-list {
	margin-top:10px;
    list-style: none;
	min-height:20px;
	max-height:180px;
    padding: 0;
	min-width:300px;
    max-width:300px;
	overflow-x:hidden;
	overflow-y:scroll;
	position:absolute;
	border:1px solid black;
	border-radius:5px;
	background-color:white;
}

#driver-list li {
	color:black;
    padding: 10px;
    background-color:white;
    border-bottom:1px solid #0096FF;
}

#driver-list li:hover {
	color:white;
    background-color:#0096FF;
}

#driver-list::-webkit-scrollbar {
	width: 5px;
	height:3px;
	background-color:white;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background:#0096FF; 
  border-radius: 10px;
}

</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {

.formscroll{
	overflow-x:scroll;
	height:90%;
	margin-top:4%;
	width:100%;
}
.onewayform{
	overflow-x:scroll;
	width:800px;
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
			function onewayvehiclefun(a){
				window.location.href = "onewayvehicle.php?onewaytaxiid="+a;
			}	
</script>
<script>
$(document).ready(function() {
	$("#taxiname").keyup(function() {
		$.ajax({
			type: "POST",
			url: "taxiselection.php",
			data: 'taxiname='+ $(this).val(),
		/*	beforeSend: function() {
				$("#taxiname").css("background", "#FFF url(images/LoaderIcon.gif) no-repeat 165px");
			},  */
			success: function(data) {
				$("#taxibox").show();
				$("#taxibox").html(data);
				//$("#taxiname").css({"color":"white","background-color":"#0096FF"});
			}
		});
	});
});

function driver(val) {
	$("#taxiname").val(val);
	$("#taxibox").hide();
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

<section class="formscroll container">
	<div class="onewayform">
        <form class="needs-validation" novalidate action="tripplan.php" method="post"  enctype="multipart/form-data">
			<div class="row firstrow">
			<select class="form-control" name="taxitriptype" required>
									<option selected disabled>Select Trip Type</option>
									<option value="Oneway">One Way</option>
									<option value="Roundtrip">Round Trip</option>
									<option value="Local">Local</option>
									<option value="Airport">Airport</option>
									</select>
			</div>
			<div class="row">
				<div class="column"><input type="text" id="taxiname" name="taxiname"  placeholder="Enter the taxi name" class="form-control w-100" required autocomplete="off"></div>				
				<div class="column"><input type="file" id="taxiimage" name="taxiimage" placeholder="Upload taxi image" class="form-control w-100 " required></div>
			</div>
			<div id="taxibox"> </div>
			<div class="row">
				<div class="column"> <input type="text" id="taxirate" name="taxirate" placeholder="Enter Fare per km"  class="form-control w-100" required> </div>				
				<div class="column"> <input type="text" id="taxidiscount" name="taxidiscount" placeholder="Enter Discount per km"class="form-control w-100" required></div>
			</div>	
			<div class="row">
				<div class="column"> <input type="text" id="taximinimumkm" name="taximinimumkm" placeholder="Enter Minimum km"  class="form-control w-100" required> </div>				
				<div class="column"> <input type="text" id="taxiextrakm" name="taxiextrakm" placeholder="Enter Extra km"class="form-control w-100" required></div>
			</div>
			<div class="row">
				<div class="column">
					<input type="text" id="taxiextrahour" name="taxiextrahour" placeholder="Enter Extra Hour for Local Rental" class="form-control w-100" required>
				</div>				
				<div class="column"> <select class="form-control" name="taxiactype" required>
									<option selected disabled>Ac Type</option>
									<option value="AC">AC</option>
									<option value="Non AC">Non AC</option>
									</select></div>
			</div>	
			<div class="row">
				<div class="column"> <input type="text" id="taxiseats" name="taxiseats" placeholder="Enter the no of seats"  class="form-control w-100" required> </div>				
				<div class="column"> <input type="text" id="taxibags" name="taxibags" placeholder="Enter the no of bags"class="form-control w-100" required></div>
			</div>			
			<div class="row">
				<div class="column"><textarea rows="5" id="taxiabout" name="taxiabout" placeholder="Type about the taxi"  class="form-control w-100" required></textarea>  </div>
				<div class="column"><textarea rows="5" id="taxifacility" name="taxifacility" placeholder="Type Terms and Conditions" class="form-control w-100" required></textarea>  </div>
			</div>  
			<div class="row buttonrow">
				<div class="submitcolumn"><input type="submit" value="SUBMIT" class="btn bg-primary text-white w-25" name="submit" id="taxisubmit">
								<input type="reset" value="RESET" class="btn bg-danger text-white w-25" name="" id="">
				</div>
			</div>
		</form> 
	</div>
</section>	


	
</section>
 <script src="adminscript.js"></script>
</body>
</html>
