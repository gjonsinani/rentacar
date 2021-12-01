<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update_footer']))
{	
	$id_footer = $_POST['id_footer'];
	$Description=$_POST['Description'];
	$icons=$_POST['icons'];
	$PageLayout=$_POST['PageLayout'];	
	$link=$_POST['link'];		


	{	
		//updating the table
		$result = mysqli_query($conn,"UPDATE footer SET Description='$Description',icons='$icons',PageLayout='$PageLayout', link='$link'  WHERE id_footer=$id_footer");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: ballina.php");
	}
}
?>
<?php
//getting id_car from url
$id_footer = $_GET['id_footer'];

//selecting data associated with this particular id_car
$result = mysqli_query($conn,"SELECT * FROM footer WHERE id_footer=$id_footer");

while($res = mysqli_fetch_array($result))
{
	$Description = $res['Description'];
	$icons = $res['icons'];
	$PageLayout = $res['PageLayout'];
	$link=$res['link'];	
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

	<form enctype="multipart/form-data"  name="form1" method="post" action="update_footer.php">
		<table border="0">
		<tr>
			</tr>
			<tr> 
				<td>Pershkrimi:</td>
				<td><input type="text" name="Description" value='<?php echo $Description;?>'/></td>
			</tr>
			<tr> 
				<td>Ikonat:</td>
				<td><input type="text" name="icons" value='<?php echo $icons;?>'/></td>
			</tr>
			<tr> 
				<td>PageLayout:</td>
				<td><input type="text" name="PageLayout"  placeholder="CR ose CN" /></td>
			</tr>
			<tr> 
				<td>Link</td>
				<td><input type="text" name="link" value='<?php echo $link;?>'  /></td>
			</tr>			
			
			<tr>
				<td><input type="hidden" name="id_footer" value='<?php echo $_GET['id_footer'];?>' /></td>
				<td><input type="submit" name="update_footer" value="Modifiko"></td>
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
