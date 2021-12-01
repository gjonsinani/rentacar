<html>
<head>
	<title>Add Data</title>
</head>
<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['addheader'])) {	
	$Title = $_POST['Title'];
	$Description = $_POST['Description'];
		
	// checking empty fields
	if(empty($Title) || empty($Description)) {			
		if(empty($Title)) {echo "<font color='red'>Title field is empty.</font><br/>";}
		if(empty($Description)) {echo "<font color='red'>Description field is empty.</font><br/>";}
		//link to the previous Description
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO header (Title,Description) VALUES('$Title','$Description')");
		//display success messDescription
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
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
