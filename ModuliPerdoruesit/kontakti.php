<?php
include_once ('config.php');
?>
<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<?php 
										$result=mysqli_query($conn,"SELECT * FROM tedhenatkuvendi order by ID_WE desc limit 1 ");
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
		<title><?php echo $WebEmri; ?></title>
		<?php } ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		 
	
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
				<?php 
										$result=mysqli_query($conn,"SELECT * FROM legjislaturakuvendi order by ID_Legj desc limit 1 ");
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
					 <a href="index.php" class="logo"><?php echo $Legjislatura; ?></a> 
					<?php } ?>
					<nav id="nav">
					<?php 
										$result=mysqli_query($conn,"SELECT * FROM kuvendi_menyt order by ID_Meny ");
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
						<a href="index.php"><?php echo $Menu; ?></a>
						<a href="kontakti.php"><?php echo $Menu1; ?></a>
						<?php } ?>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
						
				</div>
			</header>

		<!-- Banner -->
				<?php include ('banner.php'); ?>
		<!-- One -->
			
				<section id="one" class="wrapper">
				
				<?php include ('tedhena.php');?>

			</section>
		<!-- Two -->
			<section id="two" class="wrapper style1 special">
			<div class="inner">
					<header class="align-center">
						<h2>Na kontaktoni permes platformes sone! </h2>
					</header>
				</div>
				<div class="flex flex-4">
				<form action="add1.php" method="post" name="form1" class="align-center" >
									<div class="row uniform">
									<div class="12u$">
											<div class="select-wrapper">
												<select name="Kategoria" id="Kategoria">
													<option value="Vizito kuvendin">- Vizito kuvendin -</option>
													<option value="Tako kryetarin">Tako kryetarin</option>
													<option value="Tako Deputetin tuaj">Tako Deputetin tuaj</option>
												</select>
											</div>
										</div>		
										<div class="6u 12u$(xsmall)">
											<input type="text" name="Emri" id="Emri" value="" placeholder="Emri dhe Mbiemri" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="Email" id="Email" value="" placeholder="Email" />
										</div>
										
										<div class="12u$">
										<p> Veretje: Ju lutem arsyetojeni takimin apo viziten tuaj ! </p>
											<textarea name="Mesazhi" id="Mesazhi" placeholder="Shkruaj mesazhin tuaj ?" rows="6"></textarea>
										</div>
										
										<div class="12u$">
											<ul class="actions">
												<li><input type="Submit" name="Submit" value="Dergo Mesazhin" /></li>
												<li><input type="reset" value="Pastro" class="alt" /></li>
											</ul>
										</div>
									</div>
								</form>			
			
				</div>
						
			</section>

		<!-- Three -->
			

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Template e marrur nga: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="http://www.kuvendikosoves.org">Kuvendi i Kosovës</a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>