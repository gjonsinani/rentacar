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
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
        <nav class="menu">
            <ul>
               <li><a href="index.php">Ballina</a></li>
                <li><a href="kontakt.php">Kontakti</a></li>
                </ul>	
       </nav>

		<!-- Header -->
			<section id="header">
				<?php include('header.php'); ?> 
			</section>

		<!-- One -->


		<!-- Two -->



			<section id="four" class="main">
				<div class="container">
					<div class="content">
					
			          <section>
					   <div class="col-lg-8">
					   <?php 
										$result=mysqli_query($conn,"SELECT * FROM cars order by id_car DESC limit 4 ");
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
                    <div class="car-list-content m-t-50">
                        <div class="single-car-wrap">				
                            <div class="row"> 
                                <div class="col-lg-5">
                                    <div class="car-list-thumb car-thumb-1">
									<?php echo '<img alt="" width="100%" height="100%" src="data:images/jpeg;base64,'.base64_encode($row['images']).'"/>';?></span>
									</div>
                                </div>
                              
                                <div class="col-lg-7">
								
                                    <div class="display-table">
									
                                        <div class="display-table-cell">
                                            <div class="car-list-info">
                                                <h2><?php echo $carname; ?></h2>
										<h5><?php echo $price; ?> euro per 24h</h5>
                                                <ul class="car-info-list">
                                                    <li><?php echo $year; ?></li>
                                                    <li><?php echo $fuel; ?></li>
                                                    <li><?php echo $transmision; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                
								</div>
                            
                            </div>
										
                        </div>
                        <!-- Single Car End -->
						</div>
						</br>
						   <?php } ?>
						</div>
					  </section>
					
					</div>
				</div>
			</section>			
</br>			
	<section id="footer">
		<section>
		<div class="container">
							<h2 align="center" >Rezervo</h2>
							</br>
							<form  action="rezervo.php" method="post" name="form1">
								<div class="row gtr-uniform">
								<div class="col-12">
										<h4>Zgjedh veturen: </h4>
										<select name="cars" id="demo-category" required>
												<?php
											$res=mysqli_query($conn,"SELECT * FROM cars");
											while($row=$res->fetch_array())
												{
												?>
										<option value="<?php echo $row['id_car']; ?>"><?php echo $row['carname']; ?></option>
												<?php } ?>
										</select>
									</div>
									<div class="col-6 col-12-xsmall">
									<h4>Data e marrjes:</h4>
										<input type="date" name="pu_date" id="demo-name" value=""  />
									</div>
									<div class="col-6 col-12-xsmall">
									<h4>Data e kthimit:</h4>
										<input type="date" name="return_date" id="demo-email" value=""  />
									</div>
									<div class="col-12">
										<h4>Lokacioni: </h4>
										<select name="pu_location" id="demo-category" required>
										 <option selected="selected" required>Lokacioni juaj ?</option> 
											<?php
											$res=mysqli_query($conn,"SELECT * FROM location");
											while($row=$res->fetch_array())
												{
												?>
										<option value="<?php echo $row['id_loc']; ?>"><?php echo $row['Location']; ?></option>
												<?php } ?>
											
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
						</section>
						
				
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