<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 
	</head>

<body>

<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['add'])) {	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
		
	// checking empty fields
	if(empty($username) || empty($password) || empty($email)) {			
		if(empty($username)) {echo "<font color='red'>username field is empty.</font><br/>";}
		if(empty($password)) {echo "<font color='red'>password field is empty.</font><br/>";}
		if(empty($email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
		//link to the previous password
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO users(username,password,email) VALUES('$username','$password','$email')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='perdoruesit.php'>View Result</a>";
	}
}
?>

</body>
</html>
