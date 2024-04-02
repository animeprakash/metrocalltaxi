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
<?php
			ini_set('display_errors', 0); 
            include("database.php");
			
			if(isset($_POST["login"])) {
				if(empty($_POST['useremail']) ||empty($_POST['userpassword']))
				{ 
					echo '<script language="javascript">';
					echo 'alert("Username And Password Needed")';
					echo '</script>';
					
				}else{				
				$sourcecity=$_POST['sourcecity'];
				$destinationcity=$_POST['destinationcity'];
				$fromdate=$_POST['fromdate'];
				$todate=$_POST['todate'];
				$fromtime=$_POST['fromtime'];
				$airporttrip=$_POST['airporttrip'];
				$airportaddress=$_POST['airportaddress'];
			
				$email=$_POST['useremail'];
				$password = $_POST['userpassword'];
				$QUERY = "SELECT * FROM userdetails WHERE useremail = '".$email."' AND userpassword = '".$password."'";
				$result=mysqli_query($con,$QUERY);			
				
				if(mysqli_num_rows($result)==TRUE){					
					
				header("Location:selectroundtriptaxi.php?sourcecity=".$sourcecity."&destinationcity=".$destinationcity."&fromdate=".$fromdate."&fromtime=".$fromtime."&todate=".$todate."&airporttrip=".$airporttrip."&airportaddress=".$airportaddress."&useremail=".$email." ");
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Invalid Username And Password")';
					echo '</script>';
				}
		}}
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
body {
   /* background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) no-repeat; */
   
}
.container {
    margin: 50px auto;
}
.panel-heading {
    text-align: center;
    margin-bottom: 10px
}
#forgot {
    min-width: 100px;
    margin-left: auto;
    text-decoration: none
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
</style>
</head>
<body >
<div>
	<?php include("topnavbar.php");?>
</div>
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">LOGIN</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="loginroundtrip.php" method="post">
						<input type="hidden"  name="airporttrip" id="airporttrip" value="<?php echo $airporttrip; ?>" >					
						<input type="hidden"  name="sourcecity" id="fromaddress" value="<?php echo $sourcecity; ?>" >
						<input type="hidden"  name="destinationcity" id="toaddress" value="<?php echo $destinationcity; ?>" >
						<input type="hidden"  name="fromdate" id="fromdate" value="<?php echo $fromdate; ?>" >
						<input type="hidden"  name="todate" id="return" value="<?php echo $todate; ?>" >
						<input type="hidden"  name="fromtime" id="fromtime" value="<?php echo $fromtime; ?>" >
						<input type="hidden"  name="airportaddress" id="airportaddress" value="<?php echo $airportaddress; ?>" >
						
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" name="useremail" placeholder="Enter your email" required> </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" name="userpassword" placeholder="Enter your Password" required> <!--button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button--> </div>
                        </div>
                        <!--div class="form-inline"> <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-muted">Remember me</label> <a href="#" id="forgot" class="font-weight-bold">Forgot password?</a> </div-->
                        <div class=""><input type="submit" name="login" value="LOGIN" class="btn btn-primary w-100" ></div>
                        <div class="text-center pt-4 text-muted">Don't have an account? <a href="register.php?trip=roundtrip&sourcecity=<?php echo $sourcecity; ?>&destinationcity=<?php echo $destinationcity; ?>&fromdate=<?php echo $fromdate; ?>&fromtime=<?php echo $fromtime; ?>&todate=<?php echo $todate; ?>&airporttrip=<?php echo $airporttrip; ?>&airportaddress=<?php echo $airportaddress; ?>">Register</a> </div>
                         <div class="text-center pt-4 text-muted">Forgot password? <a href="forgotpassword.php?trip=roundtrip&sourcecity=<?php echo $sourcecity; ?>&destinationcity=<?php echo $destinationcity; ?>&airportaddress=<?php echo $airportaddress; ?>&fromdate=<?php echo $fromdate; ?>&fromtime=<?php echo $fromtime; ?>&airporttrip=<?php echo $airporttrip; ?>&todate=<?php echo $todate; ?>">Click here</a> </div>

                    
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