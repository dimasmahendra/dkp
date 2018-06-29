<!-- Large Size -->
<div class="modal fade" id="editPemohon" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Edit Pemohon</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <form action="<?php echo base_url(); ?>Bahan/editBahan" enctype="multipart/form-data" method="post">
              <div class="modal-body">
                <div class="row clearfix">
                    <input type="hidden" name="id_pemohon" id="id_pemohon" value="">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Nama Pemohon" type="text" id="nama_pemohon" name="nama_pemohon" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Telepon Rumah" type="text" id="telepon_rumah" name="telepon_rumah" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Telepon HP" type="text" id="telepon_hp" name="telepon_hp" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Alamat Pemohon" type="text" id="alamat_pemohon" name="alamat_pemohon" required>
                            </div>
                        </div>
                    </div>
                </div>     
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Nama Perusahaan" type="text" id="nama_perusahaan" name="nama_perusahaan" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Telepon Kantor" type="text" id="telepon_kantor" name="telepon_kantor" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Kodepos" type="text" id="kodepos" name="kodepos" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Alamat Perusahaan" type="text" id="alamat_perusahaan" name="alamat_perusahaan" required>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Kode Pangan" type="text" id="kode_pangan" name="kode_pangan" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Kode Kemasan" type="text" id="kode_kemasan" name="kode_kemasan" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Merk" type="text" id="merk" name="merk" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Nama Dagang" type="text" id="nama_dagang" name="nama_dagang" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Berat Bersih" type="text" id="berat_bersih" name="berat_bersih" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Proses Produksi" type="text" id="proses_produksi" name="proses_produksi" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Masa Simpan" type="text" id="masa_simpan" name="masa_simpan" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Kode Produksi" type="text" id="kode_produksi" name="kode_produksi" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Cara Produksi" type="text" id="cara_produksi" name="cara_produksi" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Alat Produksi" type="text" id="alat_produksi" name="alat_produksi" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Bulan Produksi" type="text" id="bulan_produksi" name="bulan_produksi" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Tahun Berdiri" type="text" id="tahun_berdiri" name="tahun_berdiri" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input class="form-control" placeholder="Komposisi" type="text" id="komposisi" name="komposisi" required>
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