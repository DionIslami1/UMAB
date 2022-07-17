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
	<body class="is-preload" style="background-color:#2e3842;">

		<!-- Page Wrapper -->
		<body class="is-preload" style="background-color:#2e3842 ">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<?php include_once("kokafaqes.php"); ?>

					<?php include_once("meny.php"); ?>

				<!-- Main -->
					<article id="main">
						<section class="wrapper style5">
							<div style="width: 100%;text-align: center;" class="inner">
							
							<ul class="features" style="width: 100%;text-align: center;" >
								<li style="width: 100%;text-align: center;">
									<h3>Menaxhimi i Antarsimeve ne Bibloteke</h3>
									<a href="shto_antarsime.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Shto Antarsime</a>
									<a href="modifiko_antarsime.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Modifiko Antarsime</a>
									<a href="fshije_antarsime.php" class="button primary icon solid fa-download">Fshije Antarsime</a>
								</li>
								
							</ul>

							<ul class="features" style="width: 100%;text-align: center;" >
								<li style="width: 100%;text-align: center;">
									<h3>Menaxhimi i Degeve ne Bibloteke</h3>
									<a href="shto_dege.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Shto Dege</a>
									<a href="modifiko_dege.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Modifiko Dege</a>
									<a href="fshije_dege.php" class="button primary icon solid fa-download">Fshije Dege</a>
								</li>
								
							</ul>
							
							<ul class="features">
								<li style="width: 100%;text-align: center;">
									<h3>Menaxhimi i te dhenave ne bibloteke</h3>
									<a href="shto_tedhena.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Shto te Dhena</a>
									<a href="modifiko_tedhena.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Modifiko te Dhena</a>
									<a href="fshije_tedhena.php" class="button primary icon solid fa-download">Fshije te Dhena</a>
								</li>
								
							</ul>

							<ul class="features">
								<li style="width: 100%;text-align: center;">
									<h3>Menaxhimi Menyve te Biblotekes</h3>
									<a href="shto_meny.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Shto Meny</a>
									<a href="modifiko_meny.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Modifiko Meny</a>
									<a href="fshije_meny.php" class="button primary icon solid fa-download">Fshije Meny</a>
								</li>
								
							</ul>

							<ul class="features">
								<li style="width: 100%;text-align: center;">
									<h3>Shikimi i fajllave</h3>
									<a href="GABIMshikofajll.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Shiko Fajllin</a>
								</li>
								
							</ul>

						</section>
					</article>

				<!-- Footer -->
						<?php include_once("kembafaqes.php"); ?>

			

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