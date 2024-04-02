<?php
			ini_set('display_errors', 0); 
            include("database.php");

            $sourcecity=$_GET['sourcecity'];
            $destinationcity=$_GET['destinationcity'];
			$airportaddress=$_GET['airportaddress'];
			$fromdate=$_GET['fromdate'];
			$todate=$_GET['todate'];
            $fromtime=$_GET['fromtime'];
			$airporttrip=$_GET['airporttrip'];
			
?>

<html>
<head>	
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
@media only screen and (min-device-width :600px) {
.sec{
	margin-top:2%;
	margin-bottom:2%;
	text-align:center;
}
.wholesec{
	background-color:white;
	height:53px;
	padding-top:8px;
}
label{
	display:none;
	font-weight:bold;
	color:gray;
	position:absolute;
	top:10px;
	left:40px;
}
::placeholder{
	color:black;
}
.but{
	border:1px solid white;
	width:100px;
	font-weight:bold;
	color:white;
	font-size:70%;
	background-color:rgba(0,0,0,0);
	border-radius:5px;
	padding:10px 20px;
}
.but:hover{
	border:1px solid #fd7e14;
	width:100px;
	font-weight:bold;
	color:white;
	font-size:70%;
	background-color:#fd7e14;
	border-radius:5px;
	padding:10px 20px;	
}
.invalid-tooltip{
	display:none;
	text-align:left;
	margin-top:-20px;
	margin-left:40px;
	font-size:9px;
}
.buticons{
	width:30px;
	height:auto;
	margin:5px;
}
.fonticons{
	display:none;
	position:absolute;
	top:40px;
	left:15px;
	padding:1px;
	width:30px;
	height:30px;
}
#onewaysubmit{
	background-color:#fd7e14;
	width:180px;
	height:53px;
	margin-top:-8px;
}

#city-list {
	position:absolute;
	z-index:3;
	margin-top:10px;
    list-style: none;
	min-height:20px;
	max-height:180px;
    padding: 0;
    max-width:250px;
	overflow-x:hidden;
	overflow-y:scroll;
	position:absolute;
	border:0px solid black;
	border-radius:10px;
}

#city-list li {
	color:black;
    padding: 10px;
    background-color:white;
    border-bottom:1px solid #0096FF;
}

#city-list li:hover {
	color:white;
    background-color:#0096FF;
}

#city-list::-webkit-scrollbar {
	width:0px;
	height:0px;
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

}
</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.col-space{
	margin-top:5px;
	margin-bottom:5px;
}
.bantitle{
	font-size:140%;
	color:white;
	padding-top:4%;
}
.bantitle2{
	font-size:80%;
	color:white;	
}
.sec{
	margin-top:2%;
	margin-bottom:2%;
	margin-left:10%;
	margin-right:10%;
	text-align:center;
}
#onewayimage{
	background-image: url("images/landcar4.png");
	background-repeat: no-repeat;
	position:static;
}
.onewaysec, .roundtripsec, .localsec, .airportsec{
	margin-left:8%;
	margin-right:8%;
	padding-bottom:8%;
}
#onewayform{
	background-color:white;
	height:258px;
	padding-top:8px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#roundtripform,#airportform{
	background-color:white;
	height:305px;
	padding-top:8px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#localform{
	background-color:white;
	height:208px;
	padding-top:8px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
label{
	display:none;
	font-weight:bold;
	color:gray;
	position:absolute;
	top:10px;
	left:40px;
}
::placeholder{
	color:black;
}
.but{
	border:1px solid white;
	width:20%;
	font-weight:bold;
	color:white;
	font-size:70%;
	background-color:rgba(0,0,0,0);
	border-radius:5px;
	padding:1% 2%;
}
.but:hover{
	border:1px solid #fd7e14;
	width:20%;
	font-weight:bold;
	color:white;
	font-size:70%;
	background-color:#fd7e14;
	border-radius:5px;
	padding:1% 2%;	
}
.titlename{
	font-size:70%;
}
.invalid-tooltip{
	display:none;
	text-align:left;
	margin-top:-20px;
	margin-left:40px;
	font-size:9px;
}
.buticons{
	width:50%;
	height:auto;
	margin:5px;
}
.fonticons{
	display:none;
	position:absolute;
	top:40px;
	left:15px;
	padding:1px;
	width:30px;
	height:30px;
}
#onewaysubmit{
	background-color:#fd7e14;
	width:100%;
	height:40px;
}

.invalid-tooltip{
	text-align:left;
	margin-left:15px;
	font-size:9px;
}

#city-list {
	position:absolute;
	z-index:3;
	margin-top:10px;
    list-style: none;
	min-height:0px;
	max-height:100px;
    padding: 0;
	min-width:10%;
    max-width:100%;
	overflow-x:hidden;
	overflow-y:scroll;
	border:1px solid black;
	border-radius:5px;
}

#city-list li {
	color:black;
    padding:1%;
	font-size:100%;
    background-color:white;
    border-bottom:1px solid #0096FF;
}

#city-list li:hover {
	color:white;
    background-color:#0096FF;
}

}
</style>
<style>

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
				
				function onewayfun(){
					document.getElementById("onewaysec").style.display="block";
					document.getElementById("roundtripsec").style.display="none";
					document.getElementById("localsec").style.display="none";
					document.getElementById("airportsec").style.display="none";
					$("#onewaybut").css({"background-color":"#fd7e14","color":"white","border-color":"#fd7e14", "box-shadow":"0px 0px 0px 0px rgb(0,0,0)"});
					$("#roundtripbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
					$("#localbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
					$("#airportbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
				}
				function roundtripfun(){
					document.getElementById("onewaysec").style.display="none";
					document.getElementById("roundtripsec").style.display="block";
					document.getElementById("localsec").style.display="none";
					document.getElementById("airportsec").style.display="none";
					$("#roundtripbut").css({"background-color":"#fd7e14","color":"white","border-color":"#fd7e14"});
					$("#onewaybut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
					$("#localbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
					$("#airportbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
				}				
				
				function localfun(){
					document.getElementById("onewaysec").style.display="none";
					document.getElementById("roundtripsec").style.display="none";
					document.getElementById("localsec").style.display="block";
					document.getElementById("airportsec").style.display="none";
					$("#localbut").css({"background-color":"#fd7e14","color":"white","border-color":"#fd7e14"});
					$("#onewaybut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
					$("#roundtripbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
					$("#airportbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
				}
				function airportfun(){
					document.getElementById("onewaysec").style.display="none";
					document.getElementById("roundtripsec").style.display="none";
					document.getElementById("localsec").style.display="none";
					document.getElementById("airportsec").style.display="block";
					$("#airportbut").css({"background-color":"#fd7e14","color":"white","border-color":"#fd7e14"});
					$("#onewaybut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
					$("#localbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
					$("#roundtripbut").css({"background-color":"rgba(0,0,0,0)","color":"white","border-color":"white"});
				}
				
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
				}
				
				
				function fromdate(){
					alert('Enter the From Date');
				}
				function todate(){
					alert('Enter the Return Date');
				}
			function fromtime(){
					alert('Enter the From Time');
				}
				
				function register(){
					window.open('register.php', 'newwindow', 'width=600px,height=500px'); return false;
				}
				
						
</script>
<script>
$(document).ready(function() {
	$("#onewayfrom,#roundtripfrom,#localfrom,#airportfrom").keyup(function() {
		$.ajax({
			type: "POST",
			url: "locationfetchfrom.php",
			data: 'city='+ $(this).val(),
			beforeSend: function() {
				$("#onewayfrom,#roundtripfrom,#localfrom,#airportfrom").css("background", "#FFF url(images/LoaderIcon.gif) no-repeat 165px");
			},
			success: function(data) {
				$("#onebox,#roundbox,#localbox,#airportbox").show();
				$("#onebox,#roundbox,#localbox,#airportbox").html(data);
				$("#onewayfrom,#roundtripfrom,#localfrom,#airportfrom").css("background", "#FFF");
			}
		});
	});
});
//To select a country name
function fromcity(val) {
	$("#onewayfrom,#roundtripfrom,#localfrom,#airportfrom").val(val);
	$("#onebox,#roundbox,#localbox,#airportbox").hide();
}
</script>
<script>
$(document).ready(function() {
	$("#onewayto,#roundtripto").keyup(function() {
		$.ajax({
			type: "POST",
			url: "locationfetchto.php",
			data: 'city='+ $(this).val(),
			beforeSend: function() {
				$("#onewayto,#roundtripto").css("background", "#FFF url(images/LoaderIcon.gif) no-repeat 165px");
			},
			success: function(data) {
				$("#onetobox,#roundtobox").show();
				$("#onetobox,#roundtobox").html(data);
				$("#onewayto,#roundtripto").css("background", "#FFF");
			}
		});
	});
});
//To select a country name
function tocity(val) {
	$("#onewayto,#roundtripto").val(val);
	$("#onetobox,#roundtobox").hide();
}
</script>
</head>
<body >

<section id="onewayimage">
<center>
		<h3 class="bantitle  text-white">Your Safety Matters To us.</h3>
		<h6 class="bantitle2 text-white">100% Sanitized | Safe | Reliable cab.</h6>
<center>
<div class="sec">
	<div>
		<div class="btngroup" role="group" >
			<button  class="btn but " id="onewaybut" onclick="onewayfun()" style="background-color:#fd7e14;color:white;border-color:#fd7e14;"><img src="images/but1.png" alt="bus"  class="buticons" ><br><span class="titlename">ONE&nbsp;WAY</span></button>
			<button  class="btn but " id="roundtripbut" onclick="roundtripfun()"><img src="images/but2.png" alt="bus"  class="buticons" ><br> <span class="titlename">ROUND&nbsp;TRIP</span></button>
			<button  class="btn but" id="localbut" onclick="localfun()"><img src="images/but3.png" alt="bus"  class="buticons" ><br><span class="titlename">LOCAL</span></button>
			<button  class="btn but" id="airportbut" onclick="airportfun()"><img src="images/but-4.png" alt="bus"  class="buticons" ><span class="titlename"><br>AIRPORT</span></button>
		</div>
	</div>
</div>

<!--ONEWAYSEC-->

<section class="onewaysec" id="onewaysec">
	<div class="container wholesec " id="onewayform">
	<form action="loginpage.php" method="GET"  class="needs-validation " novalidate id="onewayformm" >
	 
	 <div class="row">
			<div class="col-lg-3 col-space">
					<img src="images/bus-1.png" alt="bus"  class="fonticons" >
					<label >From</label>
					<input type="text" class="form-control w-100 from"value="" name="sourcecity" id="onewayfrom" autocomplete="off" placeholder="Source" required>
					<div id="onebox"></div>
			</div>
			<div class="col-lg-3 col-space" >
				<img src="images/bus-1.png" alt="bus"  class="fonticons">
				<label >To</label>
				<input type="text" class="form-control w-100 to"value="" name="destinationcity" id="onewayto" autocomplete="off" placeholder="Destination" required>
				<div id="onetobox"></div>
			</div>
			<div class="col-lg-2 col-space" >
				<img src="images/calendar.png" alt="bus"  class="fonticons">
				<label >PICK UP</label>
				<input type="text" onfocus = "(this.type = 'date')" placeholder="Date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="onewaydate" required>

			</div>
			<div class="col-lg-2 col-space" >
				<img src="images/clock-1.png" alt="bus" class="fonticons">
				<label >PICK UP AT</label>
				<input type="text" onfocus = "(this.type = 'time')" placeholder="Time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime"id="onewaytime"  required>

			</div>
	  		<div class="col-lg-2 search col-space">
				<input type="hidden" name="trip" value="oneway" >
					<input  type="submit" name="onewaysubmit" class="btn text-white " id="onewaysubmit" value="EXPLORE CABS" >
			</div>			
	  </div>

	</form>
	</div>
</section>

<!--ROUNDTRIP SECTION-->
<section class="roundtripsec" id="roundtripsec" style="display:none">
<div class="container wholesec" id="roundtripform">
	<form action="loginpage.php" method="GET" class="needs-validation w3-container" novalidate>
	  <div class="row">
			<div class="col-lg-2 col-space">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >From</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" name="sourcecity" autocomplete="off" id="roundtripfrom" placeholder="Source " required>

			  <div id="roundbox"></div>
			</div>
			<div class="col-lg-2 col-space">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >To</label>
			  <input type="text" class="form-control w-100"value="<?php echo $destinationcity; ?>" name="destinationcity" id="roundtripto" autocomplete="off" placeholder="Destination" required>

			   <div id="roundtobox"></div>
			</div>
			<div class="col-lg-2 col-space">
				<img src="images/calendar.png" alt="bus" class="fonticons">
			  <label >PICK UP</label>
			  <input type="text" onfocus = "(this.type = 'date')" placeholder="From Date" class="form-control w-100" value="<?php echo $fromdate; ?>" onclick="fromdate()" name="fromdate" id="roundtripdate" required>

			</div>
			<div class="col-lg-2 col-space">
				<img src="images/calendar.png" alt="bus"  class="fonticons">
			  <label >RETURN</label>
			  <input type="text" onfocus = "(this.type = 'date')" placeholder="To Date" class="form-control w-100" value="<?php echo $totime; ?>" onclick="todate()" name="todate" id="roundtripreturn"  required>

			</div>			
			<div class="col-lg-2 col-space">
				<img src="images/clock-1.png" alt="bus"  class="fonticons">				
			  <label >PICK UP AT</label>
			  <input type="text" onfocus = "(this.type = 'time')" placeholder="Time" class="form-control w-100"onclick="fromtime()" value="<?php echo $fromtime; ?>" name="fromtime"id="roundtriptime"  required>

			</div>
			<div class="col-lg-2 search col-space">
					<input type="hidden" name="trip" value="roundtrip" >
					<input  type="submit" name="onewaysubmit" class="btn text-white" id="onewaysubmit" value="EXPLORE CABS" >
			</div>
	  </div>

	</form>
	</div>
</section>

<!-- LOCALFORM-->
<section class=" localsec" id="localsec" style="display:none">
<div class="container wholesec" id="localform" >
	<form action="loginpage.php" method="GET" class="needs-validation" novalidate>
	  <div class="row">
			<div class="col-lg-6 col-space">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >CITY</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" name="sourcecity" id="localfrom" autocomplete="off" placeholder="Source" required>

			  <div id="localbox"></div>
			</div>
				
			<div class="col-lg-2 col-space">
				<img src="images/calendar.png" alt="bus"  class="fonticons">
			  <label >PICK UP</label>
			  <input type="text" onfocus = "(this.type = 'date')" placeholder="Date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="localdate" required>

			</div>
			<div class="col-lg-2 col-space">
				<img src="images/clock-1.png" alt="bus" class="fonticons">
			  <label >PICK UP AT</label>
			  <input type="text" onfocus = "(this.type = 'time')" placeholder="Time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime" id="localtime"  required>

			</div>
			<div class="col-lg-2 search col-space">
					<input type="hidden" name="trip" value="local" >
					<input  type="submit" name="onewaysubmit"  class="btn text-white" id="onewaysubmit" value="EXPLORE CABS" >
			</div>
	  </div>


	</form>
	</div>
</section>

<!-- AIRPORT-->
<section class="airportsec" id="airportsec" style="display:none">
<div class="container wholesec" id="airportform">
	<form action="loginpage.php" method="GET" class="needs-validation" novalidate>
	  <div class="row">
	 		<div class="col-lg-2 col-space">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >TRIP</label>
				<select class="form-select form-control w-100" name="airporttrip" id="airporttrip">
				  <option  value="Pickup from airport">Pickup from airport</option>
				  <option selected value="Drop to airport">Drop to airport</option>
				</select>

			  <div id="airportbox"></div>
			</div> 
			<div class="col-lg-2 col-space">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >PICKUP CITY</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" autocomplete="off" name="sourcecity" id="airportfrom" placeholder="Source" required>

			</div>
			<div class="col-lg-2 col-space">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >ADDRESS</label>
			  <input type="text" class="form-control w-100"value="<?php echo $airportaddress; ?>" autocomplete="off" name="airportaddress" id="airportaddress"  placeholder="Address" required>

			</div>
			<div class="col-lg-2 col-space">
				<img src="images/calendar.png" alt="bus"  class="fonticons">
			  <label >PICK UP</label>
			  <input type="text" onfocus = "(this.type = 'date')" placeholder="Date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="airportdate" required>

			</div>			
			<div class="col-lg-2 col-space">
				<img src="images/clock-1.png" alt="bus"  class="fonticons">			 
			 <label >PICK UP AT</label>
			  <input type="text" onfocus = "(this.type = 'time')" placeholder="Time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime"id="airporttime"  required>

			</div>
			<div class="col-lg-2 search col-space">
					<input type="hidden" name="trip" value="airport" >
					<input  type="submit" name="onewaysubmit" class="btn text-white" id="onewaysubmit" value="EXPLORE CABS" >
			</div>
	  </div>

	</form>
	</div>
</section>
</section>
</body>
<footer>


</footer>
</html>