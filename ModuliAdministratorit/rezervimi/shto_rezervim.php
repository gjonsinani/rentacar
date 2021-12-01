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
		<link rel="stylesheet" href="../assets/css/main.css" />
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
				<header class="major">
					<h1>Rent a Car </h1>
					<p>Nese keni mbetur pa vetur, ne jemi zgjidha juaj!</p>
				</header>
			</section>

		<!-- Main -->
		<section id="four" class="main">
				<div class="container">
					<div class="content">
				<div class="inner">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
				<div class="content">
					
						<div class="row">
														<div class="col-6 col-12-medium">

								<!-- Buttons -->
									

								<!-- Form -->
									<h3>Shto të dhënat e kontaktit</h3>
									
									<div class="table-wrapper">
																<form  action="AddRezervo.php" method="post" name="form1">
								<div class="row gtr-uniform">
								<div class="col-12">
										<h4>Zgjedh veturen: </h4>
										<select name="cars" id="demo-category">
											<option selected>- Zgjedh veturen  -</option>
											<option>BMW</option>
											<option>Mercedess</option>
											<option>Audi </option>
											<option >Range Rover</option>
										</select>
									</div>
									<div class="col-6 col-12-xsmall">
									<h4>Data e marrjes:</h4>
										<input type="date" name="pu_date" id="demo-name" value=""  />
									</div>
									<div class="col-6 col-12-xsmall">
									<h4>Data e dorzimit:</h4>
										<input type="date" name="return_date" id="demo-email" value=""  />
									</div>
									<div class="col-12">
										<h4>Lokacioni: </h4>
										<select name="pu_location" id="demo-category">
											<option selected>- Lokacioni -</option>
											<option> Prishtine </option>
											<option>Viti</option>
											<option>Gilan</option>
											<option>Ferizaj</option>
										</select>
									</div>
									<div class="col-6 col-12-xsmall">
									<h4>Emri dhe Mbiemri:</h4>
										<input type="text" name="firstname" id="demo-email" value=""  />
									</div>
									<div class="col-6 col-12-xsmall">
									<h4>Numri i telefonit:</h4>
										<input type="text" name="nrtel" id="demo-email" value=""  />
									</div>
							
									<div class="col-12">
										<ul  class="actions">
											<li ><input type="submit" name="Submit"value="Rezervo" class="primary"/></li>
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
			</section>

		<!-- Footer -->
           	<?php include_once("footer.php"); ?>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>