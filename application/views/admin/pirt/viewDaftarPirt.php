<?php 
if (isset($edit_pemohon)) {
    echo $edit_pemohon;
}
?>
<!-- page content -->
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12">
                                <h2>Daftar Permohonan PIRT</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <table id="sakura-table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
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
                                        <td><?php echo $row['namadagang']; ?></td>
                                        <td><?php echo $row['merk']; ?></td>
                                        <td><?php echo $row['beratbersih']; ?></td>
                                        <td><?php echo $row['kodeproduksi']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#editPemohon">
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