<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$p_id_p = $_GET['id_p'];

//deleting the row from table
$rezultat = mysqli_query($kon,"CALL fshijePerdorues('$p_id_p')");


//redirecting to the display page (index.php in our case)
header("Location:fshije_perdorues.php");
?>

