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
            $rezultat = mysqli_query($kon, "CALL selektKokaFaqes()");
            while ($rresht = mysqli_fetch_assoc($rezultat)) {

              extract($rresht);
			  
			  
if($rezultat==null)
  mysqli_free_rezultat($rezultat);

            ?>
			<div style="background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo $dosja ?>'); background-repeat: no-repeat;
  background-attachment: fixed;
    background-float:left;

  background-size: 120% 100%;">
			<articl>
						<header id="main"  style=" text-align: center; padding-bottom: 7%">
							<h2 style="padding-top:15%;"><?php echo $titulli ?></h2>
							<p style="padding-bootom:5%; color:white"><?php echo $pershkrimi ?></p>
							<?php
							$vizita =1;
							if(isset($_COOKIE["vizita"])) {
								$vizita=(int) $_COOKIE["vizita"];
							}   $muaji = 2592000 + time();
							setcookie("vizita", date("F jS - g:i a"), $muaji);
							if(isset($_COOKIE['vizita'])) 
							{
								$eFundit = $_COOKIE['vizita'];
								echo "<p style='text-align:right; font-size:15px; padding-right: 5%;'>Vizita juaj e fundit ishte me: " . $eFundit."</p>";

							}
							else 

							{ echo"<p style='text-align:right; font-size:15px; padding-right: 5%;'> Vizita juaj e pare ne webaplikacion, ju deshirojm mireseardhje</p>";

							}
						?>
					
						</header>
			</article>
			<div>
		<?php } ?>