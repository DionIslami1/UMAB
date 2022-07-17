<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['modifikoMeny']))
{	
	$id_meny = $_POST['id_meny'];
	
	$menyEmri=$_POST['meny_emri'];
	$menyLinku=$_POST['meny_linku'];
	$moduli=$_POST['moduli'];
	// checking empty fields
	if(empty($menyEmri) || empty($menyLinku) || empty($moduli)) {	
			
		if(empty($menyEmri)) {
			echo "<font color='red'>titulli fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($menyLinku)) {
			echo "<font color='red'>pershkrimi fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($moduli)) {
			echo "<font color='red'>dosja fusha eshte e zbrazet.</font><br/>";
		}
			
	} else {	
		 mysqli_query($kon_Mmeny,"SET @id = ${id_meny}");
		 mysqli_query($kon_Mmeny,"SET @mEmri = '${menyEmri}'");
		 mysqli_query($kon_Mmeny,"SET @mLinku = '${menyLinku}'");
		 mysqli_query($kon_Mmeny,"SET @moduli = '${moduli}'");
		//updating the table
		$rezultat = mysqli_query($kon_Mmeny,"CALL modifikoMeny(@id,@mEmri,@mLinku,@moduli)");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_meny.php");
	}
}
?>
<?php
//getting uid from url
$p_id_meny = $_GET['id_meny'];

//selecting data associated with this particular uid
$rezultat = mysqli_query($kon_Mmeny,"CALL selektMeny($p_id_meny)");

while($res = mysqli_fetch_array($rezultat))
{
	$menyEmri = $res['meny_emri'];
	$menyLinku = $res['meny_linku'];
	$moduli = $res['moduli'];
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
								<h3><strong>Forma per Modifikimin e </strong>Menyve</h3>
									<form method="post" action="modifikoMeny.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="meny_emri" id="meny_emri" value='<?php echo $menyEmri;?>' />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="meny_linku" id="meny_linku" value='<?php echo $menyLinku;?>' />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="moduli" id="moduli" value='<?php echo $moduli;?>' />
											</div>

											<div style="padding-left: 5% " class="col-12">
												<ul class="actions">
													<input type="hidden" name="id_meny" value='<?php echo $_GET['id_meny'];?>' />
													<input type="submit" name="modifikoMeny" value="Modifiko" class="primary" />
													
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