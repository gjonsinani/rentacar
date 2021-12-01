<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_contact']))
{	
	$cid = $_POST['cid'];
	
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$email=$_POST['email'];	
	
	// checking empty fields
	if(empty($subject) || empty($message) || empty($email)) {	
			
		if(empty($subject)) {
			echo "<font color='red'>subject field is empty.</font><br/>";
		}
		
		if(empty($message)) {
			echo "<font color='red'>message field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE contact SET subject='$subject',message='$message',email='$email' WHERE cid=$cid");
		
		//redirectig to the display pmessage. In our case, it is admin.php
		header("Location: modifiko_contact.php");
	}
}
?>
<?php
//getting cid from url
$cid = $_GET['cid'];

//selecting data associated with this particular cid
$result = mysqli_query($conn,"SELECT * FROM contact WHERE cid=$cid");

while($res = mysqli_fetch_array($result))
{
	$subject = $res['subject'];
	$message = $res['message'];
	$email = $res['email'];
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


	<form name="form1" method="post" action="update_contact.php">
	
	<h3>Modifiko të dhënat e kontaktit</h3>

			
				Subjekti
				<input type="text" name="subject" value='<?php echo $subject;?>'   required />
				<br>
				Mesazhi
				<input type="text" name="message" value='<?php echo $message;?>'   required />
				<br>
				Email-i
				<input type="text" name="email" value='<?php echo $email;?>'   required />
				<br >
				<input type="hidden" name="cid" value='<?php echo $_GET['cid'];?>' />
				<input type="submit" name="update_contact" value="Modifiko">
		
		
	</form>

						</div>
				</div>
				</div>
				</div>
				<footer>
				<?php include('footer.php'); ?>
				</footer> 
			</section>

		<!-- Footer -->


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>