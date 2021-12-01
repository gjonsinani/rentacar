<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$cid = $_GET['cid'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM contact WHERE cid=$cid");

//redirecting to the display page (index.php in our case)
header("Location:fshije_rezervim.php");
?>

