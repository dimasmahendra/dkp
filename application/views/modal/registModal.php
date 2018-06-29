<!-- Modal -->
<div class="modal fade" id="regisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Halaman Daftar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url(); ?>Register/createUser" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Nama Depan</label>
						<input type="text" class="form-control" id="namadepan_regist" name="namadepan_regist" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Nama Belakang</label>
						<input type="text" class="form-control" id="namabelakang_regist" name="namabelakang_regist" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Alamat</label>
						<input type="text" class="form-control" id="alamat_regist" name="alamat_regist" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Tanggal Lahir</label>
						<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1 mb-2">Jenis Kelamin</label>
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
							<option value="pria">Pria</option>
							<option value="wanita">Wanita</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Alamat Email</label>
						<input type="email" class="form-control" id="email_regist" name="email_regist" placeholder="" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1 mb-2">Password</label>
						<input type="password" class="form-control" id="password_regist" name="password_regist" placeholder="" required="">
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary submit mb-4">Daftar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>