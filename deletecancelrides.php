<?php	

while(isset($_GET['cancelid'])){
	$cancelid=$_GET['cancelid'];

	include ('database.php');

	$qry="delete from cancelbookings where cancelid='".$cancelid."'";
	$result=mysqli_query($con,$qry);

	if($result){
		header("Location:cancelledrides.php");
	}else{
		echo"ERROR!!"; 
}
}
?>