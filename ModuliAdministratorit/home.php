<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
</head>
<body>
<h3 class="hello" style="text-align:right">Hello, <em><?php echo $login_user;?>!</em></h3>
<br><br><br>
	<a href="Usr/admin.php" style="font-size:18px">Users</a> 
	<br /> <br />
	<a href="Dep/admin.php" style="font-size:18px">Departments</a> 
	<br /> <br />
	<a href="Lajmet/index.php"  style="font-size:18px">Lajmet</a> 
	<br /> <br />
	<a href="logout.php" style="font-size:18px">Logout</a>
</body>
</html>