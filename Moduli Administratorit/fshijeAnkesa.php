<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$p_id_ankesa = $_GET['id_ankesa'];

//deleting the row from table
$rezultat = mysqli_query($kon,"CALL fshijeAnkesa('$p_id_ankesa')");

//redirecting to the display page (index.php in our case)
header("Location:fshije_ankesa.php");
?>

