<?php
			session_start();
			ini_set('display_errors', 0); 
			include("database.php");				
			$username=$_COOKIE['username'];
			$email=$_COOKIE['email'];
			$sql="select username,useremail from userdetails where username='".$username."' and useremail='".$email."' ";
			$res= mysqli_query($con,$sql);
			if(mysqli_num_rows($res)==TRUE)
			{
				setcookie("email", $email, time() - (86400 * 365), "/");
				setcookie("username", $username, time()-(86400 * 365), "/");
				header("Location:index.php");
			}
?>
