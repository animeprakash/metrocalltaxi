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
	
		<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
		<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		
		
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');

*{
	box-sizing:border-box;
	font-family: 'Poppins', sans-serif;
	margin:0;
}
body{
	overflow-y:scroll;
	margin:0;
}
.navigate{
	display:flex;
	width:100%;
}
.home{
	display:flex;
	position:fixed;
	height:90px;
	top:0;
	left:0%;
	width:50%;
	z-index: 1;	
	background-color:white;
}
.homecolor{
	display:flex;
	position:fixed;
	height:90px;
	top:0;
	right:0;
	z-index: 1;
	background-color:#4E7FFF ;
	border-top-left-radius:100px;
	width:50%;
	transition: right 1s;
	
}

.gmlogo{
	width:30%;
	height:auto;
}
nav{
	margin-left:10%;
}
.navbar-brand{
	width:0 5% 0 3%;
}
.taxilogo{
	width:50%;
	height:auto;
	position:absolute;
}
.taxi{
	display:flex;
	margin-top:7.62%;

}
.taxiforms{
	margin-top:-1%;
	margin-left:50%;
    height: 600px;
    width: 50%;
	clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 75% 100%, 25% 100%, 0% 0%);
	background: linear-gradient(-45deg,rgb(0,240,0) ,rgb(0,200,0),#4E7FFF ,#4E7FFF );
	background-size: 400% 400%;
	animation: gradient 0s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

.services{
	background-color:#FAF9F6;
	height:50%;
}

.card-title{
	text-align:center;
}
.text{ text-align:justify; }
.ab{ 
	color:#32CD32 ;
	font-size:65px;
 }
.servicetopic{
	font-size:30px;
	text-align:center;
	font-weight:bold;
	margin-top:10%;
}
.appsec{
	display:flex;
	background-color:#4E7FFF ;
	height:80%;
}
.appdata{
	width:50%;
	margin-top:2%;
}
.apptopic{
	color:white;
	text-align:center;
	font-size:30px;
	font-weight:bold;
}
.mobilemap{
	width:80%;
	height:auto;
}
.apppart{
	color:white;
	margin:0% 10.33% 5% 10.33%;
	font-size:20px;
	text-align:justify;
}
.phonemap{
	margin-left:10%;
	width:50%;
}
ul{
	color:white;
	font-size:20px;
	margin:0% 10.33% 0% 10.33%;
}
.googleplay{
	color:white;
	font-size:20px;
	margin:5% 10.33% 0% 10.33%;	
}
.offer{
	height:420px;
}
.offercard{
	position: absolute;
	width: 350px;
	height: 230px;
	background: radial-gradient(38.33% 86.25% at 4.67% 9%, #AEC5FF 0%, #4E7FFF 100%); 
	border: 1px solid #FFFFFF;
	border-radius: 20px;
}
.cardtitle{
	color:white;
	font-weight:bold;
}
.bluebody{
	display:flex;
}
.cd{
	color:#32CD32 ;
	font-size:35px;
	background-color:white;
	padding:10px;
	border-radius:10px;
}
.icon{
	margin-top:10%;
}
.payment{
	margin:1% 5% 1% 5%;
}
.fonticons{
	display:flex;
	border-top:1px solid white;
	margin:0% 10%;
}
.ef{
	color:#4E7FFF ;
	font-size:15px;
	background-color:white;
	padding:4px;
	border-radius:3px;	
	margin:5% 2% 0% 17%;
}
.security{
	width:10%;
	height:auto;
	position:absolute;
	margin-top:10%;	
}

.safety{
	margin-left:18%;
}
.greencard{
	position: absolute;
	width: 350px;
	height: 230px;
	background: radial-gradient(38.33% 86.25% at 4.67% 9%, #76FD6A 0%, #27B725 100%);
	border: 1px solid #FFFFFF;
	border-radius: 20px;
}
.greenicons{
	display:flex;
	border-top:1px solid white;
	margin:0% 10%;
}
.gh{
	color:white;
	font-size:15px;
	padding:4px;
	border-radius:3px;	
}
.quick{
	margin-left:30%;
}
.ride{
	display:flex;
	margin-top:5%;
}
.hi{
	color:white;
	font-size:25px;
	padding:6%;
}
.apple{
	display:flex;
	margin-left:25%;
}
.mn{ margin-top:10%;}
.service{
	margin:2% 25%;
}
.phonemap{
  animation: 3s phonemap infinite;
}
@keyframes phonemap {
  from {
    margin-left: -100%;
  }
  to {
    margin-left: 10%;
  }
}
</style>
<style>
.home{
	color:black;
  background-color: rgba(255,255,255, 100);
  transition-property: background-color, color;
  transition-duration: 0.3s;
  transition-function: ease-in-out;
}

.navbarcolor {
  background-color: rgba(255,255,255, 100);
  color:black;
}
</style>
<!--script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		  if (prevScrollpos > currentScrollPos) {
			document.getElementById("homecolor").style.right = "0";
		  } else {
			document.getElementById("homecolor").style.right = "-25%";
		  }
		  prevScrollpos = currentScrollPos;
		}
</script-->
<script>

$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	 const navbar = document.querySelector('.home');
	  if (scroll > 1) {
	    //$("#homecolor").css({"background-color":"#27B725","color":"white"});
		document.getElementById("homecolor").style.right = "-25%";
		navbar.classList.add('navbarcolor');
	  }

	  else{
		  //$("#homecolor").css({"background-color":"#4E7FFF","color":"white"});	
		  document.getElementById("homecolor").style.right = "0%";
		  navbar.classList.remove('navbarcolor');
	  }
  })
})
</script>
<!--script>
	document.onreadystatechange = function() {
	  let lastScrollPosition = 0;
	  const navbar = document.querySelector('.home');
	  window.addEventListener('scroll', function(e) {
		lastScrollPosition = window.scrollY;
		
		if (lastScrollPosition > 300)
		  navbar.classList.add('navbar-dark');
		else
		  navbar.classList.remove('navbar-dark');
	  });
	}
</script-->
</head>

<body>
<section class="navigate">
	<div class="home">
		<img src="gmlogo.png" alt="" class="gmlogo">
		<nav class="navbar ">
		  <a class="navbar-brand" href="taxihome.php">Home</a>
		  <a class="navbar-brand" href="about.php">About Us</a>
		  <a class="navbar-brand" href="contactus.php">Contact Us</a>
		</nav>
	</div>	
		<div class="homecolor" id="homecolor">
			<p> </p>
		</div>
</section>
<section class="taxi">
		<div>
			<img src="taxi2.png" alt="" class="taxilogo">
		</div>
		<div class="taxiforms">
			
		</div>
</section>
<section class="offer">
	<p class="servicetopic">What We Offer</p>
		<p class="service">Booking a ride with GM Call Taxi is a breeze. You can easily book through our user-friendly website or by giving us a call. We offer flexible options to fit your schedule.</p>
		<div class="container">
		  <div class="row">
			<div class="col">
				<div class="offercard" >
				  <div class="card-body bluebody">	
						<div class="icon">
							<i class="fa fa-money cd"></i>
						</div>
						<div class="payment">
							<h5 class="cardtitle"><br>Support All Payment</h5>
							<p class="text-white">We offer flexible options to fit your schedule.</p>
						</div>
				  </div>
				  <div class="fonticons">
					<i class="fa fa-cc-visa ef"></i><i class="fa fa-cc-mastercard ef"></i><i class="fa fa-cc-paypal ef"></i>
				  </div>
				</div>
			</div>
			<div class="col">
			  	<div class="greencard" >
				  <div class="card-body bluebody">	
						<div class="securityicon">
							<img src="icons/security.png" alt="" class="security">
						</div>
						<div class="safety">
							<h5 class="cardtitle"><br>Safety First</h5>
							<p class="text-white">Our drivers are not just skilled behind the wheel.</p>
						</div>
				  </div>
				  <div class="greenicons">
						<span class="quick ride ">
						<i class="fa fa-car gh"></i><p class="text-white">Quick Ride</p>
						</span>
				  </div>				  
				</div>
			</div>
			<div class="col">
				<div class="offercard" >
				  <div class="card-body bluebody">	
						<div class="securityicon">
							<img src="icons/mobile.png" alt="" class="security">
						</div>
						<div class="safety">
							<h5 class="cardtitle"><br>Online Enquiry</h5>
							<p class="text-white">Whenever you need a ride, we're here for you.</p>
						</div>
				  </div>
				  <div class="fonticons">
						<div class="ride">
							<span class="apple"><i class="fa fa-apple hi"></i><p class="text-white mn">Apple</p></span>
							<span class="apple"><i class="fa fa-android hi"></i><p class="text-white mn">Android</p></span>
						</div>
				  </div>
				</div>
			</div>
		  </div>
		</div>
</section>
<section class="services">

		<p class="servicetopic">OUR SERVICES</p>
		<div class="container">
		  <div class="row">
			<div class="col">
				<div class="card" >
				  <div class="card-body cardbody">	
					<h5 class="card-title"><i class='fa fa-user-plus ab'></i><br>PRIVATE DRIVER</h5>
						<p class="text">Enjoy the best customer service from our professional drivers.</p>
				  </div>
				</div>
			</div>
			<div class="col">
			  	<div class="card" >
				  <div class="card-body cardbody">	
					<h5 class="card-title"><i class='fa fa-plane ab'></i><br>AIRPORT TRANSFER</h5>
						<p class="text">Comfortable transfer services from airport to any chosen address.</p>
				  </div>
				</div>
			</div>
			<div class="col">
			 	<div class="card" >
				  <div class="card-body cardbody">	
					<h5 class="card-title"><i class='fa fa-briefcase ab'></i><br>BAGGAGE TRANSFER</h5>
						<p class="text">If you need to collect your baggage, we are ready to help you.</p>
				  </div>
				</div>
			</div>
		  </div>
		</div>
</section>
<section class="appsec bg-primary">
	<div class="appdata">
			<p class="apptopic">DOWNLOAD THE APP</p>
			<p class="apppart">Download our app and enjoy the best service from TAXI. All you have to do to begin using it is to enter your name and mobile phone number. You’ll access:</p>
			<ul>
			<li>Special offers</li>
			<li>TAXI loyalty program</li>
			<li>More pricing plans</li>
			</ul>
			<img src="googleplay.png" alt="" class="googleplay">
	</div>
	<div class="phonemap">
		<img src="mobilemap.png" alt="" class="mobilemap">
	</div>
</section>
</body>
<footer>

</footer>
</html>