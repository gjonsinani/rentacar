<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$id_car = $_GET['id_car'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM cars WHERE id_car=$id_car");

//redirecting to the display page (index.php in our case)
header("Location:fshije_veture.php");
?>

