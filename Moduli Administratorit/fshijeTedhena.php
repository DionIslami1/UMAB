<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$p_id_tedhenat = $_GET['id_tedhenat'];

//deleting the row from table
$rezultat = mysqli_query($kon,"CALL fshijeTedhena('$p_id_tedhenat')");

//redirecting to the display page (index.php in our case)
header("Location:fshije_tedhena.php");
?>

