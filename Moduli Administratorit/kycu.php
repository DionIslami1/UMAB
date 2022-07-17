<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese 
username dhe passwordi qe ka shkruar useri ne Index.php 
gjindet ne db ne MySQL */
	session_start();
	include("konfig.php"); //Mundeson lidhjen me databazen e krijuar
	$gabim = ""; //Variabel për ruajtjen e gabimeve tona.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["nr_identifikues"]) || empty($_POST["fjalkalimi"]))
		{
			$gabim = "Kerkohet mbushja e te gjitha fushave!.";
		}else
		{
			// Definimi i $username dhe $password
			$nr_identifikues=$_POST['nr_identifikues'];
			$fjalkalimi=$_POST['fjalkalimi'];
			//Kontrollo username dhe password prej database
			$sql="CALL selektKycu('$nr_identifikues',MD5('$fjalkalimi'))";
			$rezultat=mysqli_query($kon_h,$sql);
			$rresht=mysqli_fetch_array($rezultat,MYSQLI_ASSOC);
			/*Nese username dhe password ekzistojne ne databaze, atehere 
			krijonje sesion. Perndryshe shfaq nje (echo) error.*/
			if(mysqli_num_rows($rezultat) == 1)
			{
				$_SESSION['nr_identifikues'] = $nr_identifikues; // Fillimi i sesionit
				header("location: shpia_adminit.php"); // hapet faqja pas logimit me sukses
			}else
			{
				$gabim = "Perdoruesi ose fjalkalimi gabim.";
			}
		}
	}
?>