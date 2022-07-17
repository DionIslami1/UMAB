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
						<div class="inner" style="width: 100%;text-align: center;" >

							
							<ul class="features" style="width: 100%;text-align: center;" >
								<li style="width: 100%;text-align: center;">
									<h3>Menaxhimi i Perdoruesve ne Bibloteke</h3>
									<a href="shto_perdorues.php" class="button primary icon solid fa-download" style="margin-right: 3%" >Shto Perdorues</a>
									<a href="modifiko_perdorues.php" class="button primary icon solid fa-download" style="margin-right: 3%">Modifiko Perdorues</a>
									<a href="fshije_perdorues.php" class="button primary icon solid fa-download">Fshije Perdorues</a>
								</li>
							</ul>	
								
							
						</div>
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