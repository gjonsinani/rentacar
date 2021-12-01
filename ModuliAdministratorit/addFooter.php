
<html>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$Description = $_POST['Description'];
	$icons = $_POST['icons'];
	$PageLayout = $_POST['PageLayout'];
	$link = $_POST['link'];
	

	{ 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO footer (Description, icons, PageLayout, link) VALUES('$Description','$icons','$PageLayout','$link')");
		
		//display success messPershkrimi
		?>
		<script>
		alert('footeri juaj u shtua me sukses');
        window.location.href='ballina.php';
        </script>
		<?php
	}
}
?>

</body>
</html>
