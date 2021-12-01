<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_veture']))
{	
	$id_car = $_POST['id_car'];
	$carname=$_POST['carname'];
	$transmision=$_POST['transmision'];
	$year=$_POST['year'];	
	$price=$_POST['price'];
	$fuel=$_POST['fuel'];		

	
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($carname) || empty($transmision) || empty($year) || empty($price)) {	
			
		if(empty($carname)) {
			echo "<font color='red'>carname field is empty.</font><br/>";
		}
		
		if(empty($transmision)) {
			echo "<font color='red'>transmision field is empty.</font><br/>";
		}
		
		if(empty($year)) {
			echo "<font color='red'>year field is empty.</font><br/>";
		}
		if(empty($price)) {
			echo "<font color='red'>price field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE cars SET carname='$carname',transmision='$transmision',year='$year',price='$price', fuel='$fuel', images='$imgData', name='$name' WHERE id_car=$id_car");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: ballina.php");
	}
}
?>
<?php
//getting id_car from url
$id_car = $_GET['id_car'];

//selecting data associated with this particular id_car
$result = mysqli_query($conn,"SELECT * FROM cars WHERE id_car=$id_car");

while($res = mysqli_fetch_array($result))
{
	$carname = $res['carname'];
	$transmision = $res['transmision'];
	$year = $res['year'];
	$price = $res['price'];
	$fuel=$res['fuel'];	
}
?>
<!DOCTYPE html>
<html>
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

	<form enctype="multipart/form-data"  name="form1" method="post" action="update_veture.php">
		<table border="0">
		<tr>
			</tr>
			<tr> 
				<td>carname</td>
				<td><input type="text" name="carname" value='<?php echo $carname;?>' required /></td>
			</tr>
			<tr> 
				<td>transmision</td>
				<td><input type="text" name="transmision" value='<?php echo $transmision;?>' required /></td>
			</tr>
			<tr> 
				<td>year</td>
				<td><input type="date" name="year" value='<?php echo $year;?>' required /></td>
			</tr>
			<tr> 
				<td>price</td>
				<td><input type="text" name="price" value='<?php echo $price;?>' required /></td>
			</tr>
			<tr> 
				<td>fuel</td>
				<td><input type="text" name="fuel" value='<?php echo $fuel;?>'  required /></td>
			</tr>			
			<tr>
			<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
			<td><input name="userfile" type="file" /></td>
			</tr>
			
			
			<tr>
				<td><input type="hidden" name="id_car" value='<?php echo $_GET['id_car'];?>' /></td>
				<td><input type="submit" name="update_veture" value="Modifiko"></td>
			</tr>
		</table>
	</form>
	</div>
				</div>
			
				
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
