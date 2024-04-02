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
.column{
	padding:10px;
	width:33.3%;
	
}
.taxiimage{
	width:100px;
	height:auto;
	padding:7px;
	border:2px solid black;
	border-radius:10%;
}
.image{
	text-align:center;
	margin-left:13%;
}
.taxiname{
	font-size:23px;
	text-align:center;
	color:#5D3FD3;
	font-weight:bold;
	margin-top:-15%;
}
.taxitype{
	font-size:16px;
	text-align:center;
	color:#5D3FD3;
	font-weight:bold;	
	margin-top:-10px;
}
.rowss{
	display:flex;
}
.save{
	margin-top:20px;
}
.seatbag{
	margin-left:33px;
	margin-top:20px;
}
.editdetails{
	text-align:left;
}
.deletedetails{
	margin-left:175px;
	margin-right:5px;
}
.editbutton{
	background-color:#5D3FD3;
	color:white;
}
.editbutton:hover{
	background-color:#5D3FD3;
	color:white;
}
.delbtn, .editbtn{
	background:#5D3FD3;
	color:white;
}
.delbtn{
	background-color:#FF0000;
	color:white;
}
.delbtn:hover{
	background-color:#FF0000;
	color:white;
}
.buttons{
	display:flex;	
}
.home-content{
	height:45px;
}
.searchbox{
	display:flex;	
}
.gridbox{
	overflow-y:scroll;
	height:89%;
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
	left:84.5%;	
}
.whole{ display:flex; }
.addtrip{
	color:white;
	background-color:#5D3FD3;
	position:fixed;
	margin-left:.5%;
}
.addtrip:hover{
	color:white;
	background-color:#5D3FD3;
}

</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.column{
	width:600px;
}
.gridbox{
	overflow-y:scroll;
	margin-top:15%;
}
.scrolling{
	overflow-y:scroll;
	height:70%;
	width:500px;
	margin-top:30%;
}
.addtrip{
	color:white;
	background-color:#5D3FD3;
	position:fixed;
	margin-left:.5%;
	font-size:70%;
}
.custom-select{
	width:25%;
	margin-left:-25%;
	position:fixed;
	font-size:70%;	
}
.searchcolor{
	font-size:70%;
	width:100px;
}

}
</style>
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
    </div>  
   
<section class="whole">
	<a href="tripplan.php"  class="btn addtrip">Add Trip</a>

<div class="top">
		<div class="topbox">
			<form action="taxidetails.php" method="post">
				<div class="searchbox">
				  <select class="custom-select form-control" name="taxitype" >
					<option selected disabled>Select Taxi Type</option>
					<option value="Oneway">Oneway</option>
					<option value="Roundtrip">Roundtrip</option>
					<option value="Local">Local</option>
					<option value="Airport">Airport</option>
				  </select>
				  <input type="submit" class="btn searchcolor w-100" value="Search" name="searchsubmit">
			    </div>				  
			</form>
		</div>
</div>
</section>   
   
<section class="gridbox">
<div class="container">
	<div class="row scrolling">

<?php
		ini_set('display_errors', 0); 
            include("database.php");
			if(isset($_POST["searchsubmit"])) 
			{	
				$taxitype=$_POST['taxitype'];
				$query="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility  from taxidetails where taxitriptype='".$taxitype."' order by taxiid";
				$result= mysqli_query($con, $query);
			}
			else{
				$query="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility  from taxidetails  order by taxiid";
				$result= mysqli_query($con, $query);				
			}
			while($datas= mysqli_fetch_assoc($result)) {
				 $image= 'uploads/'.$datas["taxiimage"];		
?>
		<div class="column ">
			<div class="card ">
			  <div class="card-body">
			  <svg viewbox="0 0 1440 320" >
				  <defs>
					<style type="text/css">
					  .wave1 { animation: wave1 10s linear infinite; }
					  @keyframes wave1 {
						0% {transform: scaleY(1.2) translateX(0%);}
					  100% {transform: scaleY(1.2) translateX(100%);}
							 }
					</style>
					<path id='sineWave' fill="#0099ff" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
				  </defs>
				  <use class="wave1" href="#sineWave" />
				  <use class="wave1" x="-100%" href="#sineWave" />
				</svg>
				<p class="taxiname"><?php echo $datas['taxiname'];?></p>
				<p class="taxitype">( <?php echo $datas['taxitriptype'];?> )</p>
				<div class="rowss">
					<p class="save"> Rs.<?php echo $datas['taxirate'];?>/km <br>Save: <?php echo $datas['taxidiscount'];?>/km</p>
					<p class="image"><img src="<?php echo $image;?>" alt="" class="taxiimage"></p>
					<p class="seatbag"> <?php echo $datas['taxiseats']; ?> Seats<br> <?php echo $datas['taxibags']; ?> Bags</p>
				</div>
				<div class="buttons">
					<p class="editdetails"><a href="taxiupdate.php?taxiid=<?php echo $datas["taxiid"];?>"  class="btn editbutton">Update</a></p>
					<p class="deletedetails"><a href="taxidelete.php?taxiid=<?php echo $datas["taxiid"];?>"  class="btn delbtn">Delete</a></p>
				</div>
			  </div>
			</div>
		</div>
			<?php }?>
		</div>
	</div>	
</section>	


	
</section>
 <script src="adminscript.js"></script>
</body>
</html>
