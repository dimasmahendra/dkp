<!-- page content -->
<section class="content">
    <!--//header-->
<?php if($this->session->flashdata('message')){?> 
    <div class="alert bg-green">  
<?php echo $this->session->flashdata('message')?> 
    </div><?php } ?>

<?php if($this->session->flashdata('error')){?> 
    <div class="alert bg-red">
<?php echo $this->session->flashdata('error')?> 
    </div><?php } ?>

<?php 
if (isset($tambah_pss)) {
    echo $tambah_pss;
}
if (isset($edit_pss)) {
    echo $edit_pss;
}
?>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12">
                            <h2>Daftar Pedagang Siap Saji</h2>
                            <div class="pull-right">
                                <a href="#" data-toggle="modal" data-target="#tambahPSS">
                                    <button type="button" class="btn bg-deep-orange waves-effect">
                                        <i class="material-icons">add</i>
                                        <span style="color:#fff;">Tambah</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <table id="sakura-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>                 
                                <th>Nama Usaha</th>
                                <th>Alamat Usaha</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor HP</th>
                                <th>Status</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;            
                            foreach ($pemohon as $row)
                                { ?>
                                    <tr>
                                        <td><?php echo $no;$no++; ?></td>                                
                                        <td><?php echo $row['namausaha']; ?></td>
                                        <td><?php echo $row['alamatusaha']; ?></td>
                                        <td><?php echo $row['namalengkap']; ?></td>
                                        <td><?php echo $row['nomorhp']; ?></td>
                                        <td><h4>
                                                <span class="label <?php echo $retVal = ($row['status'] == 'Tidak Tersertifikasi') ? "label-danger" : "label-success"; ?>
                                                "><?php echo $row['status']; ?>
                                                </span>
                                            </h4>
                                        </td>
                                        <td>                               
                                            <a class="edit-pss" href="#" data-toggle="modal" data-target="#editPSS" 
                                                data-id="<?php echo $row['id']; ?>"
                                                data-user_id="<?php echo $row['user_id']; ?>"
                                                data-namalengkap="<?php echo $row['namalengkap']; ?>"
                                                data-alamatlengkap="<?php echo $row['alamatlengkap']; ?>"
                                                data-nomorhp="<?php echo $row['nomorhp']; ?>"
                                                data-namausaha="<?php echo $row['namausaha']; ?>"
                                                data-alamatusaha="<?php echo $row['alamatusaha']; ?>"
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
<!-- /page content -->