<?php	

while(isset($_GET['taxiid'])){
	$taxiid=$_GET['taxiid'];

	include ('database.php');

	$qry="delete from taxidetails where taxiid='".$taxiid."'";
	$result=mysqli_query($con,$qry);

	if($result){
		header("Location:taxidetails.php");
	}else{
		echo"ERROR!!"; 
}
}
?>