<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$p_id_dega = $_GET['id_dega'];

//deleting the row from table
$rezultat = mysqli_query($kon,"CALL fshijeDega('$p_id_dega')");

//redirecting to the display page (index.php in our case)
header("Location:fshije_dege.php");
?>

