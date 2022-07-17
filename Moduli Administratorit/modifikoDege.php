<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database konection file
include_once("konfig.php");

if(isset($_POST['modifikoDege']))
{	
	$id_dega = $_POST['id_dega'];
	
	$dega=$_POST['dega'];
	
	
	// checking empty fields
	if(empty($dega) ) {	
			
		if(empty($dega)) {
			echo "<font color='red'>dega fusha eshte e zbrazet.</font><br/>";
		}
		
	
	} else {	
		//updating the table
		mysqli_query ($kon,"SET @id_dega = ${id_dega}");
		mysqli_query ($kon,"SET @dega = '${dega}'");
		$rezultat = mysqli_query($kon,"CALL modifikoDega(@id_dega,@dega)");
		if ($rezultat) {
			# code...
			header("Location: modifiko_dege.php");
		}else
		{
			die("Procedura modifiko nuk mund te egzekutohet!");
		}
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		
	}
}
?>
<?php
//getting ID_Dep from url
$p_id_dega = $_GET['id_dega'];

//selecting data associated with this particular ID_Dep
$rezultat = mysqli_query($kon_a,"CALL selektDege($p_id_dega)");

while($res = mysqli_fetch_array($rezultat))
{
	$dega = $res['dega'];
	
}
?>
<!DOCTYPE HTML>
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
								<h3><strong>Forma per shtimin e </strong>Degeve</h3>
									<form enctype="multipart/form-data" method="post" action="modifikoDege.php" name="form1">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="dega" id="" value='<?php echo $dega;?>' required />
											</div>											
											<div style="padding-left: 5% " class="col-12">
												<ul class="actions">

													<input type="hidden" name="id_dega" value='<?php echo $_GET['id_dega'];?>' />
													<input type="submit" name="modifikoDege" value="Modifiko " class="primary" />
													
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
