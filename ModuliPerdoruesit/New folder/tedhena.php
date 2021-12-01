
				<div class="inner">
					<div class="flex flex-3">
					<?php 
										$result=mysqli_query($conn,"SELECT * FROM ngarkotedhenakuvendi order by id ");
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
						<article>
							<header>
								<h3><?php echo $EmriDok; ?></h3>
							</header>
						<!-- 	<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu.</p> -->
							<footer>
								
								<a href="ModuliAdministruesit/tedhena/<?php echo $row['file'] ?>" class="button special" target="_blank">Me Shumë </a>
							</footer>
							</br>
						</article>
						
						<?php } ?>	
					</div>
				</div>