<?php
				ini_set('display_errors', 0); 
				include("database.php");
				
				$email=$_GET['email'];
				$sql="select cusid,fromaddress,toaddress,finalamount,fromdate,triptype from ridedetails inner join bookings on customerid=cusid where cusemail='".$email."'";
				$res= mysqli_query($con, $sql);

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
</head>
<body >
<div>
	<?php include("customernavbar.php");?>
</div>
		<center>
		<div class="btn-group" role="group" style="margin-top:2%;">
			<a href="customerdashboard.php?email=<?php echo $email; ?>" class=""><button class="btn " style="font-size:100%;border:1px solid black;">Upcoming</button></a>
			<a href="customercancel.php?email=<?php echo $email; ?>" class=""><button class="btn "  style="border:1px solid black;font-size:100%;">Cancelled</button></a>
			<a href="customercomplete.php?email=<?php echo $email; ?>" class=""><button class="btn w3-blue" style="font-size:100%;border:1px solid #0096ff;">Completed</button></a>
		</div>
		</center>


<?php while($row=mysqli_fetch_assoc($res)){ ?>
<div class="w3-container" style="margin-top:2%;">
<center>

	<div class="w3-responsive col-sm-8" style="margin-top:2%;">

		<table class="w3-table w3-border">
		<tr>
		  <td class="w3-border-right col-sm-3"> <div style="padding:20% 40px;"><?php echo $row['fromdate'];?> </div>
		  </td>
		  <td class=" col-sm-9" >
				<table class="w3-border-0 w3-table">
				<tr >
					<td class=" col-sm-7">
						<?php echo $row['fromaddress'];?>&nbsp;<?php echo $row['toaddress'];?>&nbsp;(<?php echo $row['triptype'];?>)
					</td>
					<td class="w3-padding d-flex col-sm-1" style="margin-left:350px;">
						Trip&nbsp;ID:&nbsp;<?php echo $row['cusid'];?>
						
					</td>
				</tr>
				<tr >
					<td class="col-sm-5">
						Booking&nbsp;Amount&nbsp;:&nbsp;Rs.&nbsp;<?php echo $row['finalamount'];?>
					</td>
				</tr>
				</table>

		  </td>
		</tr>
		</table>

	</div>

</center>
</div>
<?php } ?>

</body>
</html>