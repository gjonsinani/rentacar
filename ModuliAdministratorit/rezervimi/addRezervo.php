
<html>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$cars = $_POST['cars'];
	$pu_location = $_POST['pu_location'];
	$pu_date = $_POST['pu_date'];
	$return_date = $_POST['return_date'];
	$firstname = $_POST['firstname'];
	$nrtel = $_POST['nrtel'];
	
	// checking empty fields
	if(empty($cars) || empty($pu_location) || empty($pu_date) || empty($return_date) || empty($firstname) || empty($nrtel)) {
				
		if(empty($cars)) {
			echo "<font color='red'>Ju lutem shkruani Emri.</font><br/>";
		}
		if(empty($pu_location)) {
			echo "<font color='red'>Ju lutem shkruani mesazhin.</font><br/>";
		}
		if(empty($pu_date)) {
			echo "<font color='red'>Ju lutem shkruani mesazhin.</font><br/>";
		}
		if(empty($return_date)) {
			echo "<font color='red'>Ju lutem shkruani mesazhin.</font><br/>";
		}
		if(empty($firstname)) {
			echo "<font color='red'>Ju lutem shkruani mesazhin.</font><br/>";
		}
		if(empty($nrtel)) {
			echo "<font color='red'>Ju lutem shkruani pu_date.</font><br/>";
		}
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO book (cars, pu_location, pu_date, return_date, firstname, nrtel) VALUES('$cars','$pu_location','$pu_date','$return_date','$firstname','$nrtel')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('Rezervimi juaj u krye me sukses');
        window.location.href='index.php';
        </script>
		<?php
	}
}
?>

</body>
</html>
