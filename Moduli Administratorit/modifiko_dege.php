<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfig.php");

//fetching data in descending order (lastest entry first)
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
									<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko të dhënat e degeve për modifikim</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Degen"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Dega</td>
		<td>Modifiko</td>
	</tr> 

<?php
if (!empty($_REQUEST['term'])) {
$p_term = mysqli_real_escape_string
($kon,$_REQUEST['term']);     
$sql = mysqli_query($kon,"CALL selektTermDega('$p_term')"); 
while($rresht = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rresht['dega']."</td>";
		echo "<td><a href=\"modifikoDege.php?id_dega=$rresht[id_dega]\" class='button' class='button primary'>
		Modifiko</a></td></tr>";		
	}

}

?>
		
	



	</table>
									</div>

								
								
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