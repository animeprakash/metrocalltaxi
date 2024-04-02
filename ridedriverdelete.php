<?php	

while(isset($_GET['customerid'])){
	$customerid=$_GET['customerid'];
	include ('database.php');

	$qry="delete from ridedetails where customerid='".$customerid."'";
	$result=mysqli_query($con,$qry);

	
	if($result){
		header("location:allrides.php");
	}else{
		echo"ERROR!!"; 
}
}
?>