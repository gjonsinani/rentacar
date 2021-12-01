<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<!DOCTYPE HTML>
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
       </nav>

		<!-- Header -->
		<section id="header">
				<?php include('header.php'); ?> 
			</section>

		<!-- Main -->
		<section id="footer"> 
				<div class="container">
					<div class="content">
					<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
						<header class="major">
							<h2>MENAGJIMI I TE DHENAVE TEK KONTAKTI</h2>
						</header>
						
						<ul class="icons-grid">
							<li>
								<a href="shto_contact.php"><span class="icon solid major fa-pencil-alt"></span>
								<h3>Shto Kontakt</h3></a>
							</li>
							<li>
								<a href="modifiko_contact.php"><span class="icon solid major fa-pencil-alt"></span>
								<h3>Modifiko Kontakt</h3></a>
							</li>
							<li>
								<a href="fshije_contact.php"><span class="icon solid major fa-pencil-alt"></span>
								<h3>Fshijë Konakt</h3></a>
							</li>
							<li>
								<a href="shiko_contact.php"><span class="icon solid major fa-pencil-alt"></span>
								<h3>Shiko Konakt</h3></a>
							</li>
						</ul>
					</div>
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

_contact