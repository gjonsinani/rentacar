<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$ID_Data = $_GET['ID_Data'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM tedhenat WHERE ID_Data=$ID_Data");

//redirecting to the display page (index.php in our case)
header("Location:fshije_tedhena.php");
?>

