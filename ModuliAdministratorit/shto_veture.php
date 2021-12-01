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
									<h3>Shto të dhënat e vetures</h3>
									
									<div class="table-wrapper">
										<form enctype="multipart/form-data"  action="addVeture.php" method="post" name="form1">
											<table width="25%" border="0">
												
										
												
												
												<tr> 
													<td>Emri i vetures</td>
													<td><input type="text" name="carname"></td>
												</tr>
												<tr> 
													<td>Marshi</td>
													<td><input type="text" name="transmision"></td>
												</tr>
												<tr> 
													<td>Viti</td>
													<td><input type="date" name="year"></td>
												</tr>
												<tr> 
													<td>Lenda djegese</td>
													<td><input type="text" name="fuel"></td>
												</tr>
											    <tr> 
												<td>Cmimi</td>
													<td><input type="text" name="price"></td>
												</tr>
												
												<tr>
													<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
												</tr>
												

												<tr> 
													<td></td>
													<td><input type="submit" name="addVeture" value="Shto"></td>
												</tr>
												
											</table>
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

		<!-- Footer -->
	


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>