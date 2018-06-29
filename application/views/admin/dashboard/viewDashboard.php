<!--//header-->
<?php if($this->session->flashdata('message')){?> 
    <div class="alert bg-green">  
<?php echo $this->session->flashdata('message')?> 
    </div><?php } ?>

<?php if($this->session->flashdata('error')){?> 
    <div class="alert bg-red">
<?php echo $this->session->flashdata('error')?> 
    </div><?php } ?>
<!-- page content -->
<section class="content">
        <div class="container-fluid">
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                    <h2>Selamat Datang !</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <?php
                                if (isset($status_permohonan)) { ?>
                                    <a href="<?php echo base_url(); ?>Cetak/printPirt">
                                        <button class="btn btn-primary">Cetak PIRT</button>
                                    </a>
                                    <div class="body table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Nama Lengkap</th>
                                                    <td><?php echo $status_permohonan->namalengkap; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Alamat Lengkap</th>
                                                    <td><?php echo $status_permohonan->alamat; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Telepon Rumah</th>
                                                    <td><?php echo $status_permohonan->telepon_rumah; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Telepon HP</th>
                                                    <td><?php echo $status_permohonan->telepon_hp; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nama Perusahaan</th>
                                                    <td><?php echo $status_permohonan->namaperusahaan; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Alamat Perusahaan</th>
                                                    <td><?php echo $status_permohonan->alamatperusahaan; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kodepos</th>
                                                    <td><?php echo $status_permohonan->kodepos; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Telepon Kantor</th>
                                                    <td><?php echo $status_permohonan->telepon_kantor; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Merk</th>
                                                    <td><?php echo $status_permohonan->merk; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nama Dagang</th>
                                                    <td><?php echo $status_permohonan->namadagang; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Berat bersih</th>
                                                    <td><?php echo $status_permohonan->beratbersih; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Proses Produksi</th>
                                                    <td><?php echo $status_permohonan->prosesproduksi; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Masa Simpan</th>
                                                    <td><?php echo $status_permohonan->masasimpan; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Kode Produksi</th>
                                                    <td><?php echo $status_permohonan->kodeproduksi; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Status Pengajuan</th>
                                                    <td><?php echo $status_permohonan->status; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
        </div>
    </section>
<!-- /page content -->