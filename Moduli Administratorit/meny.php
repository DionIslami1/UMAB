<nav id="menu">
	<ul>
		<?php 
		$rezultat = mysqli_query($kon_m,"CALL selektMenyAdm()");
		//"SELECT meny_emri, meny_linku FROM umab_menyt WHERE Moduli ='ModuliAdministratorit'
		while ($rresht = mysqli_fetch_assoc($rezultat))
		{
			extract($rresht);

			if($rezultat == null)
				mysqli_free_rezultat($rezultat);

			 ?>

		 	<li><a href="<?php echo $rresht['meny_linku']; ?>"><?php echo $rresht['meny_emri'] ?></a></li>
				<?php } ?>
		

	</ul>


</nav>