<?php
		ini_set('display_errors', 0); 
			
			$trip=$_GET['trip'];
		    $sourcecity=$_GET['sourcecity'];
            $destinationcity=$_GET['destinationcity'];
			$fromdate=$_GET['fromdate'];
			$todate=$_GET['todate'];
            $fromtime=$_GET['fromtime'];
			$airporttrip=$_GET['airporttrip'];
			$airportaddress=$_GET['airportaddress'];
			
        if(isset($_POST["submit"])) {
            include("database.php");
			
			$useremail=$_POST["useremail"];
			$userpassword=$_POST["userpassword"];			
			$conpassword=$_POST["conpassword"];
			
			$trip=$_POST['trip'];
			$sourcecity=$_POST['sourcecity'];
			$destinationcity=$_POST['destinationcity'];	
			$fromdate=$_POST['fromdate'];
			$fromtime=$_POST['fromtime'];
			$todate=$_POST['todate'];			
			$airporttrip=$_POST['airporttrip'];
			$airportaddress=$_POST['airportaddress'];
			
			
				$qtwo = "SELECT * FROM userdetails WHERE useremail = '".$useremail."'";
				$restwo=mysqli_query($con,$qtwo);

				if(mysqli_num_rows($restwo)==FALSE ){

					echo "<script>alert('This E-mail Id Not registered');window.location.href='forgotpassword.php?trip=".$trip."&sourcecity=".$sourcecity."&destinationcity=".$destinationcity."&fromdate=".$fromdate."&fromtime=".$fromtime."&todate=".$todate."&airporttrip=".$airporttrip."&airportaddress=".$airportaddress."&useremail=".$useremail."';</script>";														
									
				}				
				else if($userpassword!=$conpassword){

					echo "<script>alert('Confirm password is incorrect');window.location.href='forgotpassword.php?trip=".$trip."&sourcecity=".$sourcecity."&destinationcity=".$destinationcity."&fromdate=".$fromdate."&fromtime=".$fromtime."&todate=".$todate."&airporttrip=".$airporttrip."&airportaddress=".$airportaddress."&useremail=".$useremail."';</script>";														
												
				}
				else		
				{
					$qone="update userdetails set userpassword='".$conpassword."' where useremail='".$useremail."'";
					$resone=mysqli_query($con,$qone);
					
					if($trip=='oneway')
					{
						header("Location:loginoneway.php?sourcecity=".$sourcecity."&destinationcity=".$destinationcity."&fromdate=".$fromdate."&fromtime=".$fromtime."&todate=".$todate."&airporttrip=".$airporttrip."&airportaddress=".$airportaddress."");	
					}
					else if($trip=='roundtrip'){
						header("Location:loginroundtrip.php?sourcecity=".$sourcecity."&destinationcity=".$destinationcity."&fromdate=".$fromdate."&fromtime=".$fromtime."&todate=".$todate."&airporttrip=".$airporttrip."&airportaddress=".$airportaddress."");	
					}
					else if($trip=='local'){
						header("Location:loginlocal.php?sourcecity=".$sourcecity."&destinationcity=".$destinationcity."&fromdate=".$fromdate."&fromtime=".$fromtime."&todate=".$todate."&airporttrip=".$airporttrip."&airportaddress=".$airportaddress."");	
					}
					else if($trip=='airport'){
						header("Location:loginairport.php?sourcecity=".$sourcecity."&destinationcity=".$destinationcity."&fromdate=".$fromdate."&fromtime=".$fromtime."&todate=".$todate."&airporttrip=".$airporttrip."&airportaddress=".$airportaddress."");	
	
					}
					else if($trip=='customer'){
						header("Location:adminloginform.php?trip='".$trip."'");	
					}					
				}
		}	
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
                    <h3 class="pt-3 font-weight-bold">FORGOT PASSWORD</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="forgotpassword.php" method="POST">
				
						<input type="hidden" name="trip" class="form-control" value="<?php echo $trip;?>" required>
						<input type="hidden"  name="airporttrip"  value="<?php echo $airporttrip; ?>" >
						<input type="hidden"  name="sourcecity" value="<?php echo $sourcecity; ?>" >
						<input type="hidden"  name="airportaddress"  value="<?php echo $airportaddress; ?>" >
						<input type="hidden"  name="destinationcity"  value="<?php echo $destinationcity; ?>" >
						<input type="hidden"  name="fromdate"  value="<?php echo $fromdate; ?>" >
						<input type="hidden"  name="todate" value="<?php echo $todate; ?>" >
						<input type="hidden"  name="fromtime" value="<?php echo $fromtime; ?>" >
				
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="email" name="useremail" class="form-control" placeholder="Enter Your Email" required>  </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="password" name="userpassword" class="form-control" placeholder="Enter New Password" required>  </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="password" name="conpassword" class="form-control" placeholder="Enter Confirm Password" required>  </div>
                        </div>
                        <div class=""><input type="submit" value="UPDATE PASSWORD" name="submit" class="btn btn-primary w-100" ></div>
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