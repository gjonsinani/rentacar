<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_rezervim']))
{	
	$id_book = $_POST['id_book'];
	$cars=$_POST['cars'];
	$pu_location=$_POST['pu_location'];
	$pu_date=$_POST['pu_date'];	
	$return_date=$_POST['return_date'];
	$firstname=$_POST['firstname'];		
	$nrtel=$_POST['nrtel'];		

	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($cars) || empty($pu_location) || empty($pu_date) || empty($return_date)  || empty($firstname)  || empty($nrtel)) {	
			
		if(empty($cars)) {
			echo "<font color='red'>cars field is empty.</font><br/>";
		}
		
		if(empty($pu_location)) {
			echo "<font color='red'>pu_location field is empty.</font><br/>";
		}
		
		if(empty($pu_date)) {
			echo "<font color='red'>pu_date field is empty.</font><br/>";
		}
		if(empty($return_date)) {
			echo "<font color='red'>return_date field is empty.</font><br/>";
		}	
		if(empty($firstname)) {
			echo "<font color='red'>firstname field is empty.</font><br/>";
		}		
		if(empty($nrtel)) {
			echo "<font color='red'>nrtel field is empty.</font><br/>";
		}		
		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE book SET cars='$cars',pu_location='$pu_location',pu_date='$pu_date',return_date='$return_date', firstname='$firstname', nrtel='$nrtel'  WHERE id_book=$id_book");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: ballina.php");
	}
}
?>
<?php
//getting id_car from url
$id_book = $_GET['id_book'];

//selecting data associated with this particular id_car
$result = mysqli_query($conn,"SELECT * FROM book WHERE id_book=$id_book");

while($res = mysqli_fetch_array($result))
{
	$cars = $res['cars'];
	$pu_location = $res['pu_location'];
	$pu_date = $res['pu_date'];
	$return_date = $res['return_date'];
	$firstname=$res['firstname'];	
	$nrtel=$res['nrtel'];

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

	<form enctype="multipart/form-data"  name="form1" method="post" action="update_rezervim.php">
		<table border="0">
		<tr>
			</tr>
			<tr> 
				<td>Vetura</td>
				<td><input type="text" name="cars" value='<?php echo $cars;?>' required /></td>
			</tr>
			<tr> 
				<td>Vendi i marrjes</td>
				<td><input type="text" name="pu_location" value='<?php echo $pu_location;?>' required /></td>
			</tr>
			<tr> 
				<td>Data e marrjse</td>
				<td><input type="date" name="pu_date" value='<?php echo $pu_date;?>' required /></td>
			</tr>
			<tr> 
				<td>Data e kthimit</td>
				<td><input type="text" name="return_date" value='<?php echo $return_date;?>' required /></td>
			</tr>
			<tr> 
				<td>Emri dhe Mbiemri</td>
				<td><input type="text" name="firstname" value='<?php echo $firstname;?>'  required /></td>
			</tr>			
			<tr> 
				<td>Numri i telefonit</td>
				<td><input type="text" name="nrtel" value='<?php echo $nrtel;?>'  required /></td>
			</tr>	
			
			<tr>
				<td><input type="hidden" name="id_book" value='<?php echo $_GET['id_book'];?>' /></td>
				<td><input type="submit" name="update_rezervim" value="Modifiko"></td>
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
