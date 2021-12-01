<ul class="icons">
								<?php
								$result = mysqli_query($conn, "SELECT * FROM footer WHERE PageLayout='SN'");
								while ($row = mysqli_fetch_assoc($result)) {
								extract($row);
								if($result==null)
								mysqli_free_result($result);
								?>
						<li><a href="<?php echo $link; ?>" class="icon brands alt fa-<?php echo $icons; ?>"><span class="label"></span></a></li>
						<?php } ?>
					</ul>
			
					<ul class="copyright">
					<?php
								$result = mysqli_query($conn, "SELECT * FROM footer WHERE PageLayout='CR'");
								while ($row = mysqli_fetch_assoc($result)) {
								extract($row);
								if($result==null)
								mysqli_free_result($result);
								?>
						<li>&copy; <?php echo $Description; ?></li>
						<?php } ?>
					</ul>
				</footer>