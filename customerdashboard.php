
<?php
				ini_set('display_errors', 0); 
				include("database.php");
				
				$email=$_GET['email'];
				$sql="select cusid,cusname,cusemail,cusmobile,cuspickup,cusdrop,fromaddress,toaddress,fromdate,fromtime,numdays,taxiname,distance,finalamount,triptype,airporttrip,airportaddress,todate,taxiidnumber,CURTIME() from bookings where cusemail='".$email."'  and  fromdate>=curdate() and fromtime>=CURTIME()";
				$res= mysqli_query($con, $sql);

        if(isset($_POST["submit"])) {
            include("database.php");
			
			$cusid=$_POST['cusid'];
			$cusemail=$_POST['email'];
			$reason=$_POST['reason'];
			include ('database.php');
			
			$sql="create table if not exists cancelbookings (cancelid int not null auto_increment primary key,customid int,cancelreason varchar(500),cancelemail varchar(500),cancelon datetime default current_timestamp on update current_timestamp)";
			mysqli_query($con,$sql);

			$qry="insert into cancelbookings(customid,cancelreason,cancelemail)values('".$cusid."','".$reason."','".$cusemail."') ";
			$result=mysqli_query($con,$qry);

			if($result==TRUE){
				header("Location:customerdashboard.php?email=".$cusemail." ");
			}else{
				echo"ERROR!!"; 
			}		
		}
		
		$cancelsql="select customid from cancelbookings where cancelemail='".$email."'";
		$cancelres=mysqli_query($con,$cancelsql);
		
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
			<a href="customerdashboard.php?email=<?php echo $email; ?>" class=""><button class="btn w3-blue" style="font-size:100%;border:1px solid #0096FF;">Upcoming</button></a>
			<a href="customercancel.php?email=<?php echo $email; ?>" class=""><button class="btn "  style="border:1px solid black;font-size:100%;">Cancelled</button></a>
			<a href="customercomplete.php?email=<?php echo $email; ?>" class=""><button class="btn " style="font-size:100%;border:1px solid black;">Completed</button></a>
		</div>
		</center>
		
	
<div class="container-fluid" style="margin-top:2%;">
<center>

	<div class="w3-responsive col-sm-10" style="margin-top:2%;">

		<table class="w3-table w3-border" >
		<tr>
		  <td class="w3-border-right col-sm-3"> <div style="padding:23% 50px;"><a href="index.php" class="btn w3-blue text-white">Start&nbsp;Booking</a></div>
		  </td>
		  <td class=" col-sm-9" >
			<img src="images/banner.png" width="850px" height="150px">

		  </td>
		</tr>
		</table>

	</div>

</center>
</div>


<?php 
	while(($row=mysqli_fetch_assoc($res)) ){ 	
	?>
		<!-- Modal -->
		<div class="modal fade" id="<?php echo $row['cusid'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title text-center" id="exampleModalLabel" style="margin-left:36%">Trip Cancel Form</h5>
			  </div>
			  <div class="modal-body">
				
				<form class="form-inline" action="customerdashboard.php" method="post" >
				    <div class="form-group mb-2">
					    <label for="staticEmail2" class="sr-only">Email</label>
						<!--select class="form-control " name="reason">
						  <option disabled selected>Kindly give your reason</option>
						  <option value="Last Minit issue">Last Minit issue</option>
						  <option value="Rate Issue">Rate Issue</option>
						  <option value="Change Our Plan">Change Our Plan</option>
						   <option ><input type="text" placeholder="Other"></option>
						</select-->
						<input type="text" name="reasons" list="reason" placeholder="Type here" class="form-control">
                        <datalist id="reason">
                          <option value="Last Minit Issue">
                          <option value="Rate Issue">
                          <option value="Change Our Plan">
                        </datalist>
					</div>
					<input type="hidden" value="<?php echo $row['cusid'];?>" name="cusid">
					<input type="hidden" value="<?php echo $row['cusemail'];?>" name="email">
				    <button type="submit" name="submit" class="btn btn-primary mb-2 text-center" style="margin-left:45%">Submit</button>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>	



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
					<td class="col-sm-7">
						<?php echo $row['fromaddress'];?>&nbsp;<?php echo $row['toaddress'];?> (<?php echo $row['triptype'];?>)
					</td>
					<td class="w3-padding d-flex col-sm-1" style="margin-left:350px;">
						Trip&nbsp;ID:&nbsp;<?php echo $row['cusid'];?>
						
					</td>
				</tr>
				<tr >
					<td class="col-sm-5">
						Booking&nbsp;Amount&nbsp;:&nbsp;Rs.&nbsp;<?php echo $row['finalamount'];?>
					</td>
					<td class="col-sm-7" >
					<?php 
						$cancelrow=mysqli_fetch_assoc($cancelres);	
						if($cancelrow['customid']!=$row['cusid']){
					?>	
						<div class="w3-padding d-flex">
						<a class=" w3-button w3-blue w3-padding-small w3-round-large" data-toggle="modal" data-target="#<?php echo $row['cusid'];?>" >CANCEL BOOKING</a>
						<a href="editbookingpage.php?cusid=<?php echo $row['cusid'];?>&email=<?php echo $email; ?>" class=" w3-button w3-blue w3-padding-small w3-round-large w3-right" style="margin-left:5px;">EDIT BOOKING</a>
						</div>
					<?php }else{ ?>	
						<div class="w3-padding d-flex">
						<a class=" btn btn-sm bg-danger text-white w3-padding-small w3-round-large" style="margin-left:250px;">BOOKING&nbsp;CANCELED</a>
						</div>						
						
	<?php } ?>	
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