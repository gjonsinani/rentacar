<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id_loc = $_POST['id_loc'];
	$Location=$_POST['Location'];

	if(empty($Location) ) {			
		if(empty($Location)) {echo "<font color='red'>Location field is empty.</font><br/>";}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		//updating the table
		$result = mysqli_query($conn,"UPDATE Location SET Location='$Location'  WHERE id_loc=$id_loc");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: ballina.php");
	}
}
?>
<?php
//getting id_car from url
$id_loc = $_GET['id_loc'];

//selecting data associated with this particular id_car
$result = mysqli_query($conn,"SELECT * FROM Location WHERE id_loc=$id_loc");

while($res = mysqli_fetch_array($result))
{
	$Location = $res['Location'];
}
?>
<!DOCTYPE html>
<html>
			<title>Rent a Car </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
	        <nav class="menu">
            <ul>
               <li><a href="ballina.php">Ballina</a></li>
               <li><a href="contact.php">Kontakti</a></li>
			   <li><a href="perdoruesit.php">Përdoruesit</a></li>
		       <li><a href="logout.php">Ckycu</a></li>

                </ul>	
       </nav>

		<!-- Header -->
			<section id="header">
				<?php include('header.php'); ?> 
			</section>
			

		<!-- Main -->
		<section id="footer">
				<div class="container">
					<div class="content">
				<div class="inner">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
				<div class="content">
					
						<div class="row">

	<form enctype="multipart/form-data"  name="form1" method="post" action="update_lokacion.php">
		<table border="0">
		<tr>
			</tr>
			<tr> 
				<td>Location</td>
				<td><input type="text" name="Location" value='<?php echo $Location;?>'/></td>
			</tr>			
			
			<tr>
				<td><input type="hidden" name="id_loc" value='<?php echo $_GET['id_loc'];?>' /></td>
				<td><input type="submit" name="update" value="Modifiko"></td>
			</tr>
		</table>
	</form>
	</div>
				</div>
		
				 <footer>
		
					<?php include('footer.php'); ?>
				</footer> 
			</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
