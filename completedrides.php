<?php		ini_set('display_errors', 0); 
            include("database.php");
			if(isset($_POST["searchsubmit"])) 
			{			
				$customerdata=$_POST['customerdata'];
				$allquery="select * from ridedetails where customerid='".$customerdata."' order by rideid desc";
				$result= mysqli_query($con, $allquery);	
			}
			else
			{
				$query="select * from ridedetails  order by rideid desc";
				$result= mysqli_query($con, $query);				
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
	
		<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
		<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/datalist-css/dist/datalist-css.min.js"></script>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
		
	

<style>
@media only screen and (min-device-width : 600px) {
*{
	font-family:Serif;
	box-sizing:border-box;
}
.gridbox{
	overflow-y:scroll;
	height:85%;
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


.searchbox{ display:flex; }
.searchcolor{ 
	color:white;
	background-color:#5D3FD3;
}
.searchcolor:hover{ 
	color:white;
	background-color:#5D3FD3;
}
.top{
	position:fixed;
	left:79.5%;	
}
.whole{ 
	display:flex;
	margin-top:1%;
}

table{
	background-color:white;
}
tr{
	border:1px solid lightgray;
}

th,td{
	width:7%;
	padding:1% 1%;
}
.drivertd{
	width:20%;
}

.btn-sm, .addcustomer{
	color:white;
	background-color:#5D3FD3;
}
.addcustomer{
	color:white;
	background-color:#5D3FD3;
	margin-left:1%;
}
.addcustomer:hover{
	color:white;
	background-color:#5D3FD3;
}
.view{
	margin-top:1%;
	font-size:20px;
}
.views{
		display:flex;
}
.whatsappbtn{
	color:green;
	font-size:20px;
	padding:10px;
}
.card{
	margin:2%;
	border:1px solid lightgray;
	padding:1%;
}
.selectbox{
	width:200px;
}
}
</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
*{
	font-family:Serif;
	box-sizing:border-box;
}
.gridbox{
	overflow-y:scroll;
	height:85%;
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


.searchbox{ display:flex; }
.searchcolor{ 
	color:white;
	background-color:#5D3FD3;
}
.searchcolor:hover{ 
	color:white;
	background-color:#5D3FD3;
}
.top{
	position:fixed;
	left:60%;	
}
.whole{ 
	display:flex;
	margin-top:1%;
}

table{
	background-color:white;
}
tr{
	border:1px solid lightgray;
}

th,td{
	width:7%;
	padding:10px 30px;
}
.drivertd{
	width:20%;
}

.btn-sm, .addcustomer{
	color:white;
	background-color:#5D3FD3;
}
.addcustomer{
	color:white;
	background-color:#5D3FD3;
	margin-left:1%;
	font-size:10px;
}
.addcustomer:hover{
	color:white;
	background-color:#5D3FD3;
}
.view{
	margin-top:1%;
	font-size:20px;
}
.views{
		display:flex;
}
.whatsappbtn{
	color:green;
	font-size:20px;
	padding:10px;
}
.card{
	margin:2%;
	border:1px solid lightgray;
	padding:1%;
}
.selectbox{
	width:200px;
}
#customerdata{
	width:100px;
	height:30px;
}
::placeholder{
	font-size:10px;
}
#search{
	height:30px;
	font-size:10px;
}
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
		  <li><a href="completedrides.php">Completed Rides</a></li>
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
<section class="whole">
	<a href="index.php"  class="btn addcustomer">Add Customer</a>

<div class="top">
		<div class="topbox">
			<form action="completedrides.php" method="post">
				<div class="searchbox">
					<input type="text" name="customerdata" id="customerdata"  placeholder=" Search Customer ID">
					<input type="submit" class="btn searchcolor " name="searchsubmit" id="search">
			    </div>				  
			</form>
		</div>
</div>
</section>
<section class="gridbox">
 <div class="card">
	<div class="table-responsive text-nowrap">
	<div class="tbl">
	<table>
	<tr>
		<th>Customer ID</th>
		<th>Customer Name</th>
		<th>customer Mobile</th>
		<th>Driver ID</th>
	</tr>

<?php
			while($datas= mysqli_fetch_assoc($result)) {
?>
	<tr>
		<td><?php echo $datas['customerid'];?></td>
		<td><?php echo $datas['customername'];?></td>
		<td><?php echo $datas['customermobile'];?></td>
		<td>GM00<?php echo $datas['driverdata'];?></td>
	</tr>
<?php } ?>
	</table>
	</div>
	</div>
	</div>
</section>	

</section>
 <script src="adminscript.js"></script>
</body>
</html>
