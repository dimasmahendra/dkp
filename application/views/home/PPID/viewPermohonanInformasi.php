<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Permohonan Informasi</h3>
			<div class="inner-sec">
				<form action="<?php echo base_url(); ?>Register/createUser" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Nama</label>
						<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Alamat</label>
						<input type="text" class="form-control" id="alamat_ppid" name="alamat_ppid" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Pekerjaan</label>
						<input type="text" class="form-control" id="pekerjaan_ppid" name="pekerjaan_ppid" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Nomor Handphone</label>
						<input type="text" class="form-control" id="nomorhp_ppid" name="nomorhp_ppid">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Email</label>
						<input type="email" class="form-control" id="email_ppid" name="email_ppid" placeholder="" required>
					</div>
					<div class="form-group">
						<label for="textarea">Rincian Yang Dibutuhkan</label>
						<small>(Tambah Keterangan Bila Perlu)</small>
						<textarea id="rincian_ppid" name="rincian_ppid" style="width: 100%"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1 mb-2">Tujuan Penggunaan Informasi</label>
						<textarea id="tujuan_ppid" name="tujuan_ppid" style="width: 100%"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1 mb-2">Cara Memproleh Infromasi **</label>
						<select class="form-control" id="cara_ppid" name="cara_ppid">
							<option value="">-- Pilih Salah Satu --</option>
							<option value="Melihat / Membaca / Mendengarkan / Mencatat">Melihat / Membaca / Mendengarkan / Mencatat</option>
							<option value="Mendapat Salinan Informasi (Hardcopy / Soft Copy)***">Mendapat Salinan Informasi (Hardcopy / Soft Copy)</option>	
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1 mb-2">Cara Mendapatkan Infromasi **</label>
						<select class="form-control" id="cara_ppid" name="cara_ppid">
							<option value="">-- Pilih Salah Satu --</option>
							<option value="Mengambil Langsung">Mengambil Langsung</option>
							<option value="Kurir">Kurir</option>
							<option value="Pos">POS</option>
							<option value="Fakmsimili">Fakmsimili</option>
							<option value="Email">Email</option>
						</select>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary submit mb-4">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>