<!-- Large Size -->
<div class="modal fade" id="tambahBahan" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Tambah Bahan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <form action="<?php echo base_url(); ?>Bahan/inputBahan" enctype="multipart/form-data" method="post">
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" placeholder="Nama Bahan" type="text" id="nama_bahan" name="nama_bahan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="satuan_bahan" id="satuan_bahan" class="form-control " required>
                                <option value="">- Pilih Satuan -</option>
                                <option value="Buah">Buah</option>
                                <option value="Kg">Kg</option>
                                <option value="Liter">Liter</option>
                                <option value="Meter">Meter</option>
                                <option value="Cm">Cm</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <input class="form-control" placeholder="Stok" type="text" id="stok_bahan" name="stok_bahan" required>
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