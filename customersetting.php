<?php
				ini_set('display_errors', 0); 
				include("database.php");
				
				$email=$_GET['email'];
				$sql="select userid,username,useremail,userpassword,usermobile from userdetails where useremail='".$email."'";
				$res= mysqli_query($con, $sql);

?>

<?php	
		session_start();
		ini_set('display_errors', 0); 
        if(isset($_POST["register"])) {
            include("database.php");

			$email=$_POST["email"];
			$userid=$_POST["userid"];			
			$username=$_POST["username"];
			$useremail=$_POST["useremail"];
			$userpassword=$_POST["userpassword"];
			$usermobile=$_POST["usermobile"];
			
			setcookie("username", $username, time() + (86400 * 365), "/");
			setcookie("email", $email, time() + (86400 * 365), "/");
			
			$qry="update userdetails set username='".$username."',useremail='".$useremail."',userpassword='".$userpassword."',usermobile='".$usermobile."' where useremail='".$email."'";
			mysqli_query($con,$qry);

			$qry2="update bookings set cusemail='".$useremail."' where cusemail='".$email."'";
			mysqli_query($con,$qry2);
		
			header("Location:customerdashboard.php?email=".$useremail." ");
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

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}
</style>
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
<body >
<div>
	<?php include("customernavbar.php");?>
</div>

    
		<center>
		<div class="btn-group" role="group" style="margin-top:2%;">
			<a href="customerdashboard.php?email=<?php echo $email; ?>" class=""><button class="btn " style="font-size:100%;border:1px solid black;">Upcoming</button></a>
			<a href="customercancel.php?email=<?php echo $email; ?>" class=""><button class="btn "  style="border:1px solid black;font-size:100%;">Cancelled</button></a>
			<a href="customercomplete.php?email=<?php echo $email; ?>" class=""><button class="btn " style="font-size:100%;border:1px solid black;">Completed</button></a>
		</div>
		</center>


<?php while($row=mysqli_fetch_assoc($res)){?>
<div class="container">
    <div class="row">
	<center>
        <div class="col-lg-5 col-md-7 ">
            <div class="panel border bg-white">
                <div class="panel-body p-3">
                    <form action="customersetting.php" method="POST">
					
                        
						<input type="hidden" name="userid" class="form-control" placeholder="Enter Your Name" required value="<?php echo $row['userid']; ?>"> 
				
	
                        <input type="hidden" name="email" class="form-control" placeholder="Enter Your Name" required value="<?php echo $email; ?>"> 

				
						<div class="form-group py-2">
                            <div class="input-field"> <input type="text" name="username" class="form-control" placeholder="Enter Your Name" required value="<?php echo $row['username']; ?>"> </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="email" name="useremail" class="form-control" placeholder="Enter Your Email" required  value="<?php echo $row['useremail']; ?>" >  </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="password" name="userpassword" class="form-control" placeholder="Enter Your Password" required value="<?php echo $row['userpassword']; ?>" >  </div>
                        </div>
                        <div class="form-group py-2">
                            <div class="input-field"> <input type="text" name="usermobile" class="form-control" placeholder="Enter Mobile Number" required value="<?php echo $row['usermobile']; ?>" >  </div>
                        </div>
                        <div class=""><input type="submit" value="UPDATE" name="register" class="btn btn-primary w-100" ></div>
                    </form>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                </div>
            </div>
        </div>
	</center>
    </div>
</div>
<?php } ?>
</body>
</html>