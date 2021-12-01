<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$id_book = $_GET['id_book'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM book WHERE id_book=$id_book");

//redirecting to the display page (index.php in our case)
header("Location:fshije_rezervim.php");
?>

