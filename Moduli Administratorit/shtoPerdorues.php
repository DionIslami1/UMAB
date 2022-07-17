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

if(isset($_POST['shtoPerdorues'])) {	
	$nr_identifikues = $_POST['nr_identifikues'];
	$fjalkalimi = $_POST['fjalkalimi'];
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	// $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$emaili = filter_var($_POST['emaili'], FILTER_SANITIZE_EMAIL);
	$nr_telefonit = $_POST['nr_telefonit'];


		
	// checking empty fields
	if(empty($nr_identifikues) || empty($fjalkalimi) || empty($emri) || empty($mbiemri) || empty($emaili) || empty($nr_telefonit)) {			
		if(empty($nr_identifikues)) {echo "<font color='red'>nr_identifikues fusha eshte e zbrazet.</font><br/>";}
		if(empty($fjalkalimi)) {echo "<font color='red'>fjalkalimi fusha eshte e zbrazet.</font><br/>";}
		if(empty($emri)) {echo "<font color='red'>emri fusha eshte e zbrazet.</font><br/>";}
		if(empty($mbiemri)) {echo "<font color='red'>mbiemri fusha eshte e zbrazet.</font><br/>";}
		if(empty($emaili)) {echo "<font color='red'>emaili fusha eshte e zbrazet.</font><br/>";}
		if(empty($nr_telefonit)) {echo "<font color='red'>nr_telefonit fusha eshte e zbrazet.</font><br/>";}
		//link to the previous password
			echo "<script>
			 setTimeout(function(){
				window.location.href = 'perdoruesit.php';
			 }, 6000);
		  </script>";
			 echo"<p><b>Ju lutem pritni 6 sekonda deri sa te ktheheni ne formen Kontakti. <b></p>";
		} else { 
			// if all the fields are filled (not empty) & if email i valid
			//insert data to database	
			if (filter_var($emaili, FILTER_VALIDATE_EMAIL) === false){
				 echo "<b>$emaili</b> nuk eshte adrese valide";
			
				echo "<script>
					 setTimeout(function(){
						window.location.href = 'shto_perdorues.php';
					 }, 6000);
				  </script>";
				echo"<p><b>Ju lutem pritni 6 sekonda deri sa te ktheheni ne formen shto perdorues. <b></p>";
				} else {
						$rezultat = mysqli_query($kon, "CALL shtoPerdorues('$nr_identifikues',MD5('$fjalkalimi'),'$emri','$mbiemri','$emaili','$nr_telefonit')");
						//display success messmessage
					//	echo "<font color='green'>Data added successfully.";
						//echo "<br/><a href='contact.php'>View Result</a>";
						echo "<script>
						 setTimeout(function(){
							window.location.href = 'shto_perdorues.php';
						 }, 5000);
					  </script>";
						 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
						}
				}
	}
?>

</body>
</html>
