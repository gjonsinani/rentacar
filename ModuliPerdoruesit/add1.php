<html>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$email = $_POST['email'];
	
	// checking empty fields
	if(empty($subject)  || empty($message) || empty($email)) {
				
		if(empty($subject)) {
			echo "<font color='red'>Ju lutem shkruani Emri.</font><br/>";
		}
		
		if(empty($message)) {
			echo "<font color='red'>Ju lutem shkruani mesazhin.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Ju lutem shkruani email.</font><br/>";
		}
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO contact (subject,message, email) VALUES('$subject','$message', '$email')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('Mesazhi juaj  u dergua me sukses');
        window.location.href='kontakt.php';
        </script>
		<?php
	}
}
?>

</body>
</html>
