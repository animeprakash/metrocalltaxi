<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["update"])) {
            include("database.php");
            $taxiid=$_POST['taxiid'];
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
			
			$query="update taxidetails set taxiimage='".$taxiimage."',taxiname='".$taxiname."',taxiabout='".$taxiabout."',taxirate='".$taxirate."',taxidiscount='".$taxidiscount."',taxitriptype='".$taxitriptype."',taxiactype='".$taxiactype."',taxiseats='".$taxiseats."',taxibags='".$taxibags."',taxifacility='".$taxifacility."',taximinimumkm='".$taximinimumkm."',taxiextrakm='".$taxiextrakm."',taxiextrahour='".$taxiextrahour."' where taxiid='".$taxiid."'";
			
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
<?php
		ini_set('display_errors', 0); 
            include("database.php");	
			$taxiid=$_GET['taxiid'];
			$qury="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility,taximinimumkm,taxiextrakm,taxiextrahour from taxidetails where taxiid='".$taxiid."'";
			$res=mysqli_query($con,$qury);
			while($row=mysqli_fetch_assoc($res)){
?>
<section class="formscroll">
	<div class="onewayform">
        <form class="needs-validation" novalidate action="taxiupdate.php" method="post"  enctype="multipart/form-data">
			<input type="hidden" id="taxiid" name="taxiid" value="<?php echo $row['taxiid'];?>" required>
			<div class="row firstrow">
			<select class="form-control" name="taxitriptype" required>
									<option selected value="<?php echo $row['taxitriptype'];?>"><?php echo $row['taxitriptype'];?></option>
									<option value="Oneway">One Way</option>
									<option value="Roundtrip">Round Trip</option>
									<option value="Local">Local</option>
									<option value="Airport">Airport</option>
									</select>
			</div>
			<div class="row">
				<div class="column"><input type="text" id="taxiname" name="taxiname"  value="<?php echo $row['taxiname'];?>" class="form-control w-100" required></div>				
				<div class="column"><input type="file" id="taxiimage" name="taxiimage" placeholder="Upload taxi image" class="form-control w-100 " required></div>
			</div>
			<div class="row">
				<div class="column"> <input type="text" id="taxirate" name="taxirate" value="<?php echo $row['taxirate'];?>" class="form-control w-100" required> </div>				
				<div class="column"> <input type="text" id="taxidiscount" name="taxidiscount" value="<?php echo $row['taxidiscount'];?>" class="form-control w-100" required></div>
			</div>	
			<div class="row">
				<div class="column"> <input type="text" id="taximinimumkm" name="taximinimumkm" value="<?php echo $row['taximinimumkm'];?>"  class="form-control w-100" required> </div>				
				<div class="column"> <input type="text" id="taxiextrakm" name="taxiextrakm" value="<?php echo $row['taxiextrakm'];?>" class="form-control w-100" required></div>
			</div>
			<div class="row">
				<div class="column">
					<input type="text" id="taxiextrahour" name="taxiextrahour" value="<?php echo $row['taxiextrahour'];?>" class="form-control w-100" required>
				</div>				
				<div class="column"> <select class="form-control" name="taxiactype" required>
									<option selected value="<?php echo $row['taxiactype'];?>"><?php echo $row['taxiactype'];?></option>
									<option value="AC">AC</option>
									<option value="Non AC">Non AC</option>
									</select></div>
			</div>	
			<div class="row">
				<div class="column"> <input type="text" id="taxiseats" name="taxiseats" value="<?php echo $row['taxiseats'];?>" class="form-control w-100" required> </div>				
				<div class="column"> <input type="text" id="taxibags" name="taxibags" value="<?php echo $row['taxibags'];?>" class="form-control w-100" required></div>
			</div>			
			<div class="row">
				<div class="column"><textarea rows="5" id="taxiabout" name="taxiabout" placeholder="Type about the taxi"  class="form-control w-100" required></textarea>  </div>
				<div class="column"><textarea rows="5" id="taxifacility" name="taxifacility" placeholder="Type Terms and Conditions" class="form-control w-100" required></textarea>  </div>
			</div>  
			<div class="row buttonrow">
				<div class="submitcolumn"><input type="submit" value="UPDATE" class="btn bg-primary text-white w-25" name="update" id="taxiupdate">
				</div>
			</div>
		</form> 
	</div>
</section>	
<?php } ?>

	
</section>
 <script src="adminscript.js"></script>
</body>
</html>
