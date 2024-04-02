<?php
			ini_set('display_errors', 0);
            include("database.php");
			
			$trip=$_GET['trip'];
			$username=$_GET["username"];
			$useremail=$_GET["useremail"];
			$userpassword=$_GET["userpassword"];
			$usermobile=$_GET["usermobile"];

?>

<?php
			ini_set('display_errors', 0); 
            include("database.php");

			$sourcecity=$_GET['sourcecity'];
            $destinationcity=$_GET['destinationcity'];
			$fromdate=$_GET['fromdate'];
			$todate=$_GET['todate'];
            $fromtime=$_GET['fromtime'];
			$airporttrip=$_GET['airporttrip'];
			$airportaddress=$_GET['airportaddress'];
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="taxitooltip.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
@media only screen and (min-device-width : 600px){
* {
	box-sizing: border-box;
   font-family: 'Poppins', sans-serif;
}
.carselection{
	border:1px solid #0096FF;
	border-top-left-radius:8px;
	border-top-right-radius:8px;
	height:100px;
	text-align:center;
	width:75%;
	margin:1% 12.5% 1% 12.5%;
}
.carrow{
	display:flex;
}
.column{
	width:20%;
}
.imagefile{
	width:100px;
	height:90px;
	padding:5px 0px;
}
.fetchdata{
	background-color:#F5F5F5;
	width:100%;
	padding:0.5% 0 0.5% 0;
}
.distance{
	background-color:#F8F8F8;
}
.amount{
	background-color:#F5F5F5;
	display:flex;
}
.columntwo{
	width:50%;
}
.phead{
	font-size:20px;
	font-weight:bold;
	margin-top:20px;
	text-align:left;
}
.icons{
	font-size:28px;
	color:#0096FF;
	padding:20px 0 0 0 ;
}
.spans{
	padding-top:2px;
	font-size:10px;
	text-align:center;
	font-weight:bold;
}
.ptooltip{
	font-size:15px;
	margin-top:-14px;
	text-align:left;
	display:flex;
}
.qtip{
	font-size:20px;
	color:#0096FF;
}
.totalamount{
	color:	#4db34d;
	font-size:17px;
	font-weight:700;
	margin-top:25px;
}
.totaldiscount{
	color:#e61919;
	font-size:13px;	
	margin-top:-15px;
}
.finalamount{
	font-weight:bold;
	font-size:22px;
	color:#0096FF;
	margin-top:19px;
}
.distanceshow{
	margin-top:18px;
	font-weight:bold;
	font-size:20px;
	margin-left:25px;
}
.hour{
	margin-top:-8%;
	text-align:right;
	margin-right:12%;
}

.formbutton{
	width:100px;
	margin-top:30px;
	color:white;
	background-color:#0096FF;
}
.formbutton:hover{
	color:white;
	background-color:#4db34d;
}
.secrow{ 
	display:flex;
	width:75%;
	margin:0% 12.5% 1% 12.5%;	
}
.topcolumn{
	width:25%;
	margin:17px 0px 0px 0%;
}
.topcolumntwo{
	width:25%;
	margin:-15px 5% 0px 0%;
	text-align:right;
}
.taxiscroll{
	overflow-y:scroll;
	height:80%;
}
.features{
	border:1px solid #0096FF;
	border-bottom-left-radius:8px;
	border-bottom-right-radius:8px;
	height:auto;
	width:75%;
	margin:-14.5px 12.5% 0% 12.5%;

	background-color:white;
}
.buttonn{ 
	margin:-16px 0 0 0;
	color:#4db34d;
}
.tollgst{ font-size:10px;}
.buttongroup{
	margin:5px;
}
.but{
	border:1px solid black;
	font-weight:bold;
	color:gray;	
}
.roundborder{
	border:1px solid #0096FF;
	border-radius:100px;
	font-size:18px;
	padding:10px;
	color:#0096FF;
}
.inclusion{
	display:flex;
	margin-left:5%;
}
.para{
	margin-left:8%;
}
.exclusion{
	display:flex;
	margin-left:5%;	
}
.expara{
	margin-left:8%;
}
.facipara{
	padding:0 10px 0 10px;
	margin-left:12%;
}
.tandcpara{ margin:10px;}
.localbuttongroup{
	text-align:center;
}
.modal-custom{
	max-width:90%;
}
.modal-content{
	min-width:100%;
}
.mobileview{
	display:none;
}
}
</style>
<style>
@media only screen and (min-device-width :0px) and (max-device-width :600px) {
* {
	box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.taxiscroll{
	display:none;
}

.taxiimage{
	max-width:100%;
	min-height:50%;
	max-height:70%;
	margin-bottom:0;
	margin-left:-20%;
	position:static;
}
.cardcar{
	margin-top:5px;
	margin-bottom:3%;
	border:1px solid gray;
	border-radius:10px;
}
.tble{
	padding:3% 10%;
}
td{
	padding:4px;
}

.finalamount{
	font-weight:bold;
	color:#0096FF;
	font-size:18px;
}
.totalamount{
	font-weight:bold;
	color:red;
	font-size:18px;
}
.formbutton{
	width:96%;
	margin:-2% 2%;
	color:white;
	background-color:#0096FF;
}
.formbutton:hover{
	color:white;
	background-color:#4db34d;
}
.circleimage{
	width:50px;
	height:50px;
	padding:5px;
	border:1px solid black;
	border-radius:80%;
}
.navcircle{
	display:flex;
	overflow-x:scroll;
	margin:5px 0px;	
	width:100%;
}

a:link {
    text-decoration:none;
}
a:hover {
    text-decoration: none;
}
.roundborder{
	border:1px solid #0096FF;
	border-radius:100px;
	font-size:10px;
	padding:4px;
	color:#0096FF;
}
.inclusions, .exclusions, .facilities, .tandc{
	margin:8px;
}
.but{
	min-width:2%;
	max-width:30%;
	border:1px solid black;
	font-weight:bold;
	font-size:100%;
	color:gray;
}
.buttongroup{
	margin:10px;
}

.arrow-ribbon {
  background:lightgray;
  color: #FFF;
  padding: 5px 30px;
  position: absolute;
  top: 10px;
  right:0px;
  
}
.arrow-ribbon:before {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    content: "";
    left: -12px;
    border-top: 15px solid transparent;
    border-right: 12px solid lightgray;
    border-bottom: 15px solid transparent;
    width: 0;
}
.fetchdata{
	background-color:#F5F5F5;
}
.col-sm-3{
	max-width:50%;
	padding:1%;
}

.modal-content{
    border-radius: 20px;
    min-height:100%;
    min-width:60%;
	max-width:96%;
}

}
</style>
<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
				}
				
			$(document).ready(function(){
			  $(".features").on("hide.bs.collapse", function(){
				$(".buttonn").html('Details <span class="fa fa-chevron-circle-down" style="font-size:15px"></span>');
				//$(".carselection").css({"border-bottom-left-radius":"8px"});
			  });
			  $(".features").on("show.bs.collapse", function(){
				$(".buttonn").html('Details <span class="fa fa-chevron-circle-up" style="font-size:15px"></span>');
				//$(".carselection").css({"border-radius":"none"});
			  });
			});
</script>	
<script>
				function twohours(){
					$(".twohours").css({"display":"block"});
					$(".fourhours").css({"display":"none"});
					$(".sixhours").css({"display":"none"});
					$(".eighthours").css({"display":"none"});
					$(".tenhours").css({"display":"none"});
					$(".twohoursbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".fourhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".sixhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".eighthoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tenhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function fourhours(){
					$(".twohours").css({"display":"none"});
					$(".fourhours").css({"display":"block"});
					$(".sixhours").css({"display":"none"});
					$(".eighthours").css({"display":"none"});
					$(".tenhours").css({"display":"none"});
					$(".twohoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".fourhoursbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".sixhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".eighthoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tenhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});					
				}
				function sixhours(){
					$(".twohours").css({"display":"none"});
					$(".fourhours").css({"display":"none"});
					$(".sixhours").css({"display":"block"});
					$(".eighthours").css({"display":"none"});
					$(".tenhours").css({"display":"none"});
					$(".twohoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".fourhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});	
					$(".sixhoursbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".eighthoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tenhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});					
				}
				function eighthours(){
					$(".twohours").css({"display":"none"});
					$(".fourhours").css({"display":"none"});
					$(".sixhours").css({"display":"none"});
					$(".eighthours").css({"display":"block"});
					$(".tenhours").css({"display":"none"});
					$(".twohoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".fourhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".sixhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".eighthoursbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".tenhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function tenhours(){
					$(".twohours").css({"display":"none"});
					$(".fourhours").css({"display":"none"});
					$(".sixhours").css({"display":"none"});
					$(".eighthours").css({"display":"none"});
					$(".tenhours").css({"display":"block"});
					$(".twohoursbut").css({"background-color":"white","color":"gray","border-color":"black"});	
					$(".fourhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".sixhoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".eighthoursbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tenhoursbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});					
				}
</script>			
<script>
				function inclusions(){
					$(".inclusions").css({"display":"flex"});
					$(".exclusions").css({"display":"none"});
					$(".facilities").css({"display":"none"});
					$(".tandc").css({"display":"none"});
					$(".inclusionsbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".exclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".facilitiesbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tandcbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function exclusions(){
					$(".exclusions").css({"display":"flex"});
					$(".inclusions").css({"display":"none"});
					$(".facilities").css({"display":"none"});
					$(".tandc").css({"display":"none"});
					$(".exclusionsbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".inclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".facilitiesbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tandcbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}				
				
				function facilities(){
					$(".facilities").css({"display":"flex"});
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
	<div>
		<?php include("topnavbarcar.php");?>
	</div>
<section class="fetchdata">

	<div class="container " >
		<div class="row ">
			<div class="col-sm-3 ">
				<?php echo $sourcecity;?>
			</div>
			<div class="col-sm-3">
				Pick up : <?php echo $fromdate;?>
			</div>
			<div class="col-sm-3">
				Time : <?php echo $fromtime;?>
			</div>
			<div class="col-sm-3 " style="top:-5px;">
					<button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exampleModal" style="background-color:#0096FF;color:white;">Modify</button>
			</div>	
		</div>
	</div>
	<div class="container">
		<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-custom w-100" role="document" >
			<div class="modal-content" >
			  <div class="modal-body">
					<div class="container" style="width:80%;">
						<div class="row"><?php include("searchforms.php");?></div>
					</div>	
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>	
	</div>
</section>

<section class="taxiscroll" >
	<div >
		<img src="banner.png" alt="" class="carselection ">
	</div>
	<div class="localbuttongroup" >	
		<div class="btn-group" role="group" >
			<button class="btn but btn-sm twohoursbut" onclick="twohours()" >2 hrs | 20 km</button>
			<button class="btn but btn-sm fourhoursbut" onclick="fourhours()" >4 hrs | 40 km</button>
			<button class="btn but btn-sm sixhoursbut" onclick="sixhours()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">6 hrs | 60 km</button>
			<button class="btn but btn-sm eighthoursbut" onclick="eighthours()" >8 hrs | 80 km</button>
			<button class="btn but btn-sm tenhoursbut" onclick="tenhours()" >10 hrs | 100 km</button>
		</div>
	</div>

<!--two hours-->
	<?php
			ini_set('display_errors', 0);
			include("database.php");
			$query="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$result= mysqli_query($con, $query);
			while($datas= mysqli_fetch_assoc($result)) {
				 $image= 'uploads/'.$datas["taxiimage"];
				//Total amount calculation 
				 $rate=$datas['taxirate'];
				 $totalamount=round(20*$rate);		
				//Total discount calculation
				$discount=$datas['taxidiscount'];
				$totaldiscount=round(20*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
		?>
<div class="twohours" style="display:none;">
<div class="carselection carrow ">
		<div class="column"><img src="<?php echo $image; ?>" alt="" class="imagefile">
		</div>
		<div class="column">
				<p class="phead"><?php echo $datas['taxiname']; ?></p>
				<p class="ptooltip"> or equivalent<i class="qtip tip-right material-icons" data-tip="<?php echo $datas['taxiabout']; ?>">&#xe85f;</i></p>
		</div>
		<div class="column distance"> 
				<p class="distanceshow">Icludes 20 km</p>
				<p class="hour">and 2 hours</p>
				<p type="button"  class="collapsed buttonn " data-toggle="collapse" data-target=".<?php echo $datas['taxiid'];?>" aria-expanded="false" aria-controls="multiCollapseExample1"> Details <span class="fa fa-chevron-circle-down" style="font-size:15px"></span></p>
			
		</div>
		<div class="column amount"> 
			<div class="columntwo">
				<p class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></p>
				<p class="totaldiscount">Save &#8377;<?php echo $totaldiscount; ?></p>
			</div>
			<div class="columntwo">
				<p class="finalamount">&#8377;<?php echo $finalamount; ?></p>
				<p class="tollgst">Includes Toll & GST</p>
			</div>
		</div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
				<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datas['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity='-'; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=20; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datas['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Local" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>
</div>	

<div id="multiCollapseExample1" class="collapse <?php echo $datas['taxiid'];?> features" >

	<div class="buttongroup" >	
		<div class="btn-group" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="inclusions()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exclusions()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facilities()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tandc()" >T&C </button>
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

</div>
</div>
<?php }?>


<!--four hours-->
	<?php
			ini_set('display_errors', 0);
			include("database.php");
			$query="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$result= mysqli_query($con, $query);
			while($datas= mysqli_fetch_assoc($result)) {
				 $image= 'uploads/'.$datas["taxiimage"];
				//Total amount calculation 
				 $rate=$datas['taxirate'];
				 $totalamount=round(40*$rate);		
				//Total discount calculation
				$discount=$datas['taxidiscount'];
				$totaldiscount=round(40*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
		?>
<div class="fourhours" style="display:none;">
<div class="carselection carrow">
		<div class="column"><img src="<?php echo $image; ?>" alt="" class="imagefile">
		</div>
		<div class="column">
				<p class="phead"><?php echo $datas['taxiname']; ?></p>
				<p class="ptooltip"> or equivalent<i class="qtip tip-right material-icons" data-tip="<?php echo $datas['taxiabout']; ?>">&#xe85f;</i></p>
		</div>
		<div class="column distance"> 
				<p class="distanceshow">Icludes 40 km</p>
				<p class="hour">and 4 hours</p>
				<p type="button"  class="collapsed buttonn " data-toggle="collapse" data-target=".<?php echo $datas['taxiid'];?>" aria-expanded="false" aria-controls="multiCollapseExample1"> Details <span class="fa fa-chevron-circle-down" style="font-size:15px"></span></p>
			
		</div>
		<div class="column amount"> 
			<div class="columntwo">
				<p class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></p>
				<p class="totaldiscount">Save &#8377;<?php echo $totaldiscount; ?></p>
			</div>
			<div class="columntwo">
				<p class="finalamount">&#8377;<?php echo $finalamount; ?></p>
				<p class="tollgst">Includes Toll & GST</p>
			</div>
		</div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
				<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datas['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity='-'; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=40; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datas['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Local" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>
</div>	

<div id="multiCollapseExample1" class="collapse <?php echo $datas['taxiid'];?> features" >

	<div class="buttongroup" >	
		<div class="btn-group" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="inclusions()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exclusions()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facilities()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tandc()" >T&C </button>
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

</div>
</div>
<?php }?>

<!--six hours-->
	<?php
			ini_set('display_errors', 0);
			include("database.php");
			$query="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$result= mysqli_query($con, $query);
			while($datas= mysqli_fetch_assoc($result)) {
				 $image= 'uploads/'.$datas["taxiimage"];
				//Total amount calculation 
				 $rate=$datas['taxirate'];
				 $totalamount=round(60*$rate);		
				//Total discount calculation
				$discount=$datas['taxidiscount'];
				$totaldiscount=round(60*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
		?>
<div class="sixhours" >
<div class="carselection carrow">
		<div class="column"><img src="<?php echo $image; ?>" alt="" class="imagefile">
		</div>
		<div class="column">
				<p class="phead"><?php echo $datas['taxiname']; ?></p>
				<p class="ptooltip"> or equivalent<i class="qtip tip-right material-icons" data-tip="<?php echo $datas['taxiabout']; ?>">&#xe85f;</i></p>
		</div>
		<div class="column distance"> 
				<p class="distanceshow">Icludes 60 km</p>
				<p class="hour">and 6 hours</p>
				<p type="button"  class="collapsed buttonn " data-toggle="collapse" data-target=".<?php echo $datas['taxiid'];?>" aria-expanded="false" aria-controls="multiCollapseExample1"> Details <span class="fa fa-chevron-circle-down" style="font-size:15px"></span></p>
			
		</div>
		<div class="column amount"> 
			<div class="columntwo">
				<p class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></p>
				<p class="totaldiscount">Save &#8377;<?php echo $totaldiscount; ?></p>
			</div>
			<div class="columntwo">
				<p class="finalamount">&#8377;<?php echo $finalamount; ?></p>
				<p class="tollgst">Includes Toll & GST</p>
			</div>
		</div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
				<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datas['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity='-'; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=60; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datas['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Local" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>
</div>	

<div id="multiCollapseExample1" class="collapse <?php echo $datas['taxiid'];?> features" >

	<div class="buttongroup" >	
		<div class="btn-group" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="inclusions()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exclusions()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facilities()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tandc()" >T&C </button>
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

</div>
</div>
<?php }?>


<!--8 hours-->
	<?php
			ini_set('display_errors', 0);
			include("database.php");
			$query="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$result= mysqli_query($con, $query);
			while($datas= mysqli_fetch_assoc($result)) {
				 $image= 'uploads/'.$datas["taxiimage"];
				//Total amount calculation 
				 $rate=$datas['taxirate'];
				 $totalamount=round(80*$rate);		
				//Total discount calculation
				$discount=$datas['taxidiscount'];
				$totaldiscount=round(80*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
		?>
<div class="eighthours" style="display:none;">
<div class="carselection carrow">
		<div class="column"><img src="<?php echo $image; ?>" alt="" class="imagefile">
		</div>
		<div class="column">
				<p class="phead"><?php echo $datas['taxiname']; ?></p>
				<p class="ptooltip"> or equivalent<i class="qtip tip-right material-icons" data-tip="<?php echo $datas['taxiabout']; ?>">&#xe85f;</i></p>
		</div>
		<div class="column distance"> 
				<p class="distanceshow">Icludes 80 km</p>
				<p class="hour">and 8 hours</p>
				<p type="button"  class="collapsed buttonn " data-toggle="collapse" data-target=".<?php echo $datas['taxiid'];?>" aria-expanded="false" aria-controls="multiCollapseExample1"> Details <span class="fa fa-chevron-circle-down" style="font-size:15px"></span></p>
			
		</div>
		<div class="column amount"> 
			<div class="columntwo">
				<p class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></p>
				<p class="totaldiscount">Save &#8377;<?php echo $totaldiscount; ?></p>
			</div>
			<div class="columntwo">
				<p class="finalamount">&#8377;<?php echo $finalamount; ?></p>
				<p class="tollgst">Includes Toll & GST</p>
			</div>
		</div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
				<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datas['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity='-'; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=80; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datas['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Local" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>
</div>	

<div id="multiCollapseExample1" class="collapse <?php echo $datas['taxiid'];?> features" >

	<div class="buttongroup" >	
		<div class="btn-group" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="inclusions()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exclusions()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facilities()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tandc()" >T&C </button>
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

</div>
</div>
<?php }?>


<!--10 hours-->
	<?php
			ini_set('display_errors', 0);
			include("database.php");
			$query="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$result= mysqli_query($con, $query);
			while($datas= mysqli_fetch_assoc($result)) {
				 $image= 'uploads/'.$datas["taxiimage"];
				//Total amount calculation 
				 $rate=$datas['taxirate'];
				 $totalamount=round(100*$rate);		
				//Total discount calculation
				$discount=$datas['taxidiscount'];
				$totaldiscount=round(100*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
		?>
<div class="tenhours" style="display:none;">
<div class="carselection carrow">
		<div class="column"><img src="<?php echo $image; ?>" alt="" class="imagefile">
		</div>
		<div class="column">
				<p class="phead"><?php echo $datas['taxiname']; ?></p>
				<p class="ptooltip"> or equivalent<i class="qtip tip-right material-icons" data-tip="<?php echo $datas['taxiabout']; ?>">&#xe85f;</i></p>
		</div>
		<div class="column distance"> 
				<p class="distanceshow">Icludes 100 km</p>
				<p class="hour">and 10 hours</p>
				<p type="button"  class="collapsed buttonn " data-toggle="collapse" data-target=".<?php echo $datas['taxiid'];?>" aria-expanded="false" aria-controls="multiCollapseExample1"> Details <span class="fa fa-chevron-circle-down" style="font-size:15px"></span></p>
			
		</div>
		<div class="column amount"> 
			<div class="columntwo">
				<p class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></p>
				<p class="totaldiscount">Save &#8377;<?php echo $totaldiscount; ?></p>
			</div>
			<div class="columntwo">
				<p class="finalamount">&#8377;<?php echo $finalamount; ?></p>
				<p class="tollgst">Includes Toll & GST</p>
			</div>
		</div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
				<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datas['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity='-'; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=60; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datas['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Local" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>
</div>	

<div id="multiCollapseExample1" class="collapse <?php echo $datas['taxiid'];?> features" >

	<div class="buttongroup" >	
		<div class="btn-group" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="inclusions()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exclusions()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facilities()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tandc()" >T&C </button>
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

</div>
</div>
<?php }?>


</section>


<script>
				function incs(){
					$(".inclusions").css({"display":"block"});
					$(".exclusions").css({"display":"none"});
					$(".facilities").css({"display":"none"});
					$(".tandc").css({"display":"none"});
					$(".inclusionsbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".exclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".facilitiesbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tandcbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function exs(){
					$(".exclusions").css({"display":"block"});
					$(".inclusions").css({"display":"none"});
					$(".facilities").css({"display":"none"});
					$(".tandc").css({"display":"none"});
					$(".exclusionsbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".inclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".facilitiesbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tandcbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}				
				
				function facs(){
					$(".facilities").css({"display":"block"});
					$(".inclusions").css({"display":"none"});
					$(".exclusions").css({"display":"none"});
					$(".tandc").css({"display":"none"});
					$(".facilitiesbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$(".inclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".exclusionsbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$(".tandcbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function tc(){
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
<section class="mobileview">
	<div class="buttongroup" >	
		<div class="btn-group d-flex" role="group" >
			<button class="btn butt btn-sm twohoursbut" onclick="twohours()" style="font-size:85%;border:1px solid black;">2&nbsp;hrs&nbsp;|&nbsp;20&nbsp;km</button>
			<button class="btn butt btn-sm fourhoursbut" onclick="fourhours()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;font-size:85%;">4 hrs | 40 km</button>
			<button class="btn butt btn-sm sixhoursbut" onclick="sixhours()" style="font-size:85%;border:1px solid black;">6 hrs | 60 km</button>
		</div>
	</div>
	<div class="buttongroup" >	
		<div class="btn-group d-flex" role="group" >
			<button class="btn butt btn-sm eighthoursbut" onclick="eighthours()" style="font-size:85%;border:1px solid black;">8 hrs | 80 km</button>
			<button class="btn butt btn-sm tenhoursbut" onclick="tenhours()" style="font-size:85%;border:1px solid black;">10 hrs | 100 km</button>
		</div>
	</div>
<div class="container twohours" style="display:none;">
	<div class="navcircle">
<?php			ini_set('display_errors', 0);
			include("database.php");
			$querythree="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$resultthree= mysqli_query($con, $querythree);
			while($datasthree= mysqli_fetch_assoc($resultthree)) {
				 $image= 'uploads/'.$datasthree["taxiimage"];
			//Total amount calculation 
				 $rate=$datasthree['taxirate'];
				 $totalamount=round(20*$rate);
				//Total discount calculation
				$discount=$datasthree['taxidiscount'];
				$totaldiscount=round(20*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
?>
			<a class="anchor" style="text-decoration:none;font-weight:bold;color:black;" href="selectlocaltaxi.php?taxiid=<?php echo $datasthree['taxiid']; ?>&sourcecity=<?php echo $sourcecity; ?>&destinationcity=<?php echo $destinationcity; ?>&airportaddress=<?php echo $airportaddress; ?>&fromdate=<?php echo $fromdate; ?>&fromtime=<?php echo $fromtime; ?>">	
				<div class="text-center anchor ">				
						<?php echo $datasthree['taxiname'];?><br>
						<img src="<?php echo $image; ?>" alt="" class="circleimage"><br>
						&#8377;<?php echo $finalamount;?>
				</div>
			</a>
<?php } ?>
	</div>
<?php			ini_set('display_errors', 0);
			include("database.php");
			
			if(isset($_GET["taxiid"])) 
			{
			$taxiid=$_GET['taxiid'];
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' and taxiid='".$taxiid."' ";
			$resulttwo= mysqli_query($con, $querytwo);
			}
			else{
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' limit 0,1 ";
			$resulttwo= mysqli_query($con, $querytwo);				
			}
			
			
			while($datastwo= mysqli_fetch_assoc($resulttwo)) {
				 $image= 'uploads/'.$datastwo["taxiimage"];
				//Total amount calculation 
				 $rate=$datastwo['taxirate'];
				 $totalamount=round(20*$rate);		
				//Total discount calculation
				$discount=$datastwo['taxidiscount'];
				$totaldiscount=round(20*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
			
?>

		<div class="card cardcar">
		  <div class="row">
			<div class="col-7 tble">
				<table>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:18px;"><?php echo $datastwo['taxiname']; ?></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold">or equivalent</td></tr>
					<tr><td  class="finalamount">&#8377;<?php echo $finalamount; ?></td></tr>
					<tr><td  class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;"><?php echo $distance=20;?> kms package </td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;">Includes toll & GST</td></tr>
				</table>				
			</div>
			<div class="col-5" >
				<div class="box">
					<div class="arrow-ribbon"><?php echo $datastwo['taxiseats']; ?> Seater</div>
				</div>
				<div style="margin-top:70px;">
					<img src="<?php echo $image; ?>" alt="" class="taxiimage"> 
				</div>
			</div>	
          </div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
			<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datastwo['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=20 ; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datastwo['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Oneway" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>		  
		</div>	
<div class="card cardcar">
	<div class="buttongroup" >	
		<div class="btn-group d-flex" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="incs()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exs()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facs()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tc()" >T&C </button>
		</div>
	</div>

	<div class="inclusion inclusions " id="inclusions" >
			<p class="para"><i class="fa-solid fa-gas-pump roundborder"></i> Base fare for <?php echo $distance=20; ?> km</p>
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
			<p class="facipara"><i class="fas fa-chair roundborder"></i> <?php echo $datastwo['taxiseats']; ?>  Seater</p>
			<p class="facipara"><i class='fa fa-shopping-bag roundborder'></i> <?php echo $datastwo['taxibags']; ?>  bags</p>
			<p class="facipara"><i class='fas fa-wind roundborder'></i> <?php echo $datastwo['taxiactype']; ?> </p>
	</div>
	<div class="tandc" id="tandc" style="display:none">
			<p class="tandcpara"><?php echo $datastwo['taxifacility']; ?></p>
	</div>
</div>		
<?php } ?>
</div>

<!--4  hours-->
<div class="container fourhours" >
	<div class="navcircle">
<?php			ini_set('display_errors', 0);
			include("database.php");
			$querythree="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$resultthree= mysqli_query($con, $querythree);
			while($datasthree= mysqli_fetch_assoc($resultthree)) {
				 $image= 'uploads/'.$datasthree["taxiimage"];
			//Total amount calculation 
				 $rate=$datasthree['taxirate'];
				 $totalamount=round(40*$rate);
				//Total discount calculation
				$discount=$datasthree['taxidiscount'];
				$totaldiscount=round(40*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
?>
			<a class="anchor" style="text-decoration:none;font-weight:bold;color:black;" href="selectlocaltaxi.php?taxiid=<?php echo $datasthree['taxiid']; ?>&sourcecity=<?php echo $sourcecity; ?>&destinationcity=<?php echo $destinationcity; ?>&airportaddress=<?php echo $airportaddress; ?>&fromdate=<?php echo $fromdate; ?>&fromtime=<?php echo $fromtime; ?>">	
				<div class="text-center anchor ">				
						<?php echo $datasthree['taxiname'];?><br>
						<img src="<?php echo $image; ?>" alt="" class="circleimage"><br>
						&#8377;<?php echo $finalamount;?>
				</div>
			</a>
<?php } ?>
	</div>
<?php			ini_set('display_errors', 0);
			include("database.php");
			
			if(isset($_GET["taxiid"])) 
			{
			$taxiid=$_GET['taxiid'];
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' and taxiid='".$taxiid."' ";
			$resulttwo= mysqli_query($con, $querytwo);
			}
			else{
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' limit 0,1 ";
			$resulttwo= mysqli_query($con, $querytwo);				
			}
			
			
			while($datastwo= mysqli_fetch_assoc($resulttwo)) {
				 $image= 'uploads/'.$datastwo["taxiimage"];
				//Total amount calculation 
				 $rate=$datastwo['taxirate'];
				 $totalamount=round(40*$rate);		
				//Total discount calculation
				$discount=$datastwo['taxidiscount'];
				$totaldiscount=round(40*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
			
?>

		<div class="card cardcar">
		  <div class="row">
			<div class="col-7 tble">
				<table>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:18px;"><?php echo $datastwo['taxiname']; ?></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold">or equivalent</td></tr>
					<tr><td  class="finalamount">&#8377;<?php echo $finalamount; ?></td></tr>
					<tr><td  class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;"><?php echo $distance=40;?> kms package </td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;">Includes toll & GST</td></tr>
				</table>				
			</div>
			<div class="col-5" >
				<div class="box">
					<div class="arrow-ribbon"><?php echo $datastwo['taxiseats']; ?> Seater</div>
				</div>
				<div style="margin-top:70px;">
					<img src="<?php echo $image; ?>" alt="" class="taxiimage"> 
				</div>
			</div>	
          </div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
			<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datastwo['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=40 ; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datastwo['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Oneway" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>		  
		</div>	
<div class="card cardcar">
	<div class="buttongroup" >	
		<div class="btn-group d-flex" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="incs()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exs()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facs()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tc()" >T&C </button>
		</div>
	</div>

	<div class="inclusion inclusions " id="inclusions" >
			<p class="para"><i class="fa-solid fa-gas-pump roundborder"></i> Base fare for <?php echo $distance=40; ?> km</p>
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
			<p class="facipara"><i class="fas fa-chair roundborder"></i> <?php echo $datastwo['taxiseats']; ?>  Seater</p>
			<p class="facipara"><i class='fa fa-shopping-bag roundborder'></i> <?php echo $datastwo['taxibags']; ?>  bags</p>
			<p class="facipara"><i class='fas fa-wind roundborder'></i> <?php echo $datastwo['taxiactype']; ?> </p>
	</div>
	<div class="tandc" id="tandc" style="display:none">
			<p class="tandcpara"><?php echo $datastwo['taxifacility']; ?></p>
	</div>
</div>		
<?php } ?>
</div>

<!--6 hours-->
<div class="container sixhours" style="display:none;">
	<div class="navcircle">
<?php			ini_set('display_errors', 0);
			include("database.php");
			$querythree="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$resultthree= mysqli_query($con, $querythree);
			while($datasthree= mysqli_fetch_assoc($resultthree)) {
				 $image= 'uploads/'.$datasthree["taxiimage"];
			//Total amount calculation 
				 $rate=$datasthree['taxirate'];
				 $totalamount=round(60*$rate);
				//Total discount calculation
				$discount=$datasthree['taxidiscount'];
				$totaldiscount=round(60*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
?>
			<a class="anchor" style="text-decoration:none;font-weight:bold;color:black;" href="selectlocaltaxi.php?taxiid=<?php echo $datasthree['taxiid']; ?>&sourcecity=<?php echo $sourcecity; ?>&destinationcity=<?php echo $destinationcity; ?>&airportaddress=<?php echo $airportaddress; ?>&fromdate=<?php echo $fromdate; ?>&fromtime=<?php echo $fromtime; ?>">	
				<div class="text-center anchor ">				
						<?php echo $datasthree['taxiname'];?><br>
						<img src="<?php echo $image; ?>" alt="" class="circleimage"><br>
						&#8377;<?php echo $finalamount;?>
				</div>
			</a>
<?php } ?>
	</div>
<?php		ini_set('display_errors', 0);
			include("database.php");
			
			if(isset($_GET["taxiid"])) 
			{
			$taxiid=$_GET['taxiid'];
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' and taxiid='".$taxiid."' ";
			$resulttwo= mysqli_query($con, $querytwo);
			}
			else{
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' limit 0,1 ";
			$resulttwo= mysqli_query($con, $querytwo);				
			}
			
			
			while($datastwo= mysqli_fetch_assoc($resulttwo)) {
				 $image= 'uploads/'.$datastwo["taxiimage"];
				//Total amount calculation 
				 $rate=$datastwo['taxirate'];
				 $totalamount=round(60*$rate);		
				//Total discount calculation
				$discount=$datastwo['taxidiscount'];
				$totaldiscount=round(60*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
			
?>

		<div class="card cardcar">
		  <div class="row">
			<div class="col-7 tble">
				<table>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:18px;"><?php echo $datastwo['taxiname']; ?></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold">or equivalent</td></tr>
					<tr><td  class="finalamount">&#8377;<?php echo $finalamount; ?></td></tr>
					<tr><td  class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;"><?php echo $distance=60;?> kms package </td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;">Includes toll & GST</td></tr>
				</table>				
			</div>
			<div class="col-5" >
				<div class="box">
					<div class="arrow-ribbon"><?php echo $datastwo['taxiseats']; ?> Seater</div>
				</div>
				<div style="margin-top:70px;">
					<img src="<?php echo $image; ?>" alt="" class="taxiimage"> 
				</div>
			</div>	
          </div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
			<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datastwo['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=60 ; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datastwo['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Oneway" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>		  
		</div>	
<div class="card cardcar">
	<div class="buttongroup" >	
		<div class="btn-group d-flex" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="incs()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exs()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facs()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tc()" >T&C </button>
		</div>
	</div>

	<div class="inclusion inclusions " id="inclusions" >
			<p class="para"><i class="fa-solid fa-gas-pump roundborder"></i> Base fare for <?php echo $distance=60; ?> km</p>
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
			<p class="facipara"><i class="fas fa-chair roundborder"></i> <?php echo $datastwo['taxiseats']; ?>  Seater</p>
			<p class="facipara"><i class='fa fa-shopping-bag roundborder'></i> <?php echo $datastwo['taxibags']; ?>  bags</p>
			<p class="facipara"><i class='fas fa-wind roundborder'></i> <?php echo $datastwo['taxiactype']; ?> </p>
	</div>
	<div class="tandc" id="tandc" style="display:none">
			<p class="tandcpara"><?php echo $datastwo['taxifacility']; ?></p>
	</div>
</div>		
<?php } ?>
</div>

<!--eight hours-->
<div class="container eighthours" style="display:none;">
	<div class="navcircle">
<?php			ini_set('display_errors', 0);
			include("database.php");
			$querythree="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$resultthree= mysqli_query($con, $querythree);
			while($datasthree= mysqli_fetch_assoc($resultthree)) {
				 $image= 'uploads/'.$datasthree["taxiimage"];
			//Total amount calculation 
				 $rate=$datasthree['taxirate'];
				 $totalamount=round(80*$rate);
				//Total discount calculation
				$discount=$datasthree['taxidiscount'];
				$totaldiscount=round(80*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
?>
			<a class="anchor" style="text-decoration:none;font-weight:bold;color:black;" href="selectlocaltaxi.php?taxiid=<?php echo $datasthree['taxiid']; ?>&sourcecity=<?php echo $sourcecity; ?>&destinationcity=<?php echo $destinationcity; ?>&airportaddress=<?php echo $airportaddress; ?>&fromdate=<?php echo $fromdate; ?>&fromtime=<?php echo $fromtime; ?>">	
				<div class="text-center anchor ">				
						<?php echo $datasthree['taxiname'];?><br>
						<img src="<?php echo $image; ?>" alt="" class="circleimage"><br>
						&#8377;<?php echo $finalamount;?>
				</div>
			</a>
<?php } ?>
	</div>
<?php		ini_set('display_errors', 0);
			include("database.php");
			
			if(isset($_GET["taxiid"])) 
			{
			$taxiid=$_GET['taxiid'];
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' and taxiid='".$taxiid."' ";
			$resulttwo= mysqli_query($con, $querytwo);
			}
			else{
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' limit 0,1 ";
			$resulttwo= mysqli_query($con, $querytwo);				
			}
			
			
			while($datastwo= mysqli_fetch_assoc($resulttwo)) {
				 $image= 'uploads/'.$datastwo["taxiimage"];
				//Total amount calculation 
				 $rate=$datastwo['taxirate'];
				 $totalamount=round(80*$rate);		
				//Total discount calculation
				$discount=$datastwo['taxidiscount'];
				$totaldiscount=round(80*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
			
?>

		<div class="card cardcar">
		  <div class="row">
			<div class="col-7 tble">
				<table>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:18px;"><?php echo $datastwo['taxiname']; ?></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold">or equivalent</td></tr>
					<tr><td  class="finalamount">&#8377;<?php echo $finalamount; ?></td></tr>
					<tr><td  class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;"><?php echo $distance=80;?> kms package </td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;">Includes toll & GST</td></tr>
				</table>				
			</div>
			<div class="col-5" >
				<div class="box">
					<div class="arrow-ribbon"><?php echo $datastwo['taxiseats']; ?> Seater</div>
				</div>
				<div style="margin-top:70px;">
					<img src="<?php echo $image; ?>" alt="" class="taxiimage"> 
				</div>
			</div>	
          </div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
			<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datastwo['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=80 ; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datastwo['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Oneway" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>		  
		</div>	
<div class="card cardcar">
	<div class="buttongroup" >	
		<div class="btn-group d-flex" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="incs()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exs()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facs()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tc()" >T&C </button>
		</div>
	</div>

	<div class="inclusion inclusions " id="inclusions" >
			<p class="para"><i class="fa-solid fa-gas-pump roundborder"></i> Base fare for <?php echo $distance=80 ; ?> km</p>
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
			<p class="facipara"><i class="fas fa-chair roundborder"></i> <?php echo $datastwo['taxiseats']; ?>  Seater</p>
			<p class="facipara"><i class='fa fa-shopping-bag roundborder'></i> <?php echo $datastwo['taxibags']; ?>  bags</p>
			<p class="facipara"><i class='fas fa-wind roundborder'></i> <?php echo $datastwo['taxiactype']; ?> </p>
	</div>
	<div class="tandc" id="tandc" style="display:none">
			<p class="tandcpara"><?php echo $datastwo['taxifacility']; ?></p>
	</div>
</div>		
<?php } ?>
</div>
<!--10 hours-->
<div class="container tenhours" style="display:none;">
	<div class="navcircle">
<?php			ini_set('display_errors', 0);
			include("database.php");
			$querythree="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local'";
			$resultthree= mysqli_query($con, $querythree);
			while($datasthree= mysqli_fetch_assoc($resultthree)) {
				 $image= 'uploads/'.$datasthree["taxiimage"];
			//Total amount calculation 
				 $rate=$datasthree['taxirate'];
				 $totalamount=round(100*$rate);
				//Total discount calculation
				$discount=$datasthree['taxidiscount'];
				$totaldiscount=round(100*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
?>
			<a class="anchor" style="text-decoration:none;font-weight:bold;color:black;" href="selectlocaltaxi.php?taxiid=<?php echo $datasthree['taxiid']; ?>&sourcecity=<?php echo $sourcecity; ?>&destinationcity=<?php echo $destinationcity; ?>&airportaddress=<?php echo $airportaddress; ?>&fromdate=<?php echo $fromdate; ?>&fromtime=<?php echo $fromtime; ?>">	
				<div class="text-center anchor ">				
						<?php echo $datasthree['taxiname'];?><br>
						<img src="<?php echo $image; ?>" alt="" class="circleimage"><br>
						&#8377;<?php echo $finalamount;?>
				</div>
			</a>
<?php } ?>
	</div>
<?php			ini_set('display_errors', 0);
			include("database.php");
			
			if(isset($_GET["taxiid"])) 
			{
			$taxiid=$_GET['taxiid'];
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' and taxiid='".$taxiid."' ";
			$resulttwo= mysqli_query($con, $querytwo);
			}
			else{
			$querytwo="select taxiid,taxiimage,taxiname,taxiabout,taxirate,taxidiscount,taxitriptype,taxiactype,taxiseats,taxibags,taxifacility from taxidetails where taxitriptype='local' limit 0,1 ";
			$resulttwo= mysqli_query($con, $querytwo);				
			}
			
			
			while($datastwo= mysqli_fetch_assoc($resulttwo)) {
				 $image= 'uploads/'.$datastwo["taxiimage"];
				//Total amount calculation 
				 $rate=$datastwo['taxirate'];
				 $totalamount=round(100*$rate);		
				//Total discount calculation
				$discount=$datastwo['taxidiscount'];
				$totaldiscount=round(100*$discount);
				//Final amount
				$finalamount=$totalamount-$totaldiscount;
			
?>

		<div class="card cardcar">
		  <div class="row">
			<div class="col-7 tble">
				<table>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:18px;"><?php echo $datastwo['taxiname']; ?></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold">or equivalent</td></tr>
					<tr><td  class="finalamount">&#8377;<?php echo $finalamount; ?></td></tr>
					<tr><td  class="totalamount"><del>&#8377;<?php echo $totalamount; ?></del></td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;"><?php echo $distance=100;?> kms package </td></tr>
					<tr><td class="tdcolumn" style="font-weight:bold;font-size:13px;">Includes toll & GST</td></tr>
				</table>				
			</div>
			<div class="col-5" >
				<div class="box">
					<div class="arrow-ribbon"><?php echo $datastwo['taxiseats']; ?> Seater</div>
				</div>
				<div style="margin-top:70px;">
					<img src="<?php echo $image; ?>" alt="" class="taxiimage"> 
				</div>
			</div>	
          </div>
		<div class="column"> 
			<form action="bookingpage.php" method="GET" id="formone">
			<input type="hidden"  name="taxiid" id="taxiid" value="<?php echo $datastwo['taxiid']; ?>" >
				<input type="hidden"  name="fromaddress" id="fromaddress" value="<?php echo $sourcecity; ?>" >
				<input type="hidden"  name="toaddress" id="toaddress" value="<?php echo $destinationcity; ?>" >
				<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
				<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
				<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >			
				<input type="hidden" name="finalamount" id="finalamount" value="<?php echo $finalamount; ?>" >
				<input type="hidden" name="distance" id="distance" value="<?php echo $distance=100 ; ?>" >
				<input type="hidden" name="taxiname" id="taxiname" value="<?php echo $datastwo['taxiname']; ?>" >
				<input type="hidden" name="triptype" id="triptype" value="Oneway" >
				<input type="hidden" name="numdays" id="numdays" value="<?php echo 0; ?>" >
				<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
				<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
				<input type="hidden" name="useremail" id="useremail" value="<?php echo $useremail;?>" >
				<input type="hidden" name="username" value="<?php echo $username;?>" >
				<input type="hidden" name="usermobile" value="<?php echo $usermobile;?>" >
				<input type="submit" class="btn formbutton"  value="SELECT">	
			</form>			
		</div>		  
		</div>	
<div class="card cardcar">
	<div class="buttongroup" >	
		<div class="btn-group d-flex" role="group" >
			<button class="btn but btn-sm inclusionsbut" onclick="incs()" style="background-color:#0096FF;color:white;border:1px solid #0096FF;">INCLUSIONS</button>
			<button class="btn but btn-sm exclusionsbut" onclick="exs()" >EXCLUSIONS</button>
			<button class="btn but btn-sm facilitiesbut" onclick="facs()" >FACILITIES</button>
			<button class="btn but btn-sm tandcbut" onclick="tc()" >T&C </button>
		</div>
	</div>

	<div class="inclusion inclusions " id="inclusions" >
			<p class="para"><i class="fa-solid fa-gas-pump roundborder"></i> Base fare for <?php echo $distance=100; ?> km</p>
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
			<p class="facipara"><i class="fas fa-chair roundborder"></i> <?php echo $datastwo['taxiseats']; ?>  Seater</p>
			<p class="facipara"><i class='fa fa-shopping-bag roundborder'></i> <?php echo $datastwo['taxibags']; ?>  bags</p>
			<p class="facipara"><i class='fas fa-wind roundborder'></i> <?php echo $datastwo['taxiactype']; ?> </p>
	</div>
	<div class="tandc" id="tandc" style="display:none">
			<p class="tandcpara"><?php echo $datastwo['taxifacility']; ?></p>
	</div>
</div>		
<?php } ?>
</div>
</section>


  </body>
</html>
