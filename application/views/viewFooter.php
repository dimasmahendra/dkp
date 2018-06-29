	<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>
					<div class="read">
						<a href="#" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Latest Posts</h3>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="#">
									<img src="<?php echo base_url(); ?>assets/images/4.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>
							
						</div>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="#">
									<img src="<?php echo base_url(); ?>assets/images/5.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>
							
						</div>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="#">
									<img src="<?php echo base_url(); ?>assets/images/6.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="#">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>
							
						</div>
					</div>
				</div> -->
				<!-- subscribe -->
				<!-- <div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Submit</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					//subscribe
				</div> -->
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-google-plus-g"></i>
									<span>Google+</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p>© 2018 All Rights Reserved | Design by Java Media</p>
				</div>
			</div>

			<!-- //footer -->
		</div>
	</footer>
	<!---->
	<?php
		foreach ($data["footer_js"] as $key => $val) { ?>
			<script src="<?php echo $val ?>"></script>
	<?php } ?>
	<?php echo $footer_src; ?>

	<script>
        $('.report-pss').click(function(){
            var id = $(this).data('id');
            var namalengkap = $(this).data('namalengkap');
            var alamatlengkap = $(this).data('alamatlengkap');
            var nomorhp = $(this).data('nomorhp');
            var namausaha = $(this).data('namausaha');
            var alamatusaha = $(this).data('alamatusaha');
            var status = $(this).data('status');
            var parameter = $(this).data('parameter');
            var hasil = $(this).data('hasil');
            if (id) {
                $("td.namalengkap").append(namalengkap);
                $("td.alamatlengkap").append(alamatlengkap);
                $("td.nomorhp").append(nomorhp);
                $("td.namausaha").append(namausaha);
                $("td.alamatusaha").append(alamatusaha);
                $("td.status").append(status);
                $("td.parameter").append(parameter);
                $("td.hasil").append(hasil);
            }
	        else {
	            alert('Data Belum Di Verifikasi oleh Admin');
	            e.preventDefault();
	        }
	    });
    </script>

	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

</body>
</html>