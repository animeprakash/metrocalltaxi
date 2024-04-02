<?php
	ini_set('display_errors', 0); 
	include ('database.php');
	$cityname=$_POST['city'];
    $sql = $con->prepare("SELECT cityname FROM tamilnadu WHERE cityname LIKE  '%$cityname%' ORDER BY cityname asc");    $sql->execute();
    $result = $sql->get_result();
    if (! empty($result)) {
        ?>
	<ul id="city-list">
	<?php
			foreach ($result as $country) {
				?>
	   <li onClick="tocity('<?php echo $country["cityname"]; ?>');">
		  <?php echo $country["cityname"]; ?>
		</li>
	<?php
			}// end for
		?>
	</ul>
    <?php
    }// end if not empty
	
	

?>