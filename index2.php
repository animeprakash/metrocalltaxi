<?php
			session_start();
			ini_set('display_errors', 0); 
			include("database.php");				
			$username=$_COOKIE['username'];
			$email=$_COOKIE['email'];
			$sql="select username,useremail from userdetails where username='".$username."' and useremail='".$email."' ";
			$res= mysqli_query($con,$sql);
			$data=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"  crossorigin="anonymous">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/landingstyle.css" rel="stylesheet">
	
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css'>

	<link href="lib/style.css" rel="stylesheet">
<style>
@media only screen and (min-device-width : 600px) {
.landingcar{
	width:100%;
	height:100%;
}
.landing-car{
	display:none;
}
.forms{
	margin-top:10%;
}
.space{
	margin:-8% 0 -8% 0;
}
.mobile-bar{
	display:none;
}
.logosize{
     height:70px;  
     width:auto;
}
.bannertitle{
	margin:5% 0 0 0 ;
	font-size:40px;
	font-weight:bold;
}
.bannerspan{
	margin:0% 0 0 0 ;
	font-size:30px;
	font-weight:bold;
}
}

@media only screen and (min-device-width : 0px) and (max-device-width :600px) {
.landing-car{
	width:100%;
	height:auto;
}

.landingcar{
	width:100%;
	height:350px;
}
.forms{
	margin-top:35%;
}
.space{
	margin:-140px 0 -140px 0;
}	
.desktop-view{
	display:none;
}
.logosize{
     height:45px; 
     width:auto;
}
.bannertitle, .bannerspan{
	display:none;
}
}
</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light" style="font-size:12px;"><i class="fa fa-map-marker-alt me-2"></i>NO.3/20, MARI ST, SENTHAMIZH NAGAR, RAMAPURAM, CHENNAI-60089.</small>
                    <small class="me-3 text-light" style="font-size:12px;"><i class="fa fa-phone-alt me-2"></i>+91 91598 99299</small>
                    <small class="text-light" style="font-size:12px;"><i class="fa fa-envelope-open me-2"></i>support@metrocalltaxi.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="margin-top:-20px;">
                <span class="fa fa-bars"></span>
            </button>
            <a href="index.php" class="navbar-brand p-0">
                <h5 class="m-0"><img src="images/Metrologo.png" class="logosize"> </h5>
            </a>

			<?php 		
			if($data['username']==FALSE&$data['useremail']==FALSE)
			{	
			?>
			 <a href="loginpage.php?trip=customer" class="mobile-bar"><img src="images/user-icon.png" width="32px" height="32px"></a>
			<?php				
			}else if($data['username']==TRUE&$data['useremail']==TRUE){ ?>

			 <a href="customerdashboard.php?email=<?php echo $data['useremail'];?>" class="mobile-bar"><img src="images/user-icon.png" width="32px" height="32px" style="margin-left:0;"><br><span  style="font-size:7px;"><?php echo $data['username'];?></span></a>		
			<?php } ?>
               		
		
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
			<?php 		
			if($data['username']==FALSE&$data['useremail']==FALSE)
			{	
			?>
			 <a href="loginpage.php?trip=customer" class="btn btn-primary py-2 px-4 ms-3 desktop-view" style="border-radius:50px;">LOGIN / SIGNUP</a>
			<?php				
			}else if($data['username']==TRUE&$data['useremail']==TRUE){ ?>

			 <a href="customerdashboard.php?email=<?php echo $data['useremail'];?>" class=" py-2 px-4 ms-3 btn-primary desktop-view" style="border-radius:50px;"><img src="images/user-icon2.png" width="32px" height="32px">&nbsp;<?php echo $data['username'];?></a>		
			<?php } ?>
               
            </div>
        </nav>
        <div id="header-carousel " class="carousel slide carousel-fade" data-bs-ride="carousel">	
            <div class="carousel-inner">
                <div class="carousel-item active">
					<img class="landing-car" src="images/landing-car.png" alt="Image">
                    <img class="landingcar" src="images/landingcar-4.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center ">	
							<div class="container forms" style="width:90%;">
								<div class="row"><?php include("formsnew.php");?></div>
							</div>
						<div><p class="bannertitle">Your Journey Our Priority</p><br>
							<p class="bannerspan">100% sanitized | Safe | Reliable Cabs</p>
						</div>
                    </div>
					
                </div>
			</div>
		</div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0" >
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center  justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Indian Cities</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">300</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-success  shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-success"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">   Vendors    </h5>
                            <h1 class="mb-0 text-white" data-toggle="counter-up">22000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
							<i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Customers</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">75000</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp space" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-success text-uppercase">About Metro</h5>
                        <h1 class="mb-0">The Best Taxi Drivers With 10 Years of Experience</h1>
                    </div>
                    <p class="mb-4 text-justify">Metro Call Taxi is the industry’s leader in providing reliable and premium car rental service In Tamil Nadu, Karnataka, Andra Pradesh, Kerala at the most competitive pricing. We pride ourselves on being rated as one of the best car rental company providing comfortable and commendable taxi hire services.
					</p>
                    <p class="mb-4 text-justify">We provide our valued customers with a comprehensive range of latest and well-maintained cars and value for money. When it comes to car rentals, we continuously thrive to deliver excellence in service to all our valuable clients.
                    </p>
                    <p class="mb-4 text-justify">With a choice of cars from hatchbacks to sedans, SUV Cars and tempo traveler, we offer you one-stop solution for all your travel needs. With Metro Call Taxi, you can book Outstation one-way, Outstation round-trip, Local Rental, Airport Pickup and Drops.
                    </p>
                    <p class="mb-4 text-justify">Through our cutting-edge online booking platform, we ensure to provide our clients with the great car rental experience at the lowest possible price. We provide latest, clean and well-maintained car with experienced and licensed chauffeurs. Our 24*7 online booking portals allow you to book your car rental with just a single click.
                    </p> 
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="images/landingcar-6.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">Choose Metro Call Taxi for Online Cab Booking</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Metro Cars</h4>
                            <p class="mb-0">Hygiene is the top-most priority for METRO CALL TAXI. That’s why, they ensure that the cab you book is absolutely clean. </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Reliable Services</h4>
                            <p class="mb-0">Every person is looking for a reliable experience that prioritizes their needs and concerns.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="images/landingcar-5.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Courteous Chauffeurs</h4>
                            <p class="mb-0">You can find the top-rated drivers here who will make your journey smooth and your trip memorable.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">You can connect with the 24/7 customer support service and resolve all your booking related queries. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp space" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"></h5>
                <h1 class="mb-0">Our Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/taxi-1.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">ONEWAY CAB</h4>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/taxi-2.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">ROUND TRIP</h4>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/taxi-4.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">LOCAL</h4>
                            
                        </div>
                    </div>
                </div>
				<div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="images/taxi-5.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">AIRPORT</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
   
    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp space" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"></h5>
                <h1 class="mb-0">Our Fleets</h1>
            </div>
            <div class="row g-5">	
					<?php include("imageslider/imageslider.php");?>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"></h5>
                <h1 class="mb-0">Mobile App</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Basic Plan</h4>
                            <small class="text-uppercase">For Small Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
							<img src="images/taxiimage.png" alt="" width="100%" height="auto" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1 text-center">DOWNLOAD <br>METRO CALL TAXI APP</h4>
                        </div>
                        <div class="p-5 pt-0">
						
                            <h5 class=" mb-3 text-center">
                               Our services are available in mobile app.
                            </h5>
							<div class="text-center">
								<img src="images/landingcar-10.png" alt="" width="70%">
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Advanced Plan</h4>
                            <small class="text-uppercase">For Large Size Business</small>
                        </div>
                        <div class="p-5 pt-0">
						<img src="images/landingcar-9.png" alt="" width="100%" height="auto" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-success text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-success me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-success me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <!--p class="mb-4">Eirmod sed tempor</p-->
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-success d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-success mb-0">+91 93609 83890</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" >
                    <div style="border-radius:20px;" class="bg-primary h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s" >
                        <form >
                            <div class="row g-3" >
                                <div class="">
                                    <input type="text" class="w-100 form-control-sm bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="">
                                    <input type="email" class="w-100 form-control-sm bg-white  border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="">
                                    <textarea class=" w-100 form-control-lg bg-white border-0 " rows="3" placeholder="Message" style="height: 55px;"></textarea>
                                </div>
                                <div class="">
                                    <button class="btn btn-success text-white w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
 <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp space" data-wow-delay="0.1s" >
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!--h5 class="fw-bold text-primary text-uppercase">Our Services</h5-->
                <h1 class="mb-0 fw-bold text-success text-uppercase">WHY WE ARE SPECIAL</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon bg-white border border-success">
                            <!--i class="fa fa-shield-alt text-white"></i-->
							<img src="images/destination.png" alt="" width="70%" height="auto" style="transform: rotate(45deg);">
                        </div>
                        <h4 class="mb-3">No Riding Limits</h4>
                        <!--p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p-->
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon bg-white border border-success">
							<img src="images/settings.png" alt="" width="70%" height="auto" style="transform: rotate(45deg);">
                        </div>
                        <h4 class="mb-3">Well Maintained</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon bg-white border border-success">
							<img src="images/credit-card.png" alt="" width="70%" height="auto" style="transform: rotate(45deg);">
                        </div>
                        <h4 class="mb-3">Secure Payments</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon bg-white border border-success">
							<img src="images/24-hours.png" alt="" width="70%" height="auto" style="transform: rotate(45deg);">
                        </div>
                        <h4 class="mb-3">No Bullshit</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon bg-white border border-success">
							<img src="images/man.png" alt="" width="70%" height="auto" style="transform: rotate(45deg);">
                        </div>
                        <h4 class="mb-3">Verified Dealers</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
				
               <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon bg-white border border-success">
							<img src="images/money.png" alt="" width="70%" height="auto" style="transform: rotate(45deg);">
                        </div>
                        <h4 class="mb-3">100% Moneyback</h4>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Service End -->




  
    <!-- Footer Start -->
    <div class="container-fluid text-light mt-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #061429;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white">Newsletter</h1>
                        </a>
                        <form action="">
                            <div class="input-group d-flex">
                                <input type="text" class="form-control-sm border-white p-3" placeholder="Your Email" style="width:75%;">
                                <button class="btn btn-sm btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">NO.3/20, MARI ST, SENTHAMIZH NAGAR, RAMAPURAM,<br> CHENNAI-60089.</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">support@metrocalltaxi.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+91 91598 99299</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Work Hour</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <p>Mon - Sat : 08:00 - 18:00</p>
								<p>Sun : 09:00 - 18:00</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white" href="#">metrocalltaxi.com</a>. All Rights Reserved. 
						Designed by <a class="text-white" href="">Aristos Tech</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		

</body>

</html>