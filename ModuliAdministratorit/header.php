
				<header class="major">
				 <?php 
										$result=mysqli_query($conn,"SELECT * FROM header order by id_header DESC limit 1 ");
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
					<h1><?php echo $Title ?> </h1>
					<p><?php echo $Description ?></p>
										<?php } ?>
				</header>
			