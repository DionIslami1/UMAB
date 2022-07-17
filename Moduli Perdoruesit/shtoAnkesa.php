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

if(isset($_POST['shtoAnkesa'])) {	
	$subjekti = mysqli_real_escape_string ($kon_k, $_POST['subjekti']);
	$ankesa = mysqli_real_escape_string ($kon_k, $_POST['ankesa']);
	$emaili = mysqli_real_escape_string ($kon_k, $_POST['emaili']);
		
	// checking empty fields
	if(empty($subjekti) || empty($ankesa) || empty($emaili)) {			
		if(empty($subjekti)) {echo "<font color='red'>subjekti fusha eshte e zbrazet.</font><br/>";}
		if(empty($ankesa)) {echo "<font color='red'>ankesa fusha eshte e zbrazet.</font><br/>";}
		if(empty($emaili)) {echo "<font color='red'>emaili fusha eshte e zbrazet.</font><br/>";}
		//link to the previous message
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultat = mysqli_query($kon, "CALL shtoAnkesa('$subjekti','$ankesa','$emaili')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='perdoruesit.php'>View Result</a>";
	}
}
?>

</body>
</html>
