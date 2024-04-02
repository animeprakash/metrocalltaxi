
<html>
<head>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"  crossorigin="anonymous">

	
		<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
		<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<style>
* {
  box-sizing: border-box;
}
.onewayform{
	height:21%;
}
.sec{
	width:83.33%;
	height:27.8%;
	padding:15px 0px;
	margin:0% 8.33% 0% 8.33%;
	background-color:white;
	border-radius:25px;
	text-align:center;
	position:relative;
}
.formrow{
	display:flex;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height:100px;
}
.form-control{
	border:0px;
	border-bottom:1px solid black;
}
label{
	font-weight:bold;
	float:left;
}
.but{
	border:1px solid black;
	padding:0 25px;
	font-weight:bold;
	color:gray;
}
.onewaysub{
	margin-top:50px;
	float:center;
}
.invalid-tooltip{
	text-align:left;
	margin-left:15px;
	font-size:9px;
}
a:hover {
  text-decoration:none;
}

.onewaysec{
	width:83.33%;
	height:25%;
	text-align:center;
	position:absolute;
	padding:15px 0px;
	margin:0% 8.33% 0% 8.33%;
	border-radius:25px;
	margin-top:-9.5%;
}
.localform{
	height:21%;
}
.localsec{
	width:83.33%;
	height:25%;
	text-align:center;
	position:absolute;
	padding:15px 0px;
	margin:0% 8.33% 0% 8.33%;
	border-radius:25px;
	margin-top:-9.5%;
}
.roundtripform{
	height:21%;
}
.roundtripsec{
	width:83.33%;
	height:25%;
	text-align:center;
	position:absolute;
	padding:15px 0px;
	margin:0% 8.33% 0% 8.33%;
	border-radius:25px;
	margin-top:-9.5%;
}
.airportform{
	height:21%;
}
.airportsec{
	width:83.33%;
	height:25%;
	text-align:center;
	position:absolute;
	padding:15px 0px;
	margin:0% 8.33% 0% 8.33%;
	border-radius:25px;
	margin-top:-9.5%;
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
    background:white;
}
.bg{
	background-color:#ADD8E6;
}
@media screen and (max-width:393px) {
.formrow{
	display:inline;
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
</script>
      <script>
         $(function() {
            var locationlist  =  [
<?php
			include ('database.php');
			$qry="select cityname FROM tamilnadu";
			$resultone=mysqli_query($con,$qry);
			while($rowone= mysqli_fetch_assoc($resultone)) {
?>
				"<?php echo $rowone['cityname']; ?>",
<?php
			}
?>
            ];
            $( "#onewayfrom,#onewayto,#roundtripfrom,#roundtripto,#localfrom,#airportfrom,#airportto" ).autocomplete({
				source: locationlist
            });
         });
      </script>
</head>
<body >

<div class="sec">
	<div>
		<div class="btn-group" role="group" >
			<button type="submit" class="btn but " id="onewaybut" onclick="onewayfun()" style="background-color:#0096FF;color:white;border-color:#0096FF;">ONE WAY</button>
			<button type="submit" class="btn but " id="roundtripbut" onclick="roundtripfun()" value="ROUND TRIP">ROUND TRIP</button>
			<button type="submit" class="btn but" id="localbut" onclick="localfun()" value="LOCAL">LOCAL</button>
			<button type="submit" class="btn but" id="airportbut" onclick="airportfun()" value="AIRPORT">AIRPORT</button>
		</div>
	</div>
</div>

<!--ONEWAYSEC-->
<section class="onewaysec bg" id="onewaysec">
	<div class="onewayform" id="onewayform">
	<form action="selectonewaycars.php" method="GET"  class="needs-validation" novalidate id="onewayformm" >
	  <div class="formrow">
			<div class="col">
			  <label >From</label>
			  <input type="text" class="form-control w-100" name="onewayfrom" id="onewayfrom" autocomplete="off" placeholder="Start typing city" required>
			  <div class="invalid-tooltip">
				Please select the source city.
			  </div>
			</div>
			<div class="col">
			  <label >To</label>
			  <input type="text" class="form-control w-100" name="onewayto" id="onewayto" autocomplete="off" placeholder="Start typing city" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			</div>
			<div class="col">
			  <label >PICK UP</label>
			  <input type="date" class="form-control w-100" name="onewaydate" id="onewaydate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>
			<div class="col">
			  <label >PICK UP AT</label>
			  <input type="time" class="form-control w-100" name="onewaytime"id="onewaytime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
			  <input type="hidden" class="form-control w-100" name="triptype"id="triptype"  value="oneway" required>
	  </div>
		<div class="onewaysub">
			<input class="btn btn-primary w-25" type="submit" name="onewaysubmit" id="onewaysubmit" value="EXPLORE CABS" >
		</div>
	</form>
	</div>
</section>

<!--ROUNDTRIP SECTION-->
<section class="roundtripsec text-center bg" id="roundtripsec" style="display:none">
<div class="roundtripform" id="roundtripform">
	<form action="selectroundtriptaxi.php" method="GET" class="needs-validation" novalidate>
	  <div class="row">
			<div class="col">
			  <label >From</label>
			  <input type="text" class="form-control w-100" name="roundtripfrom" autocomplete="off" id="roundtripfrom" placeholder="Start typing city" required>
			  <div class="invalid-tooltip">
				Please select the source city.
			  </div>
			</div>
			<div class="col">
			  <label >To</label>
			  <input type="text" class="form-control w-100" name="roundtripto" id="roundtripto" autocomplete="off" placeholder="Start typing city" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			</div>
			<div class="col">
			  <label >PICK UP</label>
			  <input type="date" class="form-control w-100" name="roundtripdate" id="roundtripdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>
			<div class="col">
			  <label >RETURN</label>
			  <input type="date" class="form-control w-100" name="roundtripreturn"id="roundtripreturn"  required>
			  <div class="invalid-tooltip">
				Please select return date.
			  </div>
			</div>			
			<div class="col">
			  <label >PICK UP AT</label>
			  <input type="time" class="form-control w-100" name="roundtriptime"id="roundtriptime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
	  </div>
		<div class="onewaysub">
			<input class="btn btn-primary w-25" type="submit" name="roundtripsubmit" id="roundtripsubmit" value="EXPLORE CABS" >
		<div>
	</form>
	</div>
</section>

<!-- LOCALFORM-->
<section class=" localsec text-center bg" id="localsec" style="display:none">
<div class="localform" id="localform" >
	<form action="selectlocaltaxi.php" method="GET" class="needs-validation" novalidate>
	  <div class="formrow">
			<div class="col">
			  <label >CITY</label>
			  <input type="text" class="form-control w-100" name="localtaxifrom" id="localfrom" autocomplete="off" placeholder="Start typing city" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			</div>
			<div class="col">
			  <label >PICK UP</label>
			  <input type="date" class="form-control w-100" name="localtaxidate" id="localdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>
			<div class="col">
			  <label >PICK UP AT</label>
			  <input type="time" class="form-control w-100" name="localtaxitime" id="localtime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
	  </div>
		<div class="onewaysub">
			<input class="btn btn-primary w-25" type="submit" name="localtaxisubmit" id="localsubmit" value="EXPLORE CABS" >
		</div>
	</form>
	</div>
</section>

<!-- AIRPORT-->
<section class="airportsec text-center bg" id="airportsec" style="display:none">
<div class="airportform" id="airportform">
	<form action="selectairporttaxi.php" method="GET" class="needs-validation" novalidate>
	  <div class="formrow">
	 		<div class="col">
			  <label >TRIP</label>
				<select class="form-select form-control w-100" name="airporttrip" id="airporttrip">
				  <option  value="Pickup from airport">Pickup from airport</option>
				  <option selected value="Drop to airport">Drop to airport</option>
				</select>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div> 
			<div class="col">
			  <label >PICKUP CITY</label>
			  <input type="text" class="form-control w-100" autocomplete="off" name="airportfrom" id="airportfrom" placeholder="Start typing city" required>
			  <div class="invalid-tooltip">
				Please select the source city.
			  </div>
			</div>
			<div class="col">
			  <label >PICKUP ADDRESS</label>
			  <input type="text" class="form-control w-100" autocomplete="off" name="airportto" id="airportto"  placeholder="Enter Your Address" required>
			  <div class="invalid-tooltip">
				Please select the destination city.
			  </div>
			</div>
			<div class="col">
			  <label >PICK UP</label>
			  <input type="date" class="form-control w-100" name="airportdate" id="airportdate" required>
			  <div class="invalid-tooltip">
				Please select date.
			  </div>
			</div>			
			<div class="col">
			  <label >PICK UP AT</label>
			  <input type="time" class="form-control w-100" name="airporttime"id="airporttime"  required>
			  <div class="invalid-tooltip">
				Please select time.
			  </div>
			</div>
	  </div>
		<div class="onewaysub">
			<input class="btn btn-primary w-25" type="submit" name="airportsubmit" id="airportsubmit" value="EXPLORE CABS" >
		<div>
	</form>
	</div>
</section>
</body>
<footer>

</footer>
</html>