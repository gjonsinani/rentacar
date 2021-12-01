
<html>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$Location = $_POST['Location'];

	if(empty($Location) ) {			
		if(empty($Location)) {echo "<font color='red'>Location field is empty.</font><br/>";}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		$result = mysqli_query($conn, "INSERT INTO Location (Location) VALUES('$Location')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('Locationi juaj u shtua me sukses');
        window.location.href='ballina.php';
        </script>
		<?php
	}
}
?>

</body>
</html>
