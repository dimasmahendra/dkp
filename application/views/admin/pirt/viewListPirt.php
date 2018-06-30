<?php 
if (isset($edit_pirt)) {
    echo $edit_pirt;
}
if (isset($edit_verifikasi)) {
    echo $edit_verifikasi;
}
?>
<!-- page content -->
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Export PIRT
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <form action="<?php echo base_url(); ?>Cetak/exportPirt" enctype="multipart/form-data" method="post">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Tanggal Awal</label>
                                            <input class="form-control" type="text" id="tanggal_awal" name="tanggal_awal" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Tanggal Akhir</label>
                                            <input class="form-control" type="text" id="tanggal_akhir" name="tanggal_akhir" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn bg-primary waves-effect">
                                        <i class="material-icons">import_export</i>
                                        <span style="color:#fff;">Export</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12">
                                <h2>Daftar Pemohon PIRT</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <table id="sakura-table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No PIRT</th>
                                    <th>Masa Berlaku</th>
                                    <th>Nama Produk</th>
                                    <th>Merk</th>
                                    <th>Berat Bersih</th>
                                    <th>Kode Porduksi</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;            
                                foreach ($pemohon as $row) { ?>
                                    <tr>
                                        <td><?php echo $no;$no++; ?></td>
                                        <td><?php echo $row['no_pirt']; ?></td>
                                        <td><?php echo substr($row['masaberlaku'], 0, 10); ?></td>
                                        <td><?php echo $row['namadagang']; ?></td>
                                        <td><?php echo $row['merk']; ?></td>
                                        <td><?php echo $row['beratbersih']; ?></td>
                                        <td><?php echo $row['kodeproduksi']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <a class="edit-pemohon" href="#" data-toggle="modal" data-target="#editPIRT"
                                                data-no_pirt = "<?php echo $row['no_pirt']; ?>"
                                                data-id_pemohon = "<?php echo $row['id']; ?>"
                                                data-id_user = "<?php echo $row['id_user']; ?>"
                                                data-namalengkap = "<?php echo $row['namalengkap']; ?>"
                                                data-alamat = "<?php echo $row['alamat']; ?>"
                                                data-telepon_rumah = "<?php echo $row['telepon_rumah']; ?>"
                                                data-telepon_hp = "<?php echo $row['telepon_hp']; ?>"
                                                data-namaperusahaan = "<?php echo $row['namaperusahaan']; ?>"
                                                data-alamatperusahaan = "<?php echo $row['alamatperusahaan']; ?>"
                                                data-kodepos = "<?php echo $row['kodepos']; ?>"
                                                data-telepon_kantor = "<?php echo $row['telepon_kantor']; ?>"
                                                data-kode_pangan = "<?php echo $row['kode_pangan']; ?>"
                                                data-kode_kemasan = "<?php echo $row['kode_kemasan']; ?>"
                                                data-merk = "<?php echo $row['merk']; ?>"
                                                data-namadagang = "<?php echo $row['namadagang']; ?>"
                                                data-beratbersih = "<?php echo $row['beratbersih']; ?>"
                                                data-prosesproduksi = "<?php echo $row['prosesproduksi']; ?>"
                                                data-masasimpan = "<?php echo $row['masasimpan']; ?>"
                                                data-kodeproduksi = "<?php echo $row['kodeproduksi']; ?>"
                                                data-cara_produksi = "<?php echo $row['cara_produksi']; ?>"
                                                data-bulanberdiri = "<?php echo $row['bulanberdiri']; ?>"
                                                data-alat_produksi = "<?php echo $row['alat_produksi']; ?>"
                                                data-tahunberdiri = "<?php echo $row['tahunberdiri']; ?>"
                                                data-komposisi = "<?php echo $row['komposisi']; ?>"
                                                data-masaberlaku = "<?php echo $row['masaberlaku']; ?>"
                                                data-status = "<?php echo $row['status']; ?>"
                                            >
                                                <button type="button" class="btn btn-success waves-effect">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>            
                            </tbody>  
                        </table>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>
<!-- /page content -->