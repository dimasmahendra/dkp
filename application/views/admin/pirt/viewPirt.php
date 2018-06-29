<section class="content">
        <div class="container-fluid">

            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>PERMOHONAN SPP-PIRT</h2>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST" action="<?php echo base_url(); ?>Pirt/insertPermohonan">
                                <h3>Data Diri Pemohon</h3>
                                <fieldset>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="namalengkap" id="namalengkap" required>
                                                <label class="form-label">Nama Lengkap (Sesuai KTP) *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="alamat" id="alamat" required>
                                                <label class="form-label">Alamat (Sesuai KTP) *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="telepon_rumah" required>
                                                <label class="form-label">Nomor Telepon Rumah *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="telepon_hp" required>
                                                <label class="form-label">Nomor Telepon HP *</label>
                                            </div>
                                        </div>
                                    </div>                                    
                                </fieldset>

                                <h3>Informasi Perusahaan</h3>
                                <fieldset>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="namaperusahaan" id="namaperusahaan" required>
                                                <label class="form-label">Nama Perusahaan *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="alamatperusahaan" id="alamatperusahaan" required>
                                                <label class="form-label">Alamat Perusahaan *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="kodepos" id="kodepos" required>
                                                <label class="form-label">Kodepos *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="telepon_kantor" id="telepon_kantor" required>
                                                <label class="form-label">Nomor Telepon Kantor *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="bulanberdiri" id="bulanberdiri" required>
                                                <label class="form-label">Bulan Berdiri Perusahaan *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="tahunberdiri" id="tahunberdiri" required>
                                                <label class="form-label">Tahun Beridiri Perusahaan *</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Informasi Produk</h3>
                                <fieldset>
                                    <div class="col-sm-6">
                                        <p>
                                            Nama Jenis Pangan
                                            <small>(sesuai nama jenis pangan IRT)</small>
                                        </p>
                                        <select class="form-control show-tick" id="kode_pangan" name="kode_pangan">
                                            <?php 
                                            foreach ($kode_pangan as $key => $value) { ?>
                                                <optgroup label="<?php echo $value['jenis_pangan']; ?>">
                                                    <?php foreach ($value['detail'] as $index => $val) { ?>
                                                        <option value="<?php echo $val['id'] ?>"><?php echo $val['kode_pangan_detail']; ?></option>
                                                <?php } ?>
                                                </optgroup>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>
                                            Bahan Kemasan
                                        </p>
                                        <select class="form-control" id="kode_kemasan" name="kode_kemasan">
                                            <?php 
                                            foreach ($kode_kemasan as $key => $value) { ?>
                                                <option value="<?php echo $value['id'] ?>"><?php echo $value['jenis_kemasan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="merk" id="merk" required>
                                                <label class="form-label">Nama Merk Dagang/Label *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="namadagang" id="namadagang" required>
                                                <label class="form-label">Nama Dagang *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="beratbersih" id="beratbersih" required>
                                                <label class="form-label">Berat Bersih/Isi Bersih * <small>(g/mg/kg atau l/ml/kl)</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="prosesproduksi" id="prosesproduksi" required>
                                                <label class="form-label">Proses Produksi *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="masasimpan" id="masasimpan" required>
                                                <label class="form-label">Informasi tentang masa simpan * <small>(kedaluwarsa)</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="kodeproduksi" id="kodeproduksi" required>
                                                <label class="form-label">Informasi tentang kode produksi *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label">Komposisi *</label>
                                        <textarea class="form-control" rows="5" id="komposisi" name="komposisi"></textarea>
                                    </div>
                                </fieldset>

                                <h3>Cara Proses</h3>
                                <fieldset>
                                    <div class="col-sm-12">
                                        <label class="form-label">Cara Proses Produksi Makanan / Minuman *</label>
                                        <small>Dari persiapan sampai pengepakan makanan / minuman</small>
                                        <textarea class="form-control" rows="5" id="cara_produksi" name="cara_produksi"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label">Alat - Alat yang digunakan dalam proses produksi makanan / minuman dan harga masing masing alat tersebut *</label>
                                        <textarea class="form-control" rows="5" id="alat_produksi" name="alat_produksi"></textarea>
                                    </div>
                                </fieldset>
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>