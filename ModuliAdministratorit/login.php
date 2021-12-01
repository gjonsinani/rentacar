<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("config.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Obligative sheno tek dy fushat";
		}else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			//Check username and password from database
			
			$sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
			$result=mysqli_query($conn,$sql);
			
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $username; // Initializing Session
				header("location: admin_home.php"); // Redirecting To Other Page
			}else
			{
				$error = "Username apo fjalkalimi juaj jane gabim.";
			}
		}
	}
?>