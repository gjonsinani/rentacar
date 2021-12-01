<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$Email=$_POST['Email'];	
	
	// checking empty fields
	if(empty($Username) || empty($Password) || empty($Email)) {	
			
		if(empty($Username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($Password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE users SET Username='$Username',Password='$Password',Email='$Email' WHERE uid=$uid");
		
		//redirectig to the display pPassword. In our case, it is admin.php
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php
//getting uid from url
$uid = $_GET['uid'];

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM users WHERE uid=$uid");

while($res = mysqli_fetch_array($result))
{
	$Username = $res['Username'];
	$Password = $res['Password'];
	$Email = $res['Email'];
}
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
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


	<form name="form1" method="post" action="update.php">
	
	<h3>Modifiko të dhënat e përdoruesit</h3>

			
				Përdoruesi
				<input type="text" name="Username" value='<?php echo $Username;?>' />
				<br>
				Fjalëkalimi
				<input type="text" name="Password" value='<?php echo $Password;?>' />
				<br>
				Email-i
				<input type="text" name="Email" value='<?php echo $Email;?>' />
				<br >
				<input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>' />
				<input type="submit" name="update" value="Modifiko">
		
		
	</form>

						</div>
				</div>
					</div>
				</div>
		

		<!-- Footer -->
				<footer>
					<?php include('footer.php'); ?>
				</footer>  
	</section>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>