<section class="main-content-w3layouts-agileits">
	<div class="container">
		<h3 class="tittle">Daftar Sekarang</h3>
		<p style="text-align: center;">Anda harus mendaftar dahulu sebagai member untuk mengajukan permohonan Sertifikat PIRT</p>
		<div class="inner-sec">
		<div class="login p-5 bg-light mx-auto mw-100">
			<form action="<?php echo base_url(); ?>Register/createUser" enctype="multipart/form-data" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1 mb-2">Nama Depan</label>
					<input type="text" class="form-control" id="namadepan_regist" name="namadepan_regist" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1 mb-2">Nama Belakang</label>
					<input type="text" class="form-control" id="namabelakang_regist" name="namabelakang_regist" placeholder="" required="">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1 mb-2">Alamat</label>
					<input type="text" class="form-control" id="alamat_regist" name="alamat_regist" placeholder="" required="">
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
				<!-- <div class="form-group">
					<label for="exampleInputPassword1 mb-2">Level</label>
					<select class="form-control" id="level_id" name="level_id">
						<option value="Admin">Admin</option>
						<option value="User">User</option>
						<option value="Admin1">Admin1</option>
						<option value="Admin2">Admin2</option>
						<option value="Admin3">Admin3</option>
					</select>
				</div> -->
				<div class="text-right">
					<button type="submit" class="btn btn-primary submit mb-4">Daftar</button>
				</div>
			</form>
		</div>
		</div>
	</div>
</section>