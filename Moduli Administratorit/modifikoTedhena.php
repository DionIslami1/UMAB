<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['modifikoTedhena']))
{	
	$id_tedhenat = $_POST['id_tedhenat'];
	
	$titullii=$_POST['titulli'];
	$pershkrimii=$_POST['pershkrimi'];
	$dosjaa=$_POST['dosja'];
	$pamjafaqess=$_POST['pamjafaqes'];	
	// checking empty fields
	if(empty($titullii) || empty($pershkrimii) || empty($dosjaa) || empty($pamjafaqess)) {	
			
		if(empty($titullii)) {
			echo "<font color='red'>titulli fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($pershkrimii)) {
			echo "<font color='red'>pershkrimi fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($dosjaa)) {
			echo "<font color='red'>dosja fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($pamjafaqess)) {
			echo "<font color='red'>pamjafaqes fusha eshte e zbrazet.</font><br/>";
		}
			
	} else {	
		 mysqli_query($kon,"SET @id = ${id_tedhenat}");
		 mysqli_query($kon,"SET @tit = '${titullii}'");
		 mysqli_query($kon,"SET @per = '${pershkrimii}'");
		 mysqli_query($kon,"SET @dosja = '${dosjaa}'");
		 mysqli_query($kon,"SET @pamja = '${pamjafaqess}'");
		//updating the table
		$rezultat = mysqli_query($kon,"CALL modifikoTedhena(@id,@tit,@per,@dosja,@pamja)");
		//updating the table
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_tedhena.php");
	}
}
?>
<?php
//getting uid from url
$p_id_tedhenat = $_GET['id_tedhenat'];

//selecting data associated with this particular uid
$rezultat = mysqli_query($kon,"CALL selektTedhenat('$p_id_tedhenat')");

while($res = mysqli_fetch_array($rezultat))
{
	$titullii = $res['titulli'];
	$pershkrimii = $res['pershkrimi'];
	$dosjaa = $res['dosja'];
	$pamjafaqess = $res['pamjafaqes'];
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
								<h3><strong>Forma per shtimin e </strong>Te dhenave</h3>
									<form method="post" action="modifikoTedhena.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="titulli" id="titulli" value='<?php echo $titullii;?>'/>
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="pershkrimi" id="pershkrimi"  value='<?php echo $pershkrimii;?>'/>
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="dosja" id="dosja"  value='<?php echo $dosjaa;?>' />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="pamjafaqes" id="pamjafaqes" value='<?php echo $pamjafaqess;?>'  />
											</div>

											<div style="padding-left: 5% " class="col-12">
												<ul class="actions">
													<input type="hidden" name="id_tedhenat" value='<?php echo $_GET['id_tedhenat'];?>' />
													<input type="submit" name="modifikoTedhena" value="Modifiko" class="primary" />
													
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