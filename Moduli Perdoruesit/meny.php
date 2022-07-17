<nav id="menu">
	<ul>
		<?php 
		$rezultat = mysqli_query($kon_k, "CALL selektMenyPrd()");
		while ($rresht = mysqli_fetch_assoc($rezultat))
		{
			extract($rresht);

			if($rezultat == null)
				mysqli_free_result($rezultat);

			 ?>

		 	<li><a href="<?php echo $rresht['meny_linku']; ?>"><?php echo $rresht['meny_emri'] ?></a></li>
				<?php } ?>
		

	</ul>


</nav>