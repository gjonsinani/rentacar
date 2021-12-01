<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['addContact'])) {	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$email = $_POST['email'];
		
	// checking empty fields
	if(empty($subject) || empty($message) || empty($email)) {			
		if(empty($subject)) {echo "<font color='red'>subject field is empty.</font><br/>";}
		if(empty($message)) {echo "<font color='red'>message field is empty.</font><br/>";}
		if(empty($email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
		//link to the previous message
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO contact(subject,message,email) VALUES('$subject','$message','$email')");
		//display success messmessage
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='contact.php'>View Result</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
