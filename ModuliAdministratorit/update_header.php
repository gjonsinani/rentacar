<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_header']))
{	
	$id_header = $_POST['id_header'];
	
	$Title=$_POST['Title'];
	$Description=$_POST['Description'];

	
	// checking empty fields
	if(empty($Title) || empty($Description)) {	
			
		if(empty($Title)) {
			echo "<font color='red'>Title field is empty.</font><br/>";
		}
		
		if(empty($Description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}
		
	
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE header SET Title='$Title',Description='$Description' WHERE id_header=$id_header");
		
		//redirectig to the display pDescription. In our case, it is admin.php
		header("Location: modifiko_header.php");
	}
}
?>
<?php
//getting id_header from url
$id_header = $_GET['id_header'];

//selecting data associated with this particular id_header
$result = mysqli_query($conn,"SELECT * FROM header WHERE id_header=$id_header");

while($res = mysqli_fetch_array($result))
{
	$Title = $res['Title'];
	$Description = $res['Description'];
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


	<form Title="form1" method="post" action="update_header.php">
	
	<h3>Modifiko të dhënat e Titlet</h3>

			
				Title
				<input type="text" name="Title" value='<?php echo $Title;?>'   required />
				<br>
				Description
				<input type="text" name="Description" value='<?php echo $Description;?>'   required />
				<br>
				<input type="hidden" name="id_header" value='<?php echo $_GET['id_header'];?>' />
				<input type="submit" name="update_header" value="Modifiko">
		
		
	</form>

						</div>
				</div>
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