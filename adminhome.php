<?php
		ini_set('display_errors', 0); 
            include("database.php");
			if(isset($_POST["searchsubmit"])) 
			{	
				$searchdate=$_POST['searchdate'];
				
				$sql="select sum(totalcost),sum(nightfare),sum(totaldayfare),sum(totaladdkmfare),sum(famount),sum(gstamount) from billdetails where cast(billon as date )='".$searchdate."'";
				$res= mysqli_query($con, $sql);
				$row=mysqli_fetch_assoc($res);

				$sql2="select count(cusid) from bookings where cast(cuscreatedon as date )='".$searchdate."'";
				$res2= mysqli_query($con, $sql2);
				$row2=mysqli_fetch_assoc($res2);
				
				$sql3="select count(did) from driverdetails where cast(driveron as date )='".$searchdate."' ";
				$res3= mysqli_query($con, $sql3);
				$row3=mysqli_fetch_assoc($res3);
				
				$sql4="select count(userid) from userdetails where cast(useron as date )='".$searchdate."'";
				$res4= mysqli_query($con, $sql4);
				$row4=mysqli_fetch_assoc($res4);
			}
			else{

				$sql="select sum(totalcost),sum(nightfare),sum(totaldayfare),sum(totaladdkmfare),sum(famount),sum(gstamount) from billdetails";
				$res= mysqli_query($con, $sql);
				$row=mysqli_fetch_assoc($res);

				$sql2="select count(cusid) from bookings";
				$res2= mysqli_query($con, $sql2);
				$row2=mysqli_fetch_assoc($res2);
				
				$sql3="select count(did) from driverdetails";
				$res3= mysqli_query($con, $sql3);
				$row3=mysqli_fetch_assoc($res3);
				
				$sql4="select count(userid) from userdetails";
				$res4= mysqli_query($con, $sql4);
				$row4=mysqli_fetch_assoc($res4);
			}
				
?>
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
	

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
.dashcard{
	border:1px solid white;
	width:20%;
	margin:3%;
	padding-bottom:1%;
	border-top-left-radius: 25px;
	border-top-right-radius: 25px;
	border-bottom-left-radius: 25px;
	border-bottom-right-radius: 25px;
}
.iconcard{
	border:1px solid white;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	width:55px;
	height:55px;
	margin:10% 0 0 5%;
}
.iconimage{
	width:80%;
	height:auto;
	padding:20%;
	margin-left:10%;
	border-radius:50px;
}
.text-card{
	margin:-70% 0 0% 200%;
	font-size:25px;
	font-weight:bold;
	width:50%;
}
.text-bottom{
	margin:0 0 0 25%;
	font-weight:bold;
	font-size:120%;
}
.top-section{
	margin-top:0%;
}
.topbox{
	margin:2%;
}
.searchcolor{ 
	color:white;
	background-color:#5D3FD3;
}
.searchcolor:hover{ 
	color:white;
	background-color:#5D3FD3;
}
.farechart{
	margin:0% 25%;
}
</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.gridbox{
	overflow-y:scroll;
	height:85%;
	margin-top:15%;
	overflow-x:hidden;
}
.dashcard{
	width:90%;
	margin:5%;
}
.navigationbar{
	margin-left:0%;
	position:static;
}
.topbox{
	position:fixed;
	margin-left:20%;
}
.hi{
	display:none;
}

.farechart{
	margin:0% -30%;
}
.text-card{
	margin:-70% 0 0% 150%;
	font-size:25px;
	font-weight:bold;
	width:50%;
	display:flex;
}
.dat{
    width:150px;
	font-size:70%;
	margin-left:30%;
}
.searchcolor{
	font-size:70%;
	margin-left:0%;
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

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Base Fare',<?php echo $row['sum(famount)'];?> ],
  ['Day Fare', <?php echo $row['sum(totaldayfare)'];?>],
  ['Night Fare',<?php echo $row['sum(nightfare)'];?>],
  ['GST Amount', <?php echo $row['sum(gstamount)'];?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':' ', 'width':580, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
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
		<div class="topbox">
			<form action="adminhome.php" method="post" class="d-flex">
					<input type="date" name="searchdate" class="form-control dat" placeholder="">
					<input type="submit" class="btn searchcolor " name="searchsubmit">			
			</form>
		</div>
</div>

<section class="gridbox">
  <div class="top-section">
	<div class=" row">
		<div class="card dashcard">
			<div class="card iconcard bg-primary">
				<i class='bx bx-user-plus text-white rounded-circle' style="font-size:50px;"></i>
								<span class="text-card" ><?php echo $row3['count(did)']; ?></span>
			</div>
			<div class="text-right">
				<hr>
				<span class="text-bottom">Total Drivers</span>
			</div>  
		</div>
		
		<div class="card dashcard">
			<div class="card iconcard bg-success" >
				<i class='bx bx-book-bookmark text-white'  style="font-size:50px;"></i>
				<span class="text-card" ><?php echo $row2['count(cusid)']; ?> </span>
			</div>
			<div class="text-right">
				<hr>
				<span class="text-bottom">Total Bookings</span>
			</div>  
		</div>

		<div class="card dashcard">
			<div class="card iconcard bg-warning" >
				<i class='bx bxs-user-account text-white'  style="font-size:50px;"></i>
				<span class="text-card" ><?php echo $row4['count(userid)']; ?> </span>
			</div>
			<div class="text-right">
				<hr>
				<span class="text-bottom">Total Registration</span>
			</div>  
		</div>
		
    </div>
  </div>
	<div class="row farechart">
		<div class="col-sm-6 ">
			<div class="container d-flex justify-container-center">
				<div class="row">
					<div class="col-md-12 text-center">
						<h4 class="btn btn-sm text-white bg-info w-100 hi">FARE CHART</h4>
						<div id="piechart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

</section>
 <script src="adminscript.js"></script>
 <!-- partial -->

</body>
</html>
