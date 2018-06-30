<!-- Large Size -->
<div class="modal fade" id="editVerifikasi" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Verifikasi PIRT</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <form action="<?php echo base_url(); ?>Pirt/ubahVerifikasi" enctype="multipart/form-data" method="post">
              <div class="modal-body">
                <div class="row clearfix">
                    <input type="hidden" name="id_pemohon" id="id_pemohon_ver" value="">
                    <input type="hidden" name="id_user" id="id_user_ver" value="">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>No PIRT</label>
                                <input class="form-control" placeholder="No PIRT" type="text" id="no_pirt_ver" name="no_pirt" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">                    
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Nama Pemohon</label>
                                <input class="form-control" placeholder="Nama Pemohon" type="text" id="nama_pemohon_ver" name="nama_pemohon" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Nama Perusahaan</label>
                                <input class="form-control" placeholder="Nama Perusahaan" type="text" id="nama_perusahaan_ver" name="nama_perusahaan" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Alamat Perusahaan</label>
                                <input class="form-control" placeholder="Alamat Perusahaan" type="text" id="alamat_perusahaan_ver" name="alamat_perusahaan" required>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Nama Dagang</label>
                                <input class="form-control" placeholder="Nama Dagang" type="text" id="nama_dagang_ver" name="nama_dagang" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label>Masa Berlaku</label>
                                <input class="form-control" placeholder="Masa Berlaku" type="text" id="masaberlaku_ver" name="masaberlaku" required>
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