					<header id="header">

						
						<nav>
						<ul>
						<li class="special">
						
							<a href="#menu" class="menuToggle"><span>Menu</span></a>
						</nav>
						</li>
						</ul>
					</header>

		
				<?php
            $result = mysqli_query($kon_h, "CALL selektKokaFaqes()");
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
						<header id="main"  style=" text-align: center">
							<h2 style="padding-top:15%;"><?php echo $titulli ?></h2>
							<p style="padding-bootom:5%; color:white"><?php echo $pershkrimi ?></p>
							<p style="text-align:right;color:white; font-size:15;padding-right: 5%; padding-bottom: 5%;margin-bottom: 0%"> <br>Jeni kycur si: <em> <?php echo $perdoruesi_kyces;?>!</em></p>

							
						</header>
			</article>
			<div>
		<?php } ?>