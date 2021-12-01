<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$id_loc = $_GET['id_loc'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM Location WHERE id_loc=$id_loc");

//redirecting to the display page (index.php in our case)
header("Location:fshije_Lokacion.php");
?>

