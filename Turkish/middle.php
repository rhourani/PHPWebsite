
		<div class="container">
			<div class="row">
				<div class="col-md-7">    
							<!-- first panel -->
					<div class="panel panel-info" id="articles">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-calendar"></span> Makaleler </h3>
						</div>
  						<div class="panel-body">
							<table class="table">
                                <?php
							         $makaleler=mysqli_query($baglanti,"SELECT * FROM makaleler");
							         while($makale=mysqli_fetch_array($makaleler)){
                                ?>
								<tbody>
									<tr>
										<div class="media">
											<?php if ($makale["id"] == 1) { ?>
												<div class="media-left">
													<img src="Images/United_Arab_Republic.png" alt="Map" width="120" height="90">
												</div> <?php } ?>
											<?php if ($makale["id"] == 2) { ?>
												<div class="media-left">
													<img src="Images/1952.jpg" alt="photo" width="120" height="90">
												</div> <?php } ?>
											<?php if ($makale["id"] == 3) { ?>
												<div class="media-left">
													<img src="Images/Sadat.jpg" alt="photo" width="120" height="90">
												</div> <?php } ?>
											<div class="media-body">
												<h3 class="media-heading"> <a href="#"> <?php echo $makale["baslik"]; ?> </a> </h3>
												<p>
                                                    <?php echo substr($makale["icerik"],0,120);?>
                                                    <?php
													   echo "<a href=\"#\" style=\"text-decoration: underline;\">
                                                       daha fazla oku...</a>";
												    } ?>
                                                </p>
											</div>
										</div>
									</tr>
								</tbody>
							</table>
  				          <a href="makaleler.php" class="btn btn-info btn-block"> Tüm Makaleler
                              <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
					</div>
				</div>
				<div class="col-md-5">
								<!-- seconed panel -->
					<div class="panel panel-success" id="gallery">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-picture"></span> Galeri </h3>
						</div>
  						<div class="panel-body">
							<div class="gallery">
							  <a target="_blank" href="Images/Cairo-Nile.jpg">
							    <img src="Images/Cairo-Nile.jpg" alt="Cairo-Nile" width="300" height="200">
							  </a>
							</div>

							<div class="gallery">
							  <a target="_blank" href="Images/Damascus.jpg">
							    <img src="Images/Damascus.jpg" alt="Damascus" width="300" height="200">
							  </a>
							</div>

							<div class="gallery">
							  <a target="_blank" href="Images/egypt-mosque.jpg">
							    <img src="Images/egypt-mosque.jpg" alt="egypt-mosque" width="300" height="200">
							  </a>
							</div>

							<div class="gallery">
							  <a target="_blank" href="Images/Nile.jpg">
							    <img src="Images/Nile.jpg" alt="Nile" width="300" height="200">
							  </a>
							</div>
							<div class="gallery">
							  <a target="_blank" href="Images/Omawi.jpg">
							    <img src="Images/Omawi.jpg" alt="Omawi" width="300" height="200">
							  </a>
							</div>
							<div class="gallery">
							  <a target="_blank" href="Images/tahrir-square.jpg">
							    <img src="Images/tahrir-square.jpg" alt="tahrir-square" width="300" height="200">
							  </a>
							</div>
  						</div>
					</div>	
				</div>
			</div>
		</div>
	</body>
