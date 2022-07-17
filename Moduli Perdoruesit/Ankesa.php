<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("konfig.php");	
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
								<h3><strong>Forma per berjen e </strong>Ankesave</h3>
									<form method="post" action="shtoAnkesa.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall" style="margin-left: 25%">
												<input type="text" name="subjekti" id="subjekti" value="" placeholder="Subijekti" />
											</div>
											
											<div class="col-6 col-12-xsmall" style="margin-left: 25%">
												<textarea name="ankesa" id="ankesa" placeholder="Ankesa" rows="6"></textarea>
											</div>
											<div class="col-6 col-12-xsmall" style="margin-left: 25%">
												<input type="email" name="emaili" id="emaili" value="" placeholder="Emaili" />
											</div>
											
											<div style="padding-left: 5%; margin-left: 25%; " class="col-12">
												<ul class="actions">
													<input type="submit" name="shtoAnkesa" value="Shto Ankesa" class="primary" />
													
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