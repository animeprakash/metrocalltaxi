<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["register"])) {
            include("database.php");
			
			$username=$_POST["username"];
			$useremail=$_POST["useremail"];
			$userpassword=$_POST["userpassword"];
			$usermobile=$_POST["usermobile"];
			
			$query="create table if not exists userdetails(userid int auto_increment primary key,username varchar(100),useremail varchar(200),userpassword varchar(100),usermobile long,useron datetime not null default now())";
			mysqli_query($con,$query);
			
			$qry="insert into userdetails(username,useremail,userpassword,usermobile)values('".$username."','".$useremail."','".$userpassword."','".$usermobile."') ";
			mysqli_query($con,$qry);
			header("location:userdetails.php");
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

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<style>
*{
	font-family:Serif;
	box-sizing:border-box;
}
.gridbox{
	overflow-y:scroll;
	height:85%;
	margin-top:4%;
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
img{
	width:20%;
	height:auto;
	border-radius:10%;
}
.column{
	width:25%;
	padding:1%;
	height:auto;
}
.image{
	text-align:center;
}
.drivername{ 
	text-align:center;
	margin-top:2%;
	font-size:16px;
	font-weight:bold;
}
.buttons{
	display:flex;
	border:1px solid white;
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
}
span{
	font-weight:bold;
}
.editbutton{
	color:white;
	background-color:#5D3FD3;
}
.editbutton:hover{
	color:white;
	background-color:#5D3FD3;
}
.download{
	margin-left:10%;
	margin-top:2%;
}
.view{
	margin-left:24%;
	margin-top:2%;
}
.delbtn{
	color:white;
	background-color:#FF5733;
}
.delbtn:hover{
	color:white;
	background-color:#FF5733;
}
.edit{ text-align:left;
 }
.del{ margin-left:18%; }
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
.adddriver{
	color:white;
	background-color:#5D3FD3;
	position:fixed;
	margin-left:.5%;
}
.adddriver:hover{
	color:white;
	background-color:#5D3FD3;
}
.card{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
</style>
<style>
.container {
    margin: 50px auto;
}
.panel-heading {
    text-align: center;
    margin-bottom: 10px
}

.form-inline label {
    padding-left: 10px;
    margin: 0;
    cursor: pointer
}

.btn.btn-primary {
    margin-top: 20px;
    border-radius: 15px
}

.panel {
    min-height: 380px;
    box-shadow: 20px 20px 80px rgb(218, 218, 218);
    border-radius: 12px
}

.input-field {
    border-radius: 5px;
    padding: 5px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: 1px solid #ddd;
    color: #4343ff
}

input[type='text'],
input[type='password'] {
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%;
}
.fa-user{
	font-size:10px;
}
.form-control{
	border:none;
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

<section class="gridbox">
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">REGISTRATION FORM</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="userregister.php" method="POST">
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="text" name="username" class="form-control" placeholder="Enter Your Name" required> </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="email" name="useremail" class="form-control" placeholder="Enter Your Email" required>  </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="password" name="userpassword" class="form-control" placeholder="Enter Your Password" required>  </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="text" name="usermobile" class="form-control" placeholder="Enter Mobile Number" required>  </div>
                        </div>
                        <div class=""><input type="submit" value="REGISTER" name="register" class="btn btn-primary w-100" ></div>
                    </form>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                </div>
            </div>
        </div>
    </div>
</div>
</section>	

</section>
 <script src="adminscript.js"></script>
</body>
</html>
