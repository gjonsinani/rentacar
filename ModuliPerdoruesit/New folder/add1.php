<html>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$Emri = $_POST['Emri'];
	$Kategoria = $_POST['Kategoria'];
	$Mesazhi = $_POST['Mesazhi'];
	$Email = $_POST['Email'];
	
	// checking empty fields
	if(empty($Emri)  || empty($Mesazhi) || empty($Email)) {
				
		if(empty($Emri)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($Mesazhi)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		//link to the previous pPershkrimi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO kontaktformakuvendi (Emri,Kategoria,Mesazhi, Email) VALUES('$Emri','$Kategoria','$Mesazhi', '$Email')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('Mesazhi juaj  u dergua me sukses');
        window.location.href='publiku.php';
        </script>
		<?php
	}
}
?>

</body>
</html>
