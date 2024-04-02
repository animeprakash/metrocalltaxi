<?php		ini_set('display_errors', 0); 
            include("database.php");
			if(isset($_POST["searchsubmit"])) 
			{			
				$cusdata=$_POST['cusdata'];
				$allquery="select cusid,cusname,cusmobile,triptype,taxiname from bookings where cusname like '%$cusdata%' or cusid='".$cusdata."' order by cusid desc";
				$result= mysqli_query($con, $allquery);	
			}
			else
			{
				$query="select cusid,cusname,cusmobile,triptype,taxiname from bookings order by cusid desc";
				$result= mysqli_query($con, $query);				
			}
?>
		<?php 	
			include("database.php");
	
			$cusid=$_GET['customerid'];
			$whatsapp="select cusid,fromaddress,toaddress,triptype,distance,taxiname,fromtime,fromdate,cuspickup,cusdrop,customerid,customername,customermobile,did,drivermobile,drivername,vehiclenumber from ridedetails inner join driverdetails on driverdata=did inner join bookings on customerid=cusid inner join vehicledetails on did=vehicleid where customerid='".$cusid."'";
			$appres= mysqli_query($con, $whatsapp);			
			while($app= mysqli_fetch_assoc($appres)) 
			{
				$cusphone=$app['customermobile'];
				$drivername=$app['drivername'];
				$str="Dear sir,Please find the Your trip details below.\n\nBooking ID:".$app['cusid']."\nRoute: ".$app['fromaddress']." to ".$app['toaddress']."\nTrip type: ".$app['triptype']."\nDistance: ".$app['distance']." Kms\nPick up Date and Time: ".$app['fromdate']." ".$app['fromtime']."\nPick up Location: ".$app['cuspickup']."\nDrop Location: ".$app['cusdrop']."\nVehicle type: ".$app['taxiname']."\nVehicle Number: ".$app['vehiclenumber']."\nDriver Name:".$drivername."\nDriver Mobile: ".$app['drivermobile'];
			$url="https://wa.me/".$cusphone."/?text=".urlencode($str);
			header("Location:".$url);
			}
		?>
<?php 	
			include("database.php");
	
			$did=$_GET['did'];
			$driveapp="select cusname,cusmobile,fromaddress,toaddress,triptype,distance,taxiname,fromtime,fromdate,cuspickup,cusdrop,customerid,customername,customermobile,driverdata,drivermobile,drivername from ridedetails inner join driverdetails on driverdata=did inner join bookings on customerid=cusid where driverdata='".$did."'";
			$drivingres= mysqli_query($con, $driveapp);			
			while($wapp= mysqli_fetch_assoc($drivingres)) 
			{
				$driverphone=$wapp['drivermobile'];
				$customername=$wapp['customername'];
				$str="Dear sir,Please find the Your trip details below.\n\nCustomer name: ".$wapp['cusname']."\nCustomer Mobile: ".$wapp['cusmobile']."\nRoute: ".$wapp['fromaddress']." to ".$wapp['toaddress']."\nTrip type: ".$wapp['triptype']."\nPick up Date and Time: ".$wapp['fromdate']." ".$wapp['fromtime']."\nPick up Location: ".$wapp['cuspickup']."\nDrop Location: ".$wapp['cusdrop'];
			$url="https://wa.me/".$driverphone."/?text=".urlencode($str);
			header("Location:".$url);
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
	width:10%;
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
#cusdata{
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

.drivermobile{
	float:right;
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
<script>
			function gotowhatsapp(a){
				
				window.open("allrides.php?customerid="+a, 'popupWindow', 'width=500,height=500');
				return false;
			}	
</script>
<script>
			function driverwhatsapp(b){
				
				window.open("allrides.php?did="+b, 'popupWindow', 'width=500,height=500');
				return false;
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
<section class="whole">
	<a href="index.php"  class="btn addcustomer">Add Customer</a>

<div class="top">
		<div class="topbox">
			<form action="allrides.php" method="post">
				<div class="searchbox">
					<input type="text" name="cusdata" id="cusdata"  placeholder=" Search Customer data">
					<input type="submit" class="btn searchcolor " name="searchsubmit" id="search">
			    </div>				  
			</form>
		</div>
</div>
</section>
<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["submit"])) {
            include("database.php");
            $customername=$_POST['customername'];
			$customerid=$_POST['customerid'];
			$customermobile=$_POST['customermobile'];
			$driverdata=$_POST['driverdata'];
			
			$q="create table if not exists ridedetails (rideid int not null auto_increment primary key,customerid int(10),customername varchar(200),customermobile long,driverdata varchar(100),ridemode varchar(100))";
			$qu="insert into ridedetails(customerid,customername,customermobile,driverdata) values('".$customerid."','".$customername."','".$customermobile."','".$driverdata."')";
			$delete="delete from ridedetails where driverdata=''";

			mysqli_query($con,$q);
			mysqli_query($con,$qu);	
			mysqli_query($con,$delete);
			//header("Location: .php");
			
		
		}
?>

<section class="gridbox">
 <div class="card">
	<div class="table-responsive text-nowrap">
	<div class="tbl">
	<table>
	<tr>
		<th >Cus Id</th>
		<th>Cus Name</th>
		<th>Trip Type</th>
		<th>Model</th>
		<th class="drivertd">Driver Name</th>
		<th>View</th>
		<th class="drivertd">Mode</th>
	</tr>

<?php
			while($datas= mysqli_fetch_assoc($result)) {
			$model=$datas['taxiname'];	
			$cusid=$datas['cusid'];
?>
	<tr>
		<td><?php echo $datas['cusid'];?></td>
		<td><?php echo $datas['cusname'];?></td>
		<td><?php echo $datas['triptype'];?></td>
		<td><?php echo $datas['taxiname'];?></td>	

			<form action="allrides.php" method="post" novalidate id="rideform">		
		<td class="drivertd ">
		  <div class="d-flex">
			<div class="col-8 selectbox">
			<input type="text" id="driverdata" name="driverdata"autocomplete="off" required class="form-control form-control-sm w-100 dname <?php echo $datas['cusid'];?>"  style="width:100%;">

			</div>
			<div class="col-4">
			<input type="hidden" name="customerid" id="customerid" value="<?php echo $datas['cusid'];?>" required>
			<input type="hidden" name="customername" id="customername" value="<?php echo $datas['cusname'];?>" required>
			<input type="hidden" name="customermobile" id="customermobile" value="<?php echo $datas['cusmobile'];?>" required>
			<input type="submit" value="SUBMIT" name="submit"  class=" btn btn-sm text-white">
			</div>
		  </div>
		  			<div class="<?php echo $datas['cusid'];?> box"></div>
		</td>			
			</form>
<script>
$(document).ready(function() {
	$(".<?php echo $datas['cusid'];?>").keyup(function() {
		$.ajax({
			type: "POST",
			url: "driverselection.php",
			data: 'model=<?php echo $model?>&cusid=<?php echo $cusid;?>&phonenumber='+ $(this).val(),
		/*	beforeSend: function() {
				$(".drivername").css("background", "#FFF url(images/LoaderIcon.gif) no-repeat 165px");
			},  */
			success: function(data) {
				$(".<?php echo $datas['cusid'];?>").show();
				$(".<?php echo $datas['cusid'];?>").html(data);
				//$("#driverdata").css({"color":"white","background-color":"#0096FF"});
			}
		});
	});
});

function driver(val) {
	$(".dname").val(val);
	$(".box").hide();
}
</script>
		<td>
			<div class="views">
			<p class="view"><a target="_blank" class="whatsappbtn" onclick="gotowhatsapp(<?php echo $datas["cusid"];?>)" ><i class="fa fa-whatsapp"></i></a></p>
			<?php 
				ini_set('display_errors', 0);
				include ('database.php');
				$cusid=$datas['cusid'];
				$driver="select customerid,driverdata,cusid from bookings inner join ridedetails on cusid=customerid where cusid='".$cusid."'";
				$resdriver=mysqli_query($con,$driver);
				while($row= mysqli_fetch_assoc($resdriver)){ 
			?>
			<p class="view"><a target="_blank" class="whatsappbtn" onclick="driverwhatsapp(<?php echo $row['driverdata']; ?>)"><i class="fa fa-whatsapp"></i></a></p>									
			<?php } ?>
			<p class="view"><a href="customerview.php?cusid=<?php echo $datas["cusid"];?>"  class=""><i class="fa fa-eye"></i></a></p>
			</div>
		</td>
<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["ridesubmit"])) {
            include("database.php");
			$customerid=$_POST['customerid'];
			$ridemode=$_POST['ridemode'];
			$qq="update ridedetails set ridemode='".$ridemode."' where customerid='".$customerid."'";
			mysqli_query($con,$qq);
		}
?>
		<td class="drivertd">
		  	<form action="allrides.php" method="post" novalidate id="rideform">
			<input type="hidden" name="customerid" id="customerid" value="<?php echo $datas['cusid'];?>" required>
				<div class="d-flex">
					<div class="col-8 selectbox">
						<select  name="ridemode" required class="form-control form-control-sm w-100"  style="width:100%;"onfocus='this.size=1;' onblur='this.size=1;' onchange='this.size=1;'>
							<option value="" disabled selected>Select mode  </option>
							<option value="Completed">Completed </option>
							<option value="Not Completed">Not Completed </option>
						</select>
					</div>
					<div>
						<input type="submit" value="SUBMIT" name="ridesubmit"  class=" btn btn-sm text-white">
					</div>
		        </div>
			</form>
		</td>
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
