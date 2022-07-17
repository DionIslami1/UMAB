<html>

	<head>
		<title>Moduli Administraotirt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
<?php
//including the database connection dosja
include_once("konfig.php");

if(isset($_POST['shtoMeny'])) {	
	$meny_emri = $_POST['meny_emri'];
	$meny_linku = $_POST['meny_linku'];
	$moduli = $_POST['moduli'];
	
	// checking empty fields
	if(empty($meny_emri) || empty($meny_linku)|| empty($moduli)) {
				
		if(empty($meny_emri)) {
			echo "<font color='red'>meny_emri fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($meny_linku)) {
			echo "<font color='red'>meny_linku fusha eshte e zbrazet.</font><br/>";
		}
			if(empty($moduli)) {
			echo "<font color='red'>moduli fusha eshte e zbrazet.</font><br/>";
		}
		
		//link to the previous pMbititulli
		echo "<br/><a href='javascript:self.history.back();'>Ktheu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$rezultat = mysqli_query($kon, "CALL shtoMeny('$meny_emri','$meny_linku','$moduli')");
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