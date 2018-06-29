<!-- Large Size -->
<div class="modal fade" id="pengisianPssModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Pengisian Evaluasi Pedagang Siap Saji</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <form action="<?php echo base_url(); ?>Layananpublik/inputPenilaianPss" enctype="multipart/form-data" method="post">
            <div class="modal-body">
                <div class="col-sm-12">
                	<input type="hidden" name="layanan_pss_detail_id" id="layanan_pss_detail_id" value="">
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" placeholder="Parameter" type="text" id="parameter_pengisian" name="parameter_pengisian">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Hasil</label>
                         <div class="demo-radio-button">
                            <input name="hasil_pengisian" type="radio" id="radio_1" class="radio-col-red" value="Negatif" checked />
                            <label for="radio_1">Negatif</label>
                            <input name="hasil_pengisian" type="radio" id="radio_2" class="radio-col-green" value="Positif" />
                            <label for="radio_2">Positif</label>
                        </div>
                    </div>
                    <div class="form-group">
                    	<label>Status</label>
                    	 <div class="demo-radio-button">
                            <input name="status_pengisian" type="radio" id="radio_7" class="radio-col-red" value="Tidak Tersertifikasi" checked />
                            <label for="radio_7">Tidak Tersertifikasi</label>
                            <input name="status_pengisian" type="radio" id="radio_16" class="radio-col-green" value="Tersertifikasi" />
                            <label for="radio_16">Tersertifikasi</label>
                        </div>
                    </div>
                </div>            	
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>