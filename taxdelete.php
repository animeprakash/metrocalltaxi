<?php	

while(isset($_GET['cusid'])){
	$cusid=$_GET['cusid'];

	include ('database.php');

	$qry="delete from billdetails where customid='".$cusid."'";
	$result=mysqli_query($con,$qry);

	if($result){
		header("Location:taxdetails.php");
	}else{
		echo"ERROR!!"; 
}
}
?>