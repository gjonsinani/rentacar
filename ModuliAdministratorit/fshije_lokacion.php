<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,
"SELECT * FROM Location ORDER BY id_loc DESC");
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
	<h3>Kërko të dhënat e lokacionit për fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Lokacioni"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 
</div>
</div>
</form> 
	<div class="table-wrapper">
<table width='80%' border=0>
	<div class="table-wrapper">
		<tr bgcolor='#CCCCCC'>
		<td>Lokacioni</td>
		<td>Modifiko</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM location 
WHERE Location LIKE '%".$term."%' "); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Location']."</td>";
		echo "<td><a href=\"delete_lokacion.php?id_loc=$row[id_loc]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini lokacionin ?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";		
	}

}

?>
</div>
	</table>


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