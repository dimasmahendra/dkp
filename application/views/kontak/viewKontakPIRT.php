<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Kontak Kami (PIRT)</h3>
			<div class="inner-sec">
				<!--left-->
				<div class="left-blog-info-w3layouts-agileits text-left">
					<div class="row">
						<?php 
							foreach ($report as $key => $value) { ?>
								<div class="col-lg-4 card">
									<a href="#">
										<img src="<?php echo base_url(); ?>assets/images/7.jpg" class="card-img-top img-fluid" alt="">
										<div class="card-body">
											<h5 class="card-title">
												<a href="#"><?php echo $value['merk']; ?></a>
											</h5>
											<p class="card-text mb-3">
												Berat Bersih : <?php echo $value['beratbersih']; ?>
											</p>
											<!-- <a href="#" class="btn btn-primary read-m">Read More</a> -->
										</div>
									</a>
								</div>
						<?php }
						?>
						<!-- <nav aria-label="Page navigation example">
							<ul class="pagination justify-content-left mt-4">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">Previous</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">1</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">2</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav> -->
					</div>
					<!--//left-->
				</div>
			</div>
		</div>
	</section>