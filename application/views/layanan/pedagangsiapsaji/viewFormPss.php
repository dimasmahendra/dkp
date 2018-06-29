<section class="main-content-w3layouts-agileits">
	<div class="container">
		<h3 class="tittle">Form Pedagang Siap Saji</h3>
		<form action="<?php echo base_url(); ?>Layanan/inputFormpss" method="post">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<small>(Sesuai Dengan KTP)</small>
					<input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label>Alamat</label>
					<small>(Sesuai Dengan KTP)</small>
					<input type="text" class="form-control" id="alamatlengkap" name="alamatlengkap" required>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Nomor Handphone</label>
					<input type="text" class="form-control" id="nomorhp" name="nomorhp" required>
				</div>
			</div>
			<div class="col-sm-12 row">
				<div class="col-sm-6">
				<div class="form-group">
					<label>Nama Usaha</label>
					<select class="form-control" id="namausaha" name="namausaha" onchange="yesnoCheck(this);">
						<option value="">- Pilih Nama Usaha -</option>
						<option value="Bakso">Bakso</option>
						<option value="Mie Kopyok">Mie Kopyok</option>
						<option value="Mie Ayam">Mie Ayam</option>
						<option value="Soto">Soto</option>
						<option value="Pecel">Pecel</option>
						<option value="Tahu Gimbal">Tahu Gimbal</option>
						<option value="Gorengan">Gorengan</option>
						<option value="Penyetan">Penyetan</option>
						<option value="Nasi Ayam">Nasi Ayam</option>
						<option value="Sate">Sate</option>
						<option value="Sate">Lain - Lain</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group" id="ifYes" style="display: none;">
			    	<label>Nama Usaha Lainnya</label>
			    	<input type="text" class="form-control" id="namausahatext" name="namausahatext">
			    </div>
			</div>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label>Alamat Usaha</label>
					<input type="text" class="form-control" id="alamatusaha" name="alamatusaha" required>
				</div>
			</div>
			<div class="text-right">
				<button type="submit" class="btn btn-primary submit mb-4">Kirim</button>
			</div>
		</form>
	</div>
</section>