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

if(isset($_POST['shtoAntarsime'])) {	
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$emri_prindit = $_POST['emri_prindit'];
	$adresa = $_POST['adresa'];
	$nr_identifikues = $_POST['nr_identifikues'];
	$numri = $_POST['numri'];
	$id_dega = $_POST['id_dega'];
	
	
	$imgData = addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	

	
	
	// checking empty fields
	if(empty($emri) || empty($mbiemri) || empty($numri)) {
				
		if(empty($emri)) {
			echo "<font color='red'>Fusha emri eshte jo e mbushur.</font><br/>";
		}
		
		if(empty($mbiemri)) {
			echo "<font color='red'>mbiemri fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($numri)) {
			echo "<font color='red'>numri fusha eshte e zbrazet.</font><br/>";
		}
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$rezultat = mysqli_query($kon, "CALL shtoAntarsimet('$emri','$mbiemri','$emri_prindit','$adresa','$nr_identifikues','$numri','$id_dega','$imgData','$name')");
		
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
