<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$id_header = $_GET['id_header'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM header WHERE id_header=$id_header");

//redirecting to the display page (index.php in our case)
header("Location:fshije_header.php");
?>

