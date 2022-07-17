<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>

<?php
// including the database konection file
include_once("konfig.php");


if(isset($_POST['modifikoAntarsime'])) {	
	$id_antarsimi = $_POST['id_antarsimi'];
	$emri = $_POST['emri'];
	$mbiemri = $_POST['mbiemri'];
	$emri_prindit = $_POST['emri_prindit'];
	$adresa = $_POST['adresa'];
	$nr_identifikues = $_POST['nr_identifikues'];
	$numri = $_POST['numri'];
	$id_dega = $_POST['id_dega'];
	
	
	$imgData = addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($emri) || empty($mbiemri) || empty($numri)) {
				
		if(empty($emri)) {
			echo "<font color='red'>Fusha emri eshte jo e mbushur.</font><br/>";
		}
		
		if(empty($mbiemri)) {
			echo "<font color='red'>mbiemri fusha eshte e zbrazet.</font><br/>";
		}
		
		if(empty($numri)) {
			echo "<font color='red'>numri fusha eshte e zbrazet.</font><br/>";
		}
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
			 mysqli_query($kon,"SET @id = ${id_antarsimi}");
			 mysqli_query($kon,"SET @emri = '${emri}'");
			 mysqli_query($kon,"SET @mbiemri = '${mbiemri}'");
			 mysqli_query($kon,"SET @emri_prindit = '${emri_prindit}'");
			 mysqli_query($kon,"SET @adresa = '${adresa}'");
			 mysqli_query($kon,"SET @nr_identifikues = '${nr_identifikues}'");
			 mysqli_query($kon,"SET @numri = '${numri}'");
			 mysqli_query($kon,"SET @id_dega = '${id_dega}'");
			 mysqli_query($kon,"SET @image = '${imgData}'");
			 mysqli_query($kon,"SET @name = '${name}'");
		//insert data to database	
		$rezultat = mysqli_query($kon,"CALL modifikoAntarsime(@id,@emri,@mbiemri,@emri_prindit,@adresa,@nr_identifikues,@numri,@id_dega,@image,@name)");
		
		//display success message
			header("Location: modifiko_antarsime.php");
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View rezultat</a>";
	}
}
?>
<?php
//getting ID_Studenti from url
$p_id_antarsimi = $_GET['id_antarsimi'];

//selecting data associated with this particular ID_Studenti
$rezultat = mysqli_query($kon_a,"CALL selektAntarsime('$p_id_antarsimi')");

while($res = mysqli_fetch_array($rezultat))
{
	$emri = $res['emri'];
	$mbiemri = $res['mbiemri'];
	$emri_prindit = $res['emri_prindit'];
	$adresa = $res['adresa'];
	$nr_identifikues=$res['nr_identifikues'];
	$numri = $res['numri'];
	$id_dega=$res['id_dega'];	
}
?>
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
									<form enctype="multipart/form-data" method="post" action="modifikoAntarsime.php" name="form1">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="emri" id="" value='<?php echo $emri;?>' required />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="mbiemri" id="" value='<?php echo $mbiemri;?>' required />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="emri_prindit" id="" value='<?php echo $emri_prindit;?>' required />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="adresa" id="" value='<?php echo $adresa;?>' required />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="nr_identifikues" value='<?php echo $nr_identifikues;?>' required />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="numri" id="" value='<?php echo $numri;?>' required />
											</div>
											<div class="col-6 col-12-xsmall">
												<select name="id_dega">
													<option selected="selected">Zgjedh Degen</option>
														<?php
														$res=mysqli_query($kon,"CALL selektUmabDega('id_dega')");
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

													<input type="hidden" name="id_antarsimi" value='<?php echo $_GET['id_antarsimi'];?>' />
													<input type="submit" name="modifikoAntarsime" value="Modifiko " class="primary" />
													
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
