<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)

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
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko të dhënat e footerit për fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Emrin e klientit ose vetures"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 
</div>
</div>
</form> 
	<div class="table-wrapper">
<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Pershkrimi</td>
		<td>Ikonat</td>
		<td>PageLayout</td>
		<td>Link</td>		
		
		<td>Fshije</td>
	</tr> 

<?php
	if (!empty($_REQUEST['term'])) {

	$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

	$sql = mysqli_query($conn, "SELECT * FROM footer 
WHERE Description LIKE '%".$term."%' 
OR  link LIKE '%".$term."%'");


	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo "<td>".$row['Description']."</td>";
			echo "<td>".$row['icons']."</td>";
			echo "<td>".$row['PageLayout']."</td>";	
			echo "<td>".$row['link']."</td>";	
			
			
			
			echo "<td><a href=\"delete_footer.php?id_footer=$row[id_footer]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini footer-in?')\" class='button' class='button primary'>Fshijë</a> </td>";			
		}

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