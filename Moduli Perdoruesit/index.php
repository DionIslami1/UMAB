<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include_once("konfig.php"); ?>

<html>
	<head>
		<title>Moduli Perdoruesit</title>
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
						
				
						<section id="three" class="wrapper style5 ">
						<div class="inner">
							<header style="text-align: center;" class="major">
								<h2>Antarsimet ne bibloteke</h2>
							</header>
							
							<ul class="features">
							<?php
            $rezultat = mysqli_query($kon_d, "CALL selektAntarsimetPrd()");
            while ($resht = mysqli_fetch_assoc($rezultat)) {

              extract($resht);
			  
if($rezultat==null)
  mysqli_free_rezultat($rezultat);
		
            ?>
								<li>
								<div class="col-4"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resht['image'] ).'" width="100%" height="100%">'; ?></div>			
									<h3><?php echo $emri; ?> <?php echo $mbiemri; ?></h3>
									<p><strong>Adresa:  </strong><i><?php echo $adresa; ?></i> </p>
									<p><strong>Dega:  </strong><i><?php echo $dega; ?></i> </p>
									<p><strong>Numri i karteles:  </strong><i><?php echo $numri; ?></i> </p>
								</li>
							<?php } ?>

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