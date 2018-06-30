<!-- Large Size -->
<div class="modal fade" id="tambahPSS" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Input Pedagang Siap Saji</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <form action="<?php echo base_url(); ?>Pss/inputFormpss" enctype="multipart/form-data" method="post">
              <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Nama Lengkap</label>
                                <small>(Sesuai Dengan KTP)</small>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">                    
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Alamat</label>
                                <small>(Sesuai Dengan KTP)</small>
                                <input type="text" class="form-control" id="alamatlengkap" name="alamatlengkap" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Nomor Handphone</label>
                                <input type="text" class="form-control" id="nomorhp" name="nomorhp" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
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
                                    <option value="Lain - Lain">Lain - Lain</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float" id="ifYes" style="display: none;">
                            <div class="form-line">
                                <label>Nama Usaha Lainnya</label>
                                <input type="text" class="form-control" id="namausahatext" name="namausahatext">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Alamat Usaha</label>
                                <input type="text" class="form-control" id="alamatusaha" name="alamatusaha" required>
                            </div>
                        </div>
                    </div>   
                </div>   
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn bg-deep-orange waves-effect">
                    <i class="material-icons">save</i>
                    <span style="color:#fff;">Simpan</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>