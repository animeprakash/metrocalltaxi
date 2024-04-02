
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="adminhomepage.css" />
    <script src="adminhomepage.js" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"  crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>	
	    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

</script>
<style>
.span{
 text-decoration:none;
 }
.title{
	color:white;
}
.buttongroup{
	width:240px;
}
.navigation{
	width:100%;
	height:7%;
}
.overall{
	margin:0% 0% 0 5.5%;
}
.imagefile{
	width:80px;
	height:80px;
}
.onewayborder{
	border:1px solid #0000ff;
	border-radius:25px;
	height:100px;
	text-align:center;
	padding:10px 20px;
	width:75%;
	margin:8.33% 12.5% 0% 12.5%;
}
.onewaytable{
	border:1px solid #0000ff;
	border-radius:25px;
	height:100px;
	text-align:center;
	padding:8px 20px;
	width:75%;
	margin:2% 12.5% 0% 12.5%;
}
td{
	border:0px solid #0000ff;
	width:8%;
	text-align:center;
}
td:nth-child(even) {
	background-color: #f2f2f2;
	}
.btn-sm{
	width:70px;
}

</style>
<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
				}
</script>
 </head>
  <body>
<section>
    <nav class="sidebar locked bg-primary btn">
      <div class="logo_items flex">
        <span class="nav_image">
          <img src="images/logo.png" alt="logo_img" />
        </span>
        <span class="logo_name title">TAXI</span>
        <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
        <i class="bx bx-x" id="sidebar-close"></i>
      </div>

      <div class="menu_container">
        <div class="menu_items">
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Dashboard</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-home-alt"></i>
                <span class="">Bookings</span>
              </a>
            </li>
           
          </ul>

          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Management</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bxs-magic-wand"></i>
               User
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-folder"></i>
                <span>Driver</span>
              </a>
            </li>
		<li class="item link flex">              		
		  <div class="dropdown-toggle flex buttongroup " data-bs-toggle="dropdown" aria-expanded="false">
			<span><i class="bx bx-folder "></i></span><span>Vehicle</span>
		  </div>
		  <ul class="dropdown-menu">
			<li><a class="dropdown-item active" href="onewayvehicle.php">One Way</a></li>
			<li><a class="dropdown-item" href="roundtripvehicle.php">Round Trip</a></li>
			<li><a class="dropdown-item" href="localvehicle.php">Local</a></li>
			<li><a class="dropdown-item" href="airportvehicle.php">Airport</a></li>
		  </ul>
		</li>
	</ul>
          <ul class="menu_item">
            <div class="menu_title flex">
              <span class="title">Setting</span>
              <span class="line"></span>
            </div>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-flag"></i>
                <span>Notice Board</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-award"></i>
                <span>Award</span>
              </a>
            </li>
            <li class="item">
              <a href="#" class="link flex">
                <i class="bx bx-cog"></i>
                <span>Setting</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</section>
<!--Body Content Started-->
<section class="overall">
	<div  class="bg-primary  navigation">

	</div>
</section>


<?php
		ini_set('display_errors', 0); 
        if(isset($_POST["onewaytaxisubmit"])) {
            include("database.php");
            //$onewaytaxiid=$_POST['onewaytaxiid'];
            $onewaytaxiname=$_POST['onewaytaxiname'];
            $onewaytaxiabout=$_POST['onewaytaxiabout'];
			$onewaytaxirate=$_POST['onewaytaxirate'];
			$onewaytaxidiscount=$_POST['onewaytaxidiscount'];

			$target_dir = mkdir("uploads");
			$target_dir = "uploads/";
			$onewaytaxiimage=$_FILES["onewaytaxiimage"]["name"];
			$target_file = $target_dir . basename($_FILES["onewaytaxiimage"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["onewaytaxiimage"]["tmp_name"], $target_file);
			
			$q="create table onewayvehicle (onewaytaxiid int not null auto_increment primary key,onewaytaxiimage longblob,onewaytaxiname varchar(100),onewaytaxiabout varchar(200),onewaytaxirate int,onewaytaxidiscount int)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
			$query="insert into onewayvehicle(onewaytaxiimage,onewaytaxiname,onewaytaxiabout,onewaytaxirate,onewaytaxidiscount)values('".$onewaytaxiimage."','".$onewaytaxiname."','".$onewaytaxiabout."','".$onewaytaxirate."','".$onewaytaxidiscount."')";

			mysqli_query($con,$q);
			mysqli_query($con,$query);			
        }
?>
<section class="overall">
<div>
	<div class="onewayborder">
		<table>
        <thead>
				<tr >
					<th>TAXI IMAGE</th>
					<th>TAXI NAME</th>
					<th>ABOUT</th>
					<th>TAXI RATE</th>
					<th>DISCOUNT</th>
					<th>BUTTON</th>
				</tr>
 
        <form class="needs-validation" novalidate action="onewayvehicle.php" method="post"  enctype="multipart/form-data">
            <tr>
                <td ><input type="file" id="onewaytaxiimage" name="onewaytaxiimage" class="form-control-file w-100 " required></td>
                <td><input type="text" id="onewaytaxiname" name="onewaytaxiname"   class="form-control w-100" required></td>
                <td><input type="text" id="onewaytaxiabout" name="onewaytaxiabout"  class="form-control w-100" required></td>
                <td><input type="text" id="onewaytaxirate" name="onewaytaxirate"   class="form-control w-100" required></td>			
                <td><input type="text" id="onewaytaxidiscount" name="onewaytaxidiscount" class="form-control w-100" required></td>
                <td><input type="submit" value="SUBMIT" class="btn bg-primary text-white w-100" name="onewaytaxisubmit" id="onewaytaxisubmit"></td>
            </tr>
		</form> 
        </thead> 
		</table>
		</div>

		<?php
			ini_set('display_errors', 0);
			include("database.php");
			$query="select onewaytaxiid,onewaytaxiimage,onewaytaxiname,onewaytaxiabout,onewaytaxirate,onewaytaxidiscount from onewayvehicle";
			$result= mysqli_query($con, $query);
			while($data= mysqli_fetch_assoc($result)) {
				 $image= 'uploads/'.$data["onewaytaxiimage"];
		?>	
		<div class="onewaytable">	
		<table>
			<tr>
			<form  action="" method="post">
					<td><?php echo $data['onewaytaxiid']; ?></td>
					<td><img src="<?php echo $image; ?>" alt="" class="imagefile"/></td>
					<td><?php echo $data['onewaytaxiname']; ?></td>
					<td><?php echo $data['onewaytaxiabout']; ?></td>
					<td><?php echo $data['onewaytaxirate']; ?></td>
					<td><?php echo $data['onewaytaxidiscount']; ?></td>
					<td>
						<a href="onewayvehicleupdate.php?onewaytaxiid=<?php echo $data['onewaytaxiid']; ?>" class="btn btn-sm bg-warning">Update</a>	
						<a href="onewayvehicledelete.php?onewaytaxiid=<?php echo $data['onewaytaxiid']; ?>" class="btn btn-sm bg-danger text-white">Delete</a>	
					</td>
			</form>
			</tr>
		</table>
		</div>
		<?php } ?>

</div>
</section>

  </body>
</html>
