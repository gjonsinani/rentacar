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
					 <a href="index.php" class="logo"><?php echo $Legjislatura; ?></a> 
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
				
					<header>
						<h2>Deputetet e Republikës së Kosovës nga <?php echo $Legjislatura; ?> </h2>
						<!--<p>Semper suscipit posuere apede</p>-->
					</header>
					<div class="flex flex-4">
					
					<?php 
										$result=mysqli_query($conn,"SELECT * FROM deputetet_ks order by ID_Deputeti ");
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
						<div class="box person">
						
							<div class="image round">
							<?php echo '<img alt="Person" src="data:images/jpeg;base64,'.base64_encode($row['FotoDep']).'"/>';?>
								
							</div>
							<h3><?php echo $Emri; ?> <?php echo $Mbiemri; ?></h3>
							<p><?php echo $Partia; ?></p>
						</div>
						
						<?php } ?>	
					</div>
							
							
				</div>
						
			</section>

		<!-- Three -->
			<section id="three" class="wrapper special">
				<div class="inner">
					<header class="align-center">
						<h2>Lajmet nga Kuvendi</h2>
						<!--<p>Aliquam erat volutpat nam dui </p>-->
					</header>
					<div class="flex flex-2">
					<?php 
										$result=mysqli_query($conn,"SELECT * FROM lajmetkuvendi order by id ");
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
						<article>
							<div  class="image fit">
								<?php echo '<img alt="" width="800" height="400" src="data:images/jpeg;base64,'.base64_encode($row['FotoLajm']).'"/>';?>
								
							</div>
							<header>
								<h3><?php echo $TitullLajm; ?></h3>
							</header>

							<footer>
								<a href="meshume.php?id=<?php echo $id; ?>" class="button special">Me Shumë</a>
							</footer>
							</br>
						</article>
						
										<?php } ?>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
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