<?php	

while(isset($_GET['driverid'])){
	include ('database.php');
    $driverid=$_GET['driverid'];

	$qry="select driverlicence from driverdetails where driverid='".$driverid."'";	
	$result=mysqli_query($con,$qry);
	while($data= mysqli_fetch_assoc($result)) {
	$fileName = basename($data['driverlicence']); 
    $filePath = 'files/'.$fileName; 
 
    if(!empty($fileName) && file_exists($filePath)){ 
        header("Cache-Control: public"); 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$fileName"); 
        header("Content-Type: application/zip"); 
        header("Content-Transfer-Encoding: binary"); 
         
        readfile($filePath); 
        exit; 
    }
	if($result){
		header("Location:driversdetails.php");
	}else{
		echo"ERROR!!"; 
}
}
}
?>