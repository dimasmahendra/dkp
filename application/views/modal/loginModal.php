<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Halaman Masuk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url(); ?>Register/login" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Alamat Email</label>
						<input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1 mb-2">Password</label>
						<input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="" required="">
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary submit mb-4">Masuk</button>
						<p><a href="#" data-toggle="modal" data-target="#regisModal"> Belum Punya akun ?</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>