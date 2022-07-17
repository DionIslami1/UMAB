<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['modifikoAnkesa']))
{	
	$id_ankesa = $_POST['id_ankesa'];
	
	$subjekti=$_POST['subjekti'];
	$ankesa=$_POST['ankesa'];
	$emaili=$_POST['emaili'];	
	
	// checking empty fields
	if(empty($subjekti) || empty($ankesa) || empty($emaili)) {	
			
		if(empty($subjekti)) {
			echo "<font color='red'>subjekti fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($ankesa)) {
			echo "<font color='red'>ankesa fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($emaili)) {
			echo "<font color='red'>emaili fusha eshte e zbrazet.</font><br/>";
		}		
	} else {	
		//updating the table
		mysqli_query ($kon,"SET @id = ${id_ankesa}");
		mysqli_query ($kon,"SET @sub = '${subjekti}'");
		mysqli_query ($kon,"SET @ank = '${ankesa}'");
		mysqli_query ($kon,"SET @email = '${emaili}'");
		$rezultat = mysqli_query($kon,"CALL modifikoAnkesa(@id,@sub,@ank,@email)");
		if ($rezultat) {
			# code...
			header("Location: ballina.php");
		}else
		{
			die("Coudn't execute update procedure!");
		}
		
		//redirectig to the display pmessage. In our case, it is admin.php
		header("Location: modifiko_ankesa.php");
	}
}
?>
<?php
//getting cid from url
$p_id_ankesa = $_GET['id_ankesa'];

//selecting data associated with this particular cid
$rezultat = mysqli_query($kon,"CALL selektAnkesa('$p_id_ankesa')");
while($res = mysqli_fetch_array($rezultat))
{
	$subjekti = $res['subjekti'];
	$ankesa = $res['ankesa'];
	$emaili = $res['emaili'];
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
								<h3><strong>Kërko të dhënat e ankesave për </strong>Modifikim</h3>
									<form method="post" action="modifikoAnkesa.php">
										<div class="row gtr-uniform">
											<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall" style="margin-left: 25%">
												<input type="text" name="subjekti" id="subjekti" value='<?php echo $subjekti;?>'   required />
											</div>
											
											<div class="col-6 col-12-xsmall" style="margin-left: 25%">
												<textarea name="ankesa" id="ankesa" rows="6" required /><?php echo $ankesa ?></textarea>
											</div>
											<div class="col-6 col-12-xsmall" style="margin-left: 25%">
												<input type="email" name="emaili" id="emaili" value='<?php echo $emaili;?>'   required />
											</div>
											
											<div style="margin-left: 27%; " class="col-12">
												<ul class="actions">
													<input type="hidden" name="id_ankesa" value='<?php echo $_GET['id_ankesa'];?>' />
													<input type="submit" name="modifikoAnkesa" value="Modifiko">
													
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