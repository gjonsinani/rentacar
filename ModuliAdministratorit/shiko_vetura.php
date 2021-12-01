<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,
"SELECT * FROM cars ORDER BY id_car DESC");
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


	<div class="table-wrapper">

<table width='80%' border=0>
<tr>
<h3> Te dhenat e Veturave </h3>
</tr>
	<tr bgcolor='#CCCCCC'>
		<td>Emri i vetures</td>
		<td>Viti</td>
		<td>Marshi</td>
		<td>Lenda djegese</td>
		<td>Foto</td>
		<td>Emri i file-it</td>
		<td>Cmimi</td>

	</tr> 

<?php

    $sql="SELECT * FROM cars";  
    $result_set=mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result_set, MYSQLI_ASSOC))
	{ 		
					
			echo "<tr>";
			echo "<td>".$row['carname']."</td>";
			echo "<td>".$row['year']."</td>";
			echo "<td>".$row['transmision']."</td>";
			echo "<td>".$row['fuel']."</td>";	
				
			
			echo "<td><img src=data:image/jpeg;base64,".base64_encode($row['images'])." width='80'  height='100'/></td>";
			echo "<td>".$row['name']."</td>";	
			echo "<td>".$row['price']."</td>";
	}
?>

	



	</table>
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