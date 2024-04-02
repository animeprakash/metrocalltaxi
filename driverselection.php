<?php
	ini_set('display_errors', 0); 
	include ('database.php');
	$model=$_POST['model'];
	$cusid=$_POST['cusid'];
	$phonenumber=$_POST['phonenumber'];
    $sql = $con->prepare("select did,driverid,cusid,taxiname,drivername,drivermobile,vehiclenumber from driverdetails full join vehicledetails on did=vehicleid inner join bookings on vehicletype=taxiname where vehicletype='".$model."'  and cusid='".$cusid."' and drivermobile like '%$phonenumber%' "); 
	$sql->execute();
    $result = $sql->get_result();
    if (! empty($result)) {
        ?>
	<ul id="driver-list">
	<?php
		foreach ($result as $driver) {
	?>
	   <li onClick="driver('<?php echo $driver["did"]; ?>');">
		  <?php echo $driver["driverid"]; ?> | <?php echo $driver["drivername"]; ?> <div class="drivermobile">| <?php echo $driver["drivermobile"]; ?> </div>
		</li>
	<?php	}  ?>
	</ul>
    <?php
    }
?>