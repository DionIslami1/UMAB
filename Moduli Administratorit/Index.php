
<?php
/* Index.php faqja qe permban formen e loginit) */
	include('kycu.php'); // perfshine scripten login
	if ((isset($_SESSION['nr_identifikues']) != '')) 
	{
		header('Location: shpia_adminit.php');
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
					<?php include_once("kokafaqesKycu.php"); ?>

				<!-- Main -->
					<article id="main">
							<section id="three" class="wrapper style5">
								<div class="inner">
									<header class="major" style="text-align: center;">
										<h2>Forma per kycje ne Ueb Apliakcion</h2>
										<blockquote> <strong>UDHEZIM:</strong>Per tu kyqur ne ueb aplikacion ju lutem kontaktoni administratorin per krijimin e llogaris</blockquote>
										
									</header>
									<ul class="features">
										
										<li>
											<h4>Kycja ne ueb aplikacion</h4>
											<form method="post" action="">
												<div class="row gtr-uniform">
													<div style="width: 100%" class="col-6 col-12-xsmall">
														<input type="text" name="nr_identifikues" id="nr_identifikues" value="" placeholder="Nr Identifikues" />
													</div>
													<div style="width: 100%" class="col-6 col-12-xsmall">
														<input type="password" name="fjalkalimi" id="fjalkalimi" value="" placeholder="Fjalkalimi" />
													</div>
													<div class="col-6 col-12-xsmall">
														<input type="submit" name="submit" value="Kyqu" class="primary"/>
													</div>
												</div>
											</form>
										</li>
										
									</ul>
								</div>
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