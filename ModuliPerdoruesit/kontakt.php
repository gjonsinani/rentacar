<?php
include_once ('config.php');
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
        <nav class="menu">
            <ul>
               <li><a href="index.php">Ballina</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                </ul>	
       </nav>
		<!-- Header -->
				<section id="header">
				<?php include('header.php'); ?> 
			</section>





		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>Kontakto</h2>
					</header>
					<form  action="add1.php" method="post" name="form1">
						<div class="row gtr-uniform">
							<div class="col-6 col-12-xsmall"><input type="text" name="subject" id="subject" placeholder="Emri dhe Mbiemri" /></div>
							<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
							<div class="col-12"><textarea name="message" id="message" placeholder="Mesazhi" rows="4"></textarea></div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="Submit" name="Submit" value="Dergo Mesazhin" class="primary" /></li>
								</ul>
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