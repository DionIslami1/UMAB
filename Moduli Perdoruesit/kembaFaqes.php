<footer id="footer" style="background-color: #2e3842">
				<div class="inner">
					<div class="content">
					<?php
            $rezultat = mysqli_query($kon_j, "CALL selektKembafaqesAdresa()");
            while ($rresht = mysqli_fetch_assoc($rezultat)) {

              extract($rresht);
			  
			  
if($rezultat==null)
  mysqli_free_rezultat($rezultat);

            ?>
						<div style="float: left; width: 33%;">
							<h3><?php echo $titulli ?></h3>
							<p><?php echo $pershkrimi; ?>
							</p>
						</div>
			<?php } ?>
									<?php
            $rezultat = mysqli_query($kon_c, "CALL selektKembafaqesLinqet()");
            while ($rresht = mysqli_fetch_assoc($rezultat)) {

              extract($rresht);
			  
			  
if($rezultat==null)
  mysqli_free_rezultat($rezultat);

            ?>
						<div style="float: left; width: 33%;">
							<h3><?php echo $titulli ?></h3>
							<p><?php echo $pershkrimi; ?>
							</p>
						</div>
			<?php } ?>
									<?php
            $rezultat = mysqli_query($kon_b, "CALL selektKembafaqesRrSociale()");
            while ($rresht = mysqli_fetch_assoc($rezultat)) {

              extract($rresht);
			  
			  
if($rezultat==null)
  mysqli_free_rezultat($rezultat);

            ?>
						<div style="float: left; width: 33%;">
							<h3><?php echo $titulli ?></h3>
							<p><?php echo $pershkrimi; ?>
							</p>
						</div>
			<?php } ?>
					</div>
					<div class="copyright">
					
												<?php
            $rezultat = mysqli_query($kon_h, "CALL selektKembafaqesCopyright()");
            while ($rresht = mysqli_fetch_assoc($rezultat)) {

              extract($rresht);
			  
			  
if($rezultat==null)
  mysqli_free_rezultat($rezultat);

            ?>
					<div style="float:left; width: 100%" >
					
							<?php echo $pershkrimi; ?>
					</div>
					
			<?php } ?>
						
					</div>
				</div>
			</footer>