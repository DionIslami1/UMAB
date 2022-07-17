<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database konection file
include_once("konfig.php");

if(isset($_POST['modifikoPerdorues']))
{	
	$id_p = $_POST['id_p'];
	
	$nr_identifikues=$_POST['nr_identifikues'];
	$fjalkalimi= MD5($_POST['fjalkalimi']);
	$emri=$_POST['emri'];
	$mbiemri=$_POST['mbiemri'];
	$emaili=$_POST['emaili'];
	$nr_telefonit=$_POST['nr_telefonit'];	
	
	// checking empty fields
	if(empty($nr_identifikues) || empty($fjalkalimi) || empty($emri) || empty($mbiemri) || empty($emaili) || empty($nr_telefonit)) {	
			
		if(empty($nr_identifikues)) {
			echo "<font color='red'>nr_identifikues fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($fjalkalimi)) {
			echo "<font color='red'>fjalkalimi fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($emri)) {
			echo "<font color='red'>Emri fusha eshte e zbrazet.</font><br/>";
		}
		if(empty($mbiemri)) {
			echo "<font color='red'>mbiemri fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($emaili)) {
			echo "<font color='red'>emaili fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($nr_telefonit)) {
			echo "<font color='red'>nr_telefonit fusha eshte e zbrazet.</font><br/>";
		}		
	} else {	
		 mysqli_query($kon,"SET @id = ${id_p}");
		 mysqli_query($kon,"SET @nr_i = '${nr_identifikues}'");
		 mysqli_query($kon,"SET @fjal = MD5('${fjalkalimi}')");
		 mysqli_query($kon,"SET @emri = '${emri}'");
		 mysqli_query($kon,"SET @mbie = '${mbiemri}'");
		 mysqli_query($kon,"SET @emaili = '${emaili}'");
		 mysqli_query($kon,"SET @nr_tel = '${nr_telefonit}'");
		//updating the table
		$rezultat = mysqli_query($kon,"CALL modifikoPerdorues(@id,@nr_i,@fjal,@emri,@mbie,@emaili,@nr_tel)");		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php
//getting uid from url
$p_id_p = $_GET['id_p'];

//selecting data associated with this particular uid
$rezultat = mysqli_query($kon,"CALL selektPerdoruesit('$p_id_p')");

while($res = mysqli_fetch_array($rezultat))
{
	$nr_identifikues = $res['nr_identifikues'];
	$fjalkalimi = $res['fjalkalimi'];
	$emri = $res['emri'];
	$mbiemri = $res['mbiemri'];
	$emaili = $res['emaili'];
	$nr_telefonit = $res['nr_telefonit'];
}
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Administraotirt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<body class="is-preload" style="background-color:#2e3842 ">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<?php include_once("kokafaqes.php"); ?>

					<?php include_once("meny.php"); ?>

				<!-- Main -->
					<article id="main">
						<section class="wrapper style5">
							<div class="inner">

								<ul class="features">
								<li style="width: 100%;text-align: center;">
								<h3><strong>Kërko të dhënat e përdoruesit për </strong>Modifikim</h3>
									<form method="post" action="modifikoPerdorues.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="nr_identifikues" id="nr_identifikues" value='<?php echo $nr_identifikues;?>' />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="password" name="fjalkalimi" id="fjalkalimi" value='<?php echo $fjalkalimi;?>' />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="emri" id="emri" value='<?php echo $emri;?>' />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="mbiemri" id="mbiemri" value='<?php echo $mbiemri;?>' />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="emaili" id="emaili" value='<?php echo $emaili;?>' />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="nr_telefonit" id="nr_telefonit" value='<?php echo $nr_telefonit;?>' />
											</div>
											
											<div style="padding-left: 5% " class="col-12">
												<ul class="actions">
													<input type="hidden" name="id_p" value='<?php echo $_GET['id_p'];?>' />
													<input type="submit" name="modifikoPerdorues" value="Modifiko" class="primary" />
													
												</ul>
											</div>
										</div>
									</form>
								</li>
								
							</ul>


							

						</section>
					</article>

				<!-- Footer -->
						<?php include_once("kembafaqes.php"); ?>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>