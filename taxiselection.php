<?php
	ini_set('display_errors', 0); 
	include ('database.php');
	$taxiname=$_POST['taxiname'];
    $sql = $con->prepare("select distinct(vehicletype) from vehicledetails where vehicletype like '%$taxiname%' "); 
	$sql->execute();
    $result = $sql->get_result();
    if (! empty($result)) {
        ?>
	<ul id="driver-list">
	<?php
		foreach ($result as $vehicle) {
	?>
	   <li onClick="driver('<?php echo $vehicle["vehicletype"]; ?>');">
		  <?php echo $vehicle["vehicletype"]; ?> 
		</li>
	<?php	}  ?>
	</ul>
    <?php
    }
?>