<section class="main-content-w3layouts-agileits">
	<div class="container">
		<h3 class="tittle">Syarat Permohonan PIRT</h3>
		<p style="text-align: center;">KLIK MENU SYARAT PERMOHONAN SPP – PIRT KELUAR SYARAT-SYARAT INI</p>
		<div class="inner-sec">
			<p>1. MENGISI FORM PERMOHONAN SPP-PIRT</p>
			<p>2. MENGISI FORM PERMOHONAN REKOMENDASI PENGAJUAN SPP-PIRT</p>
			<p>3. SERTIFIKAT PENYULUHAN KEAMANAN PANGAN <a href="#" data-toggle="modal" data-target="#lampiranDua">(LAMPIRAN 2)</a></p>
			<p>4. HASIL REKOMENDASI SARANA DAN PRASARANA PRODUKSI <a href="#" data-toggle="modal" data-target="#lampiranTiga">(LAMPIRAN 3)</a></p>
		</div>
	</div>
</section>
<?php 
	if (isset($lampiranDua) && isset($lampiranTiga)) {
		echo $lampiranDua;
		echo $lampiranTiga;
	}
?>