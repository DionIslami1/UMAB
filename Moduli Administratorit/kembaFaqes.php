<footer id="footer" style="background-color: #2e3842">
				<div class="inner">
					<div class="content">
					<?php
            $result = mysqli_query($kon_e, "CALL selektKembafaqesAdresa()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
						<div style="float: left; width: 33%;">
							<h3><?php echo $titulli ?></h3>
							<p><?php echo $pershkrimi; ?>
							</p>
						</div>
			<?php } ?>
									<?php
            $result = mysqli_query($kon_kemba, "CALL selektKembafaqesLinqet()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
						<div style="float: left; width: 33%;">
							<h3><?php echo $titulli ?></h3>
							<p><?php echo $pershkrimi; ?>
							</p>
						</div>
			<?php } ?>
									<?php
            $result = mysqli_query($kon_f, "CALL selektKembafaqesRrSociale()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

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
            $result = mysqli_query($kon_g, "CALL selektKembafaqesCopyright()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
					<div style="float:left; width: 100%" >
					
							<?php echo $pershkrimi; ?>
					</div>
					
			<?php } ?>
						
					</div>
				</div>
			</footer>