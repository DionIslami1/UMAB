<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$p_id_meny = $_GET['id_meny'];

//deleting the row from table
$rezultat = mysqli_query($kon,"CALL fshijeMeny('$p_id_meny')");

//redirecting to the display page (index.php in our case)
header("Location:fshije_meny.php");
?>

