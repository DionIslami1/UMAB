					

		
				<?php
            $result = mysqli_query($kon, "CALL selektKokaFaqes()");
            while ($rresht = mysqli_fetch_assoc($result)) {

              extract($rresht);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
			<div style="background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo $dosja ?>'); background-repeat: no-repeat;
  background-attachment: fixed;
    background-float:left;

  background-size: 120% 100%;">
			<articl>
						<header id="main"  style=" text-align: center; margin-bottom: 10%" >
							<h2 style="padding-top:15%;"><?php echo $titulli ?></h2>
							<p style="padding-bootom:5%; color:white"><?php echo $pershkrimi ?></p>
							

							
						</header>
			</article>
			<div>
		<?php } ?>