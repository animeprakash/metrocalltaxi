<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["vehiclesubmit"])) {
            include("database.php");
			$vehicleid=$_POST['vehicleid'];
            $vehiclenumber=$_POST['vehiclenumber'];
			$vehicleowner=$_POST['vehicleowner'];
			$vehicletype=$_POST['vehicletype'];
			$vehiclebrand=$_POST['vehiclebrand'];
			
			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$vehiclefrontphoto=$_FILES["vehiclefrontphoto"]["name"];
			$target_file = $target_dir . basename($_FILES["vehiclefrontphoto"]["name"]);
			move_uploaded_file($_FILES["vehiclefrontphoto"]["tmp_name"], $target_file);

			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$vehiclebackphoto=$_FILES["vehiclebackphoto"]["name"];
			$target_file = $target_dir . basename($_FILES["vehiclebackphoto"]["name"]);
			move_uploaded_file($_FILES["vehiclebackphoto"]["tmp_name"], $target_file);
			
			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$vehiclercfront=$_FILES["vehiclercfront"]["name"];
			$target_file = $target_dir . basename($_FILES["vehiclercfront"]["name"]);
			move_uploaded_file($_FILES["vehiclercfront"]["tmp_name"], $target_file);

			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$vehiclercback=$_FILES["vehiclercback"]["name"];
			$target_file = $target_dir . basename($_FILES["vehiclercback"]["name"]);
			move_uploaded_file($_FILES["vehiclercback"]["tmp_name"], $target_file);
			
			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$vehicleinsurance=$_FILES["vehicleinsurance"]["name"];
			$target_file = $target_dir . basename($_FILES["vehicleinsurance"]["name"]);
			move_uploaded_file($_FILES["vehicleinsurance"]["tmp_name"], $target_file);
			
			$query="update vehicledetails set vehiclenumber='".$vehiclenumber."',vehicleowner='".$vehicleowner."',vehicletype='".$vehicletype."',vehiclebrand='".$vehiclebrand."',vehiclercfront='".$vehiclercfront."',vehiclercback='".$vehiclercback."',vehicleinsurance='".$vehicleinsurance."',vehiclefrontphoto='".$vehiclefrontphoto."',vehiclebackphoto='".$vehiclebackphoto."' where vehicleid='".$vehicleid."'";
			mysqli_query($con,$query);	
			header("Location: driversdetails.php");
        }
?>


<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["driversubmit"])) {
            include("database.php");
			$did=$_POST['did'];
			$driverid='abc';
            $drivername=$_POST['drivername'];
			$drivergender=$_POST['drivergender'];
			$driverdob=$_POST['driverdob'];
			$drivermobile=$_POST['drivermobile'];
			$drivingsince=$_POST['drivingsince'];
			$driverlicenseno=$_POST['driverlicenseno'];
			$driveraadharno=$_POST['driveraadharno'];

			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$driverimage=$_FILES["driverimage"]["name"];
			$target_file = $target_dir . basename($_FILES["driverimage"]["name"]);
			move_uploaded_file($_FILES["driverimage"]["tmp_name"], $target_file);
			
			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$driverlicencefront=$_FILES["driverlicencefront"]["name"];
			$target_file = $target_dir . basename($_FILES["driverlicencefront"]["name"]);
			move_uploaded_file($_FILES["driverlicencefront"]["tmp_name"], $target_file);
			
			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$driverlicenceback=$_FILES["driverlicenceback"]["name"];
			$target_file = $target_dir . basename($_FILES["driverlicenceback"]["name"]);
			move_uploaded_file($_FILES["driverlicenceback"]["tmp_name"], $target_file);
			
			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$driveraadharfront=$_FILES["driveraadharfront"]["name"];
			$target_file = $target_dir . basename($_FILES["driveraadharfront"]["name"]);
			move_uploaded_file($_FILES["driveraadharfront"]["tmp_name"], $target_file);			

			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$driveraadharback=$_FILES["driveraadharback"]["name"];
			$target_file = $target_dir . basename($_FILES["driveraadharback"]["name"]);
			move_uploaded_file($_FILES["driveraadharback"]["tmp_name"], $target_file);
			
			$qq="update driverdetails set drivername='".$drivername."',drivergender='".$drivergender."',driverdob='".$driverdob."',drivermobile='".$drivermobile."',driverimage='".$driverimage."',drivingsince='".$drivingsince."',driverlicenseno='".$driverlicenseno."',driverlicensefront='".$driverlicencefront."',driverlicenseback='".$driverlicenceback."',driveraadharno='".$driveraadharno."',driveraadharfront='".$driveraadharfront."',driveraadharback='".$driveraadharback."'  where did='".$did."'";
			
			mysqli_query($con,$qq);
			//header("Location: driversdetails.php");
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
input[type="file"] {
    display: none;
}
.driverimage{
	border: 1px solid gray;
    display: inline-block;
    padding: 6px 12px;
	border-radius:4px;
	width:100%;
    cursor: pointer;
}
.driverdob{
	border: 1px solid lightgray;
    display: inline-block;
    padding: 6px 12px;
	border-radius:4px;
	width:100%;
    cursor: pointer;
}
.formscroll{
	overflow-y:scroll;
	height:92%;
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
.onewayform h4{
	font-size:25px;
	font-weight:bold;
	color:#5D3FD3;
	margin-left:40%;
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
	
<section class="formscroll">

	<div class="onewayform">
						<h4>DRIVER DETAILS</h4>
		
<?php
		ini_set('display_errors', 0); 
            include("database.php");
			$did=$_GET['did'];
			$qq="select did,driverid,drivername,drivergender,driverdob,drivermobile,driverimage,drivingsince,driverlicenseno,driverlicensefront,driverlicenseback,driveraadharno,driveraadharfront,driveraadharback from driverdetails where did='".$did."'";			
			$result=mysqli_query($con,$qq);
			
			while($data=mysqli_fetch_assoc($result)){
?>		
		
        <form class="needs-validation" novalidate action="driverupdate.php" method="post"  enctype="multipart/form-data">
			<input type="hidden" name="did" value="<?php echo $data['did']; ?>" required>
			<div class="row">
				<div class="column"><input type="text" id="drivername" name="drivername" value="<?php echo $data['drivername']; ?>" placeholder="Enter the Driver name" class="form-control w-100" required></div>				
						<div class="column"> <select class="form-control" name="drivergender" required>
									<option selected value="<?php echo $data['drivergender']; ?>"><?php echo $data['drivergender'];?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									</select></div>
			</div>
			<div class="row">
				<div class="column d-flex"><label for="driverdob" class="driverdob w-50">Driver DOB</label><input type="date" id="driverdob" name="driverdob" value="<?php echo $data['driverdob']; ?>" class="form-control w-50" required></div>
				<div class="column"> <input type="text" id="drivermobile" name="drivermobile" value="<?php echo $data['drivermobile']; ?>" class="form-control w-100" required></div>
			</div>			
			<div class="row">
				<div class="column"> 
				<label for="driverimage" class="driverimage">Upload Driver Image</label>
				<input type="file" id="driverimage" name="driverimage" placeholder="Enter driver image"  class="form-control w-100" required> </div>				
				<div class="column d-flex"><label for="drivingsince" class="driverdob w-50">Driving Since</label><input type="date" id="drivingsince" name="drivingsince"value="<?php echo $data['drivingsince']; ?>"  class="form-control w-50" required></div>			
			</div>	 
			<div class="row">
				<div class="column"> <input type="text" id="driverlicenseno" name="driverlicenseno" value="<?php echo $data['driverlicenseno']; ?>" class="form-control w-100" required></div>
				<div class="column d-flex">
					<label for="driverlicencefront" class="driverimage">License Front Image</label>
					<input type="file" id="driverlicencefront" name="driverlicencefront"   class="form-control w-50" required> 
					
					<label for="driverlicenceback" class="driverimage">License Back Image</label>
					<input type="file" id="driverlicenceback" name="driverlicenceback"   class="form-control w-50" required> 
				</div>					
			</div>
			<div class="row">
				<div class="column"> <input type="text" id="driveraadharno" name="driveraadharno" value="<?php echo $data['driveraadharno']; ?>" class="form-control w-100" required></div>
				<div class="column d-flex">
					<label for="driveraadharfront" class="driverimage">Aadhar Front Image</label>
					<input type="file" id="driveraadharfront" name="driveraadharfront"   class="form-control w-50" required> 
					
					<label for="driveraadharback" class="driverimage">Aadhar Back Image</label>
					<input type="file" id="driveraadharback" name="driveraadharback"   class="form-control w-50" required> 
				</div>					
			</div>			
			<div class="row buttonrow">
				<div class="submitcolumn"><input type="submit" value="UPDATE" class="btn bg-primary text-white w-25" name="driversubmit" id="taxisubmit">
				</div>
			</div>
		</form> 
<?php } ?>
	</div>



	<div class="onewayform">
					<h4>VEHICLE DETAILS</h4>
<?php
		ini_set('display_errors', 0); 
            include("database.php");
			$vehicleid=$_GET['vehicleid'];
			$que="select vehicleid,vehiclenumber,vehicleowner,vehicletype,vehiclebrand,vehiclercfront,vehiclercback,vehicleinsurance,vehiclefrontphoto,vehiclebackphoto from vehicledetails where vehicleid='".$vehicleid."'";			
			$reslt=mysqli_query($con,$que);
			
			while($row=mysqli_fetch_assoc($reslt)){
?>		

        <form class="needs-validation" novalidate action="driverupdate.php" method="post"  enctype="multipart/form-data">
			<input type="hidden" name="vehicleid" value="<?php echo $row['vehicleid']; ?>" required>
			<div class="row">
				<div class="column"><input type="text" id="vehiclenumber" name="vehiclenumber"  value="<?php echo $row['vehiclenumber']; ?>" class="form-control w-100" required></div>				
				<div class="column"><input type="text" id="vehicleowner" name="vehicleowner"  value="<?php echo $row['vehicleowner']; ?>" class="form-control w-100" required></div>								
			</div>
			<div class="row">
				<div class="column"><input type="text" id="vehicletype" name="vehicletype"  value="<?php echo $row['vehicletype']; ?>" class="form-control w-100" required></div>				
				<div class="column"><input type="text" id="vehiclebrand" name="vehiclebrand"  value="<?php echo $row['vehiclebrand']; ?>" class="form-control w-100" required></div>								
			</div>			
			<div class="row">
				<div class="column d-flex">
					<label for="vehiclercfront" class="driverimage">RC Front Photo</label>
					<input type="file" id="vehiclercfront" name="vehiclercfront"   class="form-control w-50" required> 
					
					<label for="vehiclercback" class="driverimage">RC Back Photo</label>
					<input type="file" id="vehiclercback" name="vehiclercback"   class="form-control w-50" required> 
				</div>			
				
				<div class="column"> <label for="vehicleinsurance" class="driverimage">Upload Insurance Photo</label>
				<input type="file" id="vehicleinsurance" name="vehicleinsurance"   class="form-control w-100" required> </div>				
			
			</div>	 
			<div class="row">
			<div class="column">
				<label for="vehiclefrontphoto" class="driverimage">Car Front Photo with Number Plate</label>
				<input type="file" id="vehiclefrontphoto" name="vehiclefrontphoto"  class="form-control w-100" required> </div>					
			<div class="column">
				<label for="vehiclebackphoto" class="driverimage">Car Back Photo with Number Plate</label>
				<input type="file" id="vehiclebackphoto" name="vehiclebackphoto"  class="form-control w-100" required> </div>				
			</div>			
			<div class="row buttonrow">
				<div class="submitcolumn"><input type="submit" value="UPDATE" class="btn bg-primary text-white w-25" name="vehiclesubmit" id="vehiclesubmit">
				</div>
			</div>
		</form> 
<?php } ?>
	</div>

</section>	


	
</section>
 <script src="adminscript.js"></script>
</body>
</html>
