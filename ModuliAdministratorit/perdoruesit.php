<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<!DOCTYPE HTML>
<!--
	Highlights by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Rent a Car</title>
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


		<!-- One -->


		<!-- Two -->
			<section id="footer">
				<div class="container">

					<div class="content">
					<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
						<header class="major">
							<h2>MENAGJIMI I TE DHENAVE TE PERDORUESIT</h2>
						</header>
						
						<ul class="icons-grid">
							<li>
								<a href="shto_perdorues.php"><span class="icon solid major fa-pencil-alt"></span>
								<h3>Shto Perdorues</h3></a>
							</li>
							<li>
								<a href="modifiko_perdorues.php"><span class="icon solid major fa-pencil-alt"></span>
								<h3>Modifiko Perdorues</h3></a>
							</li>
							<li>
								<a href="fshije_perdorues.php"><span class="icon solid major fa-pencil-alt"></span>
								<h3>Fshijë Perdorues</h3></a>
							</li>
							<li>
								<a href="shiko_perdorues.php"><span class="icon solid major fa-pencil-alt"></span>
								<h3>Shiko Perdorues</h3></a>
							</li>
	
						</ul>
				
					
				</div>
	


		<!-- Footer -->
	
			
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
