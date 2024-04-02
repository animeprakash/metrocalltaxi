<?php	

	$cusid=$_GET['cusid'];
	$cusemail=$_GET['email'];
	$reason=$_GET['reason'];
	include ('database.php');
	
	$sql="create table if not exists cancelbookings (cancelid int not null auto_increment primary key,customid int,cancelreason varchar(500),cancelon datetime default current_timestamp on update current_timestamp)";
	mysqli_query($con,$sql);

	$qry="insert into cancelbookings(customid,reason)values('".$cusid."','".$reason."') ";
	$result=mysqli_query($con,$qry);

	if($result){
		header("Location:customerdashboard.php?email=".$cusemail." ");
	}else{
		echo"ERROR!!"; 
	}
	

?>