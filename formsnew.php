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
<style>
@media only screen and (min-device-width :600px) {
.sec{
	margin-top:10%;
	margin-bottom:2%;
	text-align:center;
}

.form-control{
	height:45px;
	border:none;
	margin-left:50px;
	margin-top:25px;
	border-radius:5px;
}
label{
	font-weight:bold;
	color:gray;
	position:absolute;
	top:10px;
	left:40px;
}
::placeholder{
	font-size:15px;
	font-weight:bold;
}
.btnn{
	color:white;
	padding:25px 15px;
	margin:0px 0px  0px -5px;
}
.but{
	border:1px solid black;
	font-weight:bold;
	color:gray;
	font-size:70%;
	border-radius:50px;
	padding:10px 20px;
}
.invalid-tooltip{
	text-align:left;
	margin-top:-20px;
	margin-left:40px;
	font-size:9px;
}
.fonticons{
	position:absolute;
	top:40px;
	left:15px;
	padding:1px;
	width:30px;
	height:30px;
}
a:hover {
  text-decoration:none;
}

.onewaysec, .localsec, .roundtripsec, .airportsec{
	height:80px;
}
#onewaybut,#roundtripbut,#localbut,#airportbut{
	background-color:white;
}
#city-list {
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
.column{
	padding:10px 60px 0px 10px;  
	background-color:white;
	border-left:1px solid lightgray;
}
.start-column{
	padding:10px 60px 0px 10px;  
	background-color:white;
	border:0px solid white;
	border-top-left-radius:50px;
	border-bottom-left-radius:50px;
}
.end-column{
	padding:10px 60px 0px 10px;  
	background-color:#0096FF;
	border:0px solid #0096FF;
	border-top-right-radius:50px;
	border-bottom-right-radius:50px;
}
}
</style>
<style>
@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.col-sm-2{
	width:100%;
}
.col-sm-3{
	width:100%;	
}
.col-sm-6{
	width:100%;	
}
.sec{
	margin:-40px 0 5px 0;
	text-align:center;
}
.form-control{
	height:40px;
	border:1px solid black;
	border-radius:6px;
	padding-left:60px;
	margin:-5px 0 -5px 0;
}
.fonticons{
	position:relative;
	top:30px;
	margin-right:84%;
	padding:1px;
	width:25px;
	height:25px;
}
.onewaysec, .localsec, .roundtripsec, .airportsec{
	background-color:white;
	padding:5px 10px 20px 10px;
	border:2px solid white;
	border-radius:10px;
}
.but{
	min-width:2%;
	max-width:30%;
	height:35px;
	border:1px solid black;
	border-radius:50px;
	font-weight:bold;
	color:gray;
	font-size:60%;
	padding:2% 0%;
}
.btngroup{
	display:flex;
}
label{
	display:none;
	text-align:left;
	color:black;
}

::placeholder{
	font-size:14px;
}
.invalid-tooltip{
	text-align:left;
	margin-left:15px;
	font-size:9px;
}
.btnn{
	color:white;
	background-color:#0096FF;
	font-size:15px;
	height:40px;
	width:100%;
	margin-top:25px;
	border:0px solid #0096FF;
	border-radius:5px;
}

a:hover {
  text-decoration:none;
}
#city-list {
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

#onewaybut,#roundtripbut,#localbut,#airportbut{
	background-color:white;
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
					$("#onewaybut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$("#roundtripbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$("#localbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$("#airportbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function roundtripfun(){
					document.getElementById("onewaysec").style.display="none";
					document.getElementById("roundtripsec").style.display="block";
					document.getElementById("localsec").style.display="none";
					document.getElementById("airportsec").style.display="none";
					$("#roundtripbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$("#onewaybut").css({"background-color":"white","color":"gray","border-color":"black"});
					$("#localbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$("#airportbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}				
				
				function localfun(){
					document.getElementById("onewaysec").style.display="none";
					document.getElementById("roundtripsec").style.display="none";
					document.getElementById("localsec").style.display="block";
					document.getElementById("airportsec").style.display="none";
					$("#localbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$("#onewaybut").css({"background-color":"white","color":"gray","border-color":"black"});
					$("#roundtripbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$("#airportbut").css({"background-color":"white","color":"gray","border-color":"black"});
				}
				function airportfun(){
					document.getElementById("onewaysec").style.display="none";
					document.getElementById("roundtripsec").style.display="none";
					document.getElementById("localsec").style.display="none";
					document.getElementById("airportsec").style.display="block";
					$("#airportbut").css({"background-color":"#0096FF","color":"white","border-color":"#0096FF"});
					$("#onewaybut").css({"background-color":"white","color":"gray","border-color":"black"});
					$("#localbut").css({"background-color":"white","color":"gray","border-color":"black"});
					$("#roundtripbut").css({"background-color":"white","color":"gray","border-color":"black"});
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

<div class="sec">
	<div>
		<div class="btn-group btngroup" role="group" >
			<button  class="btn but " id="onewaybut" onclick="onewayfun()" style="background-color:#0096FF;color:white;border-color:#0096FF;">ONE WAY</button>
			<button  class="btn but " id="roundtripbut" onclick="roundtripfun()">ROUND TRIP</button>
			<button  class="btn but" id="localbut" onclick="localfun()">LOCAL</button>
			<button  class="btn but" id="airportbut" onclick="airportfun()">AIRPORT</button>
		</div>
	</div>
</div>

<!--ONEWAYSEC-->

<section class="onewaysec" id="onewaysec">
	<div class="onewayform " id="onewayform">
	<form action="loginpage.php" method="GET"  class="needs-validation" novalidate id="onewayformm" >
	 
	 <div class="row">
			<div class="col-sm-3 start-column ">
					<img src="images/bus-1.png" alt="bus"  class="fonticons" >
					<label >From</label>
					<input type="text" class="form-control w-100 from"value="" name="sourcecity" id="onewayfrom" autocomplete="off" placeholder="Source" required>
					<div class="invalid-tooltip">
						Please select the source city.
					</div>
					<div id="onebox"></div>
			</div>
			<div class="col-sm-3 column borderline" >
				<img src="images/bus-1.png" alt="bus"  class="fonticons">
				<label >To</label>
				<input type="text" class="form-control w-100 to"value="" name="destinationcity" id="onewayto" autocomplete="off" placeholder="Destination" required>
				<div class="invalid-tooltip">
				Please select the destination city.
				</div>
				<div id="onetobox"></div>
			</div>
			<div class="col-sm-2 column borderline" >
				<img src="images/calendar.png" alt="bus"  class="fonticons">
				<label >PICK UP</label>
				<input type="text" onfocus = "(this.type = 'date')" placeholder="Date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="onewaydate" required>
				<div class="invalid-tooltip">
				Please select date.
				</div>
			</div>
			<div class="col-sm-2 column borderline" >
				<img src="images/clock-1.png" alt="bus" class="fonticons">
				<label >PICK UP AT</label>
				<input type="text" onfocus = "(this.type = 'time')" placeholder="Time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime"id="onewaytime"  required>
				<div class="invalid-tooltip">
				Please select time.
				</div>
			</div>
	  		<div class="col-sm-2 end-column button">
				<input type="hidden" name="trip" value="oneway" >
					<input  type="submit" name="onewaysubmit" class="btn btnn" id="onewaysubmit" value="EXPLORE CABS" >
			</div>			
	  </div>

	</form>
	</div>
</section>

<!--ROUNDTRIP SECTION-->
<section class="roundtripsec" id="roundtripsec" style="display:none">
<div class="roundtripform" id="roundtripform">
	<form action="loginpage.php" method="GET" class="needs-validation w3-container" novalidate>
	  <div class="row">
			<div class="col-sm-2 start-column">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >From</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" name="sourcecity" autocomplete="off" id="roundtripfrom" placeholder="Source " required>
			  <div class="invalid-tooltip">
				Please select the source city.
			  </div>
			  <div id="roundbox"></div>
			</div>
			<div class="col-sm-2 column borderline">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >To</label>
			  <input type="text" class="form-control w-100"value="<?php echo $destinationcity; ?>" name="destinationcity" id="roundtripto" autocomplete="off" placeholder="Destination" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			   <div id="roundtobox"></div>
			</div>
			<div class="col-sm-2 column borderline">
				<img src="images/calendar.png" alt="bus" class="fonticons">
			  <label >PICK UP</label>
			  <input type="text" onfocus = "(this.type = 'date')" placeholder="From Date" class="form-control w-100" value="<?php echo $fromdate; ?>" onclick="fromdate()" name="fromdate" id="roundtripdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>
			<div class="col-sm-2 column borderline">
				<img src="images/calendar.png" alt="bus"  class="fonticons">
			  <label >RETURN</label>
			  <input type="text" onfocus = "(this.type = 'date')" placeholder="To Date" class="form-control w-100" value="<?php echo $totime; ?>" onclick="todate()" name="todate" id="roundtripreturn"  required>
			  <div class="invalid-tooltip">
				Please select return date.
			  </div>
			</div>			
			<div class="col-sm-2 column">
				<img src="images/clock-1.png" alt="bus"  class="fonticons">				
			  <label >PICK UP AT</label>
			  <input type="text" onfocus = "(this.type = 'time')" placeholder="Time" class="form-control w-100"onclick="fromtime()" value="<?php echo $fromtime; ?>" name="fromtime"id="roundtriptime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
			<div class="col-sm-2 end-column button">
					<input type="hidden" name="trip" value="roundtrip" >
					<input  type="submit" name="onewaysubmit" class="btn btnn " id="onewaysubmit" value="EXPLORE CABS" >
			</div>
	  </div>

	</form>
	</div>
</section>

<!-- LOCALFORM-->
<section class=" localsec" id="localsec" style="display:none">
<div class="localform" id="localform" >
	<form action="loginpage.php" method="GET" class="needs-validation" novalidate>
	  <div class="row">
			<div class="col-sm-6 start-column">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >CITY</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" name="sourcecity" id="localfrom" autocomplete="off" placeholder="Source" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			  <div id="localbox"></div>
			</div>
				
			<div class="col-sm-2 column borderline">
				<img src="images/calendar.png" alt="bus"  class="fonticons">
			  <label >PICK UP</label>
			  <input type="text" onfocus = "(this.type = 'date')" placeholder="Date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="localdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>
			<div class="col-sm-2 column ">
				<img src="images/clock-1.png" alt="bus" class="fonticons">
			  <label >PICK UP AT</label>
			  <input type="text" onfocus = "(this.type = 'time')" placeholder="Time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime" id="localtime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
			<div class="col-sm-2 end-column button">
					<input type="hidden" name="trip" value="local" >
					<input  type="submit" name="onewaysubmit"  class="btn btnn" id="onewaysubmit" value="EXPLORE CABS" >
			</div>
	  </div>


	</form>
	</div>
</section>

<!-- AIRPORT-->
<section class="airportsec" id="airportsec" style="display:none">
<div class="airportform" id="airportform">
	<form action="loginpage.php" method="GET" class="needs-validation" novalidate>
	  <div class="row">
	 		<div class="col-sm-2 start-column ">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >TRIP</label>
				<select class="form-select form-control w-100" name="airporttrip" id="airporttrip">
				  <option  value="Pickup from airport">Pickup from airport</option>
				  <option selected value="Drop to airport">Drop to airport</option>
				</select>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			  <div id="airportbox"></div>
			</div> 
			<div class="col-sm-2 column borderline">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >PICKUP CITY</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" autocomplete="off" name="sourcecity" id="airportfrom" placeholder="Source" required>
			  <div class="invalid-tooltip">
				Please select the source city.
			  </div>
			</div>
			<div class="col-sm-2 column borderline">
				<img src="images/bus-1.png" alt="bus"  class="fonticons" >
			  <label >ADDRESS</label>
			  <input type="text" class="form-control w-100"value="<?php echo $airportaddress; ?>" autocomplete="off" name="airportaddress" id="airportaddress"  placeholder="Address" required>
			  <div class="invalid-tooltip">
				Please select Address.
			  </div>
			</div>
			<div class="col-sm-2 column borderline">
				<img src="images/calendar.png" alt="bus"  class="fonticons">
			  <label >PICK UP</label>
			  <input type="text" onfocus = "(this.type = 'date')" placeholder="Date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="airportdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>			
			<div class="col-sm-2 column">
				<img src="images/clock-1.png" alt="bus"  class="fonticons">			 
			 <label >PICK UP AT</label>
			  <input type="text" onfocus = "(this.type = 'time')" placeholder="Time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime"id="airporttime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
			<div class="col-sm-2 end-column button">
					<input type="hidden" name="trip" value="airport" >
					<input  type="submit" name="onewaysubmit" class="btn btnn" id="onewaysubmit" value="EXPLORE CABS" >
			</div>
	  </div>

	</form>
	</div>
</section>

</body>
<footer>


</footer>
</html>