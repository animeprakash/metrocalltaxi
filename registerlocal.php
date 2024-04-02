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

<html lang="en" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

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
</head>
<body>
<div>
	<?php include("topnavbar.php");?>
</div>
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">REGISTRATION FORM</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="selectlocaltaxi.php" method="get">					
						<input type="hidden"  name="sourcecity" id="fromaddress" value="<?php echo $sourcecity; ?>" >
						<input type="hidden"  name="destinationcity" id="toaddress" value="<?php echo $destinationcity; ?>" >
						<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
						<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
						<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >
						<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >
						<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
						
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
</body>
</html>