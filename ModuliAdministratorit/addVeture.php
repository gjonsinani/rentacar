<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 
	</head

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['addVeture'])) {	
	$carname = $_POST['carname'];
	$transmision = $_POST['transmision'];
	$year = $_POST['year'];
	$fuel = $_POST['fuel'];
	$price = $_POST['price'];
	
	
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	

	
	
	// checking empty fields
	if(empty($carname) || empty($transmision)|| empty($year) || empty($fuel)) {
				
		if(empty($carname)) {
			echo "<font color='red'>carname field is empty.</font><br/>";
		}
		
		if(empty($transmision)) {
			echo "<font color='red'>transmision field is empty.</font><br/>";
		}
		
		if(empty($year)) {
			echo "<font color='red'>year field is empty.</font><br/>";
		}
		if(empty($fuel)) {
			echo "<font color='red'>fuel field is empty.</font><br/>";
		}
		
		//link to the previous ptransmision
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO cars(carname,transmision,year,fuel, price, images, name) VALUES('$carname','$transmision','$year','$fuel', '$price', '$imgData', '$name')");
		
		//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
	}
}
?>

</body>
</html>
