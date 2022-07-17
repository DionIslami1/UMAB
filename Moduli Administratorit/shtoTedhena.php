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

if(isset($_POST['shtoTedhena'])) {	
	$titulli = $_POST['titulli'];
	$pershkrimi = $_POST['pershkrimi'];
	$dosja = $_POST['dosja'];
	$pamjafaqes = $_POST['pamjafaqes'];
	
	// checking empty fields
	if(empty($titulli) || empty($pershkrimi)|| empty($dosja) || empty($pamjafaqes)) {
				
		if(empty($titulli)) {
			echo "<font color='red'>titulli fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($pershkrimi)) {
			echo "<font color='red'>Pershkrimi fusha eshte e zbrazet.</font><br/>";
		}
			if(empty($dosja)) {
			echo "<font color='red'>dosja fusha eshte e zbrazet.</font><br/>";
		}
		if(empty($pamjafaqes)) {
			echo "<font color='red'>Vendosja fusha eshte e zbrazet.</font><br/>";
		}
		
		//link to the previous pMbititulli
		echo "<br/><a href='javascript:self.history.back();'>Ktheu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
			$rezultat = mysqli_query($kon, "CALL shtoTedhenat('$titulli','$pershkrimi','images/$dosja','$pamjafaqes')");
		//insert data to database	
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