<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$p_id_antarsimi = $_GET['id_antarsimi'];

//deleting the row from table
$rezultat = mysqli_query($kon,"CALL fshijeAntarsime('$p_id_antarsimi')");

//redirecting to the display page (index.php in our case)
header("Location:fshije_antarsime.php");
?>

