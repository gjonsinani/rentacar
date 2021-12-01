<?php


	include('login.php'); // Include Login Script
	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: admin_home.php');
	}	
?>
<!DOCTYPE HTML>
<!--
	Highlights by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Rent a Car </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Header -->
				<section id="header">
				<?php include('header.php'); ?> 
			</section>
		<section id="footer">
				<div class="container">
					<header class="major">
						<h2>Kyquni</h2>
					</header>
					<form method="post" action="" class="align-center" >
						<div class="row gtr-uniform">
							<div class="col-6 col-12-small" align="center">
							<input type="text" name="username" id="usernmae" value="" placeholder="Username" /> </br>
							</div>
							<div class="col-6 col-12-small">
							<input type="password" name="password" id="password" value="" placeholder="Password" /> </br>
							</div>

							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" name="submit" value="Kyquni" class="primary" /></li>
								</ul>
							</div>
								<?php echo $error;?>
						
						</div>
						</div>
					</form>
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