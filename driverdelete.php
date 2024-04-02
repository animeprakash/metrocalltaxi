<?php	


	$did=$_GET['did'];
	$vehicleid=$_GET['vehicleid'];
	include ('database.php');

	$qry="delete from driverdetails where did='".$did."'";
	$result=mysqli_query($con,$qry);

	$query="delete from vehicledetails where vehicleid='".$vehicleid."'";
	$res=mysqli_query($con,$query);
	
	if($result){
		header("Location:driversdetails.php");
	}else{
		echo"ERROR!!"; 
	}

?>