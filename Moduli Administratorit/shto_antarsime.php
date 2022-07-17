<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
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
								<h3><strong>Forma per shtimin e </strong>Antarsimeve</h3>
									<form enctype="multipart/form-data" method="post" action="shtoAntarsime.php" name="form1">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="emri" id="" value="" placeholder="Emri" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="mbiemri" id="" value="" placeholder="Mbiemri" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="emri_prindit" id="" value="" placeholder="Emri i Prindit" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="adresa" id="" value="" placeholder="Adresa" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="nr_identifikues" id="" value="" placeholder="Nr.Identifikues" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="numri" id="" value="" placeholder="Numri" />
											</div>
											<div class="col-6 col-12-xsmall">
												<select name="id_dega">
													<option selected="selected">Zgjedh Degen</option>
														<?php
														$res=mysqli_query($kon_d,"CALL selektUmabDega('id_dega')");
														while($rresht=$res->fetch_array(MYSQLI_ASSOC))
														{
															?>
															<option value="<?php echo $rresht['id_dega']; ?>"><?php echo $rresht['dega']; ?></option>
															<?php
														}
														?>
												</select>
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
												<input name="userfile" type="file" /></td>
											</div>											
											<div style="padding-left: 5% " class="col-12">
												<ul class="actions">
													<input type="submit" name="shtoAntarsime" value="Shto Antarsime" class="primary" />
													
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