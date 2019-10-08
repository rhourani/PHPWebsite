		<div class="container">
			<div class="row">
				<div class="col-md-7">    
							<!-- first panel -->
					<div class="panel panel-info" id="articles">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-tasks"></span> ARTICLES </h3>
						</div>
  						<div class="panel-body">
  						<?php
							$articles=mysqli_query($connection,"SELECT * FROM articles");
							while($article=mysqli_fetch_array($articles)){
						?>
							<table class="table">
								<tbody>
									<tr>
										<div class="media"> 
											<?php if ($article["id"] == 1) { ?>
												<div class="media-left">
													<img src="Images/United_Arab_Republic.png" alt="Map" width="120" height="90">
												</div> <?php } ?>
											<?php if ($article["id"] == 2) { ?>
												<div class="media-left">
													<img src="Images/1952.jpg" alt="photo" width="120" height="90">
												</div> <?php } ?>
											<?php if ($article["id"] == 3) { ?>
												<div class="media-left">
													<img src="Images/Sadat.jpg" alt="photo" width="120" height="90">
												</div> <?php } ?>	
											<div class="media-body">
												<h3 class="media-heading"><a href="#"> <?php echo $article["header"]; ?> </a></h4>
												<p> <?php echo substr($article["content"],0,120);?>
											<?php
												echo "<a href=\"#\" style=\"text-decoration: underline;\">read more...</a>";
											} ?>
												</p>
											</div>
										</div>
									</tr>
								</tbody>
							</table>
							<a href="articles.php" class="btn btn-info btn-block"> All Articles
							<span class="glyphicon glyphicon-chevron-right"></span></a>
  						</div>
					</div>
				</div>
				<div class="col-md-5">
								<!-- seconed panel -->
					<div class="panel panel-success" id="gallery">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-picture"></span> Gallery </h3>
						</div>
  						<div class="panel-body">
							<div class="gallery">
							  <a target="_blank" href="Images/Cairo-Nile.jpg">
							    <img src="Images/Cairo-Nile.jpg" alt="Cairo-Nile">
							  </a>
							</div>

							<div class="gallery">
							  <a target="_blank" href="Images/Damascus.jpg">
							    <img src="Images/Damascus.jpg" alt="Damascus">
							  </a>
							</div>

							<div class="gallery">
							  <a target="_blank" href="Images/egypt-mosque.jpg">
							    <img src="Images/egypt-mosque.jpg" alt="egypt-mosque">
							  </a>
							</div>

							<div class="gallery">
							  <a target="_blank" href="Images/Nile.jpg">
							    <img src="Images/Nile.jpg" alt="Nile">
							  </a>
							</div>
							<div class="gallery">
							  <a target="_blank" href="Images/Omawi.jpg">
							    <img src="Images/Omawi.jpg" alt="Omawi">
							  </a>
							</div>
							<div class="gallery">
							  <a target="_blank" href="Images/tahrir-square.jpg">
							    <img src="Images/tahrir-square.jpg" alt="tahrir-square">
							  </a>
							</div>
  						</div>
					</div>	
				</div>
			</div>
		</div>
	</body>