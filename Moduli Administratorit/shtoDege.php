<html>

	<head>
		<title>Moduli Administraotirt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>
<?php
//including the database connection file
include_once("konfig.php");

if(isset($_POST['shtoDege'])) {	
	$dega = $_POST['dega'];

	// checking empty fields
	if(empty($dega)) {
				
		if(empty($dega)) {
			echo "<font color='red'>Fusha DEGA  eshte jo e mbushur.</font><br/>";
		}
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$rezultat = mysqli_query($kon,"CALL shtoDega('$dega')");
		
		//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View rezultat</a>";
	}
}
?>

</body>
</html>
