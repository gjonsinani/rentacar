<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_data']))
{	
	$ID_Data = $_POST['ID_Data'];
	
	$Titulli=$_POST['Titulli'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$File=$_POST['File'];	
		$PageLayout=$_POST['PageLayout'];	
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi) || empty($File) || empty($PageLayout)){	
			
		if(empty($Titulli)) {
			echo "<font color='red'>Titulli field is empty.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		
		if(empty($File)) {
			echo "<font color='red'>File field is empty.</font><br/>";
		}	
	if(empty($PageLayout)) {
			echo "<font color='red'>PageLayout field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE tedhenat SET Titulli='$Titulli',Pershkrimi='$Pershkrimi',File='images/$File',PageLayout='$PageLayout' WHERE ID_Data=$ID_Data");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: modifiko_tedhena.php");
	}
}
?>
<?php
//getting ID_Dep from url
$ID_Data = $_GET['ID_Data'];

//selecting data associated with this particular ID_Dep
$result = mysqli_query($conn,"SELECT * FROM tedhenat WHERE ID_Data=$ID_Data");

while($res = mysqli_fetch_array($result))
{
	$Titulli = $res['Titulli'];
	$Pershkrimi = $res['Pershkrimi'];
	$File = $res['File'];
		$PageLayout = $res['PageLayout'];
}
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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


	<form Departamenti="form1" method="post" action="update_data.php">
	
	<h3>Modifiko të dhënat</h3>

			
				Titulli
				<input type="text" name="Titulli" value='<?php echo $Titulli;?>'   required />
				<br>
				Pershkrimi
				<input type="text" name="Pershkrimi" value='<?php echo $Pershkrimi;?>'   required />
				<br>
				Emri i file-it
				<input type="text" name="File" value='<?php echo $File;?>'   required />
				<br >
				Pamja e faqes
				<input type="text" name="PageLayout" value='<?php echo $PageLayout;?>'   required />
				<br >
				<input type="hidden" name="ID_Data" value='<?php echo $_GET['ID_Data'];?>' />
				<input type="submit" name="update_data" value="Modifiko">
		
		
	</form>

						</div>
				</div>
				</div>
				</div>
			</section>

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