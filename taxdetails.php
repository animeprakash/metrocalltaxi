<?php		ini_set('display_errors', 0); 
            include("database.php");
			if(isset($_POST["searchsubmit"])) 
			{			
				$cusdata=$_POST['cusdata'];
				$query="select cusid,did,customerid,customid,cusname,cusemail,cusmobile,fromaddress,toaddress,cuspickup,cusdrop,vehicleid,fromdate,fromtime,numdays,taxiname,distance,finalamount,triptype,ridemode,addkm,addkmfare,totaladdkmfare,adddayfare,totalcost,nightfare,gstrate,gstamount,finalgst from ridedetails inner join bookings on customerid=cusid inner join driverdetails on driverdata=did inner join vehicledetails on did=vehicleid inner join billdetails on customerid=customid where cusid='".$cusdata."' order by cusid desc";
				$resulttwo=mysqli_query($con,$query);
			}
			else
			{
				$query="select cusid,did,customerid,customid,cusname,cusemail,cusmobile,fromaddress,toaddress,cuspickup,cusdrop,vehicleid,fromdate,fromtime,numdays,taxiname,distance,finalamount,triptype,ridemode,addkm,addkmfare,totaladdkmfare,adddayfare,totalcost,nightfare,gstrate,gstamount,finalgst from ridedetails inner join bookings on customerid=cusid inner join driverdetails on driverdata=did inner join vehicledetails on did=vehicleid inner join billdetails on customerid=customid order by cusid desc";
				$resulttwo=mysqli_query($con,$query);				
			}
?>
<html lang="en" dir="ltr" >
  <head>
    <meta charset="UTF-8">
	
    <link rel="stylesheet" href="adminstyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
	font-family:Serif;
	box-sizing:border-box;
}
.gridbox{
	overflow-y:scroll;
	height:85%;
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
.bluebutton{
	margin-left:45%;
}
.carddesign{
	margin:2% 2%;
	padding:2%;
}
td{
	padding:10px;
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
.addcustomer{
	color:white;
	background-color:#5D3FD3;
	margin-left:1%;
}
.addcustomer:hover{
	color:white;
	background-color:#5D3FD3;
}
.selectbox{
	width:200px;
}
</style>
    
<style>

.invoice-2 .mb-30{
    margin-bottom: 30px;
}

.invoice-2 .invoice-info {
    background: #fff;
    position: relative;
}

.invoice-2 .name{
    font-size: 18px;
    margin-bottom: 10px;
    text-transform: uppercase;
    color: #262525;
    font-weight: 500;
}

.invoice-2 .invoice-number-inner{
    max-width: 200px;
    margin-left: auto;
}

.invoice-2 .payment-method-list-1{
    padding: 0;
}

.invoice-2 .item-desc-1 span {
    font-size: 14px;
    font-weight: 500;
}

.invoice-2 .payment-method ul {
    list-style: none;
}

.invoice-2 .payment-method ul li strong{
    font-weight: 500;
}

.invoice-2 .table-striped > tbody > tr:nth-of-type(odd) {
    --bs-table-accent-bg: rgb(255 255 255 / 5%);
    color: var(--bs-table-striped-color);
}

.invoice-2 .invoice-top {
    padding: 40px 50px 10px;
    font-size: 15px;
}

.invoice-2 .inv-title-1{
    color: #2672f9;
    margin-bottom: 5px;
}

.invoice-2 .invoice-logo{
    clip-path: polygon(0 0, 100% 0, 100% 0%, 85% 100%, 0% 100%);
    width: 340px;
}

.invoice-2 .invoice-logo:before {
    width: 310px;
    background: #f3f3f3;
    position: absolute;
    content: "";
    height: 110px;
    clip-path: polygon(0 0, 100% 0, 100% 0%, 87% 100%, 0% 100%);
}

.invoice-2 .invoice-logo:after {
    width: 330px;
    position: absolute;
    content: "";
    height: 95px;
    top: 0;
    clip-path: polygon(0 0, 100% 0, 100% 0%, 90% 100%, 0% 100%);
    z-index: -9;
    background-image: linear-gradient(to bottom, #0095ff, #4a50f3);
}

.invoice-2 .invoice-logo .logo{
    width: 290px;
    padding: 50px;
    clip-path: polygon(0 0, 100% 0, 100% 0%, 85% 100%, 0% 100%);
    height: 125px;
    z-index: 999;
    background-image: linear-gradient(to bottom, #0095ff, #4a50f3);
}

.invoice-2 .invoice-logo img {
    height: 25px;
}

.invoice-2 .invoice-id .info {
    max-width: 200px;
    margin: 0 50px 0 auto;
    padding: 35px 0 0;
}

.invoice-2 .table-section {
    text-align: center;
}

.invoice-2 .invoice-center {
    padding: 0 50px 40px;
}

.invoice-2 .table > :not(caption) > * > * {
    padding: 13px 30px;
}

.table > :not(caption) > * > * {
    background-color: var(--bs-table-bg);
    border-bottom-width: 0;
}

.invoice-2 .table .pl0{
    padding-left: 0;
}

.invoice-2 .table td.pl0{
    padding-left: 0;
}

.invoice-2 .table td, .invoice-2 .table th {
    vertical-align: middle;
    border: none !important;
}

.invoice-2 .table td {
    font-size: 15px;
    color: #555;
}

.invoice-2 p{
    font-size: 14px;
}

.invoice-2 .invoice-info-buttom .table .invoice-2 .invoice-info-buttom .table tr, .table tr {
    border: 1px solid #e9ecef;
}

.invoice-2 .caption-top {
    caption-side: top;
    text-align: right;
    margin-bottom: 0;
}

.invoice-2 .invoice-bottom {
    padding: 0 50px 10px;
}

.invoice-2 .bg-active {
    background: #f3f3f3;
    color: #262525!important;
}

.invoice-2 .active-color{
    color: #2672f9!important;
}

.invoice-2 .invoice-bottom h3 {
    margin-bottom: 7px;
}

.invoice-2 .invoice-contact{
    background-image: linear-gradient(to bottom, #0095ff, #4a50f3);
    padding: 30px 50px 20px;
}

.invoice-2 .contact-info a {
    margin:0 30px 10px 0;
    color: #fff;
    font-size: 14px;
    float: left;
    line-height: 50px;
}

.invoice-2 .contact-info a i{
    width: 50px;
    height: 50px;
    background: #ffffff;
    text-align: center;
    font-size: 20px;
    line-height: 50px;
    margin-right: 10px;
    color: #2672f9;
    border-radius: 60px;
}

.invoice-2 .invoice-contact h3{
    font-size: 20px;
}

.invoice-2 .contact-info .mr-0{
    margin-right: 0;
}

.invoice-2 .inv-header-1 {
    font-weight: 600;
    color: #2672f9;
    font-size: 30px;
}

.invoice-2 table th {
    font-weight: 500;
    border: none!important;
}

.invoice-2 .order-summary tbody, td, tfoot, th, thead, tr {
    border: none;
}


page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.top, .bluebutton{
	display:none;
}
.addcustomer{
	color:white;
	background-color:#5D3FD3;
	margin-left:1%;
	font-size:70%;
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
<script>
		function printdiv() {
			
			var printone = document.getElementById("printone").innerHTML;
			var a = window.open('', '', 'height=1000, width=600');
			a.document.write('<html><body>');
			a.document.write(printone);
			a.document.write('</body></html>');
			a.document.close();
			a.print();
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
	<a href="taxpage.php"  class="btn addcustomer">Add Bill</a>

<div class="top">
		<div class="topbox">
			<form action="taxdetails.php" method="post">
				<div class="searchbox">
					<input type="text" name="cusdata" id="cusdata" class="form-control cusdata"  placeholder=" Search Customer ID">
					<input type="submit" class="btn searchcolor " name="searchsubmit">
			    </div>				  
			</form>
		</div>
</div>
</section>

<section class="gridbox">
		<h5 class="text-white btn bg-primary bluebutton">BILLING DETAILS</h5>
	<div class="row" >

	<?php 
				ini_set('display_errors', 0);
				//include ('database.php');
				//$query="select cusid,did,customerid,customid,cusname,cusemail,cusmobile,fromaddress,toaddress,cuspickup,cusdrop,vehicleid,fromdate,fromtime,numdays,taxiname,distance,finalamount,triptype,ridemode,addkm,addkmfare,totaladdkmfare,adddayfare,totalcost,nightfare,gstrate,gstamount,finalgst from ridedetails inner join bookings on customerid=cusid inner join driverdetails on driverdata=did inner join vehicledetails on did=vehicleid inner join billdetails on customerid=customid";
				//$resulttwo=mysqli_query($con,$query);
				while($rowtwo= mysqli_fetch_assoc($resulttwo)){ 
				$totaldayfare=$rowtwo['adddayfare']*$rowtwo['numdays'];
	?>
		<div class="col-sm-4" >
			<div class="card carddesign">
				<div class="d-flex">
					<h4 class="btn btn-sm text-white bg-info w-50"> <?php echo $rowtwo['cusid']; ?></h4>
					<a href="taxdelete.php?cusid=<?php echo $rowtwo["cusid"];?>" class="btn btn-sm text-white bg-danger w-50" style="height:32px;">DELETE</a>
					<div><input type="button" value="PRINT BUTTON" class="btn btn-sm bg-warning text-white w-100" onclick="printdiv()"></div>
				</div>
			</div>
	<div class="invoice-2 invoice-content table-responsive" id="printone" >
<page size="A4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-top">
                            <div class="row table-responsive">
							<table width='680' border='1' cellpadding='20' cellspacing='0'>	
								<tr>
									<td class="" style="width:33.33%">
                                    <div class="invoice-number mb-30">
                                        <div class="invoice-number-inner">
                                            
                                        </div>
                                    </div>
									</td>
									<td class="" style="width:33.33%">
                                    <div class="invoice-number mb-30">
                                        <p class="invo-addr-1">
											<b>BOOKING ID: </b><?php echo $rowtwo['cusid']; ?> <br>
                                            <b>DATE:</b> <?php echo $rowtwo['fromdate']; ?><br/>
                                            <b>DOCUMENT&nbsp;TYPE:</b>&nbsp;Invoice<br/>
                                        </p>
                                    </div>
									</td>
									<td class="" style="width:33.33%">
                                    <div class="invoice-number mb-30">
                                        <p class="invo-addr-1">
										<b>INVOICE NO: </b><?php echo $rowtwo['cusid']; ?><br>
                                        <b>BOOKING&nbsp;CATEGORY:</b>&nbsp;B2C
                                        </p>
                                    </div>
									</td>

								</tr>
							</table>	
                            </div>
                        </div>
						
                        <div class="invoice-top">
                            <div class="row table-responsive">
							<table width='680' border='0' cellpadding='20' cellspacing='0'>	
								<tr>
									<td class="" style="width:50%">
                                    <div class="invoice-number mb-30">
                                        <p class="invo-addr-1">
											<b>CUSTOMER NAME </b> <br> <?php echo $rowtwo['cusname']; ?> <br>
                                            <b>PICKUP ADDRESS </b><br> <?php echo $rowtwo['fromaddress']; ?><br/>
                                            <b>TAXI TYPE </b><br> <?php echo $rowtwo['taxiname']; ?><br/>
											<b>COMPANY NAME</b> <br> Metro Call Taxi
                                        </p>
                                    </div>
									</td>
									<td class="" style="width:50%">
                                    <div class="invoice-number mb-30">
                                        <p class="invo-addr-1">
											<b>CUSTOMER MOBILE NO </b><br><?php echo $rowtwo['cusmobile']; ?><br>
											<b>DROP ADDRESS </b><br><?php echo $rowtwo['toaddress']; ?><br>
											<b>TRIP TYPE </b><br><?php echo $rowtwo['triptype']; ?><br>
											<b>COMPANY GSTIN NO</b> <br> 33COKPD3656P1ZJ<br>
                                        </p>
                                    </div>
									</td>

								</tr>
							</table>	
                            </div>
                        </div>						

                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table" width='680' border='0' cellpadding='10' cellspacing='0'>
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <td class="">PAYMENT BREAKUP</td>
                                        <td class="text-center">Fare/Kms</td>
                                        <td class="text-start">Kms or Day</td>
                                        <td class="text-center">Amount</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-area">
                                        <td class="">Car Hire  Base Fare</td>
                                        <td class="text-center"> - </td>
                                        <td class="text-center"> <?php echo $rowtwo['distance']; ?> </td>
                                        <td class="text-center"><?php echo $rowtwo['finalamount']; ?></td>
                                    </tr>
                                    <tr class="bg-area">
                                        <td class="">Driver Beta</td>
                                        <td class="text-center"> - </td>
                                        <td class="text-center"> <?php echo $rowtwo['distance']; ?> </td>
                                        <td class="text-center"><?php echo $rowtwo['finalamount']; ?></td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="">Additional kms</td>
                                        <td class="text-center"> <?php echo $rowtwo['addkmfare']; ?> </td>
                                        <td class="text-center"> <?php echo $rowtwo['addkm']; ?> </td>
                                        <td class="text-center"> <?php echo $rowtwo['totaladdkmfare']; ?> </td>
                                    </tr>
                                    <tr class="tr">
                                        <td class="">No of Days</td>
                                        <td class="text-center"> <?php echo $rowtwo['adddayfare']; ?> </td>
                                        <td class="text-center"> <?php echo $rowtwo['numdays']; ?> </td>
                                        <td class="text-center">  <?php echo $totaldayfare; ?> </td>
                                    </tr>   
                                    <tr class="tr">
                                        <td class=""> Night Charges</td>
                                        <td class="text-center"> - </td>
                                        <td class="text-center"> - </td>
                                        <td class="text-center">  <?php echo $rowtwo['nightfare']; ?> </td>
                                    </tr>  									
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">SubTotal</td>
                                        <td class="text-end"><?php echo $rowtwo['totalcost']; ?> </td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">GST Rate</td>
                                        <td class="text-end"><?php echo $rowtwo['gstrate']; ?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600 active-color">Grand Total</td>
                                        <td class="f-w-600 text-end active-color"><?php echo $rowtwo['finalgst']; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>	
	
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table" width='680' border='0' cellpadding='10' cellspacing='0'>
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <td>No.</td>
                                        <td class="">Description</td>
                                        <td class="text-center">Fare/Kms</td>
                                        <td class="text-start">Kms or Day</td>
                                        <td class="text-center">Amount</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-area">
                                        <td>01   </td>
                                        <td class="">Base Fare</td>
                                        <td class="text-center"> - </td>
                                        <td class="text-center"> <?php echo $rowtwo['distance']; ?> </td>
                                        <td class="text-center"><?php echo $rowtwo['finalamount']; ?></td>
                                    </tr>
                                    <tr class="tr">
                                        <td>02   </td>
                                        <td class="">Add kms Fare</td>
                                        <td class="text-center"> <?php echo $rowtwo['addkmfare']; ?> </td>
                                        <td class="text-center"> <?php echo $rowtwo['addkm']; ?> </td>
                                        <td class="text-center"> <?php echo $rowtwo['totaladdkmfare']; ?> </td>
                                    </tr>
                                    <tr class="tr">
                                        <td>03  </td>
                                        <td class="">Day Fare</td>
                                        <td class="text-center"> <?php echo $rowtwo['adddayfare']; ?> </td>
                                        <td class="text-center"> <?php echo $rowtwo['numdays']; ?> </td>
                                        <td class="text-center">  <?php echo $totaldayfare; ?> </td>
                                    </tr>   
                                    <tr class="tr">
                                        <td>04  </td>
                                        <td class="">Night Fare</td>
                                        <td class="text-center"> - </td>
                                        <td class="text-center"> - </td>
                                        <td class="text-center">  <?php echo $rowtwo['nightfare']; ?> </td>
                                    </tr>  									
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">SubTotal</td>
                                        <td class="text-end"><?php echo $rowtwo['totalcost']; ?> </td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">GST Rate</td>
                                        <td class="text-end"><?php echo $rowtwo['gstrate']; ?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600 active-color">Grand Total</td>
                                        <td class="f-w-600 text-end active-color"><?php echo $rowtwo['finalgst']; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</page>
</div>

		</div>
	<?php } ?>
	</div>
	
</section>	

</section>
 <script src="adminscript.js"></script>
 <!-- partial -->

</body>
</html>
