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
<html>
<head>	
		<!--link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
		<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script-->
		
<style>
@media only screen and (min-device-width :600px) {
* {
  box-sizing: border-box;
}

.sec{
	margin-bottom:2%;
	text-align:center;
}

.form-control{
	border:1px;
	height:50px;
	border:1px solid black;
	border-radius:0px;
	box-shadow: 10px 10px 40px rgb(218, 218, 218);

}
label{
	display:none;
}
.but{
	border:1px solid black;
	font-weight:bold;
	color:gray;
	font-size:70%;
}
.invalid-tooltip{
	text-align:left;
	margin-left:10px;
	font-size:9px;
}
a:hover {
  text-decoration:none;
}

.onewaysec, .localsec, .roundtripsec, .airportsec{
	height:50px;
}
.ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    overflow-x: hidden;
	font-size:15px;
	width:100px;
	background-color:white;
}

.ui-autocomplete::-webkit-scrollbar {
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
.ui-menu {
    background-color:white;
}
#onewaybut,#roundtripbut,#localbut,#airportbut{
	background-color:white;
}
#onewaysubmit,#roundtripsubmit,#localsubmit,#airportsubmit{
	background-color:#0096FF;
	color:white;
}
.col-sm-2{
	width:19%;
	margin-left:-12px;
	margin-right:-12px;
}
.col-lg-3{
	width:27.2%;
	margin-left:-12px;
	margin-right:-12px;
}
.col-sm-6{
	width:52%;
	margin-left:-12px;
	margin-right:-12px;
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
	width: 0px;
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
@media only screen and (min-device-width : 0px) and (max-device-width :599px) {
.col-sm-2{
	width:100%;
}
.col-lg-3{
	width:100%;	
}
.col-sm-6{
	width:100%;	
}
.sec{
	margin-top:15%;
	margin-bottom:2%;
	text-align:center;
}
label{
	display:none;
}
.form-control{
	height:50px;
	margin:2px 0 2px 0;
	border:1px solid black;
	border-radius:40px;
}
.onewaysec, .localsec, .roundtripsec, .airportsec{
	margin:0%;
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
#onewaysubmit,#roundtripsubmit,#localsubmit,#airportsubmit{
	background-color:#0096FF;
	color:white;
}
#city-list {
	margin-top:10px;
    list-style: none;
	min-height:0px;
	max-height:100px;
    padding:0 0 0 0;
	min-width:10%;
    max-width:100%;
	overflow-x:hidden;
	overflow-y:scroll;
	border:1px solid black;
	border-radius:5px;
}

#city-list li {
	color:black;
    padding:0%;
	font-size:100%;
    background-color:white;
    border-bottom:0px solid #0096FF;
}

#city-list li:hover {
	color:white;
    background-color:#0096FF;
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
	
		<div class="btn-group btngroup" role="group" >
			<button  class="btn but " id="onewaybut" onclick="onewayfun()" style="background-color:#0096FF;color:white;border-color:#0096FF;">ONE&nbsp;WAY</button>
			<button  class="btn but " id="roundtripbut" onclick="roundtripfun()">ROUND&nbsp;TRIP</button>
			<button  class="btn but" id="localbut" onclick="localfun()">LOCAL</button>
			<button  class="btn but" id="airportbut" onclick="airportfun()">AIRPORT</button>
		</div>
	
</div>

<!--ONEWAYSEC-->

<section class="onewaysec" id="onewaysec">
	<div class="onewayform " id="onewayform">
	<form action="selectlocaltaxi.php" method="GET"  class="needs-validation" novalidate id="onewayformm" >
	 <div class="row">
			<div class="col-lg-3">
			  <label >From</label>
			  <input type="text" class="form-control w-100"value="<?php echo $sourcecity; ?>" name="sourcecity" id="onewayfrom" autocomplete="off" placeholder="Source City" required>
			  <div class="invalid-tooltip">
				Please select the source city.
			  </div>
			  <div id="onebox"></div>
			</div>
			<div class="col-lg-3">
			  <label >To</label>
			  <input type="text" class="form-control w-100"value="<?php echo $destinationcity; ?>" name="destinationcity" id="onewayto" autocomplete="off" placeholder="Destination City" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			  <div id="onetobox"></div>
			</div>
			<div class="col-sm-2">
			  <label >PICK UP</label>
			  <input type="date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="onewaydate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>
			<div class="col-sm-2">
			  <label >PICK UP AT</label>
			  <input type="time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime"id="onewaytime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
			<div class="col-sm-2">
					<input  type="submit" name="onewaysubmit" class="form-control" id="onewaysubmit" value="EXPLORE CABS" >
			</div>
	  </div>
	</form>
	</div>
</section>
<!--ROUNDTRIP SECTION-->
<section class="roundtripsec" id="roundtripsec" style="display:none">
<div class="roundtripform" id="roundtripform">
	<form action="selectlocaltaxi.php" method="GET" class="needs-validation w3-container" novalidate>
	  <div class="row">
			<div class="col-sm-2">
			  <label >From</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" name="sourcecity" autocomplete="off" id="roundtripfrom" placeholder="Source City" required>
			  <div class="invalid-tooltip">
				Please select the source city.
			  </div>
			  <div id="roundbox"></div>
			</div>
			<div class="col-sm-2">
			  <label >To</label>
			  <input type="text" class="form-control w-100"value="<?php echo $destinationcity; ?>" name="destinationcity" id="roundtripto" autocomplete="off" placeholder="Destination City" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			  <div id="roundtobox"></div>
			</div>
			<div class="col-sm-2">
			  <label >PICK UP</label>
			  <input type="date" class="form-control w-100" value="<?php echo $fromdate; ?>" onclick="fromdate()" name="fromdate" id="roundtripdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>
			<div class="col-sm-2">
			  <label >RETURN</label>
			  <input type="date" class="form-control w-100" value="<?php echo $todate; ?>" onclick="todate()" name="todate" id="roundtripreturn"  required>
			  <div class="invalid-tooltip">
				Please select return date.
			  </div>
			</div>			
			<div class="col-sm-2">
			  <label >PICK UP AT</label>
			  <input type="time" class="form-control w-100"onclick="fromtime()" value="<?php echo $fromtime; ?>" name="fromtime"id="roundtriptime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
			<div class="col-sm-2">
					<input  type="submit" name="onewaysubmit" class="form-control" id="onewaysubmit" value="EXPLORE CABS" >

			</div>
	  </div>

	</form>
	</div>
</section>

<!-- LOCALFORM-->
<section class=" localsec" id="localsec" style="display:none">
<div class="localform" id="localform" >
	<form action="selectlocaltaxi.php" method="GET" class="needs-validation" novalidate>
	  <div class="row">
			<div class="col-sm-6">
			  <label >CITY</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" name="sourcecity" id="localfrom" autocomplete="off" placeholder="Source City" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			  <div id="localbox"></div>
			</div>

			<div class="col-sm-2">
			  <label >PICK UP</label>
			  <input type="date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="localdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>
			<div class="col-sm-2">
			  <label >PICK UP AT</label>
			  <input type="time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime" id="localtime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
			<div class="col-sm-2">
					<input  type="submit" name="onewaysubmit" class="form-control" id="onewaysubmit" value="EXPLORE CABS" >
			</div>

	  </div>

	</form>
	</div>
</section>

<!-- AIRPORT-->
<section class="airportsec" id="airportsec" style="display:none">
<div class="airportform" id="airportform">
	<form action="selectlocaltaxi.php" method="GET" class="needs-validation" novalidate>
	  <div class="row">
	 		<div class="col-sm-2">
			  <label >TRIP</label>
				<select class="form-select form-control w-100" name="airporttrip" id="airporttrip">
				  <option  value="Pickup from airport">Pickup from airport</option>
				  <option selected value="Drop to airport">Drop to airport</option>
				</select>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div> 
			<div class="col-sm-2">
			  <label >PICKUP CITY</label>
			  <input type="text" class="form-control w-100" value="<?php echo $sourcecity; ?>" autocomplete="off" name="sourcecity" id="airportfrom" placeholder="Source City" required>
			  <div class="invalid-tooltip">
				Please select the source city.
			  </div>
			  <div id="airportbox"></div>
			</div>
			<div class="col-sm-2">
			  <label >PICKUP ADDRESS</label>
			  <input type="text" class="form-control w-100"value="<?php echo $airportaddress; ?>" autocomplete="off" name="airportaddress" id="airportaddress"  placeholder="Pickup Address" required>
			  <div class="invalid-tooltip">
				Please select the Pickup Address.
			  </div>
			</div>
			<div class="col-sm-2">
			  <label >PICK UP</label>
			  <input type="date" class="form-control w-100" value="<?php echo $fromdate; ?>" name="fromdate" id="airportdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>			
			<div class="col-sm-2">
			  <label >PICK UP AT</label>
			  <input type="time" class="form-control w-100" value="<?php echo $fromtime; ?>" name="fromtime"id="airporttime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
			<div class="col-sm-2">
					<input  type="submit" name="onewaysubmit" class="form-control" id="onewaysubmit" value="EXPLORE CABS" >
			</div>
	  </div>
	</form>
	</div>
</section>
</body>
<footer>


</footer>
</html>