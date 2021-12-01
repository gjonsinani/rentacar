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
				<div class="inner">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
				<div class="content">
					
						<div class="row">
														<div class="col-6 col-12-medium">

								<!-- Buttons -->
									

								<!-- Form -->
									<h3 align="left">Shto të dhënat e përdoruesit</h3>
									
									<div class="table-wrapper">
									<form method="post" action="add.php">
										<div class="table-wrapper">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="username" id="username" value="" placeholder="Përdoruesi" />
											
											<br>
												<input type="password" name="password" id="password" value="" placeholder="Fjalëkalimi" />
											<br>
												<input type="email" name="email" id="email" value="" placeholder="Email-i" />
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="add" value="Shto" class="primary" /></li>
												
												</ul>
											</div>
										</div>
										
									</form>
									</div>
						</div>		
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
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>